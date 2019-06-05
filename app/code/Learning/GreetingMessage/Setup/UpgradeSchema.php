<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 27/05/2019
 * Time: 22:22
 */

namespace Learning\GreetingMessage\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.0', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('greeting_message'),
                'season',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => 16,
                    'nullable' => false,
                    'default' => '',
                    'comment' => 'Season'
                ]
            );
        }
        $setup->endSetup();
    }
}