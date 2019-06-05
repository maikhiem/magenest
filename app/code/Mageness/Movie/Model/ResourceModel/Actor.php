<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:40
 */

namespace Mageness\Movie\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Actor extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_actor', 'actor_id');
    }
}