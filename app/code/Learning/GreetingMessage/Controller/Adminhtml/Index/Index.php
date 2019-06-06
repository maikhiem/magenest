<?php
/**
 * Created by PhpStorm.
 * User: khiem
 * Date: 06/06/2019
 * Time: 15:47
 */

namespace GreetingMessage\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(Action\Context $context,
                                PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}