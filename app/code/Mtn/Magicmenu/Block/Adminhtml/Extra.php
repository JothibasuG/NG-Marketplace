<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-02-29 14:25:17
 * @@Function:
 */

namespace Mtn\Magicmenu\Block\Adminhtml;

class Extra extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor.
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_extra';
        $this->_blockGroup = 'Mtn_Magicmenu';
        $this->_headerText = __('Extra Menu');
        $this->_addButtonLabel = __('Add New Extra Menu');
        parent::_construct();
    }
}
