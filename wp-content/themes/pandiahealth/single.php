<?php get_header(); ?>
<section id="page_banner" class="article">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="banner-content">
                    <div class="banner-text">
                        <div class="banner-top">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(have_posts()){ while(have_posts()){ the_post(); ?>
<section id="post">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="post-content mt-4">
                        <?php the_content(); ?>
                    </div>
                <div class="mt-4 text-center">
                    <a href="https://app.pandiahealth.com/birth/control/signup" class="button"><div class="left-icon button-icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-icon"></div>
                        Get Started
                        <div class="right-icon button-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="default-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-icon"></div>
                    </a>
                </div>

                <div class="post-pagination">
                    <div class="post-pagination-link">
                        <?php next_post_link('<span>&laquo;</span> %link'); ?>
                    </div>
                    <div class="post-pagination-link text-center">
                        <a href="<?php echo get_permalink(get_option('page_for_posts'));?>">Back to Blog</a>
                    </div>
                    <div class="post-pagination-link text-right">
                        <?php previous_post_link('%link <span>&raquo;</span>'); ?>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
                    <div id="blog_sidebar">
                        <div class="sidebar-section">
                            <h3 class="sidebar-title">Search Blog</h3>
                            <form action="<?php echo get_permalink(get_option('page_for_posts')); ?>" id="sidebar_search" method="get" role="search">
                                <div class="input-group">
                                    <input type="text" name="s" placeholder="Type search here" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" class="form-control">
                                    <div class="input-group-append">
                                        <button><img src="<?php echo site_url(); ?>/wp-content/themes/pandiahealth/img/search.png"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-section">
                            <h3 class="sidebar-title">Popular Posts</h3>
                            <?php dynamic_sidebar( 'blog_sidebar' ); ?>
                        </div>
                        <div class="sidebar-section">
                            <h3 class="sidebar-title">Archives</h3>
                            <ul>
                                <?php wp_get_archives([
                                    'type'            => 'monthly',
                                    'limit'           => '',
                                    'format'          => 'html',
                                    'before'          => '',
                                    'after'           => '',
                                    'show_post_count' => true,
                                    'echo'            => 1,
                                    'order'           => 'DESC',
                                    'post_type'     => 'post'
                                ]); ?>
                            </ul>
                        </div>
                        <div class="sidebar-section">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul>
                                <?php foreach(get_categories() AS $category){ ?>
                                    <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?> (<?php echo $category->category_count; ?>)</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php } }?>


<?php get_footer(); ?>
