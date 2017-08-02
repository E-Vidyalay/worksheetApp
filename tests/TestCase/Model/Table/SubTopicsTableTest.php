<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubTopicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubTopicsTable Test Case
 */
class SubTopicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubTopicsTable
     */
    public $SubTopics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sub_topics',
        'app.topics',
        'app.ebooks',
        'app.languages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubTopics') ? [] : ['className' => SubTopicsTable::class];
        $this->SubTopics = TableRegistry::get('SubTopics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubTopics);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
