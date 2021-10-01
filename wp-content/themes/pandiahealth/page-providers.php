<?php get_header(); ?>

<section id="provider_content">
    <div class="container">
        <?php foreach(get_field('provider_content') AS $content){ ?>
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $content['image']; ?>" alt="<?php echo $content['title']; ?>">
            </div>
            <div class="col-md-6">
                <h2 class="title"><?php echo $content['title']; ?></h2>
                <div class="provider-content-text">
                    <?php echo $content['text']; ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section id="rest_assured" style="background-image: url(<?php the_field('rest_assured_bg_image'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <h2 class="title white"><?php the_field('rest_assured_title'); ?></h2>
                <ul>
                    <?php foreach(get_field('rest_assured_points') AS $point){ ?>
                    <li><?php echo $point['text']; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="get_started_button">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a href="<?php the_field('rest_assured_button_url'); ?>" class="button"><div class="left-icon button-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                    <?php the_field('rest_assured_button_text'); ?>
                    <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>