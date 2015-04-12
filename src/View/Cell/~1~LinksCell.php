<?php
namespace Rita\Links\View\Cell;

use Cake\View\Cell;

/**
 * Link-manger cell
 */
class LinksCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }
    
    
    public function group($for)
    {
        $this->loadModel('Rita/Links.Links');
        
         
    }
}
