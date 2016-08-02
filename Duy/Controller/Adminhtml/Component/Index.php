<?php
namespace	Training\Duy\Controller\Adminhtml\Component;
use	Magento\Backend\App\Action\Context;
use	Magento\Framework\View\Result\PageFactory;
class	Index	extends	\Magento\Backend\App\Action
{
    protected	$resultPageFactory;
    public	function	__construct(
        Context	$context,
        PageFactory	$resultPageFactory
    )	{
        parent::__construct($context);
        $this->resultPageFactory	=	$resultPageFactory;
    }
    public	function	execute()
    {
        $resultPage	=	$this->resultPageFactory->create();

        $resultPage->setActiveMenu('Training_Duy::component');
        $resultPage->addBreadcrumb(__('Duy'),	__('Duy'));
        $resultPage->addBreadcrumb(__('Components'),	__('Components'));
        $resultPage->getConfig()->getTitle()->prepend(__('Components'));
        return	$resultPage;
				}

    protected	function	_isAllowed()
    {
        return	$this->_authorization->isAllowed('Training_Duy::duy');
    }
}