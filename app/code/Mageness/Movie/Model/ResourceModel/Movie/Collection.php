<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 16:46
 */

namespace Mageness\Movie\Model\ResourceModel\Movie;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Mageness\Movie\Model\Movie',
            'Mageness\Movie\Model\ResourceModel\Movie');
    }

    public function joinTable()
    {
        $movieTable = $this->_resource-> getTable('magenest_movie');
        $directoryTable = $this->_resource->getTable('magenest_director');
        $movieActor = $this->_resource->getTable('magenest_movie_actor');
        $actor = $this->_resource->getTable('magenest_actor');
        $this ->getSelect()
            ->join(
            ['di'=>$directoryTable],
            "main_table.director_id  =  di.director_id ",['director_name'=>'di.name'])
            ->join(['ma'=>$movieActor],
                "main_table.movie_id = ma.movie_id")
            ->join(['at'=>$actor],
                "ma.actor_id = at.actor_id",['actor_name'=>'at.name']);
      return $this;
    }
    
    public function getTest(){
        
    }
}

