<?php
/**
 * Auto generated by prado-cli.php on 2007-05-01 05:32:57.
 */
class Shipper extends TActiveRecord
{
	const TABLE='Shippers';

	public $ShipperID;
	public $CompanyName;
	public $Phone;

	public $Orders = array();

	public static $RELATIONS = array
	(
		'Orders' => array(self::HAS_MANY, 'Order'),
	);

	public static function finder($className=__CLASS__)
	{
		return parent::finder($className);
	}
}
?>