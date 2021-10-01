<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f8265f1937e4" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/new_home_page_sections/birth_control_methods.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/new_home_page_sections/birth_control_methods_2021-04-01-14-26-48.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><section id="birth_control" class="redesigned_testimonials">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    <?php echo $section['birth_control_methods_title']; ?>
                </h2>
				<h3 class="subtitle">
                    <?php echo $section['birth_control_methods_subtitle']; ?>
                </h3>
            </div>
        </div>
        <div class="row birth-control-methods-desktop">
            <div class='autoplay_birth_control_methods'>
                <?php
                foreach ($section['birth_control_methods'] as $birth_control_method) { ?>
                    <div class="slick-container">
                        <div class='birth-control-method-image'>
                            <img src='<?php echo $birth_control_method['image'] ?>' alt="Birth Control Methods">
                        </div>
						<div class="row birth-control-method-title">
                            <div class='col'>
                                <p>
									<?php echo $birth_control_method['method']; ?>
								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class='col'>
                                <p>
                                    <?php echo $birth_control_method['text']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row birth-control-methods-mobile">
			 <div class='autoplay_birth_control_methods_mobile'>
                <?php
                foreach ($section['birth_control_methods'] as $birth_control_method) { ?>
                    <div class="slick-container">
                        <div class='birth-control-method-image'>
                            <img src='<?php echo $birth_control_method['image'] ?>' alt="Birth Control Methods">
                        </div>
						<div class="row birth-control-method-title">
                            <div class='col'>
                                <p>
									<?php echo $birth_control_method['method']; ?>
								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class='col'>
                                <p>
                                    <?php echo $birth_control_method['text']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>