<?php
/**
 * Interface BannerInterface
 *
 * PHP version 7
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
namespace Mtn\Banner\Api\Data;

/**
 * Interface BannerInterface
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
interface BannerInterface
{
    /**
     * Constants for keys of data array.
     * Identical to the name of the getter in snake case
     */
    const BANNER_ID             = 'banner_id';
    const BANNER_TITLE          = 'banner_title';
    const BANNER_DESCRIPTION    = 'banner_description';
    const BANNER_TYPE           = 'banner_type';
    const BANNER_IMAGE          = 'banner_image';
    const BANNER_VIDEO          = 'banner_video';
    const BANNER_VIMEO          = 'banner_vimeo';
    const BANNER_YOUTUBE        = 'banner_youtube';
    const BANNER_VIDEO_AUTOPLAY = 'banner_video_autoplay';
    const BANNER_VIDEO_THUMB_IMAGE  = 'banner_video_thumb_image';
    const LABEL_BUTTON_TEXT     = 'label_button_text';
    const CALL_TO_ACTION        = 'call_to_action';
    const POSITION              = 'position';
    const IS_ACTIVE             = 'is_active';
    const START_DATE            = 'start_date';
    const END_DATE              = 'end_date';
    const CREATION_TIME         = 'creation_time';
    const UPDATE_TIME           = 'update_time';

    /**
     * Get banner ID
     *
     * @return int|null
     */
    public function getBannerId();

    /**
     * Get banner title
     *
     * @return string
     */
    public function getBannerTitle();

    /**
     * Get banner description
     *
     * @return string
     */
    public function getBannerDescription();

    /**
     * Get banner type
     *
     * @return string
     */
    public function getBannerType();

    /**
     * Get banner image
     *
     * @return string
     */
    public function getBannerImage();

    /**
     * Get banner video
     *
     * @return string
     */
    public function getBannerVideo();

    /**
     * Get banner youtube
     *
     * @return string
     */
    public function getBannerYoutube();

     /**
      * Get banner vimeo
      *
      * @return string
      */
    public function getBannerVimeo();

    /**
     * Get banner video autoplay
     *
     * @return string
     */
    public function getBannerVideoAutoplay();
    /**
     * Get banner video thumb image
     *
     * @return string
     */
    public function getBannerVideoThumbImage();

    /**
     * Get banner button text
     *
     * @return string
     */
    public function getLabelButtonText();

    /**
     * Get banner action
     *
     * @return string
     */
    public function getCallToAction();

    /**
     * Get banner position
     *
     * @return int|null
     */
    public function getPosition();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Get start date
     *
     * @return string|null
     */
    public function getStartDate();

    /**
     * Get end date
     *
     * @return string|null
     */
    public function getEndDate();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Set banner id
     *
     * @param int $bannerId bannerId
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerId($bannerId);

    /**
     * Set Banner title
     *
     * @param string $bannerTitle bannerTitle
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerTitle($bannerTitle);

    /**
     * Set bannerdescription
     *
     * @param string $bannerDescription bannerDescription
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerDescription($bannerDescription);

    /**
     * Set bannertype
     *
     * @param string $bannerType bannerType
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerType($bannerType);

    /**
     * Set bannerimage
     *
     * @param string $bannerImage bannerImage
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerImage($bannerImage);

    /**
     * Set bannervideo
     *
     * @param string $bannerVideo bannerVideo
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerVideo($bannerVideo);
    /**
     * Set bannervideo
     *
     * @param string $bannerVideo
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerVideoThumbImage($bannerVideo);

    /**
     * Set bannervimeo
     *
     * @param string $bannerVideoThumbImage bannerVideoThumbImage
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerVimeo($bannerVideoThumbImage);

    /**
     * Set banneryoutube
     *
     * @param string $bannerYoutube bannerYoutube
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerYoutube($bannerYoutube);

    /**
     * Set bannervideoautoplay
     *
     * @param string $bannerVideoAutoplay bannerVideoAutoplay
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setBannerVideoAutoplay($bannerVideoAutoplay);

    /**
     * Set button text
     *
     * @param string $labelbuttonText labelbuttonText
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setLabelButtonText($labelbuttonText);

    /**
     * Set action
     *
     * @param string $calltoAction calltoAction
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setCallToAction($calltoAction);

    /**
     * Set Position
     *
     * @param int|null $position position
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setPosition($position);

    /**
     * Set is active
     *
     * @param int|bool $isActive isActive
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setIsActive($isActive);

    /**
     * Set startdate
     *
     * @param string $startDate startDate
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setStartDate($startDate);

    /**
     * Set enddate
     *
     * @param string $endDate endDate
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setEndDate($endDate);

    /**
     * Set creationTime
     *
     * @param string $creationTime creationTime
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set updateTime
     *
     * @param string $updateTime updateTime
     *
     * @return \Mtn\Banner\Api\Data\BannerInterface
     */
    public function setUpdateTime($updateTime);
}
