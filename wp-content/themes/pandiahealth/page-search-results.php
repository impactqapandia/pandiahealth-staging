<?php get_header(); ?>

<?php

$search = isset($_GET['search']) ? $_GET['search'] : null;

$page_posts = new WP_Query([
    'post_type'=>'page',
    'posts_per_page'=>'-1',
    'post_status'=>'publish',
    's'=>$search
]);

$blog_posts = new WP_Query([
    'post_type'=>'post',
    'posts_per_page'=>'6',
    'post_status'=>'publish',
    's'=>$search
]);

$resources = new WP_Query([
    'post_type'=>'resource',
    'posts_per_page'=>'6',
    'post_status'=>'publish',
    'category_name'=>'Acne',
    's'=>$search
]);

$faqs = new WP_Query([
    'post_type'=>'faq',
    'posts_per_page'=>'-1',
    's'=>$search
]);


?>

<section id="search_results_form">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="<?php echo site_url(); ?>/search-results" id="global_search_page_form" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by topic, keyword, or phrase..." value="<?php echo $search; ?>" required>
                        <div class="input-group-append">
                            <button><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/search.png"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="search_results">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php if($page_posts->have_posts()){ ?>
                <h3 class="results-title">Pages</h3>
                <div class="pages">
                    <?php while($page_posts->have_posts()){ $page_posts->the_post(); ?>
                        <div class="page-post">
                            <div class="page-post-content">
                                <div class="page-post-info">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if($blog_posts->have_posts()){ ?>
                    <hr>
                <h3 class="results-title">Blog Posts</h3>
                <div class="blog-posts">
                    <?php while($blog_posts->have_posts()){ $blog_posts->the_post(); ?>
                        <div class="blog-post">
                            <div class="blog-post-content">
                                <div class="blog-post-image">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                </div>
                                <div class="blog-post-info">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="blog-post-date"><?php the_date(); ?></p>
                                    <p class="blog-post-excerpt"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php if($blog_posts->found_posts > 6){ ?>
                        <div class="text-center mt-4">
                            <a href="<?php echo site_url(); ?>/blog?s=<?php echo $search; ?>" class="button">Search More Blog Posts</a>
                        </div>
                <?php } ?>
                <?php } ?>
                <?php if($resources->have_posts()){ ?>
                    <hr>
                <h3 class="results-title">Resources</h3>
                <div class="resources">
                    <?php while($resources->have_posts()){ $resources->the_post(); ?>
                        <div class="resource">
                            <div class="resource-content">
                                <div class="resource-image">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                                </div>
                                <div class="resource-info">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="resource-excerpt"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more button">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                    <?php if($resources->have_posts()){?>
                        <div class="text-center mt-4">
                            <a href="<?php echo site_url(); ?>/resources?search=<?php echo $search; ?>" class="button">Search More Resources</a>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php if($faqs->have_posts()){ ?>
                    <hr>
                    <h3 class="results-title">FAQs</h3>
                <div class="faqs">
                    <?php while($faqs->have_posts()){ $faqs->the_post(); ?>
                    <div class="faq">
                        <a class="question collapsed" href="#faq_<?php the_ID(); ?>" data-toggle="collapse" role="button" aria-expanded="false"><?php the_title(); ?></a>
                        <div class="collapse faq-question" id="faq_<?php the_ID(); ?>">
                            <div class="answer"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                    <div class="text-center mt-4">
                        <a href="<?php echo site_url(); ?>/faq" class="button">See All FAQs</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
