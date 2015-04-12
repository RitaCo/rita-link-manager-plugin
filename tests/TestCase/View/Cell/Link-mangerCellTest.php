<?php
namespace Rita\Links\Test\TestCase\View\Cell;

use Cake\TestSuite\TestCase;
use Rita\Links\View\Cell\Link-mangerCell;

/**
 * Rita\Links\View\Cell\Link-mangerCell Test Case
 */
class Link-mangerCellTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->request = $this->getMock('Cake\Network\Request');
        $this->response = $this->getMock('Cake\Network\Response');
        $this->Link-manger = new Link-mangerCell($this->request, $this->response);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Link-manger);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
