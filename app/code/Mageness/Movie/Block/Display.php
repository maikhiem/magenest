<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 05/06/2019
 * Time: 22:52
 */

namespace Mageness\Movie\Block;


use Magento\Framework\View\Element\Template;

class Display extends Template
{
    protected $_movieCollectionFactory;
    protected $_directorCollectionFactory;
    
    public function __construct(
        Template\Context $context,
        \Mageness\Movie\Model\ResourceModel\Director\CollectionFactory $directorCollectionFactory,
        \Mageness\Movie\Model\ResourceModel\Movie\CollectionFactory $movieCollectionFactory,
        array $data
    )
    {
        parent::__construct($context, $data);
        $this->_movieCollectionFactory = $movieCollectionFactory;
        $this->_directorCollectionFactory = $directorCollectionFactory;
    }
    public function getMovie(){
        $movieCollection = $this->_movieCollectionFactory->create();
        $movieCollection->joinTable();
        return $movieCollection->getData();
    }
    public function getLandingsUrl()
    {
        return $this->getUrl('movies');
    }
    public function getDirector(){
        $directorCollection = $this->_directorCollectionFactory->create();
        return $directorCollection->getData();
    }
}