<?php
/**
 * Class Magenteiro_PriceDecimals_Model_Sales_Order
 *
 * @author    Ricardo Martins
 */
class Magenteiro_PriceDecimals_Model_Sales_Order extends Mage_Sales_Model_Order
{
    /**
     * Get formated base price value including order currency rate to order website currency
     *
     * @param   float $price
     * @param   bool  $addBrackets
     * @return  string
     */
    public function formatBasePrice($price)
    {
        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return $this->formatBasePricePrecision($price, $decimalPrecision);
    }

    /**
     * Get formated price value including order currency rate to order website currency
     *
     * @param   float $price
     * @param   bool  $addBrackets
     * @return  string
     */
    public function formatPrice($price, $addBrackets = false)
    {
        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return $this->formatPricePrecision($price, $decimalPrecision, $addBrackets);
    }
}