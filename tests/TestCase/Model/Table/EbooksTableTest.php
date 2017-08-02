<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EbooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EbooksTable Test Case
 */
class EbooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EbooksTable
     */
    public $Ebooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ebooks',
        'app.languages',
        'app.sub_topics',
        'app.topics'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ebooks') ? [] : ['className' => EbooksTable::class];
        $this->Ebooks = TableRegistry::get('Ebooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ebooks);

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
