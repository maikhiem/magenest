<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 27/05/2019
 * Time: 15:39
 */

namespace Test\Contacts\Block;


use Magento\Framework\View\Element\Template;

class Contactslist extends Template
{
    public function _construct(Template\Context $context, array $data = array())
    {
        parent::_construct();
        $this->setData('contacts',array());
    }

    public function addContacts($count)
    {
        $_contacts = $this->getData('contacts');
        $actualNumber = count($_contacts);
        $names = array();
        for($i=$actualNumber;$i<($actualNumber+$count);$i++) {
            $_contacts[] = 'nom '.($i+1);
        }
        $this->setData('contacts',$_contacts);
    }
}