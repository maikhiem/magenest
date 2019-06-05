<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 27/05/2019
 * Time: 22:15
 */

namespace Learning\GreetingMessage\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            ['message' => 'Happy New Year'],
            ['message' => 'Merry Christmas']
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('greeting_message'), $bind);
        }
    }
}