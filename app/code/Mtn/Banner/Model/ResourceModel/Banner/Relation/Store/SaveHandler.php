<?php
/**
 * Class SaveHandler
 *
 * PHP version 7
 *
 * @category Mtn
 * @package  Mtn_Banner
 * @author   Mtn <magento@mtn-technologies.com>
 * @license  https://www.mtn-technologies.com  Open Software License (OSL 3.0)
 * @link     https://www.mtn-technologies.com
 */
namespace Mtn\Banner\Model\ResourceModel\Banner\Relation\Store;

use Magento\Framework\EntityManager\Operation\ExtensionInterface;
use Mtn\Banner\Api\Data\BannerInterface;
use Mtn\Banner\Model\ResourceModel\Banner;
use Magento\Framework\EntityManager\MetadataPool;

/**
 * Class SaveHandler
 */
class SaveHandler implements ExtensionInterface
{
    /**
     * @var MetadataPool
     */
    protected $metadataPool;

    /**
     * @var Banner
     */
    protected $resourceBanner;

    /**
     * @param MetadataPool $metadataPool
     * @param Banner $resourceBanner
     */
    public function __construct(
        MetadataPool $metadataPool,
        Banner $resourceBanner
    ) {
        $this->metadataPool = $metadataPool;
        $this->resourceBanner = $resourceBanner;
    }

    /**
     * @param object $entity
     * @param array $arguments
     * @return object
     * @throws \Exception
     */
    public function execute($entity, $arguments = [])
    {


        $entityMetadata = $this->metadataPool->getMetadata(BannerInterface::class);

        $linkField = $entityMetadata->getLinkField();

        $connection = $entityMetadata->getEntityConnection();

        $oldStores = $this->resourceBanner->lookupStoreIds((int)$entity->getId());
        
        $newStores = (array)$entity->getStores();

        if (empty($newStores)) {
            $newStores = (array)$entity->getStoreId();
        }

        $table = $this->resourceBanner->getTable('mtn_banner_store');
        $delete = array_diff($oldStores, $newStores);
        if ($delete) {
            $where = [
                $linkField . ' = ?' => (int)$entity->getData($linkField),
                'store_id IN (?)' => $delete,
            ];
            $connection->delete($table, $where);
        }
        $insert = array_diff($newStores, $oldStores);
        
        if ($insert) {
            $data = [];
            foreach ($insert as $storeId) {
                $data[] = [
                    $linkField => (int)$entity->getData($linkField),
                    'store_id' => (int)$storeId
                ];
            }
            $connection->insertMultiple($table, $data);
        }
        return $entity;
    }
}
