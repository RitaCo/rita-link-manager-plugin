<?php
namespace Rita\Links\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * LinksLink Entity.
 */
class Link extends Entity
{
    
    protected  $_virtual = [ 'hasImage']; 

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
     'category_id' => true,
        'title' => true,
        'url' => true,
        'logo_remote' => true,
        'logo_upload' => true,
        'hits' => true,
        'category' => true,
    ];
    
    
    
    
    protected function _getHasImage()
    {
        $res = false;   
         if (!empty($this->_properties['logo_remote'])){
            return $this->_properties['logo_remote'];
         } elseif (!empty($this->_properties['logo_upload'])){
            return $this->_properties['logo_upload'];
         } 
         
         return false;
         
    }
}
