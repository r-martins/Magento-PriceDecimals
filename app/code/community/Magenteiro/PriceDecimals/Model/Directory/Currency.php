<?php
/**
 * Class Magenteiro_PriceDecimals_Model_Directory_Currency
 *
 * @author    Ricardo Martins
 */
class Magenteiro_PriceDecimals_Model_Directory_Currency extends Mage_Directory_Model_Currency
{
    /**
     * Format price to currency format
     *
     * @param float $price
     * @param array $options
     * @param bool $includeContainer
     * @param bool $addBrackets
     * @return string
     */
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return $this->formatPrecision($price, $decimalPrecision, $options, $includeContainer, $addBrackets);
    }
}