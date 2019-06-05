<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 03/06/2019
 * Time: 11:33
 */

namespace Magenest\Movie\Block;


use Magento\Framework\View\Element\Template;

class Landingspage extends Template
{
    public function getLandingsUrl()
    {
        return $this->getUrl('movie');
    }
    public function getRedirectUrl()
    {
        return $this->getUrl('movie/index/redirect');
    }
}