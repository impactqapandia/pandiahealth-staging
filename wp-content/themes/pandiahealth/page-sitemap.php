<?php get_header(); ?>
<section id="sitemap">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[wp_sitemap_page only="page"]'); ?>
                <?php echo do_shortcode('[wp_sitemap_page only="post"]'); ?>
                <?php echo do_shortcode('[wp_sitemap_page only="resource"]'); ?>
                <?php echo do_shortcode('[wp_sitemap_page only="faq"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
