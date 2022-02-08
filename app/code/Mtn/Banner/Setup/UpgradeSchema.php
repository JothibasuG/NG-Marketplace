<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Mtn\Banner\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * Upgrade the Catalog module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     * @throws \Zend_Db_Exception
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.2.0') < 0) {
            $setup->getConnection()->addColumn(
                $setup->getTable('mtn_banner'),
                'banner_vimeo',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Banner Vimeo',
                    'afters' => 'banner_video_autoplay'
                ]
            );
            $setup->getConnection()->addColumn(
                $setup->getTable('mtn_banner'),
                'banner_video_thumb_image',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Banner Thumb Image',
                    'afters' => 'banner_video'
                ]
            );

            $table = $setup->getConnection()->newTable(
                $setup->getTable('mtn_banner_store')
            )->addColumn(
                'banner_id',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'primary' => true],
                'Banner ID'
            )->addColumn(
                'store_id',
                Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => false, 'primary' => true],
                'Store ID'
            )->addIndex(
                $setup->getIdxName('mtn_banner_store', ['store_id']),
                ['store_id']
            )->addForeignKey(
                $setup->getFkName('mtn_banner_store', 'banner_id', 'mtn_banner', 'banner_id'),
                'banner_id',
                $setup->getTable('mtn_banner'),
                'banner_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->addForeignKey(
                $setup->getFkName('mtn_banner_store', 'store_id', 'store', 'store_id'),
                'store_id',
                $setup->getTable('store'),
                'store_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment(
                'Mtn Banner To Store Linkage Table'
            );
            $setup->getConnection()->createTable($table);

            $Customertable = $setup->getConnection()->newTable(
                $setup->getTable('mtn_banner_customer_group')
            )->addColumn(
                'banner_id',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'primary' => true],
                'Banner ID'
            )->addColumn(
                'customer_group_id',
                Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'primary' => true],
                'Customer Group ID'
            )->addIndex(
                $setup->getIdxName('mtn_banner_customer_group', ['customer_group_id']),
                ['customer_group_id']
            )->addForeignKey(
                $setup->getFkName('mtn_banner_customer_group', 'banner_id', 'mtn_banner', 'banner_id'),
                'banner_id',
                $setup->getTable('mtn_banner'),
                'banner_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->addForeignKey(
                $setup->getFkName('mtn_banner_customer_group', 'customer_group_id', 'customer_group', 'customer_group_id'),
                'customer_group_id',
                $setup->getTable('customer_group'),
                'customer_group_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment(
                'Mtn Banner Customer Group Table'
            );
            $setup->getConnection()->createTable($Customertable);
        }
        if (version_compare($context->getVersion(), '1.3.0') < 0) {
            $setup->getConnection()->addColumn(
                $setup->getTable('mtn_banner'),
                'page_id',
                [
                    'type' => Table::TYPE_SMALLINT,
                    'nullable' => true,
                    'comment' => 'Banner Page'
                ]
            );
        }
        $setup->endSetup();
    }
}
