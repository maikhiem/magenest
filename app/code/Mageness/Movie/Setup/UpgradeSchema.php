<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 10:00
 */

namespace Mageness\Movie\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '2.0.3', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('magenest_movie_actor'),
                'movie_actor_id',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true,
                    'comment' => 'Movie Actor ID'
                ]
            );
        }
        if (version_compare($context->getVersion(), '2.0.6', '<')) {
            $setup->getConnection()->changeColumn(
                $setup->getTable('magenest_movie'),
                'description',
                'description',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'length' => null
                ]
            );
        }

        $setup->endSetup();
    }
}