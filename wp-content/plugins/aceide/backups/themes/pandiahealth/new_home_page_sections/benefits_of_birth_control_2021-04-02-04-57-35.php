<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f8dd26edca5c" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/new_home_page_sections/benefits_of_birth_control.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/new_home_page_sections/benefits_of_birth_control_2021-04-02-04-57-35.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><section class="birth_control_benefits redesign">
        <div class='container redesign desktop mt-4'>
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-8">
					<h2 class="title"><?php echo $section['benefits_of_birth_control_title']; ?></h2>
				</div>
				<div class="col-2 text-center">
					  <img class="pandia-icon" src='<?php echo $section["icon_pandia"]['url'] ?>'>   
				</div>
				 <div class="col-2 text-center">
					  <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>'>
				</div>
        	</div>
			<div class="row benefits-titles">
				<div class="col-8">
				</div>
				<div class="col-2 text-center">
					
					<p class="benefits-title"><?php echo $section['pandia_title']; ?></p>   
				</div>
				 <div class="col-2 text-center">
					
					 <p class="benefits-title"><?php echo $section['in_person_title']; ?></p> 
				</div>
        	</div>
            <?php foreach ($section['benefits_of_birth_control'] as $benefits) { ?>
                <div class='row mb-4 benefit'>
                    <div class='col-8'>
						<p class="benefits"><?php echo $benefits['text']; ?></p>        
                    </div>
                    <div class="col-2 img-container">
                         <img src='<?php echo $section["icon_one"]['url'] ?>'>
                    </div>
					<div class="col-2 img-container">
                         <img src='<?php echo $section["icon_two"]['url'] ?>'>
                    </div>
                </div>
            <?php } ?>
        </div>
	<div class='container redesign mobile'>
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-12 text-center">
					<h2 class="title "><?php echo $section['benefits_of_birth_control_title_mobile']; ?></h2>
				</div>
        	</div>
			<div class="row benefits-titles">
				<div class="col-6">
				</div>
				<div class="col-3 text-center">
					<img class="pandia-icon" src='<?php echo $section["icon_pandia_mobile"]['url'] ?>'>
					<p class="benefits-title"><?php echo $section['pandia_title']; ?></p>   
				</div>
				 <div class="col-3 text-center"  style="padding:0">
					 <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>'>
					 <p class="benefits-title"><?php echo $section['in_person_title']; ?></p> 
				</div>
        	</div>
            <?php foreach ($section['benefits_of_birth_control'] as $benefits) { ?>
                <div class='row benefit' style="padding:16px 0;">
                    <div class='col-6' style="padding:0;">
						<p class="benefits"><?php echo $benefits['text']; ?></p>        
                    </div>
                    <div class="col-3 img-container">
                         <img src='<?php echo $section["icon_one"]['url'] ?>'>
                    </div>
					<div class="col-3 img-container">
                         <img src='<?php echo $section["icon_two"]['url'] ?>'>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>
<section class="featur-doctor2" style="background-image:url(https://www.pandiahealth.com/wp-content/uploads/2021/03/Group-1057-1024x506-1.png)">
        <div class="container-fluid">
          <div class="row">
               <div class="col-xs-12 col-md-5">
               <div class="hide-on-desktop">
                    <img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Dr.Yen-mobile.png" alt="">
                </div>
               </div>
               <div class="col-md-7 col-xs-12 col-sm-12">
                    <div class="doctor-content">
                     <h3 class="tagline">the only</h3>
                     <h2 class="title">doctor founded, doctor led.</h2>
                     <p>Meet our CEO &amp; Co-founder, Sophia Yen MD, MPH MIT, UCSF, UCB Stanford Clinical Associate Professor</p>
                     <a href="https://pandiahealth.com/about/#sectionour_doctors" class="button button-blue redesign">Read More</a>
                    </div>
               </div>
          </div>
        </div>
</section>

