<?php

namespace Oddyssey\SimpleModal\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Modal
 *
 * @package Oddyssey\SimpleModal\Model\ResourceModel
 */
class Modal extends AbstractDb
{
    /**
     * Constructor method
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('oddyssey_simplemodal', 'modal_id');
    }
}

