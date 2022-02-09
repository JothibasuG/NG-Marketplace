<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-05 10:40:51
 * @@Modify Date: 2016-04-22 17:05:35
 * @@Function:
 */

namespace Mtn\Magicmenu\Controller\Adminhtml\Extra;

use Magento\Framework\App\Filesystem\DirectoryList;

class ExportXml extends \Mtn\Magicmenu\Controller\Adminhtml\Action
{
    public function execute()
    {
        $fileName = 'extras.xml';

        /** @var \\Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $content = $resultPage->getLayout()->createBlock('Mtn\Magicmenu\Block\Adminhtml\Extra\Grid')->getXml();

        return $this->_fileFactory->create($fileName, $content, DirectoryList::VAR_DIR);
    }
}
