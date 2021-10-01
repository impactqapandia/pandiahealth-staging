<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f87319eeafe2" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-01-10-48-35.php" ) ) ) ) {
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
				<ul>
					<li>
						<p class="bottom-tagline"><?php echo $section['tagline_2']; ?></p>
					</li>
					<li>
						<a href="https://app.pandiahealth.com/users/sign_up" class="button">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-right.png" class="unhover-arrow">
							<span>Get Started</span>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left.png" class="unhover-arrow">
						</a>
					</li>

				</ul>
          
                    <p class="text-white"><?php echo $section['disclaimer']; ?></p>
         
            </div>
        </div>
    </div>
   
    <div class='styled-banner-img '>
        <img src="<?php echo $section['image']; ?>" class="styled-banner-image-new">
    

      
    </div>
</section>

<section id="banner_cta" class="redesign">
    <div class="container redesign">
        <div class="row">
            <div class="col">
            <div class="banner-cta">
                    <div class="banner-cta-point">
                        <a href="https://pandiahealth.ropstambpo.com//subscription-birth-control-tiers-pricing/">
                            <img src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/03/tablet-icon.png">
                        </a>
                        <h3>
                            <a href="https://pandiahealth.ropstambpo.com//subscription-birth-control-tiers-pricing/">
                                Free with insurance                                <p>
                                    or $15/pack without                                </p>
                            </a>
                        </h3>
                    </div>
                    <div class="banner-cta-point">
                        <a href="https://pandiahealth.com//whats-in-a-pandia-health-box/">
                            <img src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/03/van-icon.png">
                        </a>
                        <h3>
                            <a href="https://pandiahealth.com//whats-in-a-pandia-health-box/">
                                Free delivery<br> &amp; goodies                                <p>
                                                                    </p>
                            </a>
                        </h3>

                    </div>
                    <div class="banner-cta-point">
                        <a href="https://bc.pandiahealth.com/telemedonlylp/">
                            <img src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/03/steth.png">
                        </a>
                        <h3>
                            <a href="https://bc.pandiahealth.com/telemedonlylp/">
                                $20 Online doctor visit                                <p>
                                    (If needed)                                 </p>
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
                <h2 class="title hiw-title"><a href="https://pandiahealth.com/how-it-works/">How It Works</a></h2>
                            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="hiw-paths">
                                            <div class="hiw-path">
                            <div class="hiw-path-title">
                                <h3>NO PRESCRIPTION? NO WORRIES!</h3>
                                <h4>We will take care of it</h4>

                            </div>
                            <div class="hiw-path-steps-desktop">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Health Form" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png"><noscript><img  alt="Health Form" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" alt="Health Form" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Health Form                                                </h3>
                                                <p>
                                                    Fill out our online health form.  <b><i>($20 doctor fee applies)</i></b>                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Doctor Review" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png"><noscript><img  alt="Doctor Review" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" alt="Doctor Review" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Doctor Review                                                </h3>
                                                <p>
                                                    Our doctor will review your chart and write a prescription best fit for you.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png"><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We’ll also automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                            </div>
                            <div class="hiw-path-steps">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Health Form" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Health Form" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/RX-Icon.png" alt="Health Form" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Health Form                                                </h3>
                                                <p>
                                                    Fill out our online health form.  <b><i>($20 doctor fee applies)</i></b>                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Doctor Review" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Doctor Review" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Stethoscope_icon.png" alt="Doctor Review" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Doctor Review                                                </h3>
                                                <p>
                                                    Our doctor will review your chart and write a prescription best fit for you.                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We’ll also automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                                            <div class="hiw-path">
                            <div class="hiw-path-title">
                                <h3>HAVE AN ACTIVE PRESCRIPTION?</h3>
                                <h4></h4>

                            </div>
                            <div class="hiw-path-steps-desktop">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Fast &amp; Easy Transfer" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png"><noscript><img  alt="Fast & Easy Transfer" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" alt="Fast & Easy Transfer" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Fast &amp; Easy Transfer                                                </h3>
                                                <p>
                                                    Simply provide your current pharmacy or doctor’s info and we will handle the rest.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png"><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We’ll automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                            </div>
                            <div class="hiw-path-steps">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Fast &amp; Easy Transfer" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Fast & Easy Transfer" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" alt="Fast & Easy Transfer" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Fast &amp; Easy Transfer                                                </h3>
                                                <p>
                                                    Simply provide your current pharmacy or doctor’s info and we will handle the rest.                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We’ll automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                            </div>
        </div>
    </div>
</section>


<section class="birth_control_benefits redesign">
        <div class="container redesign desktop mt-4">
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-8">
					<h2 class="title">benefits of online birth control prescription</h2>
				</div>
				<div class="col-2 text-center">
					  <img alt="Pandia Health" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Logo_PH-2.png" class="pandia-icon lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Logo_PH-2.png"><noscript><img class="pandia-icon" src='https://www.pandiahealth.com/wp-content/uploads/2021/03/Logo_PH-2.png' alt="Pandia Health"></noscript>   
				</div>
				 <div class="col-2 text-center">
					  <img alt="Patients" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/in-person.png" class="in-person lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/in-person.png"><noscript><img class="in-person" src='https://www.pandiahealth.com/wp-content/uploads/2021/03/in-person.png' alt="Patients"></noscript>
				</div>
        	</div>
			<div class="row benefits-titles">
				<div class="col-8">
				</div>
				<div class="col-2 text-center">
					
					<p class="benefits-title">Online</p>   
				</div>
				 <div class="col-2 text-center">
					
					 <p class="benefits-title">In-Person</p> 
				</div>
        	</div>
                            <div class="row mb-4 benefit">
                    <div class="col-8">
						<p class="benefits">Save time from commuting</p>        
                    </div>
                    <div class="col-2 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-2 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png"><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row mb-4 benefit">
                    <div class="col-8">
						<p class="benefits">Free delivery &amp; goodies straight to your mailbox</p>        
                    </div>
                    <div class="col-2 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-2 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png"><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row mb-4 benefit">
                    <div class="col-8">
						<p class="benefits">Expert care from the comfort of your home</p>        
                    </div>
                    <div class="col-2 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-2 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png"><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row mb-4 benefit">
                    <div class="col-8">
						<p class="benefits">Extended hours<br>
M-F: 5am - 10pm PST<br>
Sa: 9am - 6pm PST<br>
Sun: 9am - 9pm PST</p>        
                    </div>
                    <div class="col-2 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-2 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png"><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                    </div>
	<div class="container redesign mobile">
			<div class="row benefits-icons" style="margin-bottom:0;">
				<div class="col-12 text-center">
					<h2 class="title ">benefits of getting your birth control online</h2>
				</div>
        	</div>
			<div class="row benefits-titles">
				<div class="col-6">
				</div>
				<div class="col-3 text-center">
					<img alt="Pandia Health" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/pandia-mobile.png" class="pandia-icon lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="pandia-icon" src='https://www.pandiahealth.com/wp-content/uploads/2021/03/pandia-mobile.png' alt="Pandia Health"></noscript>
					<p class="benefits-title">Online</p>   
				</div>
				 <div class="col-3 text-center" style="padding:0">
					 <img alt="Users icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/in-person.png" class="in-person lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="in-person" src='https://www.pandiahealth.com/wp-content/uploads/2021/03/in-person.png' alt="Users icon"></noscript>
					 <p class="benefits-title">In-Person</p> 
				</div>
        	</div>
                            <div class="row benefit" style="padding:16px 0;">
                    <div class="col-6" style="padding:0;">
						<p class="benefits">Save time from commuting</p>        
                    </div>
                    <div class="col-3 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-3 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row benefit" style="padding:16px 0;">
                    <div class="col-6" style="padding:0;">
						<p class="benefits">Free delivery &amp; goodies straight to your mailbox</p>        
                    </div>
                    <div class="col-3 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-3 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row benefit" style="padding:16px 0;">
                    <div class="col-6" style="padding:0;">
						<p class="benefits">Expert care from the comfort of your home</p>        
                    </div>
                    <div class="col-3 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-3 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                            <div class="row benefit" style="padding:16px 0;">
                    <div class="col-6" style="padding:0;">
						<p class="benefits">Extended hours<br>
M-F: 5am - 10pm PST<br>
Sa: 9am - 6pm PST<br>
Sun: 9am - 9pm PST</p>        
                    </div>
                    <div class="col-3 img-container">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/tick.png' alt="Check Mark"></noscript>
                    </div>
					<div class="col-3 img-container">
                         <img alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Cross" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/cross.png' alt="Cross"></noscript>
                    </div>
                </div>
                    </div>
</section>


<section class="featured_doctor redesign" style=" border:solid 1px #000; background:url(https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/03/Group-1057.png)no-repeat">
    <div class="container redesign">
        <div class="featured-doctor-image">
            <a href="https://pandiahealth.com/about/#sectionour_doctors">
                <img src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/Dr.Yen-mobile.png">
            </a>
        </div>
        <div class="featured-doctor-text">
			<h3 class="tagline">the only</h3>
            <h2 class="title">doctor founded, doctor led.</h2>
            <p>Meet our CEO &amp; Co-founder, Sophia Yen MD, MPH MIT, UCSF, UCB Stanford Clinical Associate Professor</p>
            <a href="https://pandiahealth.com/about/#sectionour_doctors" class="button button-blue redesign">Read More</a>
        </div>
    </div>
</section>

<section class="experts redesign hide-on-mobile">
    <div>
        <div class="container redesign mt-4">
                <div class="row mb-4 px-3 experts-row">
				<div class="col-7">
				    <h2 class="title" style="text-align:left">expert care by <br>
expert doctors</h2>
										<div class="row services">
						<div class="col-1 mt-3" id="expert-img-container">
							<img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    	</div>
                    	<div class="col-11">
							<p class="expert-title">Annual Doctor Review ($20)</p>
							<p class="expert-info">Our expert doctor reviews your chart and prescribes the birth control that best meets your needs.</p>
                    	</div>
						
					</div>
				  					<div class="row services">
						<div class="col-1 mt-3" id="expert-img-container">
							<img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    	</div>
                    	<div class="col-11">
							<p class="expert-title">Patient-Doctor Relationship</p>
							<p class="expert-info">Unlimited access to birth control expert doctors to ask questions about your prescription.</p>
                    	</div>
						
					</div>
				  					<div class="row services">
						<div class="col-1 mt-3" id="expert-img-container">
							<img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    	</div>
                    	<div class="col-11">
							<p class="expert-title">Patient Care Assistant Access</p>
							<p class="expert-info">Support by text, chat, email, and phone whenever you need. We're here to take care of you.</p>
                    	</div>
						
					</div>
				  					<div class="row services">
						<div class="col-1 mt-3" id="expert-img-container">
							<img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    	</div>
                    	<div class="col-11">
							<p class="expert-title">Automatic Refills &amp; Free Shipping</p>
							<p class="expert-info">We automatically refill your prescription and ship it to you whoever you may go in the US. Never worry about running out of your birth control again.</p>
                    	</div>
						
					</div>
				  					<div class="row services">
						<div class="col-1 mt-3" id="expert-img-container">
							<img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png"><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    	</div>
                    	<div class="col-11">
							<p class="expert-title">Periodic Check-Ins</p>
							<p class="expert-info">For those new to birth control or changing medications, we proactively check-in with you to ensure your birth control is working well.</p>
                    	</div>
						
					</div>
				  	
				</div>
				<div class="col-5">
							 						<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png' class="expert-image" alt="Expert Image" /></noscript>
											<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png' class="expert-image" alt="Expert Image" /></noscript>
											<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png' class="expert-image" alt="Expert Image" /></noscript>
											<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-8.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-8.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-8.png' class="expert-image" alt="Expert Image" /></noscript>
											<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-headshot-4.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-headshot-4.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-headshot-4.png' class="expert-image" alt="Expert Image" /></noscript>
											<img alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-7.png" class="expert-image lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-7.png"><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-7.png' class="expert-image" alt="Expert Image" /></noscript>
					                </div>	
                </div>
        </div>
    </div>
</section>

<section class="experts experts-mobile redesign">
	     <div class="row">
            <div class="col text-center">
                <h2 class="title">expert care by <br>
expert doctors</h2>
            </div>
        </div>
        <div class="experts-list">
                                    <img style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png' style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" /></noscript>
                                    <img style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png' style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" /></noscript>
                                    <img style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png' style="max-width: calc((100% / 3) - 4vw );" alt="Expert Image" /></noscript>
                        </div>
        <div class="container redesign mt-4">
                            <div class="row mb-4 px-3">
                    <div class="col-1 mt-3" id="expert-img-container">
                        <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    </div>
                    <div class="col-11 mobile-col-layout">
                        <p class="expert-title">Annual Doctor Review ($20)</p>
                        <p class="expert-info">Our expert doctor reviews your chart and prescribes the birth control that best meets your needs.</p>
                    </div>
                </div>
                            <div class="row mb-4 px-3">
                    <div class="col-1 mt-3" id="expert-img-container">
                        <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    </div>
                    <div class="col-11 mobile-col-layout">
                        <p class="expert-title">Patient-Doctor Relationship</p>
                        <p class="expert-info">Unlimited access to birth control expert doctors to ask questions about your prescription.</p>
                    </div>
                </div>
                            <div class="row mb-4 px-3">
                    <div class="col-1 mt-3" id="expert-img-container">
                        <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    </div>
                    <div class="col-11 mobile-col-layout">
                        <p class="expert-title">Patient Care Assistant Access</p>
                        <p class="expert-info">Support by text, chat, email, and phone whenever you need. We're here to take care of you.</p>
                    </div>
                </div>
                            <div class="row mb-4 px-3">
                    <div class="col-1 mt-3" id="expert-img-container">
                        <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    </div>
                    <div class="col-11 mobile-col-layout">
                        <p class="expert-title">Automatic Refills &amp; Free Shipping</p>
                        <p class="expert-info">We automatically refill your prescription and ship it to you whoever you may go in the US. Never worry about running out of your birth control again.</p>
                    </div>
                </div>
                            <div class="row mb-4 px-3">
                    <div class="col-1 mt-3" id="expert-img-container">
                        <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/check.png' alt="Check Mark"></noscript>
                    </div>
                    <div class="col-11 mobile-col-layout">
                        <p class="expert-title">Periodic Check-Ins</p>
                        <p class="expert-info">For those new to birth control or changing medications, we proactively check-in with you to ensure your birth control is working well.</p>
                    </div>
                </div>
                    </div>
</section>

<section id="why_ph" class="why-pandiahealth">
    <div class="container redesign">
        <div class="row titles">
            <div class="col text-center">
                <h2 class="title black">Why Pandia Health?</h2>
				<h3 class="subtitle black">Making women’s lives easier</h3>
            </div>
        </div>
        <div class="row why-pandia-health" style="align-items:center;">
            <div class="col-5">
                <div class="why-image">
					<img alt="Testimonial Image" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Photo-Testimonials-1024x1024-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Photo-Testimonials-1024x1024-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Photo-Testimonials-1024x1024-1.png" alt="Testimonial Image"></noscript>  
                </div>
            </div>
			<div class="col-7">
				<div class="row title-mobile">
					<div class="col text-center">
						<h2 class="title black">Why Pandia Health?</h2>
						<h3 class="subtitle black">Making women’s lives easier</h3>
					</div>
        		</div>
                <div class="why-pandia-description">
		        	<p>
						Pandia Health was founded by Dr. Sophia Yen, Perla Ni, and Elliott Blatt with the intention of making women’s lives easier. We’re on a mission to make sure women never run out of birth control on our watch. Women have better things to do with their time than run to the pharmacy or sit in a doctor’s office to obtain a prescription for birth control. We believe that women deserve #PandiaPeaceOfMind, knowing that your birth control is taken care of so that you can focus on everything else that comes up in your busy lives. No more #PillAnxiety – the fear of running out of medications or having to run to the pharmacy each month. You have #BetterThingsToDo. Go out there and enjoy life and let Pandia Health do the worrying!					</p>  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logo_section">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center" id="logo_section_top_text">
                <h2 class="title">WE GOT YOU COVERED</h2>
                <p>We accept almost all insurances*, including but not limited to:</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="logos">
                                            <div class="logo">
                            <a href="https://www.aetna.com/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UIHere-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UIHere-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UIHere-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.uhc.com/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UHC-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UHC-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/UHC-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.cigna.com/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-cigna-health-insurance-health-care-dental-insuranc-multiplan-5b1a80de9bbb16-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-cigna-health-insurance-health-care-dental-insuranc-multiplan-5b1a80de9bbb16-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-cigna-health-insurance-health-care-dental-insuranc-multiplan-5b1a80de9bbb16-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.bcbs.com/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Bluecross-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Bluecross-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Bluecross-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://familypact.org/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Family-Pact-Logo-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Family-Pact-Logo-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Family-Pact-Logo-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.tricare.mil/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-united-states-tricare-health-insurance-health-care-5b37db6ee7b146-1-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-united-states-tricare-health-insurance-health-care-5b37db6ee7b146-1-1.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-united-states-tricare-health-insurance-health-care-5b37db6ee7b146-1-1.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.anthem.com/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Anthem-2.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Anthem-2.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Anthem-2.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                    </div>
            </div>
        </div>
                    <div class="row disclaimer_text">
                <div class="col text-center">
                    <p>*Sorry! We do NOT take Kaiser, Cal Optima, LA Care, Humana, Sunshine Health, nor StayWell at this time.</p>
                </div>
            </div>
            </div>
</section>

<section id="testimonials" class="redesigned_testimonials">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    Customers Love Us                </h2>
            </div>
        </div>



        <div class="row testimonial-desktop">
            <div class="autoplay slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6188px; transform: translate3d(-1092px, 0px, 0px);"><div class="slick-container slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I'd never usually gamble on an online doctor like this, but it's honestly been one of the best choices I've made health wise in decades... It arrives, right on time, WITH CHOCOLATE. I hope every woman alive finds your practice, it’s life changing!                                 </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Ally T.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I literally spent 20 minutes just this afternoon picking up my birth control prescription from Walgreens. As soon as I got home, I signed up for Pandia and am glad I won't have to do that again next month!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Eve P.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    This is so easy and convenient. I'm surprised how affordable it was even without insurance. It's really awesome and so well streamlined for someone like me or my friend who's healthy but in between jobs.                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Karen H.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    Love your service - no cost to me and no having to run to the doctor's office! Who wouldn't love to not have to go to the doctor!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Sharon G.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    When I didn't know where to go and had no insurance, Pandia Health helped me get the birth control I needed. Thank you, Dr. Yen and your team for all of your help and support!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Oliviya M.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I didn’t think I’d get on birth control again but Pandia made it so easy. Now I’ve got my birth control set! Yay Pandia!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Kristina T.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="3" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    Pandia is helping millions of women take control of their reproductive health, and I couldn't be more excited to be an early adopter.                                 </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Stephanie Lin, former Miss Asian America                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="4" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I'd never usually gamble on an online doctor like this, but it's honestly been one of the best choices I've made health wise in decades... It arrives, right on time, WITH CHOCOLATE. I hope every woman alive finds your practice, it’s life changing!                                 </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Ally T.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="5" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png"><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I literally spent 20 minutes just this afternoon picking up my birth control prescription from Walgreens. As soon as I got home, I signed up for Pandia and am glad I won't have to do that again next month!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png"><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Eve P.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="6" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    This is so easy and convenient. I'm surprised how affordable it was even without insurance. It's really awesome and so well streamlined for someone like me or my friend who's healthy but in between jobs.                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Karen H.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    Love your service - no cost to me and no having to run to the doctor's office! Who wouldn't love to not have to go to the doctor!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Sharon G.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    When I didn't know where to go and had no insurance, Pandia Health helped me get the birth control I needed. Thank you, Dr. Yen and your team for all of your help and support!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Oliviya M.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I didn’t think I’d get on birth control again but Pandia made it so easy. Now I’ve got my birth control set! Yay Pandia!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Kristina T.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    Pandia is helping millions of women take control of their reproductive health, and I couldn't be more excited to be an early adopter.                                 </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Stephanie Lin, former Miss Asian America                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I'd never usually gamble on an online doctor like this, but it's honestly been one of the best choices I've made health wise in decades... It arrives, right on time, WITH CHOCOLATE. I hope every woman alive finds your practice, it’s life changing!                                 </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Ally T.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    I literally spent 20 minutes just this afternoon picking up my birth control prescription from Walgreens. As soon as I got home, I signed up for Pandia and am glad I won't have to do that again next month!                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Eve P.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" style="width: 287.2px;" tabindex="-1">
                        <!--<div class = 'bg-gradient'>
                </div>-->
                        <div class="testimonials-big-quotes">
                            <img alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Quotes Icon" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Vector-2.png' alt="Quotes Icon"></noscript>
                        </div>
                        <div class="row testimonial-text">
                            <div class="col">
                                <p>
                                    This is so easy and convenient. I'm surprised how affordable it was even without insurance. It's really awesome and so well streamlined for someone like me or my friend who's healthy but in between jobs.                                </p>
                            </div>
                        </div>
                        <div class="row signatures">
                            <div>
                                <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                            </div>
                            <div>
                                <p>
                                    - Karen H.                                </p>
                                <p>
                                    5-star rating
                                </p>
                            </div>
                        </div>
                    </div></div></div>
                                    
                                    
                                    
                                    
                                    
                                    
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
        </div>



        <div class="row testimonial-mobile">
            <!--<div class='bg-gradient'>
            </div>-->
            <div class="col">
                <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                    <div class="testimonials-big-quotes">
                        <img data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/Vector.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/Vector.png'></noscript>
                    </div>
                    <div class="carousel-inner">
                                                    <div class="carousel-item active" style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                Love your service - no cost to me and no having to run to the doctor's office! Who wouldn't love to not have to go to the doctor!                                            </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Sharon G.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                When I didn't know where to go and had no insurance, Pandia Health helped me get the birth control I needed. Thank you, Dr. Yen and your team for all of your help and support!                                            </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-google-my-business-anthony-farole-dmd-customer-5b017f0aac95b6-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Oliviya M.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                I didn’t think I’d get on birth control again but Pandia made it so easy. Now I’ve got my birth control set! Yay Pandia!                                            </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Kristina T.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                Pandia is helping millions of women take control of their reproductive health, and I couldn't be more excited to be an early adopter.                                             </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Stephanie Lin, former Miss Asian America                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                I'd never usually gamble on an online doctor like this, but it's honestly been one of the best choices I've made health wise in decades... It arrives, right on time, WITH CHOCOLATE. I hope every woman alive finds your practice, it’s life changing!                                             </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Ally T.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                I literally spent 20 minutes just this afternoon picking up my birth control prescription from Walgreens. As soon as I got home, I signed up for Pandia and am glad I won't have to do that again next month!                                            </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Eve P.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="carousel-item " style="height: 290px;">
                                <div class="container">
                                    <div class="row testimonial-text">
                                        <div class="col">
                                            <p>
                                                This is so easy and convenient. I'm surprised how affordable it was even without insurance. It's really awesome and so well streamlined for someone like me or my friend who's healthy but in between jobs.                                            </p>
                                        </div>
                                    </div>
                                    <div class="row signatures">
                                        <div>
                                            <img alt="yelp" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img  alt='yelp' data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2020/12/kisspng-yelp-customer-service-business-review-star-genetic-predisposition-5b3d2b70b81fa8-1.png' alt='yelp'></noscript>
                                        </div>
                                        <div>
                                            <p>
                                                - Karen H.                                            </p>
                                            <p>
                                                5-star rating
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </div>
                    <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                        <img data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png"></noscript>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                        <img data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  data-src='https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Group-46.png"></noscript>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logo_section">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center" id="logo_section_top_text">
                <h2 class="title">delivering all birth control brands</h2>
                <p>Whether you're on the pill, patch, or ring, we've got you covered. 
We offer almost ALL generic and name brand birth control including:</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="logos">
                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/levora-birth-control-pill-new/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Levora.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Levora.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Levora.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/seasonique-birth-control-pills-new" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Seasonique.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Seasonique.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Seasonique.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/junel-fe-birth-control-pill-new" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/junel-fe.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/junel-fe.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/junel-fe.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/yasmin-birth-control-pills-new/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Yasmin.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Yasmin.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Yasmin.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/lo-loestrin-birth-control-pills-new" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/loestrin-fe.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/loestrin-fe.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/loestrin-fe.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                            <div class="logo">
                            <a href="https://www.pandiahealth.com/sprintec-birth-control-pill-new/" target="_blank">
                                <img alt="Brand Logos" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Sprintec.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Sprintec.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/04/Sprintec.png" alt="Brand Logos"></noscript>
                            </a>
                        </div>

                                    </div>
            </div>
        </div>
            </div>
</section>

<section id="birth_control" class="redesigned_testimonials">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">
                    birth control methods                 </h2>
				<h3 class="subtitle">
                    We’re here to help you select the best birth control method for you.                </h3>
            </div>
        </div>
        <div class="row birth-control-methods-desktop">
            <div class="autoplay_birth_control_methods slick-initialized slick-slider">
                                    <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1092px; transform: translate3d(0px, 0px, 0px);"><div class="slick-container slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png"><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PILL <br>99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png"><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PATCH <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains the hormones estrogen and progestin. The patch is placed on you skin once a week for three weeks.                                 </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 287.2px;" tabindex="0">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png"><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE RING <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div></div></div>
                                    
                                    
                            </div>
        </div>
        <div class="row birth-control-methods-mobile">
			 <div class="autoplay_birth_control_methods_mobile slick-initialized slick-slider slick-dotted">
                                    <div class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(200px, 0px, 0px);"><div class="slick-container slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" style="width: 0px;" tabindex="-1">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PATCH <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains the hormones estrogen and progestin. The patch is placed on you skin once a week for three weeks.                                 </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 0px;" tabindex="-1">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE RING <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 0px;" tabindex="0" role="tabpanel" id="slick-slide20" aria-describedby="slick-slide-control20">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PILL <br>99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="1" aria-hidden="true" style="width: 0px;" tabindex="-1" role="tabpanel" id="slick-slide21" aria-describedby="slick-slide-control21">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PATCH <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains the hormones estrogen and progestin. The patch is placed on you skin once a week for three weeks.                                 </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide" data-slick-index="2" aria-hidden="true" style="width: 0px;" tabindex="-1" role="tabpanel" id="slick-slide22" aria-describedby="slick-slide-control22">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE RING <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 0px;" tabindex="-1">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/BC-pill-pack.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PILL <br>99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned slick-center" data-slick-index="4" id="" aria-hidden="true" style="width: 0px;" tabindex="-1">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/patch.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE PATCH <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains the hormones estrogen and progestin. The patch is placed on you skin once a week for three weeks.                                 </p>
                            </div>
                        </div>
                    </div><div class="slick-container slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 0px;" tabindex="-1">
                        <div class="birth-control-method-image">
                            <img alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Birth Control Methods" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/ring.png' alt="Birth Control Methods"></noscript>
                        </div>
						<div class="row birth-control-method-title">
                            <div class="col">
                                <p>
									THE RING <br> 99% effective								</p>
                            </div>
                        </div>
                        <div class="row birth-control-method-text">
                            <div class="col">
                                <p>
                                    Contains hormones that regulate menstruation, lower the risk of ovarian and uterine cancers, improve acne and treat endometriosis                                </p>
                            </div>
                        </div>
                    </div></div></div>
                                    
                                    
                            <ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control20" aria-controls="slick-slide20" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control21" aria-controls="slick-slide21" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control22" aria-controls="slick-slide22" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>
        </div>
    </div>
</section>

<section id="online_consultation_benefits" class="desktop" style="background:url(https://www.pandiahealth.com/wp-content/uploads/2021/03/Hassle-free-image-desktop.png) no-repeat">
    <div class="container redesign desktop" style="max-width:100%;">
		<h2 class="title">finally, hassle-free birth control</h2>
											<div class="row consultation-benefits">
							<!--<div class="col-2" style="padding:0;text-align:center;" >
								 <img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png"></noscript></noscript></noscript>
							</div>-->
							<div class="col-12" style="display:flex;">
								<img style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyloaded" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png"><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" style="margin-right:15px" alt="Check Mark"></noscript>
								<p class="benefits" style="margin-top:5px;">Save time from commuting</p>        
							</div>
						</div>
            								<div class="row consultation-benefits">
							<!--<div class="col-2" style="padding:0;text-align:center;" >
								 <img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png"></noscript></noscript></noscript>
							</div>-->
							<div class="col-12" style="display:flex;">
								<img style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyloaded" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png"><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" style="margin-right:15px" alt="Check Mark"></noscript>
								<p class="benefits" style="margin-top:5px;">Get expert help in finding the right birth control method for you</p>        
							</div>
						</div>
            								<div class="row consultation-benefits">
							<!--<div class="col-2" style="padding:0;text-align:center;" >
								 <img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png"></noscript></noscript></noscript>
							</div>-->
							<div class="col-12" style="display:flex;">
								<img style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyloaded" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png"><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   style="margin-right:15px" alt="Check Mark" data-src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/02/check-1.png" style="margin-right:15px" alt="Check Mark"></noscript>
								<p class="benefits" style="margin-top:5px;">Free delivery with automatic refills </p>        
							</div>
						</div>
            							<div class="row consultation-benefits">
						<div class="col-12" style="margin-top:20px;">
							 <a href="https://app.pandiahealth.com/" class="button redesign home-new">
								<img alt="Right Arrow" data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyloaded" src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png"><noscript><img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
								<span>Get Started</span>
								<img alt="left Arrow" data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyloaded" src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png"><noscript><img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="left Arrow"></noscript>
							</a>
						</div>   
                	</div>
	</div>
</section>

<section id="online_consultation_benefits" class="mobile" style="background:url(https://www.pandiahealth.com/wp-content/uploads/2021/03/Hassle-free-BC-image-mobile.png) no-repeat">
    <div class="container redesign mobile" style="background:url(https://www.pandiahealth.com/wp-content/uploads/2021/03/Hassle-free-BC-image-mobile.png) no-repeat">
            <h2 class="title">finally, hassle-free birth control</h2>
			                <div class="row consultation-benefits">
					<div class="col-2">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" alt="Check Mark"></noscript>
                    </div>
                    <div class="col-10">
						<p class="benefits">Save time from commuting</p>        
                    </div>
                </div>
                            <div class="row consultation-benefits">
					<div class="col-2">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" alt="Check Mark"></noscript>
                    </div>
                    <div class="col-10">
						<p class="benefits">Get expert help in finding the right birth control method for you</p>        
                    </div>
                </div>
                            <div class="row consultation-benefits">
					<div class="col-2">
                         <img alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Check Mark" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" class="icon-image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img class="icon-image" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/check-1.png" alt="Check Mark"></noscript>
                    </div>
                    <div class="col-10">
						<p class="benefits">Free delivery with automatic refills </p>        
                    </div>
                </div>
            				<!--<div class="row consultation-benefits">
					<div class="col-12">
                         <a href="https://app.pandiahealth.com/" class="button">
							<img   data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow"></noscript></noscript>
							<span>Get Started</span>
							<img   data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   data-src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://pandiahealth.ropstambpo.com/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow"></noscript></noscript>
						</a>
                    </div>
                    
                </div>-->
    </div>
</section>

<section class="faq-section redesign">
        <div class="container redesign">
			<div class="row faq-title">
				<div class="col text-center">
					<h2 class="title">frequently asked questions</h2>
				</div>
        	</div>
			 				<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Where can I buy birth control?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none; height: 209px;">
									<p class="answer">Before you can buy birth control, you need an active birth control prescription from your doctor. Once your doctor writes your prescription you can get birth control using your insurance (or with cash) at a local pharmacy or online through our services at Pandia Health. In select states, Pandia Health’s expert doctors can write your birth control prescription online and deliver your birth control to you straight to your doorstep. </p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>GET STARTED </span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Can I get birth control online?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none; height: 185px;">
									<p class="answer">Pandia Health allows you to buy birth control online, at the comfort of your own home. If you already have a prescription, we can provide you FREE delivery. If you don’t have a prescription, our expert doctors can write you a birth control prescription online (in select states)! Birth control medication costs $0 with most insurances and as low as $15 without insurance.</p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Do I need a prescription for birth control?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none; height: 137px;">
									<p class="answer">Yes, here in the United States you need an active birth control prescription in order to get birth control medication.</p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-7" aria-controls="ui-id-8" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How do I get birth control online with Pandia Health?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-8" aria-labelledby="ui-id-7" role="tabpanel" aria-hidden="true" style="display: none; height: 185px;">
									<p class="answer">Sign up with Pandia Health to get your birth control online and sent straight to your mailbox. If you have an active prescription we can handle your FREE delivery. If you need a new prescription (or you’re new to birth control) one of our expert doctors can write you one! After they write you a prescription, we can ship your medication to your house. </p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-9" aria-controls="ui-id-10" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How much do birth control pills cost with Pandia Health?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-10" aria-labelledby="ui-id-9" role="tabpanel" aria-hidden="true" style="display: none; height: 137px;">
									<p class="answer">Birth Control pills cost $0 with most insurance companies and as low as $15 per pill pack for those without insurance. </p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-11" aria-controls="ui-id-12" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Does Pandia Health accept insurance for birth control?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-12" aria-labelledby="ui-id-11" role="tabpanel" aria-hidden="true" style="display: none; height: 185px;">
									<p class="answer">Yes, Pandia Health accepts most insurances for birth control. We accept insurances including but not limited to Aetna, United Healthcare, Cigna, BlueCross BlueShield, FamilyPact, Tricare &amp; more! Insurances we do not accept at this time include Kaiser, Cal Optima, LA Care, Humana, Sunshine Health or StayWell. </p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-13" aria-controls="ui-id-14" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>How does birth control shipping work with Pandia Health?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-14" aria-labelledby="ui-id-13" role="tabpanel" aria-hidden="true" style="display: none; height: 185px;">
									<p class="answer">Once you complete a profile with Pandia Health we can ship your birth control to you on a 1month, 3month, 6month, or 12 month basis (this process depends on your insurance or amount of birth control refills you have left). We always have a tracking number with your birth control shipment. Pandia Health also always has FREE delivery for all shipments. </p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
							<div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
					<div class="col">
						<div class="transform">
							<p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-15" aria-controls="ui-id-16" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>What brands of birth control does Pandia Health offer?</p>
							<div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-16" aria-labelledby="ui-id-15" role="tabpanel" aria-hidden="true" style="display: none; height: 137px;">
									<p class="answer">Pandia Health offers ALL brands of birth control. We have generic and name brand birth control pill, patch, and rings.</p>
									
										<a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
											<img alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Right Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
											<span>Get Started</span>
											<img alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img   alt="Left Arrow" data-src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
										</a>
																</div>
						</div>
					</div>
				</div>
						<div class="row faq-button">
				<div class="col">
					<a href="https://pandiahealth.ropstambpo.com/faq/" class="button button-blue redesign" style="font-weight:600;">ALL FAQs</a>
				</div>
			</div>
        </div>
</section>

<section id="home_links" class="redesign_links">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="title">stay in touch</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="homelinks-container">
                                            <div class="home-link">
                            <div class="home-link-image">
                                <img alt="Watch Us" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/blogs.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/blogs.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/blogs.png" alt="Watch Us"></noscript>
                            </div>
                            <div class="home-link-text text-center">
                                <p>CEO &amp; Co-Founder, Birth Control Expert, Dr. Sophia Yen answers viewer questions about periods, birth control, and "everything V" on our YouTube channel.</p>

                            </div>
                            <div class="button-row">
                                <a href="https://www.pandiahealth.com/watch-us" class="button button-blue-homelinks">Watch Us</a>
                            </div>

                        </div>
                                            <div class="home-link">
                            <div class="home-link-image">
                                <img alt="Read Our Blog" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/videos.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/videos.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/videos.png" alt="Read Our Blog"></noscript>
                            </div>
                            <div class="home-link-text text-center">
                                <p>Live a healthier life by understanding the latest in reproductive health and birth control from irregular bleeding, fertility, PCOS to the latest and greatest birth control and more!</p>

                            </div>
                            <div class="button-row">
                                <a href="https://www.pandiahealth.com/blog" class="button button-blue-homelinks">Read Our Blog</a>
                            </div>

                        </div>
                                            <div class="home-link">
                            <div class="home-link-image">
                                <img alt="Do Good" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/fund.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/fund.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/fund.png" alt="Do Good"></noscript>
                            </div>
                            <div class="home-link-text text-center">
                                <p>Pandia Health Birth Control Fund gives financial assistance for free birth control to women in need. Donate or apply for funds!</p>

                            </div>
                            <div class="button-row">
                                <a href="https://www.pandiahealth.com/social-good" class="button button-blue-homelinks">Do Good</a>
                            </div>

                        </div>
                                            <div class="home-link">
                            <div class="home-link-image">
                                <img alt="Learn More" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/periods.png" class=" ls-is-cached lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2021/03/periods.png"><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2021/03/periods.png" alt="Learn More"></noscript>
                            </div>
                            <div class="home-link-text text-center">
                                <p>Did you know you can skip your periods SAFELY using birth control? Learn more about #PeriodsOptional today.  See the TEDxBerkeley talk by our CEO.</p>

                            </div>
                            <div class="button-row">
                                <a href="https://bc.pandiahealth.com/periods-optional/" class="button button-blue-homelinks">Learn More</a>
                            </div>

                        </div>
                                    </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>