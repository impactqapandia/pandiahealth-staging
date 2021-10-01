<?php get_header(); ?>

<?php $posts = new WP_Query([
    'post_type'=>'resource',
    'post_status'=>'publish',
    'posts_per_page'=>10
]); ?>

<section id="resources">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3 class="subtitle">Category: <?php echo single_cat_title(); ?></h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-9">
                <div class="resources">
                    <?php if($posts->have_posts()){ while($posts->have_posts()){ $posts->the_post(); ?>
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
                    <?php }} ?>
                </div>
            </div>
            <div class="col-md-3">
                <div id="blog_sidebar">
                    <div class="sidebar-section">
                        <h3 class="sidebar-title">Search Resources</h3>
                        <form action="<?php echo site_url(); ?>/resources" id="sidebar_search" method="get" role="search">
                            <div class="input-group">
                                <input type="text" name="s" placeholder="Type search here" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" class="form-control">
                                <div class="input-group-append">
                                    <button><img src="<?php echo site_url(); ?>/wp-content/themes/pandiahealth/img/search.png"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-section">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul>
                            <?php foreach(get_categories(['taxonomy'=>'resource_categories']) AS $category){ ?>
                                <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?> (<?php echo $category->category_count; ?>)</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
