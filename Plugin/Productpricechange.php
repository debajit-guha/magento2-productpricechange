<?php

namespace Dj\Productpricechange\Plugin;


class Productpricechange 
{

    protected $helperData;

    public function __construct(\Dj\Productpricechange\Helper\Data $helperData)
    {
        $this->helperData = $helperData;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $price)
    {
        if($this->helperData->getGeneralConfig('enable')) {
                $price += $price * ($this->helperData->getGeneralConfig('percentage_text')/100);
                    
        }
        return $price;
    }
}