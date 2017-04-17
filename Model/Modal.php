<?php

namespace Oddyssey\SimpleModal\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Modal
 *
 * @package Oddyssey\SimpleModal\Model
 */
class Modal extends AbstractModel implements IdentityInterface
{
    /**
     * Cache tag for model
     */
    const CACHE_TAG = 'oddyssey_simplemodal';

    /**
     * Constructor method
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Oddyssey\SimpleModal\Model\ResourceModel\Modal');
    }

    /**
     * Get cache identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}