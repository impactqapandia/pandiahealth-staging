<?php get_header(); ?>
<style>
   @media only screen and (max-width: 768px){
    h2.title{font-size:24px !important;}
    .subtitle{font-size: 24px !important;}
    .hiw-path-steps {display:inline-block !important;margin-top: 10px; }
    .hiw-path .hiw-path-steps .hiw-path-step img {width:70px;}
    .hiw-path .hiw-path-steps .hiw-path-step p {padding-top:10px; padding-bottom: 10px; margin:auto;width: 200px;font-size: 16px;}

    .hiw-path-step::after{content: ''; height: 50px; margin-top: 10px; border-left: 2px solid #2D99CE;} 
    .hiw-path-step:last-child:after{content: ''; border-left: none !important;}
 
    .hiw-path .hiw-path-title{margin-bottom: 0;}
    }
    
</style>

<section id="how_it_works" class="hiw-page" style="background-image: url(<?php the_field('hiw_background_image'); ?>">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php the_field('hiw_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <div class="hiw-paths">
                    <?php foreach(get_field('hiw_paths') AS $path){ ?>
                        <div class="hiw-path">
                            <div class="hiw-path-title">
                                <h3><?php echo $path['title']; ?></h3>
                            </div>
                            <div class="hiw-path-steps">
                                <?php foreach($path['steps'] AS $step){ ?>
                                    <div class="hiw-path-step">
                                        <img src="<?php echo $step['icon']; ?>" alt="<?php echo $step['text']; ?>">
                                        <p><?php echo $step['text']; ?></p>
                                     </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center pt-3 pb-3">
                <a href="<?php the_field('hiw_link_url'); ?>" class="button"><div class="left-icon button-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                    <?php the_field('hiw_link_text'); ?>
                    <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                </a>
            </div>
        </div>
    </div>
</section>


<?php
$options = [];

foreach(get_field('options') AS $option) {
    $options[] = $option;
}
?>


<?php foreach(get_field('sections') AS $section){ ?>
<section id="testimonials" class="redesigned_testimonials">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    <?php echo $section['testimonials_title']; ?>
                </h2>
            </div>
        </div>

        <div class="row testimonial-desktop">
            <div class='autoplay'>
                <?php
                foreach ($section['testimonials'] as $testimonial) { ?>
                    <div class="slick-container">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class='testimonials-big-quotes'>
                            <img src='<?php echo $section["top_icon"]["url"] ?>' alt="Quotes Icon">
                        </div>
                        <div class="row testimonial-text">
                            <div class='col'>
                                <p>
                                    <?php echo $testimonial['text']; ?>
                                </p>
                            </div>
                        </div>
                        <div class='row signatures'>
                            <div>
                                <img src='<?php echo $testimonial['social_media_image']['url'] ?>' alt='yelp'>
                            </div>
                            <div>
                                <p>
                                    - <?php echo $testimonial['name']; ?>
                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row testimonial-mobile">
            <!--<div class='bg-gradient'>
            </div>-->
            <div class="col">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                    <div class='testimonials-big-quotes'>
                        <img src='<?php echo $section["top_icon_mobile"]["url"] ?>'>
                    </div>
                    <div class="carousel-inner">
                        <?php $count = 0;
                        foreach ($section['testimonials'] as $testimonial) { ?>
                            <div class="carousel-item <?php if ($count === 0) { ?>active<?php } ?>">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class='col'>
                                            <p>
                                                <?php echo $testimonial['text']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class='row signatures'>
                                        <div>
                                            <img src='<?php echo $testimonial['social_media_image']['url'] ?>' alt='yelp'>
                                        </div>
                                        <div>
                                            <p>
                                                - <?php echo $testimonial['name']; ?>
                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $count++;
                        } ?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                        <img src="<?php echo $section['arrow_icon']['url'] ?>">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                        <img src="<?php echo $section['arrow_icon']['url'] ?>">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }  ?>


<section id="whats_right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h2 class="title white pb-2">What's Right For Me?</h2>
                <p class="white pt-2">See the options below and choose the one that best meets your needs.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="options-grid">
                    <div class="options-row">
                        <div class="options-cell"></div>
                        <?php for($i = 0; $i < count($options); $i++){ ?>
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo $options[$i]['icon']; ?>" alt="<?php echo $options[$i]['title']; ?>">
                                        <h4><?php echo $options[$i]['title']; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="options-row">
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cost.png">
                                        <h4>What's the cost?</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php for($i = 0; $i < count($options); $i++){ ?>
                            <div class="options-cell">
                                <div class="options-cell-content">
                                    <div class="table-element">
                                        <div class="table-cell">
                                            <span><?php echo $options[$i]['title']; ?></span>
                                            <p><?php echo $options[$i]['cost']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="options-row">
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/delivery.png">
                                        <h4>Delivery Cost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php for($i = 0; $i < count($options); $i++){ ?>
                            <div class="options-cell">
                                <div class="options-cell-content">
                                    <div class="table-element">
                                        <div class="table-cell">
                                            <span><?php echo $options[$i]['title']; ?></span>
                                            <p><?php echo $options[$i]['who_for']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="options-row">
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/form.png">
                                        <h4>What do I need to start?</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php for($i = 0; $i < count($options); $i++){ ?>
                            <div class="options-cell">
                                <div class="options-cell-content">
                                    <div class="table-element">
                                        <div class="table-cell">
                                            <span><?php echo $options[$i]['title']; ?></span>
                                            <p><?php echo $options[$i]['start']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="options-row">
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pill.png">
                                        <h4>What do you get?</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php for($i = 0; $i < count($options); $i++){ ?>
                            <div class="options-cell">
                                <div class="options-cell-content">
                                    <div class="table-element">
                                        <div class="table-cell">
                                            <span><?php echo $options[$i]['title']; ?></span>
                                            <p><?php echo $options[$i]['what_get']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php the_field('options_button_link'); ?>" class="button"><div class="left-icon button-icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                    <?php the_field('options_button_text'); ?>
                    <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
