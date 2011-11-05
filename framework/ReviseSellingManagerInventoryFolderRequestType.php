<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerFolderDetailsType.php';
require_once 'AbstractRequestType.php';

/**
 * Renames a Selling Manager inventory folder.For Selling Manager applications 
 * only.This call is subject to change without notice; the deprecation process 
 * isinapplicable to this call. For moreinformation about writing Selling Manager 
 * applications, please see <a 
 * href="http://developer.ebay.com/products/selling-manager-applications/" 
 * target="_blank">http://developer.ebay.com/products/selling-manager-applications</a>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerInventoryFolderRequestType.html
 *
 */
class ReviseSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	 * @var SellingManagerFolderDetailsType
	 */
	protected $Folder;

	/**
	 * @return SellingManagerFolderDetailsType
	 */
	function getFolder()
	{
		return $this->Folder;
	}
	/**
	 * @return void
	 * @param SellingManagerFolderDetailsType $value 
	 */
	function setFolder($value)
	{
		$this->Folder = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Folder' =>
					array(
						'required' => false,
						'type' => 'SellingManagerFolderDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>