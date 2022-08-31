<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Delivery Entity
 *
 * @property int $id
 * @property string|null $driver
 * @property \Cake\I18n\FrozenDate|null $date
 * @property \Cake\I18n\Time|null $time_start
 * @property \Cake\I18n\Time|null $time_end
 *
 * @property \App\Model\Entity\Receive[] $receive
 */
class Delivery extends Entity
{
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
        'driver' => true,
        'date' => true,
        'time_start' => true,
        'time_end' => true,
        'receive' => true,
    ];
}
