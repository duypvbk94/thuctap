<?php
namespace	Training\Duy\Model\ResourceModel;
class	Subscription	extends  \Magento\Framework\Model\ResourceModel\Db\AbstractDb	{
    public	function	_construct()	{
        $this->_init('training_duy_subscription',	'subscription_id');
    }
}