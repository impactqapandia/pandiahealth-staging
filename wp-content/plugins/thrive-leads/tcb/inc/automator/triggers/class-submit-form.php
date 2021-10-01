<?php

namespace TCB\Integrations\Automator;


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

class Submit_Form extends \Thrive\Automator\Items\Trigger {

	public function __construct() {
	}

	public static function get_id() {
		return 'thrive/submitform';
	}

	public static function get_wp_hook() {
		return 'tcb_api_form_submit';
	}

	public static function get_provided_data_objects() {
		return [ 'form_data' ];
	}

	public static function get_hook_params_number() {
		return 1;
	}

	public static function get_app_name() {
		return 'Thrive Architect';
	}

	public static function get_name() {
		return 'Form submit';
	}

	public static function get_description() {
		return 'Triggers on each connection of a form on submit';
	}

	public static function get_image() {
		return 'tap-architect-logo';
	}
}
