<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-03-02 17:21:06
 * @@Function:
 */

namespace Mtn\Magicmenu\Block\Adminhtml;

class Menu extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor.
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_menu';
        $this->_blockGroup = 'Mtn_Magicmenu';
        $this->_headerText = __('Menu Menu');
        $this->_addButtonLabel = __('Add New Menu');
        parent::_construct();
    }
}
