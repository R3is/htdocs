<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceiveTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceiveTable Test Case
 */
class ReceiveTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceiveTable
     */
    protected $Receive;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Receive',
        'app.Users',
        'app.Delivery',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Receive') ? [] : ['className' => ReceiveTable::class];
        $this->Receive = $this->getTableLocator()->get('Receive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Receive);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ReceiveTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ReceiveTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
