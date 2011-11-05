<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'NotificationRoleCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves the requesting application's notification preferences.Details are only 
 * returned for events for which a preference wasset at one point. For example, if 
 * you enabled notification forthe EndOfAuction event and later disabled it, the 
 * GetNotificationPreferencesresponse would cite the EndOfAuction event preference 
 * asDisabled. Otherwise, no details would be returned regarding EndOfAuction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetNotificationPreferencesRequestType.html
 *
 */
class GetNotificationPreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var NotificationRoleCodeType
	 */
	protected $PreferenceLevel;

	/**
	 * @return NotificationRoleCodeType
	 */
	function getPreferenceLevel()
	{
		return $this->PreferenceLevel;
	}
	/**
	 * @return void
	 * @param NotificationRoleCodeType $value 
	 */
	function setPreferenceLevel($value)
	{
		$this->PreferenceLevel = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetNotificationPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PreferenceLevel' =>
					array(
						'required' => false,
						'type' => 'NotificationRoleCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>