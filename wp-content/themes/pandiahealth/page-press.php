<?php get_header(); ?>

<section id="press">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php the_field('press_text'); ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="press-posts">
                    <?php foreach(get_field('press') AS $press){ ?>
                    <div class="press-post">
                        <div class="press-post-content">
                            <div class="press-post-image">
                                <div class="table-element">
                                    <div class="table-cell">
                                        <img src="<?php echo $press['image']; ?>" alt="<?php echo $press['publication']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="press-post-description">
                                <p><?php echo $press['description']; ?></p>
                            </div>
                            <a href="<?php echo $press['link']; ?>" class="button" target="_blank">Learn More</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
