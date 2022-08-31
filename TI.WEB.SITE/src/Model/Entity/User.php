<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\IdentityInterface;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property bool|null $receive
 * @property string|null $password
 * @property string|null $address
 * @property string|null $address_num
 * @property string|null $address_comp
 * @property string|null $address_cep
 * @property string|null $vehicle
 * @property string|null $vehicle_plate
 * @property string|null $contact
 * @property int|null $role_id
 */
class User extends Entity implements IdentityInterface
{
    public function getIdentifier()
    {
        return $this->email;
    }
    public function getOriginalData()
    {
        return $this;
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'email' => true,
        'receive' => true,
        'password' => true,
        'address' => true,
        'address_num' => true,
        'address_comp' => true,
        'address_cep' => true,
        'vehicle' => true,
        'vehicle_plate' => true,
        'contact' => true,
        'role_id' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
