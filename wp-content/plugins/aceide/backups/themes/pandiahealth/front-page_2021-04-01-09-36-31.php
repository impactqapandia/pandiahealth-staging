<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f87319eeafe2" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-01-09-36-31.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php /* Template Name: Main Front Template */ ?>
<?php get_header(); ?>


<!-- custom chat box script -->
<script>
    var LC_API = LC_API || {};
    LC_API.on_after_load = function() {
        document.getElementById('chat-widget-container').style.visibility = 'hidden';
    };
    var LC_API = LC_API || {};
    LC_API.on_chat_window_opened = function() {
        setTimeout(() => {
            document.getElementById('chat-widget-container').style.visibility = 'visible';
        }, 500);
    };
    var LC_API = LC_API || {};
    LC_API.on_chat_window_minimized = function() {
        document.getElementById('chat-widget-container').style.visibility = 'hidden';
    };
</script>

<!-- chat and get started bar appear on scroll -->
<script>
    window.onscroll = function() {
        chatAppear();
    }

    let chatAppear = () => {
        console.log(document.body.scrollTop);
        console.log(document.documentElement.scrollTop);
        let get_started_bar = document.getElementById('bottom-get-started-bar-with-chat');

        if (document.documentElement.scrollTop > 200 && screen.width <= 900) {
            get_started_bar.style.display = 'grid';
            console.log('appear added');
        } else {
            get_started_bar.style.display = 'none';
            console.log('appear removed');
        }
    }
</script>



<?php $section = get_field('slider'); ?>
<!-- chat and get started bar -->


<section id="banner">
    <div class="container" style="background-image: url(<?php echo $section['banner_image']; ?>);">
        <div class="row">
            <div class="col">
                <div class="banner-caption">
                    <div class="banner-top">
                        <h1><?php echo $section['middle_title']; ?></h1>
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

<section id="banner_cta" class="redesign">
    <div class="container redesign">
        <div class="row">
            <div class="col">
            <div class="banner-cta">
                    <div class="banner-cta-point">
                        <a href='<?php echo $section['banner_cta_point_1_link'] ?>'>
                            <img src='<?php echo $section['banner_cta_point_1_icon']['url'] ?>' alt="Pills" />
                        </a>
                        <h3>
                            <a href='<?php echo $section['banner_cta_point_1_link'] ?>'>
                                <?php echo $section['banner_cta_point_1']; ?>
                                <p>
                                    <?php echo $section['banner_cta_point_1_subtitle']; ?>
                                </p>
                            </a>
                        </h3>
                    </div>
                    <div class="banner-cta-point">
                        <a href='<?php echo $section['banner_cta_point_2_link'] ?>'>
                            <img src='<?php echo $section['banner_cta_point_2_icon']['url'] ?>' alt="Delivery Service" />
                        </a>
                        <h3>
                            <a href='<?php echo $section['banner_cta_point_2_link'] ?>'>
                                <?php echo $section['banner_cta_point_2']; ?>
                                <p>
                                    <?php echo $section['banner_cta_point_2_subtitle']; ?>
                                </p>
                            </a>
                        </h3>

                    </div>
                    <div class="banner-cta-point">
                        <a href='<?php echo $section['banner_cta_point_3_link'] ?>'>
                            <img src='<?php echo $section['banner_cta_point_3_icon']['url'] ?>' alt="Stethocope" />
                        </a>
                        <h3>
                            <a href='<?php echo $section['banner_cta_point_3_link'] ?>'>
                                <?php echo $section['banner_cta_point_3']; ?>
                                <p>
                                    <?php echo $section['banner_cta_point_3_subtitle']; ?>
                                </p>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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

<section class="experts redesign hide-on-mobile">
    <div>
        <!--<div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <a href='<?php echo $section["link_url"] ?>'>
            <div class="experts-list">
                <?php $section_images = $section['images'];
                foreach ($section['images'] as $images) { ?>
                    <img src='<?php print_r($images['image']['url']) ?>' style="max-width: calc((100% / <?php echo count($section['images']); ?>) - 5vw);" />
                <?php } ?>
            </div>
        </a>-->
        <div class='container redesign mt-4'>
                <div class='row mb-4 px-3 experts-row'>
				<div class="col-7">
				    <h2 class="title" style="text-align:left"><?php echo $section['title']; ?></h2>
					<?php foreach ($section['services'] as $services) { ?>
					<div class="row services">
						<div class='col-1 mt-3' id='expert-img-container'>
							<img src='<?php echo $section["icon"]['url'] ?>' alt="Check Mark">
                    	</div>
                    	<div class='col-11'>
							<p class="expert-title"><?php echo $services['title']; ?></p>
							<p class="expert-info"><?php echo $services['text']; ?></p>
                    	</div>
						
					</div>
				  <?php } ?>	
				</div>
				<div class='col-5'>
							 <?php $section_images = $section['images'];
					foreach ($section['images'] as $images) { ?>
						<img src='<?php print_r($images['image']['url']) ?>' class="expert-image" alt="Expert Image" />
					<?php } ?>
                </div>	
                </div>
        </div>
    </div>
</section>
<section class="experts experts-mobile redesign">
	     <div class="row">
            <div class="col text-center">
                <h2 class="title"><?php echo $section['title']; ?></h2>
            </div>
        </div>
        <div class="experts-list">
                <?php $section_images = $section['images'];
                foreach (array_slice($section['images'], 0, 3) as $images) { ?>
                    <img src='<?php print_r($images['image']['url']) ?>' style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" />
                <?php } ?>
        </div>
        <div class='container redesign mt-4'>
            <?php foreach ($section['services'] as $services) { ?>
                <div class='row mb-4 px-3'>
                    <div class='col-1 mt-3' id='expert-img-container'>
                        <img src='<?php echo $section["icon"]['url'] ?>' alt="Check Mark">
                    </div>
                    <div class='col-11 mobile-col-layout'>
                        <p class="expert-title"><?php echo $services['title']; ?></p>
                        <p class="expert-info"><?php echo $services['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>
<section id="why_ph" class="why-pandiahealth">
    <div class="container redesign">
        <div class="row titles">
            <div class="col text-center">
                <h2 class="title black"><?php echo $section['why_ph_title']; ?></h2>
				<h3 class="subtitle black"><?php echo $section['why_ph_subtitle']; ?></h3>
            </div>
        </div>
        <div class="row why-pandia-health" style="align-items:center;">
            <div class="col-5">
                <div class="why-image">
					<img src="<?php echo $section['why_ph_image']; ?>" alt="Testimonial Image">  
                </div>
            </div>
			<div class="col-7">
				<div class="row title-mobile">
					<div class="col text-center">
						<h2 class="title black"><?php echo $section['why_ph_title']; ?></h2>
						<h3 class="subtitle black"><?php echo $section['why_ph_subtitle']; ?></h3>
					</div>
        		</div>
                <div class="why-pandia-description">
		        	<p>
						<?php echo $section['why_ph_description']; ?>
					</p>  
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <a href='<?php echo $logo["logo_url"] ?>' target="_blank">
                                <img src="<?php echo $logo['logo']; ?>" alt="Brand Logos">
                            </a>
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




<?php get_footer(); ?>