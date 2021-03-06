<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-04-22 17:05:05
 * @@Function:
 */

namespace Mtn\Magicmenu\Controller\Adminhtml\Menu;

class Delete extends \Mtn\Magicmenu\Controller\Adminhtml\Action
{
    public function execute()
    {
        $id = $this->getRequest()->getParam('magicmenu_id');
        try {
            $item = $this->_magicmenuFactory->create()->setId($id);
            $item->delete();
            $this->messageManager->addSuccess(
                __('Delete successfully !')
            );
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        $resultRedirect = $this->_resultRedirectFactory->create();

        return $resultRedirect->setPath('*/*/');
    }
}
