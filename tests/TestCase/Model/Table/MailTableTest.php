<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MailTable Test Case
 */
class MailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MailTable
     */
    public $Mail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mail'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mail') ? [] : ['className' => MailTable::class];
        $this->Mail = TableRegistry::getTableLocator()->get('Mail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mail);

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
