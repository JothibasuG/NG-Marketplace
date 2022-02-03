<?php

namespace Mtn\Banner\Api;

/**
 * Interface BannerRepositoryInterface
 *
 * PHP version 7
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
interface BannerRepositoryInterface
{
    /**
     * Retrieve Banner.
     *
     * @param int $bannerId
     * @return \Mtn\Banner\Api\Data\BannerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($bannerId);

    /**
     * Delete Banner.
     *
     * @param \Mtn\Banner\Api\Data\BannerInterface $banner
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Mtn\Banner\Api\Data\BannerInterface $banner);

    /**
     * Delete Banner by ID.
     *
     * @param int $bannerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bannerId);
}
