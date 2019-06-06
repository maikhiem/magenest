<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:39
 */

namespace Mageness\Movie\Model;

use Magento\Framework\Model\AbstractModel;

class Movie extends AbstractModel
{
    const ENTITY = 'magenest_movie';
    const CACHE_TAG = 'magenest_movie_cache';
    
    public function _construct()
    {
        $this->_init('Mageness\Movie\Model\ResourceModel\Movie');
    }
}