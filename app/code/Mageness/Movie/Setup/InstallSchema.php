<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 13:48
 */

namespace Mageness\Movie\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()
            ->newTable($setup->getTable('magenest_director'))
            ->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Director ID'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                32,
                ['nullable' => false],
                'Name'
            )->setComment("Magenest Director table");
        $setup->getConnection()->createTable($table);

        $table = $setup->getConnection()
            ->newTable($setup->getTable('magenest_movie'))
            ->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Movie ID'
            )
            ->addColumn(
                'director_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, ],
                'Director ID')
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                32,
                ['nullable' => false],
                'Name'
            )
            ->addColumn(
                'description',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Description'
            )
            ->addColumn(
                'rating',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                1,
                ['nullable' => false],
                'Ratting'
            )
            ->addForeignKey(
                $setup->getFkName(
                    'magenest_movie',
                    'director_id',
                    'magenest_director',
                    'director_id'
                ),
                'director_id',
                $setup->getTable('magenest_director'),
                'director_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment("Magenest Movie table");
        $setup->getConnection()->createTable($table);

        $table = $setup->getConnection()
            ->newTable($setup->getTable('magenest_actor'))
            ->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Actor ID'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                32,
                ['nullable' => false],
                'Name'
            )->setComment("Magenest Actor table");
        $setup->getConnection()->createTable($table);

        $table = $setup->getConnection()
            ->newTable($setup->getTable('magenest_movie_actor'))
            ->addColumn(
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, ],
                'Movie ID')
            ->addColumn(
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, ],
                'Actor ID')
            ->addForeignKey(
                $setup->getFkName(
                    'magenest_movie_actor',
                    'movie_id',
                    'magenest_movie',
                    'movie_id'
                ),
                'movie_id',
                $setup->getTable('magenest_movie'),
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )
            ->addForeignKey(
                $setup->getFkName(
                    'magenest_movie_actor',
                    'actor_id',
                    'magenest_actor',
                    'actor_id'
                ),
                'actor_id',
                $setup->getTable('magenest_actor'),
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment("Magenest Movie Actor table");
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}