<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeliveryFixture
 */
class DeliveryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'delivery';
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
                'driver' => 'Lorem ipsum dolor sit amet',
                'date' => '2022-06-02',
                'time_start' => '00:43:11',
                'time_end' => '00:43:11',
            ],
        ];
        parent::init();
    }
}
