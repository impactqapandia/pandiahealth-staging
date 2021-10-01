<?php get_header(); ?>

<style>
 .styled_banner h1 .top-title {left:50px;}
 .styled_banner h1 .bottom-title{left:50px;}
 .styled_banner h1 .middle-title{line-height:90px;}
 .page-id-6331 .styled_banner{height:500px;}
 
 .new-button{margin-left: 0; min-width:auto;border-radius:10px;}

.new-button:before {
    content: "\f0da";
    padding-right: 10px;
}
.new-button:after, .new-button:before {
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    font-weight: 900;
}
.new-button:after {
    content: "\f0d9";
    padding-left: 10px;
} 
.tagline+h1+.button {min-width:auto;}

#banner_cta .banner-cta>.banner-cta-point h3, #banner_cta .banner-cta>.banner-cta-point p {
    text-transform: none;
    color:#474747;
}

@media only screen and (max-width: 600px) {
    .styled_banner h1 .bottom-title{top:-10px !important;}
    .styled_banner h1 .middle-title{line-height: 1em !important;}
}

@media only screen and (max-width: 768px) {
 .page-id-6331 .styled_banner .table-cell{padding-top: 20px !important;}
 .styled_banner h1 .top-title {left:-50px !important;line-height: 0.7; padding-top: 30px ;font-size:60px !important;}
 .styled_banner h1 .bottom-title{left:-20px;font-size:60px !important;padding-top:0 !important;top:0;}
 .styled_banner h1 .middle-title{line-height:0.90em; font-size:92px !important;}
 .page-id-6331 .styled_banner{height:500px;}
 .table-cell div{margin-top:0 !important;}
 

}
@media only screen and (min-width: 1600px) {
        .styled_banner h1 .top-title {left:30px !important;top: 10px;}    
        .styled_banner h1 .bottom-title {left:30px !important; line-height: 0.80em;top:0;}
        .styled_banner>img{min-width:800px;}
}

@media only screen and  (min-width: 1920px) and (max-width: 2560px)  {
    .styled_banner h1 .middle-title { line-height: 0.5em !important;}
    .styled_banner h1 .bottom-title{line-height: 0.5em;}
}
</style>

<section class="styled_banner">
    <div class="styled-banner-caption">
        <div class="table-element">
            <div class="table-cell">
                <p class="tagline"><?php the_field('tagline'); ?></p>
                <h1>
                    <span class="top-title"><?php the_field('top_title'); ?></span>
                    <span class="middle-title"><?php the_field('middle_title'); ?></span>
                    <span class="bottom-title"><?php echo the_field('bottom_title'); ?></span>
                </h1>
                
                <!-- <a href="<?php the_field('link_url'); ?>" class="custom-button"><div class="left-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div><?php the_field('link_text'); ?><div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div></a> -->
                <div style="margin-top:40px;">
                <a href="<?php the_field('link_url'); ?>" class="new-button button">Get Started</a>

                <?php if(get_field('disclaimer')){ ?>
                    <p class="text-white"><?php the_field('disclaimer'); ?></p>
                <?php } ?>
                </div>
            </div>
        </div>

    </div>
    <img src="<?php the_field('image'); ?>" class="styled-banner-image">
</section>
<?php if(get_field('hide_banner_cta') == 'no'){ ?>
<section id="banner_cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner-cta">
                    <div class="banner-cta-point">
                    <a href="https://pandiahealth.com//subscription-birth-control-tiers-pricing/">
                            <img src="https://pandiahealth.marketinghosting.agency/wp-content/uploads/2021/04/tablet-icon.png" alt="Pills">
                    </a>
                        <h3><?php the_field('banner_cta_point_1'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                    <a href="https://pandiahealth.marketinghosting.agency/whats-in-a-pandia-health-box/">
                            <img src="https://pandiahealth.marketinghosting.agency/wp-content/uploads/2021/04/van-icon.png" alt="Delivery Service">
                        </a>
                        <h3><?php the_field('banner_cta_point_2'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                    <a href="https://bc.pandiahealth.com/telemedonlylp/">
                            <img src="https://pandiahealth.marketinghosting.agency/wp-content/uploads/2021/04/steth.png" alt="Stethocope">
                        </a>
                        <h3><?php the_field('banner_cta_point_3'); ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php } ?>

<div class="container py-5 <?php the_field('brands_text_size'); ?>">
    <div class="row">
        <div class="col">
            <h2>Our Birth Control Brands</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <?php the_field('our_birth_control_brands'); ?>
        </div>
    </div>
</div>
<div class="bg-blue" id="brand_table">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="options-grid">
                    <div class="options-row">
                        <?php foreach(get_field('brand_table_columns') AS $column){ ?>
                            <div class="options-cell">
                                <div class="options-cell-content">
                                    <div class="table-element">
                                        <div class="table-cell">
                                            <h4><?php echo $column['title']; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <?php foreach(get_field('brand_table_rows') AS $row){ ?>
                        <div class="options-row">
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <a href="<?php echo get_the_permalink($row['column_1']); ?>"><?php echo get_the_title($row['column_1']); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <p><?php echo $row['column_2']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="options-cell">
                            <div class="options-cell-content">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <p><?php echo $row['column_3']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
