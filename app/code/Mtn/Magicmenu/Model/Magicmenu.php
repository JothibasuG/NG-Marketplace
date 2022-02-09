<?php
/**
 * Mtn 
 * @category    Mtn 
 * @copyright   Copyright (c) 2014 Mtn (http://www.mtn.net/) 
 * @license     http://www.mtn.net/license-agreement.html
 * @Author: DOng NGuyen<nguyen@dvn.com>
 * @@Create Date: 2016-01-11 23:15:05
 * @@Modify Date: 2016-02-02 15:50:55
 * @@Function:
 */

namespace Mtn\Magicmenu\Model;

class Magicmenu extends \Magento\Framework\Model\AbstractModel
{

    protected $_magicmenuCollectionFactory;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Mtn\Magicmenu\Model\ResourceModel\Magicmenu\CollectionFactory $magicmenuCollectionFactory,
        \Mtn\Magicmenu\Model\ResourceModel\Magicmenu $resource,
        \Mtn\Magicmenu\Model\ResourceModel\Magicmenu\Collection $resourceCollection
    ) {
        parent::__construct(
            $context,
            $registry,
            $resource,
            $resourceCollection
        );
        $this->_magicmenuCollectionFactory = $magicmenuCollectionFactory;
    }

}
