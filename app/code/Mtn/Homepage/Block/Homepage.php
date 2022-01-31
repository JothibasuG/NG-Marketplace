<?php
namespace Mtn\Homepage\Block;

use Magento\Framework\View\Element\Template;

class Homepage extends Template
{

	protected $categoryFactory;

	public function __construct(
		\Magento\Backend\Block\Template\Context $context,
		\Magento\Catalog\Model\CategoryFactory $CategoryFactory,
		\Magento\Catalog\Helper\Image $imageHelper,
		\Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
		\Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
	)
	{
		$this->categoryFactory = $CategoryFactory;
		$this->priceCurrency = $priceCurrency;
		$this->imageHelper = $imageHelper;
		$this->productRepository = $productRepository;
		parent::__construct($context);
	}

	public function getProductCollectionFromCategory($categoryId) {   
		    
		$category = $this->categoryFactory->create()->load($categoryId);
		$productDetails =  $category->getProductCollection()->addAttributeToSelect(['id','name','sku','name','price','image','small_image','description'])->addAttributeToFilter('display_on_homepage',1);
		return array('category'=>$category, 'categoryProducts'=>$productDetails);
	}
	public function getCurrencyWithFormat($price)
    {
        return $this->priceCurrency->format($price,true,2);
    }

    public function getRoundedPrice($price)
    {
        return $this->priceCurrency->round($price);
    }

    public function getCurrentCurrencySymbol()
    {
        return $this->priceCurrency->getCurrencySymbol();
    }
	public function getImage($productId){
		$_product = $this->productRepository->getById($productId);
		return $this->imageHelper->init($_product, 'product_base_image')->getUrl();
	}
	
	
}