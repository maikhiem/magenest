<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:39
 */

namespace Mageness\Movie\Model;

use Magento\Framework\Model\AbstractModel;

class Director extends AbstractModel
{
    public function _construct()
    {
        $this->_init('Mageness\Movie\Model\ResourceModel\Director');
    }
}