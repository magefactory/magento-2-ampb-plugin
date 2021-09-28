<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_PromoBanners
 */


namespace Magefactory\PluginAmastyPromoBanners\Model;

use Magento\Catalog\Api\Data\ProductInterface;
use Amasty\PromoBanners\Model\Rule;

class CustomRule extends Rule
{
    const POS_CART_BOTTOM = 16;
    const POS_PROD_PAGE_ABOVE_CART = 17;
    const POS_PROD_PAGE_BELOW_ACTIONS = 18;
    const POS_CATALOG_SEARCH_SIDEBAR_MAIN = 19;
    const POS_CATALOG_SEARCH_BOTTOM = 20;
    const POS_PROD_PAGE_BELOW_TIER = 21;
    const PRODUCTS_COLUMNS_FOUR = 4;
    const PRODUCTS_COLUMNS_SIX = 6;
}
