<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 09:28
 */

namespace Magenest\Movie\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct() {
        $this->_init('Magenest\Movie\Model\Subscription',
            'Magenest\Movie\Model\ResourceModel\Subscription');
    }
}