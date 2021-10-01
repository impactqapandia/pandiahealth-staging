<section class="logo_section">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center" id='logo_section_top_text'>
                <h2 class="title"><?php echo $section['title']; ?></h2>
                <p><?php echo $section['text']; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="logos">
                    <?php foreach ($section['logos'] as $logo) { ?>
                        <div class="logo">
                            <!-- <a href='<?php echo $logo["logo_url"] ?>' target="_blank"> -->
                                <img src="<?php echo $logo['logo']; ?>" alt="Brand Logos">
                            <!-- </a> -->
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if ($section['disclaimer_text']) { ?>
            <div class="row disclaimer_text">
                <div class="col text-center">
                    <p><?php echo $section['disclaimer_text']; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>