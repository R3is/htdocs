<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReceiveFixture
 */
class ReceiveFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'receive';
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
                'users_id' => 1,
                'delivery_id' => 1,
            ],
        ];
        parent::init();
    }
}
