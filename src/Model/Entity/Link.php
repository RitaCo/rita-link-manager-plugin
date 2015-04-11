<?php
namespace Rita\Links\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * LinksLink Entity.
 */
class Link extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'title' => true,
        'body' => true,
        'slug' => true,
        'category' => true,
    ];
}
