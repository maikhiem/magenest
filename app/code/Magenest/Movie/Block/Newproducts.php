<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 03/06/2019
 * Time: 16:08
 */

namespace Magenest\Movie\Block;


use Magento\Framework\View\Element\Template;

class Newproducts extends Template
{
    private $_productCollectionFactory;
    public function __construct(
        Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;
    }
    public function getProducts() {
        $collection = $this->_productCollectionFactory->create();
        $collection
            ->addAttributeToSelect('*')
            ->setOrder('created_at')
            ->setPageSize(5);
        return $collection;
    }
}