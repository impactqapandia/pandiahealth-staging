<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f8f50716f8db" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/header_2021-04-05-07-31-51.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><!DOCTYPE html>
<html lang="en">

<head>

    <!-- Hotjar Tracking Code for https://www.pandiahealth.com/ -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1824193,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- custom chat box script -->
    <script>
        var LC_API = LC_API || {};
        LC_API.on_after_load = function() {
            document.getElementById('chat-widget-container').style.visibility = 'hidden';
        };
        var LC_API = LC_API || {};
        LC_API.on_chat_window_opened = function() {
            setTimeout(() => {
                document.getElementById('chat-widget-container').style.visibility = 'visible';
            }, 500);
        };
        var LC_API = LC_API || {};
        LC_API.on_chat_window_minimized = function() {
            document.getElementById('chat-widget-container').style.visibility = 'hidden';
        };
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W3BF48');
    </script>
    <!-- End Google Tag Manager -->
    <script src="https://45174c34b6b3417cbda033be0cdfaff6.js.ubembed.com" async></script>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/98bf3c4905.js" async></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Playfair+Display:700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
	
	<meta name="facebook-domain-verification" content="o9trs3l5eulqqydi1rc6xrmnjcsr3q" />
	
</head>

<body <?php echo body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3BF48" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-content">
                        <a href="<?php echo site_url(); ?>" class="logo">
                            <img src="<?php the_field('logo', 'option'); ?>" alt="Pandia Health" />
                        </a>
                        <div class="left-side">
                            <?php wp_nav_menu(['theme_location' => 'nav-menu']); ?>
                        </div>
                        <div class='right-side'>
                            <a href="#" class="global-search">
                                <img src="https://www.pandiahealth.com/wp-content/uploads/2021/04/updated-search-icon.png" alt="search">
                            </a>
                            <div class='vr'></div>
                            <a href='https://app.pandiahealth.com/login' class='login-link'>
                                Login
                            </a>
                            <a href="https://app.pandiahealth.com/users/sign_up" class="button home-new">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" alt="Right Arrow" class="unhover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" alt="Right Arrow" class="hover-arrow"><span>Get Started</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" alt="Left Arrow" class="hover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" alt="Left Arrow" class="unhover-arrow">

                            </a>
                            <!--<button onclick="LC_API.open_chat_window();" id='header-chat-icon'>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/LiveChatIcon.png" alt="chat" />
                            </button>-->
                            <a href="#" class="mobile-menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-menu.png" alt="menu-icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="global_search">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <form action="<?php echo site_url(); ?>/search-results" id="global_search_form" method="get">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by topic, keyword, or phrase..." required>
                            <div class="input-group-append">
                                <button><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.png" alt="search"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="mobile_menu">
        <a href="#" class="close-mobile-menu"><i class="fal fa-times"></i></a>
        <?php wp_nav_menu(['theme_location' => 'nav-menu']); ?>
        <div class="text-center mt-3">
            <a href="https://app.pandiahealth.com/users/sign_up" class="button mx-auto">
                Get Started
            </a>
        </div>

    </div>
    <div id="page_content">
        <?php if (!is_front_page() && !is_singular(['post', 'resource']) && !is_singular(['post', 'faq']) && !is_home() && !is_category() && !is_tax() && !is_archive() && get_page_template_slug() != 'landing-page.php' && get_page_template_slug() != 'home-page-template.php' && get_page_template_slug() != 'home-redesign-page-template.php' && get_page_template_slug() != 'elementor_header_footer' && get_page_template_slug() != 'new-homepage-template.php' && !is_page('brand-directory')) { ?>
            <?php global $wp;
            $this_page = get_page_by_path($wp->request); ?>
            <section id="page_banner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="banner-content">
                                <?php if (get_field('banner_icon', $this_page->ID)) { ?>
                                    <div class="banner-icon">
                                        <div class="outer-icon yellow">
                                            <img src="<?php the_field('banner_icon', $this_page->ID); ?>" alt="banner icon">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="banner-text">
                                    <div class="banner-top">
                                        <h1><?php echo get_field('banner_title', $this_page->ID) ? the_field('banner_title', $this_page->ID) : get_the_title($this_page->ID); ?></h1>
                                    </div>
                                    <?php if (get_field('banner_text', $this_page->ID)) { ?>
                                        <div class="banner-bottom">
                                            <p><?php the_field('banner_text', $this_page->ID); ?></p>
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <?php } ?>