<?php
namespace	Training\Duy\Block\Adminhtml;
class	Subscription	extends	\Magento\Backend\Block\Widget\Grid\Container
{
    protected	function	_construct()
    {
        $this->_blockGroup	=	'Training_Duy';
        $this->_controller	=	'adminhtml_subscription';
        parent::_construct();
    }
}