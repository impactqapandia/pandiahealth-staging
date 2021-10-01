<section class="lp_banner <?php echo $section['banner_background_image_size']; ?>"
         style="
         <?php if($section['banner_background_image']){ ?>
                 background-image: url(<?php echo $section['banner_background_image']; ?>);
         <?php } ?>
         background-position-x: <?php
            if($section['banner_background_image_position_x'] == 'left'){ echo '15%';
            }else if($section['banner_background_image_position_x'] == 'right'){ echo '80%';
            }else{ echo $section['banner_background_image_position_x']; }?>;
        background-position-y: <?php echo $section['banner_background_image_position_y']; ?>;
         <?php if($section['banner_parallax'] == 'yes'){ ?>
         background-attachment: fixed;
         <?php } ?>
        background-color: <?php echo $section['banner_background_color']; ?>;
         <?php if($section['banner_section_padding_top']){ ?>
         padding-top: <?php echo $section['banner_section_padding_top']; ?>;
         <?php } ?>
         <?php if($section['banner_section_padding_bottom']){ ?>
         padding-bottom: <?php echo $section['banner_section_padding_bottom']; ?>;
         <?php } ?>">
    <div class="container">
        <div class="row">
            <?php if($section['banner_content_size'] == 'half'){ ?>
            <div class="<?php
                if($section['banner_content_position'] == 'left'){ ?>
                 col-md-6
                <?php }elseif($section['banner_content_position'] == 'center'){ ?>
                 col-md-6 offset-md-3
                <?php }else{ ?>
                col-md-6 offset-md-6
                <?php } ?>">
            <?php }else{ ?>
            <div class="col-md-12">
            <?php } ?>
                <div class="text-section-content">
                    <?php echo $section['banner_content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>