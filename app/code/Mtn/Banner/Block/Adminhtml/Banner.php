<?php
/**
 * Class Banner
 *
 * PHP version 7
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
namespace Mtn\Banner\Block\Adminhtml;

/**
 * Class Banner
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
class Banner extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */

    protected function _construct()
    {
        $this->_blockGroup = 'Mtn_Banner';
        $this->_controller = 'adminhtml';
        $this->_headerText = __('Banner');
        $this->_addButtonLabel = __('Add New Banner');
        parent::_construct();
        if (!$this->_authorization->isAllowed('Mtn_Banner::add_banner')) {
            $this->removeButton('add');
        }
    }
}
