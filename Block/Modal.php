<?php

namespace Oddyssey\SimpleModal\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Oddyssey\SimpleModal\Model\ModalFactory;

/**
 * Class Modal
 *
 * @category Oddyssey\Simplemodal
 * @package  Oddyssey\SimpleModal\Block
 * @author   Joshua Romero <josh@oddyssey.io>
 * @license  GNU http://opensource.org/licenses/gpl-license.php
 * @link     https://oddyssey.io
 */
class Modal extends Template
{
    /**
     * Modal instance
     *
     * @var ModalFactory
     */
    protected $modalFactory;

    public function __construct(
        ModalFactory $modalFactory,
        Context $context,
        array $data = []
    ) {
        $this->modalFactory = $modalFactory;
        parent::__construct($context, $data);
    }

    /**
     * Method to get the core_config_data settings from the modal.phtml template
     *
     * @return \Magento\Framework\App\Config\ScopeConfigInterface
     */
    public function getConfig()
    {
        return $this->_scopeConfig;
    }

    /**
     * Return an instance of the modal factory
     *
     * @return \Oddyssey\SimpleModal\Model\Modal
     */
    public function getModalFactory()
    {
        return $this->modalFactory->create();
    }

    /**
     * Get the modal heading
     *
     * @return string
     */
    public function getHeading()
    {
        $modal = $this->getModalFactory()->load(1);
        return $modal->getHeading();
    }

    /**
     * Get the body copy
     *
     * @return string
     */
    public function getBody()
    {
        $modal = $this->getModalFactory()->load(1);

        return $modal->getBody();
    }

    /**
     * Check to see if modal is enabled from the config
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig()->getValue('oddyssey/general/enable');
    }

}