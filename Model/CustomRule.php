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
    const PRODUCTS_COLUMNS_FOUR = 4;
    const PRODUCTS_COLUMNS_SIX = 6;
}
