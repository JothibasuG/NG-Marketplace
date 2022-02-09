<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-11 23:15:05
 * @@Modify Date: 2016-02-02 15:52:06
 * @@Function:
 */

namespace Mtn\Magicmenu\Model\ResourceModel\Magicmenu;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Mtn\Magicmenu\Model\Magicmenu', 'Mtn\Magicmenu\Model\ResourceModel\Magicmenu');
    }
}
