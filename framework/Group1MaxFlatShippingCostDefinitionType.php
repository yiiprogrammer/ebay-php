<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * About shipping service group 1. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/Group1MaxFlatShippingCostDefinitionType.html
 *
 */
class Group1MaxFlatShippingCostDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('Group1MaxFlatShippingCostDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array();
		}
	}
}
?>
