<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 16:29
 */

namespace Mageness\Movie\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if ($context->getVersion()
            && version_compare($context->getVersion(), '2.0.2') < 0
        ) {
            $table = $setup->getTable('magenest_director');
            $setup->getConnection()
                ->insertMultiple($table, 
                    [
                        ['name' => 'David'],
                        ['name' => 'Rockie'],
                        ['name' => 'John']
                    ]
                );

        }
        if ($context->getVersion()
            && version_compare($context->getVersion(), '2.0.4') < 0
        ) {
            $table = $setup->getTable('magenest_movie');
            $setup->getConnection()
                ->insertMultiple($table,
                    [
                        ['name' => 'Transformer 3', 'description' => 'Its story is set three years after the events of Revenge of...',
                        'rating' => 5, 'director_id' => 1],
                        ['name' => 'End Game', 'description' => 'In the film, the surviving members of the Avengers ...',
                        'rating' => 4, 'director_id' => 3]
                    ]
                );
        }
        if ($context->getVersion()
            && version_compare($context->getVersion(), '2.0.5') < 0
        ) {
            $table = $setup->getTable('magenest_actor');
            $setup->getConnection()
                ->insertMultiple($table,
                    [
                        ['name' => 'A'],
                        ['name' => 'B'],
                        ['name' => 'C'],
                        ['name' => 'D'],
                        ['name' => 'E'],
                        ['name' => 'F']
                    ]
                );
            $table = $setup->getTable('magenest_movie_actor');
            $setup->getConnection()
                ->insertMultiple($table,
                    [
                        ['movie_id' => 1, 'actor_id' => 1],
                        ['movie_id' => 1, 'actor_id' => 2],
                        ['movie_id' => 1, 'actor_id' => 3],
                        ['movie_id' => 2, 'actor_id' => 1],
                        ['movie_id' => 2, 'actor_id' => 5],
                    ]
                );

        }
        if ($context->getVersion()
            && version_compare($context->getVersion(), '2.0.7') < 0
        ) {
            $table = $setup->getTable('magenest_actor');
            $setup->getConnection()
                ->insertMultiple($table,
                    [
                        ['name' => 'A'],
                        ['name' => 'B'],
                        ['name' => 'C'],
                        ['name' => 'D'],
                        ['name' => 'E'],
                        ['name' => 'F']
                    ]
                );
        }

        $setup->endSetup();
    }
}