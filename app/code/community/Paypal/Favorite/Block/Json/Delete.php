<?php
/**
 * PayPal Favorite
 *
 * @package      :  PayPal_Favorite
 * @version      :  0.9.0
 * @since        :  Magento 1.7
 * @author       :  Paypal - http://www.paypal.com
 * @copyright    :  Copyright (C) 2013 Powered by Paypal
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  19/03/2013
 * 
 */
class Paypal_Favorite_Block_Json_Delete extends Paypal_Favorite_Block_Json_Abstract
{
    public function _toHtml() {
        return Mage::helper('core')->jsonEncode(Mage::registry('favorite_delete_success'));
    }
}
