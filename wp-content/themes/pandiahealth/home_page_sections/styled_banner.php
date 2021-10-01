<section class="styled_banner">
    <div class="styled-banner-caption">
        <div class="table-element">
            <div class="table-cell">
                <p class="tagline"><?php echo $section['tagline']; ?></p>
                <h1>
                    <span class="top-title"><?php echo $section['top_title']; ?></span>
                    <span class="middle-title"><?php echo $section['middle_title']; ?></span>
                    <span class="bottom-title"><?php echo $section['bottom_title']; ?></span>
                </h1>
                <a href="https://app.pandiahealth.com/users/sign_up" class="button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-arrow"><span>Get Started</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-arrow">
                </a>
                <?php if ($section['disclaimer']) { ?>
                    <p class="text-white"><?php echo $section['disclaimer']; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div id='styled_banner-get-started-bar'>
        <a href="<?php echo $section['link_url']; ?>" class='get-started-link button'>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-arrow"><span><?php echo $section['link_text']; ?></span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-arrow">
        </a>
    </div>
    <div class='styled-banner-img'>
        <img src="<?php echo $section['image']; ?>" class="styled-banner-image <?php if($section['mobile_image']){ ?> sbi-desktop <?php } ?>">
        <?php if($section['mobile_image']){ ?>
            <img src="<?php echo $section['mobile_image']; ?>" class="styled-banner-image sbi-mobile">
        <?php } ?>
    </div>
</section>