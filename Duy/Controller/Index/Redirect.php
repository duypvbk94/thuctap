<?php
namespace	Training\Duy\Controller\Index;
class	Redirect	extends	\Magento\Framework\App\Action\Action
{
    public	function	execute()
    {
        $this->_forward('index');
    }
}