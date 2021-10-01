<?php
/**
 * Thrive Themes - https://thrivethemes.com
 *
 * @package thrive-theme
 */

namespace TCB\Lightspeed;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Silence is golden!
}

/**
 * Class Hooks
 *
 * @package TCB\Lightspeed
 */
class Hooks {

	public static function add_actions() {

		add_action( 'init', [ Dashboard::class, 'init' ] );

		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'wp_enqueue_scripts' ] );

		add_action( 'rest_api_init', [ Rest_Api::class, 'register_routes' ] );

		add_action( 'wp_head', [ Fonts::class, 'render_optimized_google_fonts' ], PHP_INT_MAX );

		if ( Main::is_enabled() ) {
			add_action( 'wp_head', [ __CLASS__, 'insert_optimization_script' ], - 24 );
		}
	}

	public static function wp_enqueue_scripts() {

		/**
		 * Filter the post id that we're trying to optimize
		 *
		 * @param int $post_id
		 *
		 * @return int
		 */
		$post_to_optimize = apply_filters( 'tcb_lightspeed_post_to_optimize', get_the_ID() );

		if ( Main::is_optimizing() && current_user_can( 'edit_post', $post_to_optimize ) ) {
			tve_enqueue_script( 'tcb-lightspeed-optimize', tve_editor_js() . '/lightspeed-optimize' . ( tve_dash_is_debug_on() ? '.js' : '.min.js' ), [ 'jquery' ], false, true );

			/**
			 * Filter the data that is sent to the optimization script
			 *
			 * @param array $data
			 *
			 * @return array
			 */
			$localize_data = apply_filters( 'tcb_lightspeed_optimize_localize_data', [
				'post'       => get_post( $post_to_optimize ),
				'key'        => '',
				'route'      => get_rest_url( get_current_blog_id(), 'tcb/v1/lightspeed/optimize' ),
				'nonce'      => \TCB_Utils::create_nonce(),
				'styles'     => Css::get_instance( $post_to_optimize )->get_styles_to_optimize(),
				'js_modules' => JS::get_module_data( '', 'identifier' ),
			] );

			wp_localize_script( 'tcb-lightspeed-optimize', 'tcb_lightspeed_optimize', $localize_data );
		}
	}

	public static function insert_optimization_script() {
		?>
		<script type="text/javascript">
			window.flatStyles = window.flatStyles || ''

			window.lightspeedOptimizeStylesheet = function () {
				const currentStylesheet = document.querySelector( '.tcb-lightspeed-style:not([data-ls-optimized])' )

				if ( currentStylesheet ) {
					try {
						if ( currentStylesheet.sheet && currentStylesheet.sheet.cssRules ) {
							if ( window.flatStyles ) {
								if ( this.optimizing ) {
									setTimeout( window.lightspeedOptimizeStylesheet.bind( this ), 24 )
								} else {
									this.optimizing = true;

									let rulesIndex = 0;

									while ( rulesIndex < currentStylesheet.sheet.cssRules.length ) {
										const rule = currentStylesheet.sheet.cssRules[ rulesIndex ]
										/* remove rules that already exist in the page */
										if ( rule.type === CSSRule.STYLE_RULE && window.flatStyles.includes( `${rule.selectorText}{` ) ) {
											currentStylesheet.sheet.deleteRule( rulesIndex )
										} else {
											rulesIndex ++
										}
									}
									/* optimize, mark it such, move to the next file, append the styles we have until now */
									currentStylesheet.setAttribute( 'data-ls-optimized', '1' )

									window.flatStyles += currentStylesheet.innerHTML

									this.optimizing = false
								}
							} else {
								window.flatStyles = currentStylesheet.innerHTML
								currentStylesheet.setAttribute( 'data-ls-optimized', '1' )
							}
						}
					} catch ( error ) {
						console.warn( error )
					}

					if ( currentStylesheet.parentElement.tagName !== 'HEAD' ) {
						/* always make sure that those styles end up in the head */
						document.head.prepend( currentStylesheet )
					}
				}
			}

			window.lightspeedOptimizeFlat = function ( styleSheetElement ) {
				if ( document.querySelectorAll( 'link[href*="thrive_flat.css"]' ).length > 1 ) {
					/* disable this flat if we already have one */
					styleSheetElement.setAttribute( 'disabled', true )
				} else {
					/* if this is the first one, make sure he's in head */
					if ( styleSheetElement.parentElement.tagName !== 'HEAD' ) {
						document.head.append( styleSheetElement )
					}
				}
			}
		</script>
		<?php
	}
}
