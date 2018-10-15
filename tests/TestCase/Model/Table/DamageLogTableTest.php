<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DamageLogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DamageLogTable Test Case
 */
class DamageLogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DamageLogTable
     */
    public $DamageLog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.damage_log'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DamageLog') ? [] : ['className' => DamageLogTable::class];
        $this->DamageLog = TableRegistry::getTableLocator()->get('DamageLog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DamageLog);

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
