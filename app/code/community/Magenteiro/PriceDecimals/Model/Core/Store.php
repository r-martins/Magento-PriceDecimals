<?php
/**
 * Class Magenteiro_PriceDecimals_Model_Core_Store
 *
 * @author    Ricardo Martins
 */
class Magenteiro_PriceDecimals_Model_Core_Store extends Mage_Core_Model_Store
{
    /**
     * Round price
     *
     * @param mixed $price
     * @return double
     */
    public function roundPrice($price)
    {
        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return round($price, $decimalPrecision);
    }

}