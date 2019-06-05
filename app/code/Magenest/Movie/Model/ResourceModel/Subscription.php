<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 09:05
 */

namespace Magenest\Movie\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Subscription extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_movie_subscription', 'subscription_id');
    }
}