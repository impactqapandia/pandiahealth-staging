<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f8265f1937e4" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/new_home_page_sections/featured_doctor.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/new_home_page_sections/featured_doctor_2021-04-01-13-49-02.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><!-- <section class="featured_doctor redesign" style="background:url(<?php echo $section['featured_background_image']; ?>)no-repeat">
    <div class="container redesign">
        <div class="featured-doctor-image">
            <a href="<?php echo $section['link_url']; ?>">
                <img src="<?php echo $section['doctor_image']; ?>" alt="Dr Yen">
            </a>
        </div>
        <div class='featured-doctor-text'>
			<h3 class="tagline"><?php echo $section['tagline']; ?></h3>
            <h2 class="title"><?php echo $section['title']; ?></h2>
            <p><?php echo $section['subtitle']; ?></p>
            <a href="<?php echo $section['link_url']; ?>" class="button button-blue redesign"><?php echo $section['link_text']; ?></a>
        </div>
    </div>
</section> -->
<section class="hp-section redesign" id="how_it_works">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center">
                <h2 class="title hiw-title"><a href="<?php echo $section['hiw_link_url'];?>"><?php echo $section['hiw_title']; ?></a></h2>
                <?php if ($section['subtitle']) { ?>
                    <p class="sub-title"><?php echo $section['subtitle']; ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="hiw-paths">
                    <?php foreach ($section['hiw_paths'] as $path) { ?>
                        <div class="hiw-path">
                            <div class="hiw-path-title">
                                <h3><?php echo $path['title']; ?></h3>
                                <h4><?php echo $path['subtitle']; ?></h4>

                            </div>
                            <div class="hiw-path-steps-desktop">
                                <?php foreach ($path['steps'] as $step) { ?>
                                    <div class="hiw-path-step">
                                        <a href="<?php echo $section['hiw_link_url'];?>">
                                            <div class='hiw-path-step-info'>
                                                <div class='hiw-path-step-img'>
                                                    <img src="<?php echo $step['icon']; ?>" alt="<?php echo $step['title']; ?>" alt="Workflow">
                                                </div>
                                                <h3>
                                                    <?php echo $step['title']; ?>
                                                </h3>
                                                <p>
                                                    <?php echo $step['text']; ?>
                                                </p>
                                            </div>
                                        </a>
                                        <div class='hl'> </div>
                                    </div>

                                <?php } ?>
                            </div>
                            <div class="hiw-path-steps">
                                <?php foreach ($path['steps'] as $step) { ?>
                                    <div class="hiw-path-step">
                                        <a href="<?php echo $section['hiw_link_url'];?>">
                                            <div class='hiw-path-step-img'>
                                                <img src="<?php echo $step['icon']; ?>" alt="<?php echo $step['title']; ?>" alt="Workflow">
                                            </div>
                                            <div>
                                                <h3>
                                                    <?php echo $step['title']; ?>
                                                </h3>
                                                <p>
                                                    <?php echo $step['text']; ?>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php if ($section['text']) { ?>
                    <p class="section-text"><?php echo $section['text']; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>