<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:41
 */

namespace Mageness\Movie\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Director extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('magenest_director', 'director_id');
    }
}