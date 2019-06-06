<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:41
 */

namespace Mageness\Movie\Model\ResourceModel\Actor;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Mageness\Movie\Model\Actor',
            'Mageness\Movie\Model\ResourceModel\Actor');
    }
}