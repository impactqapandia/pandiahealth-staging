<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f87319eeafe2" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-01-09-46-31.php" ) ) ) ) {
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



<section class="hp-section redesign" id="how_it_works">
    <div class="container redesign">
        <div class="row">
            <div class="col text-center">
                <h2 class="title hiw-title"><a href="https://pandiahealth.ropstambpo.com/how-it-works/">How It Works</a></h2>
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png"><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We???ll also automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                            </div>
                            <div class="hiw-path-steps">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We???ll also automatically take care of your refills so you never have to worry about it again.                                                </p>
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Fast &amp; Easy Transfer" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png"><noscript><img  alt="Fast & Easy Transfer" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" alt="Fast & Easy Transfer" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Fast &amp; Easy Transfer                                                </h3>
                                                <p>
                                                    Simply provide your current pharmacy or doctor???s info and we will handle the rest.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-info">
                                                <div class="hiw-path-step-img">
                                                    <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class=" lazyloaded" src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png"><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                                </div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We???ll automatically take care of your refills so you never have to worry about it again.                                                </p>
                                            </div>
                                        </a>
                                        <div class="hl"> </div>
                                    </div>

                                                            </div>
                            <div class="hiw-path-steps">
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Fast &amp; Easy Transfer" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Fast & Easy Transfer" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Medical_icon.png" alt="Fast & Easy Transfer" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Fast &amp; Easy Transfer                                                </h3>
                                                <p>
                                                    Simply provide your current pharmacy or doctor???s info and we will handle the rest.                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="hiw-path-step">
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
                                            <div class="hiw-path-step-img">
                                                <img alt="Free Delivery" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img  alt="Free Delivery" alt="Workflow" data-src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img src="https://www.pandiahealth.com/wp-content/uploads/2020/12/Free_Delivery_icon.png" alt="Free Delivery" alt="Workflow"></noscript>
                                            </div>
                                            <div>
                                                <h3>
                                                    Free Delivery                                                </h3>
                                                <p>
                                                    We will ship your birth control to your door for free. We???ll automatically take care of your refills so you never have to worry about it again.                                                </p>
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



<?php get_footer(); ?>