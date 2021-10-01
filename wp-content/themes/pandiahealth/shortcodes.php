<?php

function styled_button_shortcode($atts){
    $a = shortcode_atts([
        'link'=>'https://app.pandiahealth.com/?discount_code=Holidays2020',
        'text'=>'Get Started',
        'text_color'=>'#7D277C',
        'background_color'=>'#FECC33',
        'border_color'=>'transparent',
        'new_tab'=>false
    ],$atts);

    $target = $a['new_tab'] ? 'target="_blank"' : '';

    $code = '<a href="'.$a['link'].'" class="button" '.$target.' style="color: '.$a['text_color'].';border-color: '.$a['border_color'].';background-color: '.$a['background_color'].';"><span class="left-icon button-icon"><img src="'.get_stylesheet_directory_uri().'/img/arrow-right.png" class="default-icon"><img src="'.get_stylesheet_directory_uri().'/img/arrow-right-hover.png" class="hover-icon"></span>'.$a['text'].'<span class="right-icon button-icon"><img src="'.get_stylesheet_directory_uri().'/img/arrow-left.png" class="default-icon"><img src="'.get_stylesheet_directory_uri().'/img/arrow-left-hover.png" class="hover-icon"></span></a>';

    return $code;
}

function external_video_shortcode($atts){
    $a = shortcode_atts($atts);

    return '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="'.$a['url'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';

}

function add_separator_shortcode($atts){
    return '<div style="margin-top:15px;"></div>';
}

?>