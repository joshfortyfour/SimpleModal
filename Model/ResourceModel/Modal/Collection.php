<?php

namespace Oddyssey\SimpleModal\Model\ResourceModel\Modal;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package Oddyssey\SimpleModal\Model\ResourceModel\Modal
 */
class Collection extends AbstractCollection
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Oddyssey\SimpleModal\Model\Modal',
            'Oddyssey\SimpleModal\Model\ResourceModel\Modal'
        );
    }
}