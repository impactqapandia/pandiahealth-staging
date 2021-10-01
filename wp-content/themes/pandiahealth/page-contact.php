<?php get_header(); ?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title text-center"><?php the_field('contact_title'); ?></h2>
                <?php the_field('contact_text'); ?>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="323" title="Contact Page"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>