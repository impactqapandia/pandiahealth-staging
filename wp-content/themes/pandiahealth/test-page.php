<?php /*
 Template Name: Test Page
 */?>
<?php get_header(); ?>

<?php foreach(get_field('landing_page_sections') AS $section){ ?>
    <?php include('landing_page_sections/'.$section['acf_fc_layout'].'.php'); ?>
<?php } ?>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){
        function fix_spacing(){
            $('p').each(function(){
                if(($(this).html() == '' ||$(this).html() == '&nbsp;') && $(window).width() <= 767){
                    $(this).hide();
                }else{
                    $(this).show();
                }
            });
        }

        fix_spacing();

        $(window).resize(function(){
            fix_spacing();
        });
    });
</script>
