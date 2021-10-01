<?php /* Template Name: New Home Page Template */ ?>
<?php get_header(); ?>


<?php foreach(get_field('sections') AS $section){ ?>
    <?php if($section['hide_section'] == 'no'){ ?>
        <?php include('home_page_sections/'.$section['acf_fc_layout'].'.php'); ?>
    <?php } ?>
<?php } ?>


<?php get_footer(); ?>