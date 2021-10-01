<?php get_header(); ?>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if(have_posts()){
                        while(have_posts()){ the_post(); ?>

                            <?php the_content(); ?>

                    <?php } } ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>