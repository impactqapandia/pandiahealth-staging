<?php 
/* Template Name: Partner Landing Page */
get_header(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
.restrictedWidth{max-width:1600px}
.section-padding{padding: 45px 0;}
.section-heading{
	color: #2A3445;
	font-family: Playfair Display;
    font-weight: 600;
    font-size: 48px;
    line-height: 50px;
    letter-spacing: 0.03em;
	margin-bottom: 20px;
}
#page_banner{display: none;}
.hero-section, .mHero-section{
	background-image: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-banner.jpg');
	/* background-color: #75C4C9; */
    background-repeat: no-repeat;
    background-position: right;
	background-size: cover;
    padding: 3rem 0;
}
.hero-title span{display:block; font-family: 'Playfair Display',serif; color:#fff;}
.hero-title .top-title{font-size:46px; line-height:50px; font-weight:300;}
.hero-title .middle-title{font-size:80px; line-height:85px; font-weight:300;}
.hero-title .bottom-title{font-size:86px; line-height:90px; font-weight:700;}
.hero-section .subtitle{
	position: relative;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 500;
}
.hero-section .subtitle:after {
    content: "";
    display: block;
    margin: 0 auto;
    width: 27vw;
    border-bottom: 1.5px solid #fff;
}
.custom-button:after, .custom-button:before { 
	font-family: "Font Awesome 5 Free"; 
	display: inline-block; 
	font-weight:900; 
}
.hero-section .custom-button{margin-top:15px;}

/* custom button */
.custom-button {
    background-color: #2D99CE;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    padding: 12px 40px 8px;
	display:inline-block;
    border-radius: 10px;
	/* -webkit-border-radius: 10px;
    transition: background-color .3s, color .3s;
    -webkit-transition: background-color .3s, color .3s;
    -moz-transition: background-color .3s, color .3s;
	box-shadow: 0 5px 10px -3px rgb(0 0 0 / 35%); */
}
.custom-button:before { content: "\f0da"; padding-right: 10px;}
.custom-button:after { content: "\f0d9"; padding-left: 10px;}
.custom-button:hover {
    background-color: #36B1ED !important; 
    color: #fff !important;
    border-color: #36B1ED !important;
    box-shadow: 0px 8px 16px rgb(45 153 206 / 50%);
}
.tabletsImg{margin:70px 0 20px;}
.displayTbl{display:table; height:100%;}
.displayTbl .vAlign{display:table-cell; vertical-align:middle;}
.vAlign a{text-transform: uppercase;}
.overlapStiker{position:absolute; right: 52px; top: 18px;}
.overlapStiker span{display: block; font-size: 8px; font-weight: 600; margin-top:8px;}
.medicine p{ margin-bottom: 10px; line-height: 20px;  font-weight: 600;}
#banner_cta .banner-cta>.banner-cta-point{height:60px;}
#banner_cta .banner-cta>.banner-cta-point h3, #banner_cta .banner-cta>.banner-cta-point p {
   letter-spacing:0;
   text-align: left;
   color: #2D99CE !important;
}
.banner-cta-point{border-right:1px solid #2D99CE;min-height:45px;}
.banner-cta-point:last-child{border-right:none;}

#banner_cta.redesign .banner-cta img{width:auto;}
#banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:15px; color:#2D99CE !important; font-weight:bold;}
.font-10{font-size:10px;}
.medsOnline .medsBox {padding: 0 2rem;}
.medsOnline h3{text-transform: uppercase; font-size: 18px; line-height:24px; font-weight: 600; }
span.number { border: 3px solid #2E99CF; padding: 2px 8px; border-radius: 100%; width: 50px; height: 50px; font-size: 30px; font-weight: 600; color: #2E99CF; display: inline-block; background-color: #F2F2F2; margin-bottom: 20px; }

.acne-ul-wrapper{ line-height:1.5em; }

.acne-ul-wrapper li{   
      padding-bottom: 20px;
      font-size: 20px;
      list-style: none;
      background: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-right-icon.png');
      background-repeat: no-repeat;
      padding-left: 90px;
      margin-left: 0;
	  font-weight:bold;
      }
.acne-ul-wrapper-x{line-height:1.5em;}
.acne-ul-wrapper-x li{   
      padding-bottom: 20px;
      font-size: 20px;
      list-style: none;
      background: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-right-x-icon.png');
      background-repeat: no-repeat;
      padding-left: 90px;
      margin-left: 0;
	  font-weight:bold;
      }
.doctorsImgs {
    display: flex;
    position: relative;
    height: 350px;
    max-width: 900px;
    width: 100%;
    margin: 0 auto;
}
.dctrImg { position: absolute;}
.dctrImg img {
    border-radius: 100%;
    width: 330px;
    height: 330px;
    border: 7px solid #0A9AC7;
}
.doctorsImgs .dctrImg:nth-child(2) {left: 32%; z-index: 99;}
.doctorsImgs .dctrImg:last-child {right: 0;}
.faq-section.redesign p.question.ui-state-active {
    transform: scale(1.02, 1);
    padding: 0.9em 0.5em 0.9em 0.9em;
}  
.section-subttile{font-size: 20px; padding-bottom:50px; width:40%; margin:auto;} 
.section-subttile2{font-size: 20px; padding-bottom:50px;} 

.subtitle{margin-bottom:30px !important;}
.newsletter-feilds input {width: 400px; border-radius: 10px 0px 0 10px; border: 1px solid #ccc; padding:10px;}
#menu-item-4509,#menu-item-8167,#menu-item-8597{display:none;}
.three-month-mob{display:none;}
.three-month-desktop{display:block;}
.questions  p{font-family: 'Josefin Sans';}

.TextInput__FormStyledTextInput-sc-1o6de9f-0 {width:400px !important; height:40px !important;}
.Button__FormStyledButton-p2mbjt-0 {border-radius:0px 10px 10px 0 !important; width:200px;}

/* subscribe btn arrow */
.Button__FormStyledButton-p2mbjt-0:before { content: "\f0da"; padding-right: 10px; font-family: 'FontAwesome'; display: inline; }
.Button__FormStyledButton-p2mbjt-0:after { content: "\f0d9"; padding-left: 10px; font-family: 'FontAwesome'; display: inline; }
/* end subscribe btn */
 
.Button__FormStyledButton-p2mbjt-0:hover {background-color: #36B1ED !important;
    color: #fff !important;
    border-color: #36B1ED !important;
    box-shadow: 0px 8px 16px rgb(45 153 206 / 50%);
}


@media(max-width:992px){
	.mHero-section{height:300px;}
	.hero-section{background-image:none; background-color: #fff; padding:0rem 0;}
	.hero-title span{color: #75C4C9; }
	.doctorsImgs{height:430px; max-width:510px;}
	.dctrImg img{width:250px; height:250px;}
	.doctorsImgs .dctrImg:nth-child(2){left:25%; bottom:0}
	.doctorsImgs .dctrImg:last-child{right:15px;}
}

@media(max-width:768px){
	/* .mHero-section{height:300px;} */
	.hero-section{background-image:none; background-color: #fff; padding:2rem 0;}
	.hero-title span{color: #75C4C9; }
	.doctorsImgs{height:430px; max-width:510px;}
	.dctrImg img{width:250px; height:250px;}
	.doctorsImgs .dctrImg:nth-child(2){left:25%; bottom:0}
	.doctorsImgs .dctrImg:last-child{right:15px;}
}
@media only screen and (max-width: 600px) {
	.mHero-section{height: 200px;}
   .hero-content .subtitle {display:none;}
   .hero-title .top-title{font-size:26px; line-height:32px}
   .hero-title .middle-title{font-size:40px;line-height:45px;}
   .hero-title .bottom-title{font-size:43px; line-height: 50px;}
	h2 br, h3 br, p br{display:none;}
   .banner-cta-point{border-bottom: 2px solid #2D99CE;border-right:none; margin-bottom: 10px;} 
   .banner-cta-point a{font-weight: bold;}
   .footer-socials h3.subtitle{line-height:40px;}
   .acne-ul-wrapper{padding-left:10px;}
   .acne-ul-wrapper-x{padding-left:10px;}
   .section-heading{font-size:35px;line-height: 1em; font-weight: bold; color: #000;}
   .doctorsImgs {height: 280px; max-width: 320px;}
   .dctrImg img{width:160px; height:160px;}
   #banner_cta.redesign{box-shadow:none; margin: 0 auto 10px;}
   .banner-cta-point:last-child {border-right: none;}
   .ctaOnly{height:30px;}
   .medicine p{min-height:60px;}
   .acne-ul-wrapper li {padding-left:70px;margin:10px;}
   .acne-ul-wrapper-x{display:none;}
   .three-month-mob{display:block; text-align: center; margin: auto;}
   .three-month-desktop{display:none !important;}
   .overlapStiker{top:auto;}
   .section-subttile{width:auto; margin:auto;} 
   #ui-id-6{height:auto !important}
   .TextInput__FormStyledTextInput-sc-1o6de9f-0 {width:auto !important; border-radius:10px !important;}

   .lnviXl.lnviXl {display: inline-block; width: 300px;}
   /* .iLvYxn.iLvYxn.iLvYxn.iLvYxn.iLvYxn.iLvYxn{width:300px;} */
   .Button__FormStyledButton-p2mbjt-0 {border-radius:10px !important; width:300px;}


}

</style>


<div class="mHero-section d-block d-md-block d-lg-none d-xl-none"></div>   

<?php if( have_rows('header') ): while( have_rows('header') ) : the_row(); 
	$btnTxt = get_sub_field('button_text');
	$btnURL = get_sub_field('url');
 ?>
   <section class="hero-section">
      <div class="container-fluid restrictedWidth">
         <div class="row">
            <div class="col-md-12 col-lg-6">
               <div class="hero-content text-center">
                  <p class="subtitle text-white d-xs-none"><?php echo get_sub_field('tagline'); ?></p>
                  <h1 class="hero-title">
                     <?php echo get_sub_field('heading'); ?>
                  </h1>
                  <div class="sectionCTA d-none d-md-block">   
                     <a href="<?php echo get_sub_field('url'); ?>" class="custom-button"><?php echo get_sub_field('button_text'); ?></a>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </section>
<?php endwhile; endif; ?>

<section id="banner_cta" class="redesign">
    <div class="container redesign">
        <div class="row">
		    <div class="col-md-12">
			   <div class="banner-cta">

               <?php 
                  if( have_rows('pointers') ): while( have_rows('pointers') ) : the_row();
                  $services = get_sub_field('services');    
                  foreach($services as $service) :
                ?>

					<div class="banner-cta-point col-md-12 col-lg-4">
						<a href="<?php echo $service['url']; ?>">
							<img src="<?php echo $service['icon']; ?>" alt="Delivery Service"> 
						</a>
						<h3>
							<a href="<?php echo $service['url']; ?>">
							<?php echo $service['text']; ?>                             
							</a>
						</h3>
					</div>

					<?php endforeach; endwhile;  endif; ?>

				</div>
			</div>
        </div>
</section>
<section class="ctaOnly d-block d-sm-none text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sectionCTA">   
					<a href="<?php echo $btnURL; ?>" class="custom-button" style="color: #fff !important;"><?php echo $btnTxt; ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if( have_rows('acne_medication') ): while( have_rows('acne_medication') ) : the_row(); ?>
<section class="section-padding tabletSection" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section-heading"><?php echo get_sub_field('heading'); ?></h2>
            <?php echo get_sub_field('text'); ?>
			</div>
		</div>
		<div class="row">
            <!-- middle section -->
			<div class="col-md-4 order-md-2">
         <?php echo get_sub_field('medicine_image'); ?>
			</div>
         <!-- end middle section -->

         <!-- left section -->
			<div class="col-6 col-md-4 order-md-1 text-center medicine">
               <?php echo get_sub_field('medicine_description_left'); ?>
			</div>
         <!-- end left section -->

         <!-- right section -->
			<div class="col-6 col-md-4 order-md-12 text-center medicine">
             <?php echo get_sub_field('medicine_description_right'); ?>
			</div>
         <!-- end right section -->

		</div>
		<div class="row">
			<p class="text-uppercase three-month-mob">*Based on a 3 months minimum</p>
		</div>
	</div>
</section>
<?php  endwhile;  endif; ?>

<?php if( have_rows('online_steps') ): while( have_rows('online_steps') ) : the_row(); ?>
<section class="section-padding medsOnline" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="section-heading"><?php echo get_sub_field('section_heading'); ?></h2>
			</div>
		</div>
		<div class="row">
         <?php  $steps = get_sub_field('steps'); foreach($steps as $step) : ?>

			<div class="col-md-4 text-center medsBox">
				<span class="number"><?php echo $step['button_text']; ?></span>
				<h3><?php echo $step['heading']; ?></h3>
				<p><?php echo $step['text']; ?></p>
			</div>

         <?php endforeach; ?>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('benifits') ): while( have_rows('benifits') ) : the_row(); ?>
<section class="section-padding medsOnline" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
      <div class="col-md-12 text-center">
				<h2 class="section-heading"><?php echo get_sub_field('section_heading'); ?></h2>
				<p class="section-subttile"><?php echo get_sub_field('text'); ?></p>
		 </div>
		</div>
	<div class="row">
      <div class="col-md-1"></div>
			<div class="col-md-5">  
               <ul class="acne-ul-wrapper">
               <?php  $pros = get_sub_field('pros'); foreach($pros as $pro) : ?>
               <li> <?php echo $pro['list_item']; ?></li>
               <?php endforeach; ?>
               </ul>
         </div>
			<div class="col-md-5">
               <ul class="acne-ul-wrapper-x">
               <?php  $cons = get_sub_field('cons'); foreach($cons as $con) : ?>
               <li> <?php echo $con['list_item']; ?></li>
               <?php endforeach; ?>
                </ul>
         </div>
         <div class="col-md-1"></div>
		</div>
      <div class="sectionCTA d-none d-md-block text-center">   
		      <a href="<?php echo get_sub_field('url'); ?>" class="custom-button"><?php echo get_sub_field('button_text'); ?></a>
	   </div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('our_doctors') ): while( have_rows('our_doctors') ) : the_row(); ?>
<section class="section-padding medsOnline" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto text-center">
				<h2 class="section-heading"><?php echo get_sub_field('section_heading'); ?></h2>
				<p class="section-subttile2"><?php echo get_sub_field('text'); ?></p>
			</div>
		</div>
	<div class="row">
      <div class="col-md-12 mb-5 text-center">
		<div class="doctorsImgs">
      <?php  $doctors = get_sub_field('doctors'); foreach($doctors as $doctor) : ?>
			<div class="dctrImg"><img src="<?php echo $doctor['doctor_image'] ?>" alt="<?php echo $doctor['doctor_name'] ?>"></div>
      <?php endforeach; ?>
		</div>
		<div class="sectionCTA d-none d-md-block mt-4 text-center">   
			<a href="<?php echo get_sub_field('url'); ?>" class="custom-button"><?php echo get_sub_field('button_text'); ?></a>
		</div>
      </div>
	</div>
      
	</div>
</section>
<?php endwhile; endif; ?>
 
<?php if( have_rows('faqs') ): while( have_rows('faqs') ) : the_row(); ?>
<section class="faq-section redesign" style="background-color:#fff;">
   <div class="container redesign">
      <div class="row faq-title">
         <div class="col text-center">
            <h2 class="title"><?php echo get_sub_field('section_heading'); ?></h2>
         </div>
      </div>
      <?php $i = 1; $qnas = get_sub_field('qna'); foreach($qnas as $qna) : ?>
      <div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
         <div class="col">
            <div class="transform">
               <p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-<?php echo $i; ?>" aria-controls="ui-id-<?php echo $i+1; ?>" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><?php echo $qna['question']; ?></p>
               <div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-<?php echo $i+1; ?>" aria-labelledby="ui-id-<?php echo $i; ?>" role="tabpanel" aria-hidden="true" style="display: none;">
                  <?php echo $qna['answer']; ?>
                  <?php /* <a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
                     <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="unhover-arrow" alt="Right Arrow" data-lazy-src="/wp-content/themes/pandiahealth/img/arrow-right.png">
                     <noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
                     <span>GET STARTED </span>
                     <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="unhover-arrow" alt="Left Arrow" data-lazy-src="/wp-content/themes/pandiahealth/img/arrow-left.png">
                     <noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
                  </a> */ ?>
               </div>
            </div>
         </div>
      </div>
     <?php $i+=2; endforeach; ?>
      
   </div>
</section>
<?php endwhile; endif; ?>

<?php get_footer('acne'); ?>
