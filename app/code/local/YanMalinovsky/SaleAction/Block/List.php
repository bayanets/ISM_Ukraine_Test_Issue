<?php
/**
 * Prepare for render Sale Action page and create Product Collection.
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_SaleAction
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_SaleAction_Block_List
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_SaleAction
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */
class YanMalinovsky_SaleAction_Block_List extends Mage_Core_Block_Template
{
    /**
     * Add title, description and keywords to the head.
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        $headBlock = $this->getLayout()->getBlock('head');
        $headBlock->setTitle('Sale Action');
        $headBlock->setDescription('Products with discounts.');
        $headBlock->setKeywords('low price, discounts, sales');

        return $this;
    }

    /**
     * Create Product Collection
     *
     * @return Mage_Catalog_Model_Resource_Product_Collection
     */
    protected function getLoadedProductCollection()
    {
        return Mage::getSingleton('catalog/category')->getProductCollection()
            ->addAttributeToSelect('*')
            ->addStoreFilter()
            ->addFieldToFilter('visibility', Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)
            ->addFieldToFilter('status', Mage_Catalog_Model_Product_Status::STATUS_ENABLED)
            ->addAttributeToFilter('sale_action', array('eq' => 1));
    }
}