<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'receive' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'address_num' => 'Lorem ipsum dolor sit amet',
                'address_comp' => 'Lorem ipsum dolor sit amet',
                'address_cep' => 'Lorem ',
                'vehicle' => 'Lorem ipsum dolor sit amet',
                'vehicle_plate' => 'Lorem ipsum dolor sit amet',
                'contact' => 'Lorem ipsum dolor sit amet',
                'role_id' => 1,
            ],
        ];
        parent::init();
    }
}
