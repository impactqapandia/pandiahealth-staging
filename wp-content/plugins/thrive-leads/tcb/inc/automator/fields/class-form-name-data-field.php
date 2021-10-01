<?php

namespace TCB\Integrations\Automator;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class Form_Name_Field
 */
class Form_Name_Data_Field extends \Thrive\Automator\Items\Data_Field {

	/**
	 * Field name
	 */
	public static function get_name() {
		return 'Name form field';
	}

	/**
	 * Field description
	 */
	public static function get_description() {
		return 'Name from the form data submitted by the user';
	}

	/**
	 * Field input placeholder
	 */
	public static function get_placeholder() {
		return 'Filter by name';
	}

	public static function get_id() {
		return 'name';
	}

	public static function get_supported_filters() {
		return [ 'string_equals' ];
	}

}
