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
                        <a href="https://app.pandiahealth.com/birth/control/signup" class="button">⇨ Get Started ⇦</a>
                    </div>

                    <div class="post-pagination">
                        <div class="post-pagination-link">
                            <?php next_post_link('<span>&laquo;</span> %link'); ?>
                        </div>
                        <div class="post-pagination-link text-center">
                            <a href="<?php echo site_url(); ?>/resources">Back to Resources</a>
                        </div>
                        <div class="post-pagination-link text-right">
                            <?php previous_post_link('%link <span>&raquo;</span>'); ?>
                        </div>
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
                                <?php foreach(get_categories(['taxonomy'=>'resource_categories']) AS $category){ ?>
                                    <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?> (<?php echo $category->category_count; ?>)</a></li>
                                <?php } ?>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } }?>


<?php get_footer(); ?>
