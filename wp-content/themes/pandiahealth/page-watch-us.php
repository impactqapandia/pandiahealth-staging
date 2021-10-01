<?php get_header(); ?>

<section id="watch_us">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="watch-us-text">
                    <?php the_field('watch_us_text'); ?>
                </div>
                <div class="videos">
                    <?php foreach(get_field('videos') AS $video){ ?>
                    <div class="video">
                        <div class="video-content">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?php echo $video['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
