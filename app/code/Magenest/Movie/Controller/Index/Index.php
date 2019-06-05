<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 03/06/2019
 * Time: 12:06
 */

namespace Magenest\Movie\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}