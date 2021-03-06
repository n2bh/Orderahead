<?php
/**
 * PayPal Catalog 
 *
 * @package      :  PayPal_Catalog
 * @version      :  0.9.0
 * @since        :  Magento 1.7
 * @author       :  Paypal - http://www.paypal.com
 * @copyright    :  Copyright (C) 2013 Powered by Paypal
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  19/03/2013
 * 
 */
class Paypal_Catalog_IndexController extends Paypal_Core_Controller_Front_Action {

	/**
	 * navigation action
	 */
	public function navigationAction() {
		try{
			$this->loadLayout();
			$this->renderJsonLayout();
		} catch (Mage_Core_Exception $e) {
			Mage::logException($e);
			return false;
		}
	}
}