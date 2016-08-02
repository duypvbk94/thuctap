<?php
namespace	Training\Duy\Block;
use	Magento\Framework\View\Element\Template;
class	Landingspage	extends	Template
{
    public function getLandingsUrl()
    {
        return $this->getUrl('duy');
    }

    public function getRedirectUrl()
    {
        return $this->getUrl('duy/index/redirect');
    }
}