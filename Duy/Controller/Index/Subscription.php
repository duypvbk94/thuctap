<?php
namespace	Training\Duy\Controller\Index;
class	Subscription	extends	\Magento\Framework\App\Action\Action	{
    public	function	execute()	{
        $subscription	=	$this->_objectManager
            ->create('Training\Duy\Model\Subscription');

                $subscription->setFirstname('Van');
                $subscription->setLastname('An');
                $subscription->setEmail('van.an@example.com');
                $subscription->setMessage('van an van an');
                $subscription->setStatus('declined');
                $subscription->save();

				$this->getResponse()->setBody('success');		}
}