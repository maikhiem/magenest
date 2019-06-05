<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 04/06/2019
 * Time: 09:40
 */

namespace Magenest\Movie\Controller\Index;


use Magento\Framework\App\Action\Action;

class Subscription extends Action
{

    public function execute()
    {
        $subscription = $this->_objectManager->create('Magenest\Movie\Model\Subscription');
        $subscription->setFirstname('John');
        $subscription->setLastname('Doe');
        $subscription->setEmail('john.doe@example.com');
        $subscription->setMessage('A short message to test');
        $subscription->save();
        $this->getResponse()->setBody('success');
    }
}