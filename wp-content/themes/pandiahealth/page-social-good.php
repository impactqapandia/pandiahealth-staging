<?php get_header(); ?>

<section id="social_good">
    <div class="container">
        <div class="col text-center">
            <h3 class="subtitle"><?php the_field('sg_text_title'); ?></h3>
            <p><?php the_field('sg_text'); ?></p>
            <div class="problems">
                <?php foreach(get_field('problems') AS $problem){ ?>
                    <div class="problem">
                        <img src="<?php echo $problem['image']; ?>">
                    </div>
                <?php } ?>
            </div>
            <h3 class="subtitle"><?php the_field('impact_title'); ?></h3>
            <img src="<?php the_field('impact_image'); ?>">
            <h3 class="subtitle"><?php the_field('donate_title'); ?></h3>
            <p><?php the_field('donate_top_text'); ?></p>
            <div class="donations">
                <?php foreach(get_field('donation_levels') AS $donation){ ?>
                    <div class="donation">
                        <img src="<?php echo $donation['image']; ?>">
                    </div>
                <?php } ?>
            </div>
            <p><?php the_field('donate_bottom_text'); ?></p>
            <div class="text-center">
                <a href="<?php the_field('donate_button_link'); ?>" target="_blank" class="button"><?php the_field('donate_button_text'); ?></a>
                <a href="<?php the_field('financial_aid_button_link'); ?>" class="button ml-4"><?php the_field('financial_aid_button_text'); ?></a>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
