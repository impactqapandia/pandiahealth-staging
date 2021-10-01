<section class="birth_control_benefits redesign">
        <div class='container redesign desktop mt-4'>
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-8">
					<h2 class="title"><?php echo $section['benefits_of_birth_control_title']; ?></h2>
				</div>
				<div class="col-2 text-center">
					  <img class="pandia-icon" src='<?php echo $section["icon_pandia"]['url'] ?>' alt="Pandiahealth logo">   
				</div>
				 <div class="col-2 text-center">
					  <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>' alt="Inperson consultation logo">
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
                         <img src='<?php echo $section["icon_one"]['url'] ?>' alt="Check Mark">
                    </div>
					<div class="col-2 img-container">
                         <img src='<?php echo $section["icon_two"]['url'] ?>' alt="Cross Mark">
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
					<img class="pandia-icon" src='<?php echo $section["icon_pandia_mobile"]['url'] ?>' alt="Pandiahealth logo">
					<p class="benefits-title"><?php echo $section['pandia_title']; ?></p>   
				</div>
				 <div class="col-3 text-center"  style="padding:0">
					 <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>' alt="Inperson consultation logo">
					 <p class="benefits-title"><?php echo $section['in_person_title']; ?></p> 
				</div>
        	</div>
            <?php foreach ($section['benefits_of_birth_control'] as $benefits) { ?>
                <div class='row benefit' style="padding:16px 0;">
                    <div class='col-6' style="padding:0;">
						<p class="benefits"><?php echo $benefits['text']; ?></p>        
                    </div>
                    <div class="col-3 img-container">
                         <img src='<?php echo $section["icon_one"]['url'] ?>' alt="Check Mark">
                    </div>
					<div class="col-3 img-container">
                         <img src='<?php echo $section["icon_two"]['url'] ?>' alt="Cross Mark">
                    </div>
                </div>
            <?php } ?>
        </div>
</section>
<section class="featur-doctor2" style="background-image:url(https://www.pandiahealth.com/wp-content/uploads/2021/03/Group-1057-1024x506-1.png)">
        <div class="container-fluid">
          <div class="row">
               <div class="col-xs-12 col-sm-12">
               <div class="hide-on-desktop">
                    <img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Dr.Yen-mobile.png" alt="" alt="Doctor Yen">
                </div>
				<div class="hide-on-mobile-new">
                    <img src="https://pandiahealth.marketinghosting.agency/wp-content/uploads/2021/07/yen-4.png" alt="" alt="Doctor Yen">
                </div>
               </div>
               <div class="offset-md-5 col-md-7 col-xs-12 col-sm-12">
                    <div class="doctor-content">
                     <h3 class="tagline">the only</h3>
                     <h2 class="title">doctor founded, doctor led.</h2>
                     <p>Meet our CEO &amp; Co-founder, Sophia Yen MD, MPH MIT, UCSF, UCB <span style="display:block;">Stanford Clinical Associate Professor</span></p>
                     <a href="https://pandiahealth.com/about/#sectionour_doctors" class="button button-blue redesign">Read More</a>
                    </div>
               </div>
          </div>
        </div>
</section>



