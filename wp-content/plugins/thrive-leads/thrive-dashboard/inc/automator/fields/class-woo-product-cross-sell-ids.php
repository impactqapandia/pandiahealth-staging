<?php

namespace TVE\Dashboard\Automator;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class Woo_Product_Cross_Sell_Ids
 */
class Woo_Product_Cross_Sell_Ids extends \Thrive\Automator\Items\Data_Field {
	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Product cross sell IDs';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Filter by product cross sell IDs';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return '';
	}

	public static function get_id() {
		return 'product_cross_sell_ids';
	}

	public static function get_supported_filters() {
		return array( 'string_ec' );
	}

	public static function get_validators() {
		return array( 'required' );
	}
}
