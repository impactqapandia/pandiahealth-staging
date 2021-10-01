<?php get_header(); ?>

<section id="faq_search">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p class="text-center"><?php the_field('faq_text'); ?></p>
                <h2 class="title text-center"><?php the_field('faq_search_title'); ?></h2>
                <form action="" method="post" id="faq_search_form">
                    <input type="hidden" name="action" value="search_faq">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search by topic, keyword, or phrase..." required>
                            <div class="input-group-append">
                                <button><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.png"></button>
                            </div>
                        </div>
                        <div class="search-results">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="popular_topics">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">Popular Topics</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="faq-categories">
                    <?php foreach(get_field('popular_topics') AS $topic){ ?>
                        <?php $term = get_term($topic); ?>
                        <div class="faq-category">
                            <div class="faq-category-content">
                                <h3 class="subtitle"><?php echo $term->name; ?></h3>
                                <?php $posts = new WP_Query("post_type=faq&taxonomy=faq_categories&term=$term->slug&posts_per_page=5"); ?>
                                <?php if($posts->have_posts()){ while($posts->have_posts()){ $posts->the_post(); ?>

                                    <a class="question collapsed" href="#pt_faq_<?php echo $term->term_id; ?>_<?php the_ID(); ?>" data-toggle="collapse" role="button" aria-expanded="false"><?php the_title(); ?></a>
                                    <div class="collapse" id="pt_faq_<?php echo $term->term_id; ?>_<?php the_ID(); ?>">
                                        <div class="answer"><?php the_content(); ?></div>
                                    </div>

                                <?php }} ?>
                                <a href="" class="scroll-to-topic"></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="all_topics">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">All Topics</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="faq-categories">
                    <?php $terms = get_terms('faq_categories'); ?>
                        <?php $count = 0; foreach($terms AS $term){ ?>
                            <div class="faq-category">
                                <div class="faq-category-content">
                                    <h3 class="subtitle"><a href="#cat_<?php echo $count; ?>" data-toggle="collapse" role="button" aria-expanded="false"><span><?php echo $term->name; ?></span> <i class="far fa-plus"></i></a></h3>
                                    <div class="collapse faq-section" id="cat_<?php echo $count; ?>">
                                <?php $posts = new WP_Query([
                                    'post_type'=>'faq',
                                    'posts_per_page'=>'-1',
                                    'tax_query'=>[
                                        [
                                            'taxonomy'=>'faq_categories',
                                            'field'=>'slug',
                                            'terms'=>$term->slug
                                        ]
                                    ]
                                ]); ?>
                                <?php if($posts->have_posts()){ while($posts->have_posts()){ $posts->the_post(); ?>

                                    <a class="question collapsed" href="#faq_<?php the_ID(); ?>" data-toggle="collapse" role="button" aria-expanded="false"><?php the_title(); ?></a>
                                    <div class="collapse faq-question" id="faq_<?php the_ID(); ?>">
                                        <div class="answer"><?php the_content(); ?></div>
                                    </div>
                            <?php }} ?>
                                    </div>
                                </div>
                            </div>
                    <?php $count++; } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#popular_topics .faq-category').each(function(){
            var pop = $(this);
            var title = pop.find('.subtitle').text();
            $('#all_topics .faq-category').each(function(){
                var cat_title = $(this).find('.subtitle a').text();
                if($.trim(cat_title) == $.trim(title)){
                    pop.find('.scroll-to-topic').html('See All').attr('href','#'+$(this).find('.faq-section').attr('id'));
                    return false;
                }
            });
        });

        $(document).on('click','.scroll-to-topic',function(e){
            e.preventDefault();
            var section = $(this).attr('href');
            $('html,body').animate({'scrollTop':$(section).closest('.faq-category').offset().top - 100},1000);
            $('.faq-section.show').collapse('hide');
            $(section).collapse('show');
        });
    });
</script>
