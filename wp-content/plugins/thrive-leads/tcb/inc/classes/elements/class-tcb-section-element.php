<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-visual-editor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class TCB_Section_Element
 */
class TCB_Section_Element extends TCB_Element_Abstract {

	/**
	 * Name of the element
	 *
	 * @return string
	 */
	public function name() {
		return __( 'Background Section', 'thrive-cb' );
	}

	/**
	 * Get element alternate
	 *
	 * @return string
	 */
	public function alternate() {
		return 'container,box,content';
	}

	/**
	 * Return icon class needed for display in menu
	 *
	 * @return string
	 */
	public function icon() {
		return 'section';
	}

	/**
	 * Section element identifier
	 *
	 * @return string
	 */
	public function identifier() {
		return '.thrv_page_section, .thrv-page-section';
	}

	/**
	 * Component and control config
	 *
	 * @return array
	 */
	public function own_components() {
		$section = array(
			'section'    => array(
				'config' => array(
					'SectionHeight'    => array(
						'config'  => array(
							'default' => '1024',
							'min'     => '1',
							'max'     => '1000',
							'label'   => __( 'Section Minimum Height', 'thrive-cb' ),
							'um'      => array( 'px', 'vh' ),
							'css'     => 'min-height',
						),
						'to'      => '.tve-page-section-in',
						'extends' => 'Slider',
					),
					'ContentWidth'     => array(
						'config'  => array(
							'default' => '1024',
							'min'     => '100',
							'max'     => '2000',
							'label'   => __( 'Content Maximum Width', 'thrive-cb' ),
							'um'      => array( 'px', '%' ),
							'css'     => 'max-width',
						),
						'to'      => '.tve-page-section-in',
						'extends' => 'Slider',
					),
					'FullHeight'       => array(
						'config'  => array(
							'name'    => '',
							'label'   => __( 'Match height to screen', 'thrive-cb' ),
							'default' => true, //todo: this is useless
						),
						'to'      => '.tve-page-section-in',
						'extends' => 'Switch',
					),
					'ContentFullWidth' => array(
						'config'  => array(
							'name'    => '',
							'label'   => __( 'Content covers entire screen width', 'thrive-cb' ),
							'default' => true, //todo: this is useless
						),
						'to'      => '.tve-page-section-in',
						'extends' => 'Switch',
					),
					'SectionFullWidth' => array(
						'config'  => array(
							'name'    => '',
							'label'   => __( 'Stretch to fit screen width', 'thrive-cb' ),
							'default' => true, //todo: this is useless
						),
						'extends' => 'Switch',
					),
					'VerticalPosition' => array(
						'config'  => array(
							'name'    => __( 'Vertical Position', 'thrive-cb' ),
							'buttons' => array(
								array(
									'icon'    => 'top',
									'default' => true,
									'value'   => '',
								),
								array(
									'icon'  => 'vertical',
									'value' => 'center',
								),
								array(
									'icon'  => 'bot',
									'value' => 'flex-end',
								),
							),
							'info'    => true,
						),
						'extends' => 'ButtonGroup',
					),
				),
			),
			'background' => array(
				'config'            => array(
					'to' => '.tve-page-section-out',
				),
				'disabled_controls' => array(),
			),
			'shadow'     => array(
				'config' => array(
					'to' => '.tve-page-section-out',
				),
			),
			'layout'     => array(
				'disabled_controls' => array( 'Width', 'Alignment', 'Float', 'Position', 'PositionFrom' ),
				'config'            => array(
					'Height' => array(
						'to'        => '.tve-page-section-in',
						'important' => true,
					),
				),
			),
			'animation'  => array(
				'hidden' => true,
			),
			'borders'    => array(
				'config' => array(
					'Borders' => array(),
					'Corners' => array(),
				),
			),
			'typography' => array(
				'disabled_controls' => array(),
				'config'            => array(
					'to'             => '.tve-page-section-in',
					'ParagraphStyle' => array( 'hidden' => false ),
				),
			),
			'decoration' => array(
				'config' => array(
					'to' => '.tve-page-section-out',
				),
			),
			'scroll'     => array(
				'hidden' => false,
			),
		);

		if ( tcb_post()->is_landing_page() ) {
			/**
			 * For Landing Pages we add this additional control
			 */

			$section['section']['config']['InheritFromLandingPage'] = array(
				'config'  => array(
					'name'  => '',
					'label' => __( 'Inherit Width from Landing Page', 'thrive-cb' ),
				),
				'extends' => 'Switch',
			);
		}

		return array_merge( $section, $this->shared_styles_component() );
	}

	/**
	 * Element category that will be displayed in the sidebar
	 *
	 * @return string
	 */
	public function category() {
		return self::get_thrive_basic_label();
	}

	/**
	 * @return bool
	 */
	public function has_hover_state() {
		return true;
	}

	/**
	 * Element info
	 *
	 * @return string|string[][]
	 */
	public function info() {
		return array(
			'instructions' => array(
				'type' => 'help',
				'url'  => 'background_section',
				'link' => 'https://help.thrivethemes.com/en/articles/4425770-how-to-use-the-background-section-element',
			),
		);
	}
}
