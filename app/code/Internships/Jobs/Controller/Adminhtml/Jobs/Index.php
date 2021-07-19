<?php
declare(strict_types=1);

namespace Internships\Jobs\Controller\Adminhtml\Jobs;

use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $_pageFactory;

    /**
     * Index constructor.
     * @param Action\Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
