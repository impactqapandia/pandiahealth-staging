<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
<div class="home-page-template">
<?php if(get_field('show_banner') == 'yes'){ ?>
<section id="hpt_banner">
    <div class="container" style="background-image: url(<?php the_field('banner_image'); ?>);">
        <div class="row">
            <div class="col">
                <div class="banner-caption">
                    <div class="banner-top">
                        <h1><?php the_field('banner_title'); ?></h1>
                    </div>
                    <div class="banner-bottom">
                        <div class="banner-bottom-text">
                            <?php the_field('banner_text'); ?>
                        </div>
                        <a href="<?php the_field('banner_link_url'); ?>" class="button"><?php the_field('banner_link_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_banner_cta') == 'yes'){ ?>
<section id="hpt_banner_cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner-cta">
                    <div class="banner-cta-point">
                        <h3><?php the_field('banner_cta_point_1'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                        <h3><?php the_field('banner_cta_point_2'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                        <h3><?php the_field('banner_cta_point_3'); ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_how_it_works') == 'yes'){ ?>
<section id="hpt_how_it_works" style="background-image: url(<?php the_field('hiw_background_image'); ?>);">
    <div class="container-fluid">
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
                                        <hr>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php the_field('hiw_link_url'); ?>" class="button"><?php the_field('hiw_link_text'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_plans') == 'yes'){ ?>
<section id="hpt_plans">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title">Select a Subscription:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-start align-content-start flex-wrap flex-md-nowrap">
                    <?php foreach(get_field('plans') AS $plan){ ?>
                    <div class="plan p-3 flex-grow-1">
                        <div class="plan-top">
                            <p class="plan-title"><?php echo $plan['plan_name']; ?></p>
                            <p class="plan-price"><?php echo $plan['plan_price']; ?></p>
                            <?php if($plan['plan_price_note_link']){ ?><a href="<?php echo $plan['plan_price_note_link']; ?>" class="plan-note"><?php }else{ ?><p class="plan-note"><?php } ?><?php echo $plan['plan_price_note']; ?><?php if($plan['plan_price_note_link']){ ?></a><?php }else{ ?></p><?php } ?>
                        </div>
                        <div class="plan-bottom">
                            <div class="plan-perks">
                                <?php foreach($plan['plan_perks'] AS $perk){ ?>
                                    <p class="perk"><?php echo $perk['perk']; ?></p>
                                <?php } ?>
                            </div>
                            <a href="<?php echo $plan['plan_link']; ?>" class="button"><?php echo $plan['plan_button_text']; ?></a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <?php the_field('plans_disclaimer'); ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_testimonials') == 'yes'){ ?>
<section id="hpt_testimonials" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/quotes.png);">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php the_field('testimonials_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $count = 0; foreach(get_field('testimonials') AS $testimonial){ ?>
                            <div class="carousel-item <?php if($count === 0){ ?>active<?php } ?>">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <p><?php echo $testimonial['text']; ?></p>
                                        <p>-<?php echo $testimonial['name']; ?></p>
                                    </div>
                                </div>

                            </div>
                            <?php $count++; } ?>
                    </div>
                    <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left.png">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right.png">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<?php } ?>
<?php if(get_field('show_why_pandia_health') == 'yes'){ ?>
<section id=hpt_"why_ph">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="title white"><?php the_field('why_ph_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="why-points">
                    <?php foreach(get_field('why_ph_points') AS $point){ ?>
                        <div class="why-point">
                            <div class="why-point-content">
                                <a href="<?php echo $point['link']; ?>"><img src="<?php echo $point['icon']; ?>" alt="<?php echo $point['title']; ?>"></a>
                                <h3><?php echo $point['title']; ?></h3>
                                <p><?php echo $point['text']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_insurance') == 'yes'){ ?>
<section id="hpt_insurance">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="subtitle"><?php the_field('insurance_title'); ?></h3>
                <p><?php the_field('insurance_text'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="insurances">
                    <?php foreach(get_field('insurance') AS $insurance){ ?>
                        <div class="insurance">
                            <img src="<?php echo $insurance['logo']; ?>">
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php the_field('insurance_link_url'); ?>" class="button"><?php the_field('insurance_link_text'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php } ?>
<?php if(get_field('show_links') == 'yes'){ ?>
<section id="hpt_home_links">
    <div class="container-fluid">
        <div class="row">
            <?php foreach(get_field('links') AS $link){ ?>
                <div class="col-md-4">
                    <div class="home-link">
                        <a href="<?php echo $link['button_url']; ?>" class="home-link-image">
                            <img src="<?php echo $link['image']; ?>" alt="<?php echo $link['button_text']; ?>">
                            <div class="home-link-button">
                                <span class="button"><?php echo $link['button_text']; ?></span>
                            </div>
                        </a>
                        <div class="home-link-text">
                            <p><?php echo $link['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<?php if(get_field('show_brands') == 'yes'){ ?>
<section id="hpt_brands">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="subtitle"><?php the_field('brands_title'); ?></h3>
                <p><?php the_field('brands_text'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="brands">
                    <?php foreach(get_field('brands') AS $brand){ ?>
                        <div class="brand">
                            <img src="<?php echo $brand['logo']; ?>">
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="<?php the_field('brands_link_url'); ?>" class="button"><?php the_field('brands_link_text'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>
</div>
<?php get_footer(); ?>
