<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_PromoBanners
 */


namespace Labelident\PluginAmastyPromoBanners\Model\Source;

use Magento\Framework\Option\ArrayInterface;
use Amasty\PromoBanners\Model\Rule;
use Labelident\PluginAmastyPromoBanners\Model\CustomRule;
use Amasty\PromoBanners\Model\Source\Position;

class CustomPosition extends Position
{
    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        return [
            Rule::POS_ABOVE_CART => __('Above Cart'),
            Rule::POS_CHECKOUT_BELOW_TOTAL => __('Cart Page (Below Total)'),
            Rule::POS_SIDEBAR_RIGHT => __('Sidebar Additional'),
            Rule::POS_SIDEBAR_LEFT => __('Sidebar Main'),
            Rule::POS_PROD_PAGE => __('Product Page (Top)'),
            Rule::POS_PROD_PAGE_BOTTOM => __('Product Page (Bottom)'),
            Rule::POS_PROD_PAGE_BELOW_CART => __('Product Page (Below Cart Button)'),
            Rule::POS_CATEGORY_PAGE => __('Category Page (Top)'),
            Rule::POS_CATEGORY_PAGE_BOTTOM => __('Category Page (Bottom)'),
            Rule::POS_CATEGORY_PAGE_BELOW_ADD_TO_CART => __('Category Page (Below Add to Cart Button)'),
            Rule::POS_CATALOG_SEARCH_TOP => __('Catalog Search (Top)'),
            Rule::POS_TOP_PAGE => __('On Top of Page'),
            Rule::POS_TOP_INDEX => __('Home Page under Menu'),
            Rule::POS_AMONG_PRODUCTS => __('Among Category Products'),
            CustomRule::POS_CART_BOTTOM => __('Cart Page (Bottom)')
        ];
    }
}
