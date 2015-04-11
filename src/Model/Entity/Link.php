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
        'url' => true,
        'logo_remote' => true,
        'logo_upload' => true,
        'hits' => true,
        'category' => true,
    ];
}
