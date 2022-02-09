<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-04-22 17:04:17
 * @@Function:
 */

namespace Mtn\Magicmenu\Controller\Adminhtml\Menu;

class MassDelete extends \Mtn\Magicmenu\Controller\Adminhtml\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $magicmenuIds = $this->getRequest()->getParam('magicmenu');
        if (!is_array($magicmenuIds) || empty($magicmenuIds)) {
            $this->messageManager->addError(__('Please select magicmenu(s).'));
        } else {
            $collection = $this->_magicmenuCollectionFactory->create()
                ->addFieldToFilter('magicmenu_id', ['in' => $magicmenuIds]);
            try {
                foreach ($collection as $item) {
                    $item->delete();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been deleted.', count($magicmenuIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        $resultRedirect = $this->_resultRedirectFactory->create();

        return $resultRedirect->setPath('*/*/');
    }
}
