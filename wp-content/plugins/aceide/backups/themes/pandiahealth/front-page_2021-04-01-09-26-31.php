<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f87319eeafe2" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-01-09-26-31.php" ) ) ) ) {
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

<!-- chat and get started bar -->
<section id='bottom-get-started-bar-with-chat'>
    <a href="<?php echo the_field('hiw_link_url'); ?>" class='get-started-link button'>
        <span><?php echo the_field('hiw_link_text'); ?></span>
    </a>

   <!-- <button onclick="LC_API.open_chat_window();" class='chat-icon'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/LiveChatIcon.png" alt="chat" />
    </button>-->
</section>

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

<section class="birth_control_benefits redesign">
        <div class='container redesign desktop mt-4'>
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-8">
					<h2 class="title"><?php echo $section['benefits_of_birth_control_title']; ?></h2>
				</div>
				<div class="col-2 text-center">
					  <img class="pandia-icon" src='<?php echo $section["icon_pandia"]['url'] ?>' alt="Pandia Health">   
				</div>
				 <div class="col-2 text-center">
					  <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>' alt="Patients">
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
                         <img src='<?php echo $section["icon_two"]['url'] ?>' alt="Cross">
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
					<img class="pandia-icon" src='<?php echo $section["icon_pandia_mobile"]['url'] ?>' alt="Pandia Health">
					<p class="benefits-title"><?php echo $section['pandia_title']; ?></p>   
				</div>
				 <div class="col-3 text-center"  style="padding:0">
					 <img class="in-person" src='<?php echo $section["icon_in_person"]['url'] ?>' alt="Users icon">
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
                         <img src='<?php echo $section["icon_two"]['url'] ?>' alt="Cross">
                    </div>
                </div>
            <?php } ?>
        </div>
</section>




<?php get_footer(); ?>