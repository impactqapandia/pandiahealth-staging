<section id="online_consultation_benefits" class="desktop" style="background:url(<?php echo $section['online_consultation_background_image']; ?>) no-repeat">
<h2 style="display:none;" class="title tabletView  text-center"><?php echo $section['birth_control_title']; ?></h2>
    <div class="container redesign desktop" style="max-width:100%;">
		<h2 class="title desktopView"><?php echo $section['birth_control_title']; ?></h2>
					<?php foreach ($section['points'] as $points) { ?>
						<div class="row consultation-benefits">
							<!--<div class="col-2" style="padding:0;text-align:center;" >
								 <img class="icon-image" src="<?php echo $section["online_icon"]['url']; ?>">
							</div>-->
							<div class="col-12" style="display:flex;">
								<img class="icon-image" src="<?php echo get_template_directory_uri(); ?>/img/check-1.png" style="margin-right:15px" alt="Check Mark">
								<p class="benefits" style="margin-top:5px;"><?php echo $points['text']; ?></p>        
							</div>
						</div>
            		<?php } ?>
					<div class="row consultation-benefits">
						<div class="col-12" style="margin-top:20px;">
							 <a href="<?php echo $section['online_link_url'];?>" class="button redesign home-new hassleTab">
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow">
								<span><?php echo $section['online_link_text']; ?></span>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow" alt="left Arrow">
							</a>
						</div>   
                	</div>
	</div>
</section>
<section id="online_consultation_benefits" class="mobile" style="background:url(<?php echo $section['mobile_background_image']; ?>) no-repeat">
    <div class="container redesign mobile" style="background:url(<?php echo $section['mobile_background_image']; ?>) no-repeat">
            <h2 class="title"><?php echo $section['birth_control_title']; ?></h2>
			<?php foreach ($section['points'] as $points) { ?>
                <div class="row consultation-benefits">
					<div class="col-2">
                         <img class="icon-image" src="<?php echo $section["online_icon"]['url']; ?>" alt="Check Mark">
                    </div>
                    <div class="col-10">
						<p class="benefits"><?php echo $points['text']; ?></p>        
                    </div>
                </div>
            <?php } ?>
				<!--<div class="row consultation-benefits">
					<div class="col-12">
                         <a href="<?php echo $section['online_link_url'];?>" class="button">
							<img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow">
							<span><?php echo $section['online_link_text']; ?></span>
							<img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow">
						</a>
                    </div>
                    
                </div>-->
    </div>
</section>