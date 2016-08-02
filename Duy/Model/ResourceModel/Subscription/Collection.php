<?php
namespace Training\Duy\Model\ResourceModel\Subscription;
/**
 *	Subscription	Collection
 */
class	Collection	extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     *	Initialize	resource	collection
     *
     *	@return	void
     */
    public	function	_construct()	{
        $this->_init('Training\Duy\Model\Subscription',
            'Training\Duy\Model\ResourceModel\Subscription');
    }
}