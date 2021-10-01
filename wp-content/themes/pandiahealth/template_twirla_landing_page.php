<?php 
/* Template Name: Twirla Landing Page */
get_header(); ?>
<style>
html, body{font-family: 'Montserrat', sans-serif; background-color:#F8F8FA}
.header-content ul#menu-nav>li a { font-size: 14px; line-height:2rem; font-family: 'Montserrat', sans-serif; letter-spacing: 1px; font-weight:500; }
.header-content ul#menu-nav>li .sub-menu li a{line-height:1rem;}
.header-content .logo img{max-width:170px; width:100%;}
.header-content{justify-content: left;}
.header-content .left-side{ max-width: 550px;}
/* .header-content ul#menu-nav>li a, .header-content li.menu-item-has-children .sub-menu li a{text-transform:none;} */
.col-acne {color:#009BD2 !important;}
.bg-acne{background-color:#D0EBF6;}

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

h2.title { text-transform: none; }
 
.restrictedWidth{max-width:1700px !important}
.sub-heading { text-transform: uppercase;  font-weight: 600; font-size: 1.5rem;}
.section-padding{padding:64px 0;}
.section-heading{ color: #2A3445; font-family: Playfair Display; font-weight: 600; font-size: 55px; line-height: 62px; letter-spacing: 0.03em; margin-bottom: 20px; }
.section-heading a{color:#2A3445;}
#page_banner{display: none;}
.hero-section, .mHero-section{ background-color:#7D277C; background-image: url('<?php echo get_template_directory_uri(); ?>/img/twirla/twirla-aids.png'); background-repeat: no-repeat; background-position: -40px; background-size: contain; padding: 4rem 0 3.5rem; }
.hero-title{display:block; font-family: 'Playfair Display',serif; font-size:4rem; line-height:5rem;}
.hero-desc { display: flex; margin-top: 3rem;}
.hero-desc .hero-text { width: 60%; padding-right: 1rem;}
.hero-desc .hero-text p {font-size: 1.4rem;}
.custom-button:after, .custom-button:before { font-family: "Font Awesome 5 Free"; display: inline-block; font-weight:900; }
.hero-section .custom-button{margin-top:15px;}
.hero-logo{padding-left:3rem;}

/* custom button */
.custom-button { background-color: #2D99CE; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; padding: 2px 40px 2px; border-radius: 100px; display: inline-flex; align-items: center; }
.custom-button:before { content: "\f0da"; padding-right: 10px;font-size: 30px;vertical-align: middle;}
.custom-button:after { content: "\f0d9"; padding-left: 10px;font-size: 30px;vertical-align: middle;}


.header-content .custom-button{display: inline; padding: 12px 26px 12px;}
.header-content .custom-button:before{padding-right: 3px;}
.header-content .custom-button:after{padding-left: 3px;}
.custom-button:hover { background-color: #36B1ED !important; color: #fff !important; border-color: #36B1ED !important; box-shadow: 0px 8px 16px rgb(45 153 206 / 50%); }
.birth-control{background-image: url('<?php echo get_template_directory_uri(); ?>/img/twirla/birth-control-bg.png'); background-repeat: no-repeat; background-position: 110% bottom; border-bottom: 4px solid #D0EBF6;}
.birth-control .small-wrapper{text-align:center}
.birth-control ul {text-align: left; padding-left: 10rem;}
.pills-section .content-wrap{padding: 0 8rem 0 2rem;}

.savings-section{ background-color: #CBE4F3; background-image: url('<?php echo get_template_directory_uri(); ?>/img/twirla/savings-bg.jpg'); background-repeat: no-repeat;padding-top: 7rem;}
.savings-section .content-wrap {padding-left: 80px; max-width: 80%; margin: 0 auto;}
.savings-section .saving-item:first-child .content-wrap{background-image: url('<?php echo get_template_directory_uri(); ?>/img/twirla/saving-icon.png');}
.savings-section .saving-item:last-child .content-wrap{background-image: url('<?php echo get_template_directory_uri(); ?>/img/twirla/cost-icon.png');}
.savings-section .content-wrap {
    padding-left: 100px;
    max-width: 80%;
    margin: 0 auto;
    background-repeat: no-repeat;
    background-size: contain;
    height: 80px;
	display: flex;
    align-items: center;
}
.savings-section .content-wrap p{margin-bottom:0; font-weight: 600;}
.savings-section .saving-item { margin-bottom: 3rem;}
.prescription {border-bottom: 4px solid #D0EBF6;}
.prescription .small-container { margin: 30px 0;}
.prescription .sub-heading {font-size: 1.8rem; text-align: right; padding-right: 2rem;}
.prescription .prescription-wrap {
    display: flex;
    align-items: stretch;
    align-content: stretch;
    justify-content: center;
	max-width: 90%;
}
.prescription .prescription-item {
    position: relative;
    flex: 0 4 calc(100% / 3);
    padding: 0 30px 0;
    text-align: center;
}
.prescription-item p {margin-top: 10px; font-weight: 600;}
.devider-line{border-left: 3px solid #309ACD;}
.prescription-item .item-img {
    border-radius: 50%;
    height: 75px;
    width: 75px;
    flex: 0 1 75px;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    align-content: center;
    justify-content: center;
    background-color: #2f98ce;
    margin: 0 auto;
}
.prescription-item .div-line {
    border-top: 4px solid #2f98ce;
    position: absolute;
    top: 40px;
    left: calc(50% + 33px);
    width: 73%;
}
.prescription .prescription-item:last-child .div-line {display: none;}

.tabletsImg{margin:70px 0 20px;}
.displayTbl{display:table; height:100%;}
.displayTbl .vAlign{display:table-cell; vertical-align:middle;}
.overlapStiker{position:absolute; right: 52px; top: 18px;}
.overlapStiker span{display: block; font-size: 8px; font-weight: 600; margin-top:8px;}
.medicine p{ margin-bottom: 10px; line-height: 20px;  font-weight: 600;}
#banner_cta .banner-cta>.banner-cta-point{height:60px;}
#banner_cta .banner-cta>.banner-cta-point h3, #banner_cta .banner-cta>.banner-cta-point p { letter-spacing:0; text-align: left; align-self:center; color: #2D99CE !important; }
.banner-cta-point{border-right:1px solid #2D99CE;min-height:45px;}
.banner-cta-point:last-child{border-right:none;}

#banner_cta.redesign .banner-cta img{width:auto;}
#banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:15px; color:#2D99CE !important; font-weight:bold;font-family: 'Montserrat', sans-serif;}
.font-10{font-size:10px;}


span.number { border: 3px solid #2E99CF; padding: 2px 8px; border-radius: 100%; width: 50px; height: 50px; font-size: 30px; font-weight: 600; color: #2E99CF; display: inline-block; background-color: #F2F2F2; margin-bottom: 20px; }



.expand{font-family: 'Montserrat', sans-serif;}
.expand2{font-family: 'Montserrat', sans-serif;}
 .faq-section.redesign p.question {font-family: 'Montserrat', sans-serif;}
.questions p{font-family: 'Montserrat', sans-serif !important;line-height: 1.5rem;}
.faq-section.redesign p.question.ui-state-active {
    transform: scale(1, 1);
    padding: 0.9em 0 0.3em;
	border-bottom:none;
}
.ui-accordion .ui-accordion-content.ui-accordion-content-active{padding:1em 0.9em 0.9em 0.6em}
.faq-section .questions .m-auto{text-align:center;}
.show{font-weight: bold;}
.show1{font-weight: bold;}
.section-subttile{font-size: 20px; padding-bottom:50px; width:40%; margin:auto;} 
.section-subttile2{font-size: 16x; padding-bottom:30px;line-height:26px;margin-bottom: 0;} 

.subtitle{margin-bottom:30px !important;}
/* #menu-item-4509,#menu-item-8167,#menu-item-8597{display:none;} */

.know-option-section{border-bottom: 4px solid #D0EBF6; padding-bottom:120px;}
.know-option-section table td{width:400px; }
.know-option-section table{line-height:2.5em}
.know-option-section .table-striped tbody tr:nth-of-type(odd) {background-color:#EBEBEB;}
.know-option-section tr td img {width:30px;}


.questions p{font-family: 'Montserrat', sans-serif;}
.faq-section.redesign p.question{font-weight: 700; width: 100%; border-top: 1px solid #009BD2; border-radius: 0;}
.faq-section.redesign p.question:first-child {border-top: none;}
.faq-section .ui-accordion .ui-accordion-header{ padding: 0.9em 0 0.3em;}
.faq-questions .ui-widget-content a.custom-button{color:#fff !important;line-height: 2.4rem;}
.faq-questions .ui-accordion-content a{color:#2D99CE !important}
.faq-section.redesign {padding:64px 0;}

.footer-socials{padding:64px 0;}
.displayTable { display: table; height: 100%;}
.displayTable .vAlign {vertical-align: middle; display: table-cell;}
.rounded-1{border-radius:10px; -webkit-border-radius:10px; -moz-border-radius:10px;}
.faq-section ul li{font-family: 'Montserrat', sans-serif;}
.faq-section.redesign p.question.ui-state-active, .ui-accordion .ui-accordion-content.ui-accordion-content-active {height:auto !important;}
.faq-section .questions.ui-accordion-content-active{margin-top:10px;}
.benefits-logo{margin:auto; width:130px;}
 
@media(max-width:1400px){
	.hero-title{font-size: 3rem; line-height: 4rem;}
	.hero-desc .hero-text p{font-size: 1.2rem}
	.custom-button{padding: 2px 30px 2px;}
}
@media(max-width:1024px){
	.hero-title{font-size: 2.5rem; line-height: 3.5rem;}
	.hero-desc .hero-text p{font-size: 1rem}
	.birth-control{background-position: 130% bottom;}
	.pills-section .content-wrap{padding:0 2rem;}
	.savings-section{background-position: -90px;}
	.savings-section .content-wrap{max-width: 100%;}
}
@media(max-width:992px){
	.birth-control{background-position: calc(70vw) bottom;}
	.savings-section{background-position: -70px bottom; background-size: 50%;}
	.prescription .sub-heading{text-align: center; margin-bottom: 3rem; padding:0}
	.devider-line{border:none;}
	.prescription .prescription-wrap{max-width:100%;}
}
@media(max-width:991px){
	.hero-section, .mHero-section{background-position: -90px bottom; background-size: 40%;}
	.hero-logo{margin-bottom:2rem;}
	.hero-logo, .hero-content {padding-left: 0; text-align: center;}
	.hero-desc {display: block; margin-top: 2rem;}
	.hero-desc .hero-text{ padding-right: 0; margin: 0 auto;}
}
@media(max-width:768px){
	.section-heading{font-size: 45px; line-height: 55px;}
	.pills-section .content-wrap{padding: 0 1rem}
}
@media(max-width:767px){
	.pills-section .content-wrap{text-align:center; margin-bottom:1rem;}
	.savings-section .saving-item{margin-bottom:2rem}
}
@media only screen and (max-width: 620px) {
	.birth-control{background-size: 320px;}
	.birth-control .small-wrapper{width: 190px; margin: 0 auto;}
	.birth-control .section-heading br{display:block;}
	.birth-control ul{padding-left:1rem}
	.sub-heading{font-size:1rem;}
   #global_search_form input.form-control{padding: 20px 0 20px 15px; font-size: 14px;}
   #global_search_form button{ padding: 0 12px;}
   .treatment-wrapper{margin: 0 0.8rem;}
   .mHero-section{height: 200px;display:none !important;}
   h2 br, h3 br, p br{display:none;}
   .banner-cta-point{border-bottom: 2px solid #2D99CE;border-right:none; margin-bottom: 10px;} 
   .banner-cta-point a{font-weight: bold;}
   .footer-socials h3.subtitle{line-height:40px;}
   .section-heading{font-size:26px; line-height:30px; font-weight: bold; color: #000;}
   #banner_cta.redesign{box-shadow:none; margin-bottom:-12px;}
   .banner-cta-point:last-child {border-right: none;}
   .ctaOnly{height:30px;}
   .medicine p{min-height:60px;}
	
   .overlapStiker{top:auto;}
   .section-subttile{width:auto; margin:auto;font-size: 14px;} 
   #ui-id-6{height:auto !important}

   .custom-button{padding: 2px 25px 2px;}
   .bg-white-btn, .header-content .custom-button{display:none;}
   #banner_cta.redesign{margin-left: 25px !important; margin-right: 25px !important;margin-top:200px;}

   .hero-section, .mHero-section{ background-repeat: no-repeat; background-position: 0 bottom; background-size: 200px; padding:3rem 0 12rem; }

   #banner_cta .banner-cta>.banner-cta-point{height:auto;}

   .ctaOnly{height:auto;}
   .ctaOnly .sectionCTA { position: fixed; right: 0; left: 0; bottom:0; z-index: 10;margin-bottom: 24px; display:none;}
   .float-mobile{  -moz-box-shadow:2px 10px 18px #00000; -webkit-box-shadow: 2px 10px 18px #000; box-shadow:2px 10px 18px #000;}
    #banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:12px}
   .section-padding { padding: 40px 0 60px; }
   .section-subttile2{font-size: 14px;padding-bottom: 20px;}

   .know-option-section table{font-size:14px;}
    .know-option-section .col-25{width:25%;}
   .know-option-section .col-50{width:50%;}

   .largeFont{font-size:20px !important; }

}
@media(max-width:576px){
	.hero-title br{display:none;}
	.heading-wrap{margin-bottom:1.5rem !important;}
	.savings-section{background-size: 100%;}
	.savings-section .content-wrap{padding-left: 85px;background-size: 60px; background-position: 0 10px;}
	.prescription .prescription-wrap{display:block;}
	.prescription .prescription-item{margin-bottom:3rem}
	.prescription-item .div-line {
		background-color: #2f98ce;
		position: absolute;
		top: auto;
		bottom: -30px;
		left: calc(50%);
		width: 3px;
		height: 25px;
	}
	.prescription .prescription-item:last-child {margin-bottom: 0;}

	.know-option-section table{font-size:11px;}
    .know-option-section .col-25{width:25%;}
   .know-option-section .col-50{width:50%;}
 }
</style>
<section class="hero-section">
 <div class="container-fluid restrictedWidth">
	<div class="row">
		<!-- <div class="col-md-12 col-lg-3 order-lg-12">
			<div class="hero-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/twirla/twirla_top_logo.png" alt="Twirla" ></div>
		</div> -->
	   <div class="col-md-12 col-lg-6 offset-lg-3 order-lg-1">
		  <div class="hero-content text-white">
			 <h1 class="hero-title">Say "hello" to Twirla <br>and "goodbye" to daily <br>birth control</h1>
				<div class="hero-desc">
				 <div class="hero-text">
					<p>Discover the <strong>only</strong> weekly birth control patch that delivers a <strong>low dose</strong> of estrogen</p>
				 </div>
				 <div class="sectionCTA">
					<a href="https://app.pandiahealth.com/birth/control/" class="custom-button" target="_blank">Get Started</a>
				 </div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
</section>

<section class="birth-control section-padding">
    <div class="container">
        <div class="row">
		    <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">
				<div class="small-wrapper">
					<h3 class="sub-heading" style="visibility: hidden;">Claim More</h3>
					<h2 class="section-heading">birth control <br>freedom with:</h2>
					<ul>
						<li>No daily pill routine</li>
						<li>No medical procedures</li>
						<li>No devices inserted into your body</li>
					</ul>
				</div>
			</div>
        </div>
	</div>	
</section>
<section class="pills-section section-padding">
    <div class="container">
        <div class="row">
		    <div class="col-lg-12 text-center mb-5 mb-sm-3 heading-wrap">
				<h2 class="section-heading">3 patches vs 28 pills</h2>
				<h3 class="sub-heading">Per Month</h3>
			</div>	
        </div>
		<div class="row align-items-center">
			<div class="col-md-6 order-md-12">
				<div class="content-wrap">
					<p>Each month, change your Twirla patch for 3 straight weeks, and go patch free for 1 week. During your "off" week, you'll likely get your period.</p>
				</div>
			</div>
			<div class="col-md-6 order-md-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/twirla/patches-vs-pills.png" alt="Patches vs Pills">
			</div>
		</div>
	</div>	
</section>
<section class="savings-section section-padding">
    <div class="container">
        <div class="row">
		    <div class="col-lg-12 text-center mb-5 mb-sm-3 heading-wrap">
				<h2 class="section-heading">savings</h2>
			</div>	
        </div>
		<div class="row">
			<div class="col-md-6 col-lg-5 offset-lg-1 saving-item">
				<div class="content-wrap">
					<p>You could pay as little as $0 for your first month of Twirla with commercial insurance.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-5 saving-item">
				<div class="content-wrap">
					<p>No insurance? Pay $50/month for Twirla.</p>
				</div>
			</div>
		</div>
	</div>	
</section>
<section class="prescription section-padding">
	<div class="small-container">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-lg-4">
					<h3 class="sub-heading largeFont">Need a Prescription?</h3>
				</div>
				<div class="col-md-12 col-lg-8 devider-line">
					<div class="prescription-wrap">
						<div class="prescription-item">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/twirla/rx-icon.png" alt="List">
							</div>
							<p>Fill out our online health form ($20 doctor fee applies)</p>
							<div class="div-line"></div>
						</div>
						<div class="prescription-item">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/twirla/stethoscope-icon.png" alt="Stethoscope">
							</div>
							<p>Doctor reviews & writes prescription</p>
							<div class="div-line"></div>
						</div>
						<div class="prescription-item">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/twirla/free-delivery-icon.png" alt="Free Delivery">
							</div>
							<p>FREE Delivery of birth control</p>
							<div class="div-line"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center mt-5">
					<div class="sectionCTA">
						<a href="https://app.pandiahealth.com/birth/control/" class="custom-button" target="_blank">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ctaOnly d-block d-sm-none text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sectionCTA">   
					<a href="<?php echo $btnURL; ?>" class="custom-button float-mobile" style="color: #fff !important;"><?php echo $btnTxt; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="know-option-section section-padding">
    <div class="container">
        <div class="row">
		    <div class="col-lg-12 text-center mb-5">
				<h2 class="section-heading">know your options</h2>
 			</div>	
        </div>
		<div class="row align-items-center">
			<div class="col-md-12 order-md-12">
				<div class="content-wrap">
				<table class="table-striped table-responsive text-center">
					<thead>
						<tr class="table-borderless">
							<th scope="col" class="col-acne">Twirla</th>
							<th scope="col" class="col-acne">Ring</th>
							<th scope="col" class="col-acne">Pill</th>
						</tr>
					</thead>
					<tbody>
						<tr style="border-top:4px solid #009BD2 !important;">
							<td class="col-25"></td>
							<td class="col-50"> <strong>Frequency of use</strong></td>
							<td class="col-25"></td>
						</tr>
				
						<tr>
							<td>Weekly</td>
							<td>Monthly</td>
							<td>Daily</td>
						</tr>
						<tr>
							<td class="col-25"></td>
							<td class="col-50"><strong>Covered by insurance</strong></td>
							<td class="col-25"></td>
						</tr>
						<tr>
							<td><img src="<?php echo get_template_directory_uri() ?>/img/twirla/check.png" alt=""></td>
							<td><img src="<?php echo get_template_directory_uri() ?>/img/twirla/check.png" alt=""></td>
							<td><img src="<?php echo get_template_directory_uri() ?>/img/twirla/check.png" alt=""></td>
						</tr>
						<tr>
							<td class="col-25"></td>
							<td class="col-50"><strong>Price without insurance</strong></td>
							<td class="col-25"></td>
						</tr>
						<tr>
							<td>$50/month</td>
							<td>$200+/month</td>
							<td>$15+/pack</td>
						</tr>
						<tr>
							<td class="col-25"></td>
							<td class="col-50"><strong>Type of birth control</strong></td>
							<td class="col-25"></td>
						</tr>
						<tr>
							<td>Combination hormonal</td>
							<td>Combination hormonal</td>
							<td>Combination hormonal & progestin only</td>
						</tr>
						<tr>
							<td class="col-25"></td>
							<td class="col-50"><strong>Number of yearly deliveries</strong></td>
							<td class="col-25"></td>
						</tr>
						<tr style="border-bottom:4px solid #009BD2 !important;">
							<td>4-12</td>
							<td>1-12</td>
							<td>4-12</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	 </div>
	</div>	
</section>

<?php if( have_rows('faqs') ): while( have_rows('faqs') ) : the_row(); ?>
<section class="faq-section redesign" style="background-color:#fff;">
   <div class="container redesign">
      <div class="row faq-title">
         <div class="col text-center">
            <h2 class="title"><?php echo get_sub_field('section_heading'); ?></h2>
         </div>
      </div>
	 <div class="row faq-questions accordion">
      <?php $i = 1; $qnas = get_sub_field('qna'); 
	  foreach($qnas as $qna) : ?>
		   <p class="question"><?php echo $qna['question']; ?></p>
		   <div class="questions">
			  <?php echo $qna['answer']; ?>
		    </div>
     <?php $i+=2; endforeach; ?>
     </div> 
   </div>
</section>
<?php endwhile; endif; ?>

 
<script>
jQuery(document).ready(function(){
	var headerHeight = jQuery('header').outerHeight();
	jQuery('#page_content').css('padding-top', headerHeight - 2 + 'px');
});
</script>


<?php get_footer(); ?>
