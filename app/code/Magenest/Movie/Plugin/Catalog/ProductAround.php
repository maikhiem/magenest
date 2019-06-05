<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 03/06/2019
 * Time: 16:43
 */

namespace Magenest\Movie\Plugin\Catalog;

use Magento\Catalog\Model\Product;

class ProductAround
{
    public function aroundGetName($interceptedInput)
    {
        return "Name of product";
    }
}