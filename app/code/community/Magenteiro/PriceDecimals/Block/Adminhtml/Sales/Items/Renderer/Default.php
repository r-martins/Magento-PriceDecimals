<?php
/**
 * Class Magenteiro_PriceDecimals_Block_Adminhtml_Sales_Items_Renderer_Default
 *
 * @author    Ricardo Martins
 */
class Magenteiro_PriceDecimals_Block_Adminhtml_Sales_Items_Renderer_Default
    extends Mage_Adminhtml_Block_Sales_Items_Renderer_Default
{
    /**
     * Retrieve price formated html content
     *
     * @param float $basePrice
     * @param float $price
     * @param bool $strong
     * @param string $separator
     * @return string
     */
    public function displayPrices($basePrice, $price, $strong = false, $separator = '<br />')
    {
        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return $this->displayRoundedPrices($basePrice, $price, $decimalPrecision, $strong, $separator);
    }
}