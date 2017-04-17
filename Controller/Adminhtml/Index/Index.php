<?php

namespace Oddyssey\SimpleModal\Controller\Adminhtml\Index;

/**
 * Class Index
 *
 * @package Oddyssey\SimpleModal\Controller\Adminhtml\Index
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * Constant for ACL access rules
     */
    const ADMIN_RESOURCE = 'Oddyssey_SimpleModal::top_level_menu';

    /**
     * Results Page property
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     *
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;

        return parent::__construct($context);
    }

    /**
     * Execute method
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        // Create our results page factory
        $page = $this->resultPageFactory->create();

        // Give our page a custom title
        $page->getConfig()->getTitle()->prepend(__('Simple Modal'));

        // Set the menu item as active when we're on the page
        $page->setActiveMenu('Oddyssey_SimpleModal::top_level_menu');

        return $page;
    }
}
