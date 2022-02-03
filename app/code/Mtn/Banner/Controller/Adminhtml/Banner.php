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
namespace Mtn\Banner\Controller\Adminhtml;

/**
 * Class Banner
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
class Banner extends Actions
{
    /**
     * Form session key
     *
     * @var string
     */
    protected $formSessionKey = 'mtn_banner_form_data';

    /**
     * Allowed Key
     *
     * @var string
     */
    protected $allowedKey = 'Mtn_Banner::manage_banners';

    /**
     * Model class name
     *
     * @var string
     */
    protected $modelClass = \Mtn\Banner\Model\Banner::class;

    /**
     * Active menu key
     *
     * @var string
     */
    protected $activeMenu = 'Mtn_Banner::banner';

    /**
     * Status field name
     *
     * @var string
     */
    protected $statusField = 'is_active';

    /**
     * Save request params key
     *
     * @var string
     */
    protected $paramsHolder = 'post';
}
