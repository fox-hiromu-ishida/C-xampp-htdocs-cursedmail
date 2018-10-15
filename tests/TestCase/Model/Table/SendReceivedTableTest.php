<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SendReceivedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SendReceivedTable Test Case
 */
class SendReceivedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SendReceivedTable
     */
    public $SendReceived;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.send_received'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SendReceived') ? [] : ['className' => SendReceivedTable::class];
        $this->SendReceived = TableRegistry::getTableLocator()->get('SendReceived', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SendReceived);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
