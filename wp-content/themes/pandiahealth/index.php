<?php get_header(); ?>
<section id="page_banner" class="page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="banner-content">
                    <?php if(get_field('banner_icon',get_option('page_for_posts'))){ ?>
                        <div class="banner-icon">
                            <div class="outer-icon yellow">
                                <img src="<?php the_field('banner_icon',get_option('page_for_posts')); ?>">
                            </div>
                        </div>
                    <?php } ?>
                    <div class="banner-text">
                        <div class="banner-top">
                            <h1><?php echo get_field('banner_title',get_option('page_for_posts')) ? the_field('banner_title',get_option('page_for_posts')) : 'Blog'; ?></h1>
                        </div>
                        <?php if(get_field('banner_text',get_option('page_for_posts'))){ ?>
                            <div class="banner-bottom">
                                <p><?php the_field('banner_text',get_option('page_for_posts')); ?></p>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog_posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts">
                    <?php if(have_posts()){ while(have_posts()){ the_post(); ?>
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
                    <?php }} ?>
                </div>
                <div class="mt-4 text-center">
                    <?php the_posts_pagination([
                        'mid_size'=>5,
                        'prev_text'=>'Prev',
                        'next_text'=>'Next'
                    ]); ?>
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

<?php get_footer(); ?>
