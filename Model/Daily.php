<?php

namespace Voicyou\ProductViews\Model;

class Daily extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Voicyou\ProductViews\Model\ResourceModel\Daily');
    }
}

?>
