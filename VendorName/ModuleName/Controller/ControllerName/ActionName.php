<?php

declare(strict_types=1);

namespace VendorName\ModuleName\Controller\ControllerName;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class ActionName implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ){}

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}