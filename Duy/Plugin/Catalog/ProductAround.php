<?php
namespace	Training\Duy\Plugin\Catalog;
use	Magento\Catalog\Model\Product;
class	ProductAround
{
    public	function	aroundGetName($interceptedInput)
    {
        return	"Name	of	product";
    }
}