<?php
namespace Rita\Links\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Rita\Links\Model\Table\LinksCategoriesTable;

/**
 * Rita\Links\Model\Table\LinksCategoriesTable Test Case
 */
class LinksCategoriesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'LinksCategories' => 'plugin.rita/links.links_categories',
        'LinksLinks' => 'plugin.rita/links.links_links'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LinksCategories') ? [] : ['className' => 'Rita\Links\Model\Table\LinksCategoriesTable'];
        $this->LinksCategories = TableRegistry::get('LinksCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LinksCategories);

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
