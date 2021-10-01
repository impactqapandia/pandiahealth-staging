<style>
@media only screen and (max-width: 600px) {
	.styled_banner .home-redesign h1 .bottom-title{margin-bottom:0;}
	.styled_banner.home-renew .styled-banner-image{bottom:35px;}
	.styled-banner-image{min-width: 400px;}
}

@media only screen and (max-width: 1023px) {
	.styled_banner h1 .middle-title{line-height: 0.55em;}
}

@media only screen and (min-width: 1600px) {
.styled_banner .home-redesign h1 .top-title, .styled_banner .home-redesign h1 .bottom-title { top: 15px !important; }
}

@media only screen and (min-width:1920px) and (max-width:2550px){
	.styled_banner h1 .middle-title { font-size: 185px; padding: 20px 0px 30px 0px; }
}

</style>
<section class="styled_banner home-renew">
    <div class="styled-banner-caption home-redesign">
        <div class="table-element">
            <div class="table-cell">
                <p class="tagline"><?php echo $section['tagline']; ?></p>
                <h1>
                    <span class="top-title"><?php echo $section['top_title']; ?></span>
                    <span class="middle-title"><?php echo $section['middle_title']; ?></span>
                    <span class="bottom-title"><?php echo $section['bottom_title']; ?></span>
                </h1>
				<!--<div class="row bottom-tagline-button">
					<div class="col-7">
						<p class="bottom-tagline">Hassle-free and easy access to trusted birth control medications online</p>
					</div>
					<div class="col-5">
						<a href="https://app.pandiahealth.com/users/sign_up" class="button">
							<img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow">
							<span>Get Started</span>
							<img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow">
						</a>
					</div>
				</div>-->
				<ul>
					<li>
						<p class="bottom-tagline"><?php echo $section['tagline_2']; ?></p>
					</li>
					<li>
						<a href="https://app.pandiahealth.com/birth/control/" class="button home-new">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow">
							<span>Get Started</span> 
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow">
						</a>
					</li>

				</ul>
                <!--<a href="https://app.pandiahealth.com/birth/control/" class="button">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-arrow">
					<span>Get Started</span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-arrow">
                </a>-->
                <?php if ($section['disclaimer']) { ?>
                    <p class="text-white"><?php echo $section['disclaimer']; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--<div id='styled_banner-get-started-bar'>
		<ul>
			<li>
				<a href="<?php echo $section['link_url']; ?>" class='get-started-link button'>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right-hover.png" class="hover-arrow">
					<span><?php echo $section['link_text']; ?></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-hover.png" class="hover-arrow">
        		</a>
			</li>
			<li>
			   <p class="bottom-tagline">
				   <?php echo $section['tagline_2']; ?>
				</p>
			</li>
		</ul> 
    </div>-->
    <div class='styled-banner-img '>
        <img src="<?php echo $section['image']; ?>" class="styled-banner-image-new <?php if($section['mobile_image']){ ?> sbi-desktop <?php } ?>" alt="Banner Image">
        <?php if($section['mobile_image']){ ?>
            <img src="<?php echo $section['mobile_image']; ?>" class="styled-banner-image sbi-mobile" alt="Banner Image">
        <?php } ?>
    </div>
</section>