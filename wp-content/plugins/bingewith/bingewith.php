<?php
// Plugin Name: BingeWith
// Plugin URI: https://bingewith.com
// Description: Add audio to your blog posts. This plugin takes the text of the blogs and creates audio for each individual blog posts. This works both on the individual blog post pages and the blog homepage. The audio player is placed at the top of every post.
// Version: 1.11
// Author: BingeWith
// Author URI: https://profiles.wordpress.org/bingewith/
// License: GPLv2 or later

$bingewith_sc_posts = array();

if (!function_exists("bingewith_enabled_for_post")) {
  function bingewith_enabled_for_post() {
    $permalink = get_permalink();
    $bingewith_meta = get_post_meta(get_post()->ID, 'bingewith', true);
    $bingewith_enabled_for_post = true;
    // User has not explicitly enabled OR disabled bingewith for a post.
    if ($bingewith_meta === "") {
      if (strpos($permalink, "developer.salesforce.com") !== false) {
        $bingewith_enabled_for_post = false;
      }
    } else if ($bingewith_meta === "false") {
      // User explicitly disabled bingewith for a post.
      $bingewith_enabled_for_post = false;
    }
    return $bingewith_enabled_for_post;
  }
}

// Handles the registration of oEmbed providers.
if (!function_exists("bingewith_custom_oembed_provider")) {
	function bingewith_custom_oembed_provider() {
		wp_oembed_add_provider('https://bingewith.com/article/*', 'https://bingewith.com/oembed', false);
	}
	// Register our oEmbed hook.
	add_action('init', 'bingewith_custom_oembed_provider');
}
/*
wp_register_script( 'bingewith-script', '' );
wp_enqueue_script( 'bingewith-script' );
wp_add_inline_script( 'bingewith-script',
            '<script> window.addEventListener("message", receiveMessage, false);
              function receiveMessage(event) {
                try {
                  var parsed = JSON.parse(event.data)
                  if (parsed.context === "iframe.resize") {
                    var iframes = document.getElementsByClassName("binge-iframe");
                    for (let i = 0; i < iframes.length; ++i) {
                      if (iframes[i].src == parsed.src || iframes[i].contentWindow === event.source) {
                        iframes[i].height = parsed.height; } 
                      iframes[i].style.opacity = 1;
                   } 
                  } 
                } catch (error) {
                }
              }
              var BingeIframeRan = true;
              </script>');
 */
if (!function_exists("bingewith_hook_post_type_is_valid")) {
  function bingewith_hook_post_type_is_valid($hook_post_type) {
    if ($hook_post_type == "post") {
      return true;
    }
    if ($hook_post_type == "resources") {
      return true;
    }
    return false;
  }
}
// Handles the placement of iframes on posts.
if (!function_exists("bingewith_post_hook")) {

	function bingewith_post_hook($content) {
		if (!is_page() && get_post() && bingewith_hook_post_type_is_valid(get_post_type())) {
			// Add our iframe to the page if it is a post.
			// Get the permalink to the post, the iframe needs it.
      $permalink = get_permalink();
      global $bingewith_sc_posts;
      if (bingewith_enabled_for_post() &&
          !has_shortcode($content, 'bingewith') &&
          !array_key_exists(get_post()->ID, $bingewith_sc_posts)) {
        $iframe_id = "binge-iframe-" . get_post()->ID;
        $onload_handler = 'if (typeof BingeIframeRan === "undefined") { document.getElementById("' . $iframe_id . '").style.opacity = 1 } ';
        $msg = 
          '<script type="text/javascript">
              if (typeof BingeIframeRan === "undefined") {
                window.addEventListener("message", receiveMessage, false);
                function receiveMessage(event) {
                  try {
                    var parsed = JSON.parse(event.data)
                    if (parsed.context === "iframe.resize") {
                      var iframes = document.getElementsByClassName("binge-iframe");
                      for (let i = 0; i < iframes.length; ++i) {
                        if (iframes[i].src == parsed.src || iframes[i].contentWindow === event.source) {
                          iframes[i].height = parsed.height; } 
                        iframes[i].style.opacity = 1;
                     }
                    }
                  } catch (error) {
                  }
                }
                var BingeIframeRan = true;
              }
              </script>';
        $msg = $msg . "<iframe id='$iframe_id' data-wp='1.10' class='binge-iframe' height='70' width='100%' frameBorder='0' onload='$onload_handler' style='margin-top: 10px!important; margin-bottom: 10px!important; opacity: 0;' src='https://bingewith.com/article/::_wp&permalink=$permalink' scrolling='no'></iframe>";
				// Preprend our iframe to the post content.
				$content = $msg . $content;
			}
		}
		return $content;
	}
	// Register our content hook.
	add_filter('the_content', 'bingewith_post_hook');
}

if (!function_exists("bingewith_manage_posts_columns")) {
	function bingewith_manage_posts_columns($columns) {
		$columns['bingewith'] = 'BingeWith';
		return $columns;
	}
	add_filter('manage_posts_columns', 'bingewith_manage_posts_columns');
}

if (!function_exists("bingewith_manage_posts_custom_column")) {
	function bingewith_manage_posts_custom_column($name) {
		switch ($name) {
		case 'bingewith':
			echo bingewith_enabled_for_post() ? "Enabled" : "Disabled";
			break;
		}
	}
	add_filter('manage_posts_custom_column', 'bingewith_manage_posts_custom_column');
}

if (!function_exists("bingewith_bulk_actions")) {
	function bingewith_bulk_actions($bulk_actions) {
		$bulk_actions['add_to_bingewith'] = __('Add BingeWith Audio', 'add_to_bingewith');
		$bulk_actions['remove_from_bingewith'] = __('Remove BingeWith Audio', 'remove_from_bingewith');
		return $bulk_actions;
	}
	add_filter('bulk_actions-edit-post', 'bingewith_bulk_actions');
}

if (!function_exists("bingewith_bulk_action_handler")) {
	function bingewith_bulk_action_handler($redirect_to, $doaction, $post_ids) {
		if ($doaction !== 'add_to_bingewith' && $doaction !== 'remove_from_bingewith') {
			return $redirect_to;
		}
		foreach ($post_ids as $post_id) {
			update_post_meta($post_id, 'bingewith', $doaction === 'add_to_bingewith' ? "true" : "false");
		}
		return $redirect_to;
	}
	add_filter('handle_bulk_actions-edit-post', 'bingewith_bulk_action_handler', 10, 3);
}

// Registers the [bingewith] shortcode. By default, it specifies a height and width.
if (!function_exists("bingewith_shortcode")) {
  function bingewith_shortcode($atts) {
    global $bingewith_sc_posts;
    if (isset($bingewith_sc_posts[get_post()->ID])) {
      $bingewith_sc_posts[get_post()->ID]++;
    } else {
      $bingewith_sc_posts[get_post()->ID] = 0;
    }
		$atts = shortcode_atts(
			array(
				'height' => '70',
				'width' => '100%',
			),
			$atts,
			'bingewith'
		);
		$permalink = get_permalink();
    $iframe_id = "binge-sc-iframe-" . get_post()->ID . "-" . $bingewith_sc_posts[get_post()->ID];
    $onload_handler = 'if (typeof BingeIframeRan === "undefined") { document.getElementById("' . $iframe_id . '").style.opacity = 1 } ';
    $msg = 
      '<script type="text/javascript">
          if (typeof BingeIframeRan === "undefined") {
            window.addEventListener("message", receiveMessage, false);
            function receiveMessage(event) {
              try {
                var parsed = JSON.parse(event.data)
                if (parsed.context === "iframe.resize") {
                  var iframes = document.getElementsByClassName("binge-iframe");
                  for (let i = 0; i < iframes.length; ++i) {
                    if (iframes[i].src == parsed.src || iframes[i].contentWindow === event.source) {
                      iframes[i].height = parsed.height; } 
                    iframes[i].style.opacity = 1;
                 }
                }
              } catch (error) {
              }
            }
            var BingeIframeRan = true;
          }
          </script>';
    return $msg . "<iframe id='$iframe_id' class='binge-iframe' data-wp='1.10-shortcode' height='" . $atts['height'] . "' width='" . $atts['width'] . "' frameBorder='0' onload='$onload_handler' style='margin-top: 10px!important; margin-bottom: 10px!important; opacity: 0;' src='https://bingewith.com/article/::_wp&permalink=$permalink' scrolling='no'></iframe>";
	}
	add_shortcode('bingewith', 'bingewith_shortcode');
}

?>
