<?php get_header(); ?>

<?php
$page = get_query_var('paged') ? get_query_var('paged') : 1;
$post_type = get_query_var('post_type');
$search = $_GET['search'] ? $_GET['search'] : null;

$posts = new WP_Query([
        'post_type'=>'resource',
        'post_status'=>'publish',
        'posts_per_page'=>10,
        'paged'=>$page,
        's'=>$search,

]); 

// echo "<pre>"; print_r($posts); die();
?>

<section id="resources">
    <div class="container">
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
                    <?php }}  else {?>
                    <?php echo "<p style='text-align:center;margin:auto;padding:20px;font-size:30px'>Post not found</p>";  } ?> 
                </div>
                <?php $GLOBALS['wp_query']->max_num_pages = $posts->max_num_pages; ?>
                <div class="mt-4 text-center">
                    <?php the_posts_pagination([
                        'mid_size'=>5,
                        'prev_text'=>'Prev',
                        'next_text'=>'Next'
                    ]); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div id="blog_sidebar">
                    <div class="sidebar-section">
                        <h3 class="sidebar-title">Search Resources</h3>
                        <form action="<?php echo site_url(); ?>/resources" id="sidebar_search" method="get" role="search">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Type search here" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" class="form-control">
                                <div class="input-group-append">
                                    <button><img src="<?php echo site_url(); ?>/wp-content/themes/pandiahealth/img/search.png"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="sidebar-section">
                        <h3 class="sidebar-title">Categories</h3>
                        <ul>
                            <?php foreach(get_categories(['taxonomy'=>'resource_categories']) AS $category){ 
                                       $category_link = get_category_link($cat->cat_ID);
                                ?>
                                <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?> (<?php echo $category->category_count; ?>)</a></li>
                            <?php } ?>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
