<section class="lp_text_section" style="<?php if($section['text_section_background_image']){ ?>background-image: url(<?php echo $section['text_section_background_image']; ?>); <?php } ?><?php if($section['text_section_parallax'] == 'yes'){ ?>background-attachment:fixed; <?php } ?>background-position-x: <?php
if($section['text_section_background_image_position_x'] == 'left'){ echo '15%';
}else if($section['text_section_background_image_position_x'] == 'right'){ echo '80%';
}else{ echo $section['text_section_background_image_position_x']; }?>;background-position-y: <?php echo $section['text_section_background_image_position_y']; ?>;background-size:<?php echo $section['text_section_background_image_size'] == '100%' ? 'cover' : $section['text_section_background_image_size']; ?>;<?php if($section['text_section_background_color']){ ?>background-color: <?php echo $section['text_section_background_color']; ?>;<?php } ?><?php if($section['text_section_remove_section_padding_top'] == 'yes'){ ?>padding-top: 0;<?php } ?> <?php if($section['text_section_remove_section_padding_bottom'] == 'yes'){ ?>padding-bottom: 0;<?php } ?>">
    <div class="container">
        <div class="row">
            <?php if($section['text_section_content_size'] == 'half'){ ?>
            <div class="<?php
            if($section['text_section_content_position'] == 'left'){ ?>
                 col-md-5 offset-md-1
                <?php }elseif($section['text_section_content_position'] == 'center'){ ?>
                 col-md-6 offset-md-3
                <?php }else{ ?>
                col-md-5 offset-md-6
                <?php } ?>">
                <?php }else{ ?>
                <div class="col-md-10 offset-md-1">
                    <?php } ?>
                <div class="text-section-content">
                    <?php echo $section['text_section_content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>