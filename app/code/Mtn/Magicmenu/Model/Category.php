<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-11 23:15:05
 * @@Modify Date: 2016-03-04 18:51:16
 * @@Function:
 */

namespace Mtn\Magicmenu\Model;

class Category extends \Magento\Catalog\Model\Category
{
	protected function _construct()
    {
        $this->_init('catalog/category');
    }
}
