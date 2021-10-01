jQuery(document).ready(function ($) {

    function options_row_sizing_load() {
        /*$('.options-cell-content').css({'height':'auto'});
        $('.options-row').each(function(){
            var cell_height = 0;
            var row = $(this);
            row.find('img').on('load',function(){
                row.find('.options-cell-content').each(function(){
                    var cell = $(this);
                    if(cell.outerHeight() > cell_height){
                        cell_height = cell.outerHeight();

                    }
                });
                row.find('.options-cell-content').css({'height':cell_height+'px'});
            });

        });

        $('.options-cell').css({'height':'auto'});
        $('.options-row').each(function(){
            var cell_height = 0;
            var row = $(this);
            row.find('img').on('load',function(){
                row.find('.options-cell').each(function(){
                    var cell = $(this);
                    if(cell.outerHeight() > cell_height){
                        cell_height = cell.outerHeight();

                    }
                });
                row.find('.options-cell').css({'height':(cell_height + 15)+'px'});
            });

        });*/

    }

    function options_row_sizing() {
        /*$('.options-cell-content').css({'height':'auto'});
        $('.options-row').each(function(){
            var cell_height = 0;
            var row = $(this);
            row.find('.options-cell-content').each(function(){
                var cell = $(this);
                if(cell.outerHeight() > cell_height){
                    cell_height = cell.outerHeight();

                }
            });
            row.find('.options-cell-content').css({'height':cell_height+'px'});
        });

        $('.options-cell').css({'height':'auto'});
        $('.options-row').each(function() {
            var cell_height = 0;
            var row = $(this);
            row.find('.options-cell').each(function () {
                var cell = $(this);
                if (cell.outerHeight() > cell_height) {
                    cell_height = cell.outerHeight();

                }
                row.find('.options-cell').css({'height': (cell_height + 15) + 'px'});
            });
        });*/
    }

    function resize_carousel() {
        var slide_height = 0;
        $('#testimonialsCarousel .carousel-item').css({
            'height': 'auto'
        });
        $('#testimonialsCarousel .carousel-item').each(function () {
            if ($(this).outerHeight() > slide_height) {
                slide_height = $(this).outerHeight();
            }
        });

        $('#testimonialsCarousel .carousel-item').css({
            'height': slide_height + 'px'
        });
    }

    resize_carousel();
    options_row_sizing_load();
    options_row_sizing();

    $('.global-search').click(function (e) {
        e.preventDefault();
        $('#global_search').toggleClass('open');
        $(this).toggleClass('open');
    });

    function resize_press_posts() {
        var press_height = 0;
        var press_image_height = 0;

        $('.press-post-image').css({
            'height': 'auto'
        });
        $('.press-post-description').css({
            'height': 'auto'
        });

        $('.press-post-image').each(function () {
            if ($(this).outerHeight() > press_image_height) {
                press_image_height = $(this).outerHeight();
            }
        });

        $('.press-post-image').css({
            'height': press_image_height + 'px'
        });


        $('.press-post-description').each(function () {
            if ($(this).outerHeight() > press_height) {
                press_height = $(this).outerHeight();
            }
        });

        $('.press-post-description').css({
            'height': press_height + 'px'
        });
    }

    resize_press_posts();

    function adjust_plans() {
        $('.plan-perks,.plan-top').css({
            'height': 'auto'
        });
        var top_height = 0;
        var bot_height = 0;
        $('.plan-top').each(function () {
            if ($(this).outerHeight() > top_height) {
                top_height = $(this).outerHeight();
            }
        });
        $('.plan-perks').each(function () {
            if ($(this).outerHeight() > bot_height) {
                bot_height = $(this).outerHeight();
            }
        });
        $('.plan-perks').css({
            'height': bot_height + 'px'
        });
        $('.plan-top').css({
            'height': top_height + 'px'
        });
    }

    adjust_plans();


    $('#faq_search_form').submit(function () {
        var form = $(this);

        $.ajax({
            url: ajax_custom.ajaxurl,
            type: 'POST',
            data: form.serialize(),
            success: function (data) {
                $('.search-results').html(data).show();
            }
        });
        return false;
    });

    $('#faq_search_form input[name=q]').keyup(function () {
        if ($(this).val().length >= 3) {
            var form = $('#faq_search_form');

            $.ajax({
                url: ajax_custom.ajaxurl,
                type: 'POST',
                data: form.serialize(),
                success: function (data) {
                    $('.search-results').html(data).show();
                }
            });
        } else {
            $('.search-results').html('');
        }
    });

    $('.collapse').on('show.bs.collapse', function (event) {
        event.stopPropagation();
        if ($(this).hasClass('faq-section')) {
            $('.collapse.show').collapse('hide');
            $(this).prev('h3').find('i.fa-plus').removeClass('fa-plus').addClass('fa-minus');
        }

        if ($(this).hasClass('faq-question')) {
            $('.faq-question.collapse.show:not(.faq-section)').collapse('hide');
        }
    });

    $('.faq-section').on('hide.bs.collapse', function () {
        $(this).prev('h3').find('i.fa-minus').removeClass('fa-minus').addClass('fa-plus');
    });

    $(document).on('click', '.search-result', function (e) {
        e.preventDefault();
        var header_height = $('header').outerHeight() + 50;
        var id = $(this).attr('data-faq-id');
        var answer = $('.collapse' + id);
        answer.closest('.faq-section').collapse('show');
        answer.collapse('show');
        $('.search-results').hide();
        $('html,body').animate({
            scrollTop: answer.offset().top - header_height
        }, 1000);

    });


    $('.mobile-menu').click(function (e) {
        e.preventDefault();
        $('#mobile_menu').addClass('open');
    });

    $('.close-mobile-menu').click(function (e) {
        e.preventDefault();
        $('#mobile_menu').removeClass('open');
    });


    function adjust_resource_post() {
        var height = 0;
        $('#search_results .resource-info').css({
            'height': 'auto'
        });
        $('#search_results .resource-info').each(function () {
            if ($(this).outerHeight() > height) {
                height = $(this).outerHeight();
            }
        });

        $('#search_results .resource-info').css({
            'height': (height + 55) + 'px'
        });
    }

    function adjust_blog_post() {
        var height = 0;
        $('#search_results .blog-post-info').css({
            'height': 'auto'
        });
        $('#search_results .blog-post-info').each(function () {
            if ($(this).outerHeight() > height) {
                height = $(this).outerHeight();
            }
        });

        $('#search_results .blog-post-info').css({
            'height': (height + 55) + 'px'
        });
    }

    function adjust_text_image_height() {
        $('.lp_text_image_section .row.clearfix').each(function () {
            var image_height = $(this).find('.text-image-image').outerHeight();
            if ($(this).outerHeight() < image_height) {
                $(this).css({
                    'height': image_height + 'px'
                });
            }
        });
    }

    adjust_resource_post();
    adjust_blog_post();
    adjust_text_image_height();

    $(window).resize(function () {
        adjust_resource_post();
        adjust_blog_post();
        adjust_text_image_height();
        options_row_sizing();
        resize_carousel();
        resize_press_posts();
        adjust_plans();
    });
});