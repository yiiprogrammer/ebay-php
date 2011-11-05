<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerInventoryPropertyTypeCodeType.php';
require_once 'PaginationType.php';
require_once 'SellingManagerProductSortCodeType.php';
require_once 'SortOrderCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'SellingManagerSearchType.php';

/**
 * Retrieves a paginated list containing details of a user's Selling Manager 
 * inventory. For Selling Manager applications only.This call is subject to change 
 * without notice; the deprecation process isinapplicable to this call. For 
 * moreinformation about writing Selling Manager applications,please see <a 
 * href="http://developer.ebay.com/products/selling-manager-applications/" 
 * target="_blank">http://developer.ebay.com/products/selling-manager-applications</a>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerInventoryRequestType.html
 *
 */
class GetSellingManagerInventoryRequestType extends AbstractRequestType
{
	/**
	 * @var SellingManagerProductSortCodeType
	 */
	protected $Sort;
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;
	/**
	 * @var SortOrderCodeType
	 */
	protected $SortOrder;
	/**
	 * @var SellingManagerSearchType
	 */
	protected $Search;
	/**
	 * @var long
	 */
	protected $StoreCategoryID;
	/**
	 * @var SellingManagerInventoryPropertyTypeCodeType
	 */
	protected $Filter;

	/**
	 * @return SellingManagerProductSortCodeType
	 */
	function getSort()
	{
		return $this->Sort;
	}
	/**
	 * @return void
	 * @param SellingManagerProductSortCodeType $value 
	 */
	function setSort($value)
	{
		$this->Sort = $value;
	}
	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return SortOrderCodeType
	 */
	function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * @return void
	 * @param SortOrderCodeType $value 
	 */
	function setSortOrder($value)
	{
		$this->SortOrder = $value;
	}
	/**
	 * @return SellingManagerSearchType
	 */
	function getSearch()
	{
		return $this->Search;
	}
	/**
	 * @return void
	 * @param SellingManagerSearchType $value 
	 */
	function setSearch($value)
	{
		$this->Search = $value;
	}
	/**
	 * @return long
	 */
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}
	/**
	 * @return SellingManagerInventoryPropertyTypeCodeType
	 * @param integer $index 
	 */
	function getFilter($index = null)
	{
		if ($index !== null) {
			return $this->Filter[$index];
		} else {
			return $this->Filter;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerInventoryPropertyTypeCodeType $value 
	 * @param  $index 
	 */
	function setFilter($value, $index = null)
	{
		if ($index !== null) {
			$this->Filter[$index] = $value;
		} else {
			$this->Filter = $value;
		}
	}
	/**
	 * @return void
	 * @param SellingManagerInventoryPropertyTypeCodeType $value 
	 */
	function addFilter($value)
	{
		$this->Filter[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerInventoryRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Sort' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductSortCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SortOrder' =>
					array(
						'required' => false,
						'type' => 'SortOrderCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Search' =>
					array(
						'required' => false,
						'type' => 'SellingManagerSearchType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StoreCategoryID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Filter' =>
					array(
						'required' => false,
						'type' => 'SellingManagerInventoryPropertyTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>