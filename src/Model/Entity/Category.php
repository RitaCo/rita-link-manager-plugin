<?php
namespace Rita\Links\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * LinksCategory Entity.
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'note' => true,
        'slug' => true,
        'links' => true,
    ];
}
