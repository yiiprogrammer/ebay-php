<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ExpressHistogramAisleType.php';
require_once 'ExpressHistogramDomainDetailsType.php';

/**
 * Details about an Express department and matching item and catalog product counts 
 * in that department, if any. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressHistogramDepartmentType.html
 *
 */
class ExpressHistogramDepartmentType extends EbatNs_ComplexType
{
	/**
	 * @var ExpressHistogramDomainDetailsType
	 */
	protected $DomainDetails;
	/**
	 * @var ExpressHistogramAisleType
	 */
	protected $Aisle;

	/**
	 * @return ExpressHistogramDomainDetailsType
	 */
	function getDomainDetails()
	{
		return $this->DomainDetails;
	}
	/**
	 * @return void
	 * @param ExpressHistogramDomainDetailsType $value 
	 */
	function setDomainDetails($value)
	{
		$this->DomainDetails = $value;
	}
	/**
	 * @return ExpressHistogramAisleType
	 * @param integer $index 
	 */
	function getAisle($index = null)
	{
		if ($index !== null) {
			return $this->Aisle[$index];
		} else {
			return $this->Aisle;
		}
	}
	/**
	 * @return void
	 * @param ExpressHistogramAisleType $value 
	 * @param  $index 
	 */
	function setAisle($value, $index = null)
	{
		if ($index !== null) {
			$this->Aisle[$index] = $value;
		} else {
			$this->Aisle = $value;
		}
	}
	/**
	 * @return void
	 * @param ExpressHistogramAisleType $value 
	 */
	function addAisle($value)
	{
		$this->Aisle[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressHistogramDepartmentType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DomainDetails' =>
					array(
						'required' => false,
						'type' => 'ExpressHistogramDomainDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Aisle' =>
					array(
						'required' => false,
						'type' => 'ExpressHistogramAisleType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
