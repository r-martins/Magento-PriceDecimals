<?php
/**
 * Class Magenteiro_PriceDecimals_Block_Adminhtml_Catalog_Product_Helper_Form_Price
 *
 * @author    Ricardo Martins
 */
class Magenteiro_PriceDecimals_Block_Adminhtml_Catalog_Product_Helper_Form_Price
    extends Mage_Adminhtml_Block_Catalog_Product_Helper_Form_Price
{
    /**
     * @param null $index
     *
     * @return null|string
     */
    public function getEscapedValue($index=null)
    {
        $value = $this->getValue();

        if (!is_numeric($value)) {
            return null;
        }

        $decimalPrecision = Mage::getStoreConfig('catalog/price/decimals');
        return number_format($value, $decimalPrecision, null, '');
    }
}