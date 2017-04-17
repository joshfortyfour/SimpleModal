<?php

namespace Oddyssey\SimpleModal\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 *
 * @package Oddyssey\SimpleModal\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install script
     *
     * @param SchemaSetupInterface   $setup   Setup Interface
     * @param ModuleContextInterface $context Context Interface
     *
     * @return void
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();
        $table = $installer->getConnection()->newTable(
            $installer->getTable('oddyssey_simplemodal')
        )->addColumn(
            'modal_id',
            Table::TYPE_SMALLINT,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary'  => true,
                'unsigned' => true
            ],
            'Modal ID'
        )->addColumn(
            'heading',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Modal Heading'
        )->addColumn(
            'body',
            Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Modal Body Text'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'Modal Created At'
        )->addColumn(
            'is_enabled',
            Table::TYPE_SMALLINT,
            null,
            ['nullable' => false],
            'Modal Is Enabled'
        );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}