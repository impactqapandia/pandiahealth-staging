<section class="lp_text_image_section" style="<?php if($section['text_image_background_color']){ ?>background-color: <?php echo $section['text_image_background_color']; ?>;<?php } ?> <?php if($section['text_image_remove_section_padding_top'] == 'yes'){ ?>padding-top: 0;<?php } ?> <?php if($section['text_image_remove_section_padding_bottom'] == 'yes'){ ?>padding-bottom: 0;<?php } ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php if($section['text_image_title']){ ?>
                <div class="row">
                    <div class="text-section-content col text-<?php echo $section['text_image_title_alignment']; ?>">
                        <h1 style="color: <?php echo $section['text_image_title_color']; ?>"><?php echo $section['text_image_title']; ?></h1>
                    </div>
                </div>
                <?php } ?>
                <div class="row clearfix">
                    <?php if($section['text_image_content_size'] == 'quarter'){ ?>
                        <div class="col-md-9 content-<?php echo $section['text_image_content_position']; ?>">
                    <?php }else if($section['text_image_image_size'] == 'third'){ ?>
                        <div class="col-md-8 content-<?php echo $section['text_image_content_position']; ?>">
                    <?php }else{ ?>
                        <div class="col-md-6 content-<?php echo $section['text_image_content_position']; ?>">
                    <?php } ?>
                            <div class="text-section-content">
                                <?php echo $section['text_image_content']; ?>
                            </div>
                        </div>
                    <?php if($section['text_image_image_size'] == 'quarter'){ ?>
                    <div class="col-md-3 image-<?php echo $section['text_image_image_position_x']; ?>">
                    <?php }else if($section['text_image_image_size'] == 'third'){ ?>
                    <div class="col-md-4 image-<?php echo $section['text_image_image_position_x']; ?>">
                    <?php }else{ ?>
                    <div class="col-md-6 image-<?php echo $section['text_image_image_position_x']; ?>">
                    <?php } ?>
                        <img src="<?php echo $section['text_image_image']; ?>" class="text-image-image" style="<?php if($section['text_image_image_position_y'] == 'top'){ ?>top: 0;<?php }else{ ?>bottom: 0;<?php } ?>
                        ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>