<?php

include('shortcodes.php');

/* Load theme js scripts here */
function theme_scripts()
{
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/lib/jquery.min.js', [], '3.3.1', true);
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', ['jquery'], '4.3', true);
    wp_enqueue_script('app_js', get_stylesheet_directory_uri() . '/app.js', ['jquery', 'bootstrap_js'],'1.0', true);
	wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-accordion');

    wp_localize_script('app_js', 'ajax_custom', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
	
	wp_enqueue_style(
		'pandia_jq_ui_css',
		'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css'
	);
}

/* Load theme css styles here */
function theme_styles()
{
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', [], '4.3', 'all');
    wp_enqueue_style('style.min', get_stylesheet_uri(), ['bootstrap_css'],'1.0', 'all');
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
}

/* Load Slick */
add_action('wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles');
function themeprefix_slick_enqueue_scripts_styles()
{

    wp_enqueue_script('slickjs', get_stylesheet_directory_uri() . '/lib/slick/slick.min.js', array('jquery'), '1.6.0', true);
    wp_enqueue_script('slickjs-init', get_stylesheet_directory_uri() . '/lib/slick/slick-init.js', array('slickjs'), '1.6.0', true);
    wp_enqueue_style('slickcss', get_stylesheet_directory_uri() . '/lib/slick/slick.css', '1.6.0', 'all');
    wp_enqueue_style('slickcsstheme', get_stylesheet_directory_uri() . '/lib/slick/slick-theme.css', '1.6.0', 'all');
}

function load_scripts()
{
    theme_scripts();
    theme_styles();
}

add_action('wp_enqueue_scripts', 'load_scripts');
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

function register_my_menus()
{
    register_nav_menu('nav-menu', __('Navigation Menu'));
    register_nav_menu('footer-our-story', __('Footer Our Story'));
    register_nav_menu('footer-our-policies', __('Footer Our Policies'));
    register_nav_menu('footer-questions', __('Footer Questions'));
    register_nav_menu('landing-pages', __('Landing Page Menu'));
}
add_action('init', 'register_my_menus', 9);

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Pandia Health Settings',
        'menu_title' => 'Pandia Health Settings',
        'menu_slug' => 'pandia-health-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function create_faqtax()
{
    $labels = [
        'name' => _x('FAQ Categories', 'taxonomy general name'),
        'singular_name' => _x('FAQ Category', 'taxonomy singular name'),
        'search_items' => __('Search FAQ Categories'),
        'all_items' => __('All FAQ Categories'),
        'parent_item' => __('Parent FAQ Category'),
        'edit_item' => __('Edit FAQ Category'),
        'update_item' => __('Update FAQ Category'),
        'add_new_item' => __('Add New FAQ Category'),
        'new_item_name' => __('New FAQ Category Name'),
        'menu_name' => __('FAQ Categories')
    ];

    register_taxonomy('faq_categories', array('faq'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'faq-categories'),
    ));
}

add_action('init', 'create_faqtax', 0);

function create_faqpost()
{
    $labels = [
        'name'                => _x('FAQ', 'Post Type General Name', 'pandiahealth'),
        'singular_name'       => _x('FAQ', 'Post Type Singular Name', 'pandiahealth'),
        'menu_name'           => __('FAQ', 'pandiahealth'),
        'parent_item_colon'   => __('Parent FAQ', 'pandiahealth'),
        'all_items'           => __('All FAQ', 'pandiahealth'),
        'view_item'           => __('View FAQ', 'pandiahealth'),
        'add_new_item'        => __('Add New FAQ', 'pandiahealth'),
        'add_new'             => __('Add New', 'pandiahealth'),
        'edit_item'           => __('Edit FAQ', 'pandiahealth'),
        'update_item'         => __('Update FAQ', 'pandiahealth'),
        'search_items'        => __('Search FAQ', 'pandiahealth'),
        'not_found'           => __('Not Found', 'pandiahealth'),
        'not_found_in_trash'  => __('Not found in Trash', 'pandiahealth'),
    ];

    $args = [
        'label'               => __('faq', 'pandiahealth'),
        'description'         => __('Frequently Asked Questions', 'pandiahealth'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'revisions', 'custom-fields'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'  => array('faq_categories'),
        'rewrite'             => ['slug' => 'faqs']
    ];


    register_post_type('faq', $args);
}

add_action('init', 'create_faqpost');

function search_faq()
{
    $the_query = new WP_Query(['posts_per_page' => -1, 's' => esc_attr($_POST['q']), 'post_type' => 'faq']);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post(); ?>

            <a href="#" class="search-result" data-faq-id="#faq_<?php the_ID(); ?>"><?php the_title(); ?></a>
<?php }
        wp_reset_postdata();
    }
    die();
}

add_action('wp_ajax_search_faq', 'search_faq');
add_action('wp_ajax_nopriv_search_faq', 'search_faq');





function create_resourcetax()
{
    $labels = [
        'name' => _x('Resource Categories', 'taxonomy general name'),
        'singular_name' => _x('Resource Category', 'taxonomy singular name'),
        'search_items' => __('Search Resource Categories'),
        'all_items' => __('All Resource Categories'),
        'parent_item' => __('Parent Resource Category'),
        'edit_item' => __('Edit Resource Category'),
        'update_item' => __('Update Resource Category'),
        'add_new_item' => __('Add New Resource Category'),
        'new_item_name' => __('New Resource Category Name'),
        'menu_name' => __('Resource Categories')
    ];

    register_taxonomy('resource_categories', array('resource'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'resource-categories'),
    ));
}

add_action('init', 'create_resourcetax', 0);

function create_resource()
{
    $labels = [
        'name'                => _x('Resources', 'Post Type General Name', 'pandiahealth'),
        'singular_name'       => _x('Resource', 'Post Type Singular Name', 'pandiahealth'),
        'menu_name'           => __('Resources', 'pandiahealth'),
        'parent_item_colon'   => __('Parent Resource', 'pandiahealth'),
        'all_items'           => __('All Resources', 'pandiahealth'),
        'view_item'           => __('View Resource', 'pandiahealth'),
        'add_new_item'        => __('Add New Resource', 'pandiahealth'),
        'add_new'             => __('Add New', 'pandiahealth'),
        'edit_item'           => __('Edit Resource', 'pandiahealth'),
        'update_item'         => __('Update Resource', 'pandiahealth'),
        'search_items'        => __('Search Resource', 'pandiahealth'),
        'not_found'           => __('Not Found', 'pandiahealth'),
        'not_found_in_trash'  => __('Not found in Trash', 'pandiahealth'),
    ];

    $args = [
        'label'               => __('resource', 'pandiahealth'),
        'description'         => __('Pandia Health Resources', 'pandiahealth'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'revisions', 'custom-fields', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest' => true,
        'taxonomies'  => array('resource_categories'),
        'rewrite'             => ['slug' => 'resources']
    ];


    register_post_type('resource', $args);
}

add_action('init', 'create_resource');

function search_resource()
{
    die();
    $the_query = new WP_Query(['posts_per_page' => -1, 's' => esc_attr($_POST['q']), 'post_type' => 'resource']);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post(); ?>

            <a href="#" class="search-result" data-resource-id="#resource_<?php the_ID(); ?>"><?php the_title(); ?></a>
<?php }
        wp_reset_postdata();
    }
    die();
}

add_action('wp_ajax_search_resource', 'search_resource');
add_action('wp_ajax_nopriv_search_resource', 'search_resource');



function blog_widgets()
{

    register_sidebar(array(
        'name'          => 'Blog Side Bar',
        'id'            => 'blog_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'blog_widgets');

function pandia_wp_footer(){
	?>
		<script>
			jQuery( function() {
				jQuery( ".accordion" ).accordion({
					collapsible: true,
					header: "p.question",
					active: false
				});
				
				if( jQuery('body').hasClass('home') ){
				   // location.href = '<?php echo home_url('/home-new/'); ?>';
				}
				
			 });
		</script>
	<?php
}
add_action( 'wp_footer', 'pandia_wp_footer' );

add_shortcode('styled_button', 'styled_button_shortcode');
add_shortcode('external_video', 'external_video_shortcode');
add_shortcode('add_separator', 'add_separator_shortcode');


/* adding blog specific piece of code  */
add_action('wp_head', 'custom_blog_google_tag');
function custom_blog_google_tag(){
if(is_singular('post')) {  ?>
<script>
    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        'event': 'pageview',
        'page_type': 'blog',
    });
</script>
<?php  }
};


// added by gautam 
class CustomWidget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'custom_widget', // Base ID
			__('CustomWidget', 'text_domain'), // Name
			array( 'description' => __( 'Some CustomWidget', 'text_domain' ), ) 
		);
        
	}
}
 
// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'CustomWidget' );
  
}
add_action( 'widgets_init', 'register_foo_widget' );

?>