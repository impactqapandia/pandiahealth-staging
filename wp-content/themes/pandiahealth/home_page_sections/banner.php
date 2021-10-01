<section id="banner">
    <div class="container" style="background-image: url(<?php echo $section['banner_image']; ?>);">
        <div class="row">
            <div class="col">
                <div class="banner-caption">
                    <div class="banner-top">
                        <h1><?php echo $section['banner_title']; ?></h1>
                    </div>
                    <div class="banner-bottom">
                        <div class="banner-bottom-text">
                            <p><?php echo $section['banner_text']; ?></p>
                        </div>
                        <a href="<?php echo $section['banner_link_url']; ?>" class="button"><?php echo $section['banner_link_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>