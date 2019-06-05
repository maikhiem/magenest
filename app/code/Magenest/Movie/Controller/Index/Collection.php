<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 10:07
 */

namespace Magenest\Movie\Controller\Index;


use Magento\Framework\App\Action\Action;

class Collection extends Action
{

    public function execute()
    {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect([
                'name',
                'price',
                'image',
            ])
//            ->setPageSize(10,1);

//            ->addAttributeToFilter('name', 'Overnight Duffle');

            ->addAttributeToFilter('entity_id', array(
                'in' => array(159, 160, 161)
            ));

//            ->addAttributeToFilter('name', array(
//                'like' => '%Sport%'
//            ));
        $output = '';

        $productCollection->setDataToAll('price', 20);

        foreach ($productCollection as $product) {
            $output .= '<pre>' . var_export($product->getData(), true) . '</pre>';
        }
        $this->getResponse()->setBody($output);
    }
}