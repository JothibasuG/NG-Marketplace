<?php
/**
 * Mtn 
 * @category 	Mtn 
 * @copyright 	Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license 	http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-04-22 17:02:56
 * @@Function:
 */

namespace Mtn\Magicmenu\Controller\Adminhtml\Menu;

class NewAction extends \Mtn\Magicmenu\Controller\Adminhtml\Action
{
    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();

        return $resultForward->forward('edit');
    }
}
