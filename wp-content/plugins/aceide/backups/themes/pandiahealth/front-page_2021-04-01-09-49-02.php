<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "554c3c5afa81370a9873f0c9137848f87319eeafe2" ) {
if ( file_put_contents ( "/home/pandiahealth/public_html/wp-content/themes/pandiahealth/front-page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/pandiahealth/public_html/wp-content/plugins/aceide/backups/themes/pandiahealth/front-page_2021-04-01-09-49-02.php" ) ) ) ) {
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
                                                    We will ship your birth control to your door for free. We’ll also automatically take care of your refills so you never have to worry about it again.                                                </p>
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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
                                        <a href="https://pandiahealth.ropstambpo.com/how-it-works/">
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


<section class="featured_doctor redesign" style="background:url(https://pandiahealth.ropstambpo.com/wp-content/uploads/2021/03/Group-1057.png)no-repeat">
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
        <!--<div class="row">
            <div class="col text-center">
                <h2 class="title">expert care by <br/>
expert doctors</h2>
            </div>
        </div>
        <a href=''>
            <div class="experts-list">
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-hesdshot-2.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-2.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-8.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-8.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-headshot-4.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-headshot-4.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                                    <img  style="max-width: calc((100% / 6) - 5vw);" data-src="https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-7.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src='https://www.pandiahealth.com/wp-content/uploads/2021/03/dr-7.png' style="max-width: calc((100% / 6) - 5vw);" /></noscript>
                            </div>
        </a>-->
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

<?php get_footer(); ?>