<?php /* Template Name: Drug Page Template */ ?>
<?php get_header(); ?>
<section id="banner_cta">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="banner-cta">
                    <div class="banner-cta-point">
                        <h3 class="text-white"><?php the_field('cta_point_1'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                        <h3 class="text-white"><?php the_field('cta_point_2'); ?></h3>
                    </div>
                    <div class="banner-cta-point">
                        <h3 class="text-white"><?php the_field('cta_point_3'); ?></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 drug-info-panel order-1 order-md-0 mt-3 mt-md-0">
            <h4>Type</h4>
            <?php if(get_field('drug_type_link')){ ?><a href="<?php echo get_the_permalink(get_field('drug_type_link')); ?>"><?php }else{ ?><p><?php } ?><?php the_field('drug_type_text'); ?><?php if(get_field('drug_type_link')){ ?></a><?php }else{ ?></p><?php } ?>
            <h4>Uses</h4>
            <p><?php the_field('drug_uses'); ?></p>
            <h4>Active Ingredients</h4>
            <p><?php the_field('drug_active_ingredients'); ?></p>
            <h4>Risks</h4>
            <p><?php the_field('drug_risks'); ?></p>
            <h4>Equivalent Generic Brands</h4>
            <?php the_field('equivalent_brands'); ?>
            <h4>Name Brand</h4>
            <p><?php the_field('drug_name_brand'); ?> <?php if(get_field('drug_discontinued') == 'yes'){ ?><a href="/resources/birth-control-pills-off-market-discontinued/">(discontinued)</a> <?php } ?></p>
            <h4>Popular Birth Control Pill Brands</h4>
            <?php foreach(get_field('popular_brands') AS $brand){ ?>
            <p><a href="<?php echo $brand['link']; ?>"><?php echo $brand['text']; ?></a></p>
            <?php } ?>
            <h4>New Questions</h4>
            <div class="faq-category">
                <div class="faq-category-content">
                    <?php foreach(get_field('new_questions') AS $faq){ ?>
                        <a class="question collapsed" href="#faq_<?php echo $faq['faq']; ?>" data-toggle="collapse" role="button" aria-expanded="false"><?php echo get_the_title($faq['faq']); ?></a>
                        <div class="collapse faq-question" id="faq_<?php echo $faq['faq']; ?>">
                            <?php $content = get_post_field('post_content', $faq['faq']); ?>
                            <div class="answer"><?php echo $content; ?></div>
                        </div>
                    <?php } ?>
                    <a href="/faq" class="question collapsed">More FAQ</a>
                </div>
            </div>

            <?php
            $resources = new WP_Query([
                'post_type'=>'resource',
                'post_status'=>'publish',
                'posts_per_page'=>3,
                'orderby'=>'date',
                'order'=>'DESC'
            ]); ?>

            <h4>Resources</h4>
            <div class="faq-category">
                <div class="faq-category-content">
                    <?php if($resources->have_posts()){ ?>
                        <?php while($resources->have_posts()){ $resources->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="question collapsed"><?php the_title(); ?></a>
                        <?php }} ?>
                    <a href="/resources" class="question collapsed">More Resources</a>
                </div>
            </div>

        </div>

        <?php wp_reset_query(); ?>

        <div class="col-md-8 order-0 order-md-1">
            <div class="row">
                <div class="drug-description col-12">
                    <?php the_field('drug_description'); ?>
                </div>
                <div class="drug-faqs mt-5 col-12">
                    <h3>FAQ</h3>
                    <?php $count = 0; foreach(get_field('drug_faq') AS $faq){ ?>
                        <div class="drug-faq py-3">
                            <a href="#drug_faq_<?php echo $count; ?>" class="drug-faq-question" data-toggle="collapse"><?php echo $faq['question']; ?></a>
                            <div class="collapse drug-faq-answer mt-3" id="drug_faq_<?php echo $count; ?>">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                        <?php $count++; } ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
