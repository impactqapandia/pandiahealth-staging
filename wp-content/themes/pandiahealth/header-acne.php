<!DOCTYPE html>
<html lang="en">

<head>

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


<script src="https://45174c34b6b3417cbda033be0cdfaff6.js.ubembed.com" async></script>

<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="Content-Type" content="text/html">
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/98bf3c4905.js" async></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Playfair+Display:700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">


<?php wp_head(); ?>

<meta name="facebook-domain-verification" content="o9trs3l5eulqqydi1rc6xrmnjcsr3q" />

<!-- <style>
    .header-content ul#menu-acne-menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.header-content ul#menu-acne-menu>li {
    display: inline-block;
    padding: 0 10px;
    vertical-align: middle;
}
.header-content ul#menu-acne-menu>li a {
    display: block;
    font-size: 16px;
    font-family: 'Josefin Sans';
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 600;
}
.header-content ul#menu-acne-menu li.menu-item-has-children {
    position: relative;
}
</style> -->
</head>

<body <?php echo body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3BF48" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
<div class="container-fluid restrictedWidth">
<div class="row">
<div class="col">
<div class="header-content">
<a href="<?php echo site_url(); ?>" class="logo">
<img src="<?php the_field('logo', 'option'); ?>" alt="Pandia Health" />
</a>

<div class="left-side">
    <div class="menu-nav-container">
        <ul id="menu-nav" class="menu">
            <li id="menu-item-3494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3494"><a href="https://pandiahealth.marketinghosting.agency/acne-how-it-works/">How It Works</a></li>
            <li id="menu-item-3495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3495"><a href="https://pandiahealth.marketinghosting.agency/faq/">FAQ</a></li>
            <li id="menu-item-3496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3496"><a href="https://pandiahealth.marketinghosting.agency/providers/">Providers</a></li>
            <li id="menu-item-3497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3497">
                <a href="https://pandiahealth.marketinghosting.agency/about/">About</a>
                <ul class="sub-menu">
                <li id="menu-item-14581" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14581"><a href="https://pandiahealth.marketinghosting.agency/dr-sophia-yen/">Dr. Sophia Yen</a></li>
                <li id="menu-item-3500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3500"><a href="/about#our_doctors">Our Doctors</a></li>
                    <li id="menu-item-3501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3501"><a href="/about#why_pandia_video">Why Pandia Health</a></li>
                    <li id="menu-item-3502" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3502"><a href="/about#our_team">Our Team</a></li>
                </ul>
            </li>
            <li id="menu-item-9719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9719">
                <a href="https://pandiahealth.marketinghosting.agency/blog/">Blog</a>
                <ul class="sub-menu">
                    <li id="menu-item-9721" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9721"><a href="https://pandiahealth.marketinghosting.agency/blog">Blog</a></li>
                    <li id="menu-item-9720" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9720"><a href="https://pandiahealth.marketinghosting.agency/resources/">Resources</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <?php //wp_nav_menu(['theme_location' => 'landing-pages']); ?>
</div>


<div class='right-side'>
<a href="#" class="global-search">
    <img src="https://www.pandiahealth.com/wp-content/uploads/2021/04/updated-search-icon.png" alt="search">
</a>
<div class='vr'></div>
<a href='https://app.pandiahealth.com/login' class='login-link'>
    Login
</a>
<a href="https://app.pandiahealth.com/" class="custom-button bg-white bg-white-btn col-acne">
Get Started  </a>
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
<div class="menu-nav-container">
        <ul id="menu-nav" class="menu">
            <li id="menu-item-3494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3494"><a href="https://pandiahealth.marketinghosting.agency/acne-how-it-works/">How It Works</a></li>
            <li id="menu-item-3495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3495"><a href="https://pandiahealth.marketinghosting.agency/faq/">FAQ</a></li>
            <li id="menu-item-3496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3496"><a href="https://pandiahealth.marketinghosting.agency/providers/">Providers</a></li>
            <li id="menu-item-3497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3497">
                <a href="https://pandiahealth.marketinghosting.agency/about/">About</a>
                <ul class="sub-menu">
                <li id="menu-item-14581" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14581"><a href="https://pandiahealth.marketinghosting.agency/dr-sophia-yen/">Dr. Sophia Yen</a></li>
                     <li id="menu-item-3500" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3500"><a href="/about#our_doctors">Our Doctors</a></li>
                    <li id="menu-item-3501" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3501"><a href="/about#why_pandia_video">Why Pandia Health</a></li>
                    <li id="menu-item-3502" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3502"><a href="/about#our_team">Our Team</a></li>
                </ul>
            </li>
            <li id="menu-item-9719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9719">
                <a href="https://pandiahealth.marketinghosting.agency/blog/">Blog</a>
                <ul class="sub-menu">
                    <li id="menu-item-9721" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9721"><a href="https://pandiahealth.marketinghosting.agency/blog">Blog</a></li>
                    <li id="menu-item-9720" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9720"><a href="https://pandiahealth.marketinghosting.agency/resources/">Resources</a></li>
                </ul>
            </li>
        </ul>
    </div>
<?php //wp_nav_menu(['theme_location' => 'nav-menu']); ?>
<div class="text-center mt-3">
<a href="https://app.pandiahealth.com/" class="button mx-auto">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" alt="Right Arrow" class="unhover-arrow"><span>Get Started</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" alt="Left Arrow" class="unhover-arrow">

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