<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 27/05/2019
 * Time: 22:12
 */

namespace Learning\GreetingMessage\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table = $setup->getConnection()
            ->newTable($setup->getTable('greeting_message'))
            ->addColumn(
                'greeting_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Greeting ID'
            )
            ->addColumn(
                'where',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['abc' => false, 'default' => 'abc'],
                'Where'
            )
            ->addColumn(
                'message',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false, 'default' => ''],
                'Message'
            )->setComment("Greeting Message table");
        $setup->getConnection()->createTable($table);
    }
}