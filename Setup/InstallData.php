<?php

namespace Oddyssey\SimpleModal\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class InstallData
 *
 * @package Oddyssey\SimpleModal\Setup
 */
class InstallData implements InstallDataInterface
{
    /**
     * InstallData method
     *
     * @param ModuleDataSetupInterface $setup   Setup Interface
     * @param ModuleContextInterface   $context Context Interface
     *
     * @return void
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $setup->startSetup();

        $data = [
            [
                'modal_id'   => 1,
                'heading'    => 'Hello World',
                'body'       => 'This is my modal. There are many like it but this one is mine.',
                'is_enabled' => 0
            ]
        ];

        foreach ($data as $row) {
            $setup->getConnection()
                ->insertForce($setup->getTable('oddyssey_simplemodal'), $row);
        }

        $setup->endSetup();
    }
}