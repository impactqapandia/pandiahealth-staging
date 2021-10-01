<?php 
/* Template Name: Period Optional Page */
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


.desktopOnly{display:block}
.mobileOnly{display:none}

.btnRight{margin-left:80px;}
.befefits-img-wrap img{width:80%;}
.period-description-wrapper{padding-top:140px;}

.period-section, .mPeriod-section{
	background-color: #d0ebf6;
 }

.period-title {color:#2d99ce; font-family: "Playfair Display"; font-size:45px; line-height: 20px; text-align: right; font-weight:bold; font-style: normal;padding-right:90px;}
.period-second-title{color:#2d99ce; font-family: "Playfair Display"; font-size:110px; line-height: 45px; font-weight:bold; font-style: normal;padding-bottom: 50px;}

.p-hashtag{color:#2d99ce;font-weight: bold;}

.p-heading{padding-top: 40px;padding-bottom:30px; text-align: center; font-family: "Playfair Display";font-weight: bold; font-size:46px;}
.p-subheading{text-align: center; font-family: "Playfair Display"; font-size:36px; padding-bottom:30px;}
.p-yotub-heading{text-align: center;font-family: "Playfair Display"; font-size:24px; padding-bottom:30px;}

.period-content {    width: 80%; margin: auto; padding-top: 50px;}


.p-youtube-sec{padding-bottom:40px;}
.youtube-wrap{text-align:center;margin:auto; padding-bottom:30px;}
.youtube-wrap iframe{border:20px solid #666767;}

.how-skip-period{padding-bottom:40px; }
.p-steps-wrapper{padding-top:20px; }
.p-steps-wrapper ul {list-style-type: none;}


.p-item li {padding-left:40px; line-height:1.2em;padding-bottom:40px;font-weight:bold;}
.p-item li h6 {font-weight:bold;}

   .item-1::before { content: ""; position: absolute; opacity: 1; top: 10px; left: 0px; background-image: url('<?php echo get_template_directory_uri(); ?>/img/period-page/p-item0.png'); width: 70px; height: 70px; background-size: 70px; }
   .item-2::before { content: ""; position: absolute; opacity: 1; top: 28%; left: 0px; background-image: url('<?php echo get_template_directory_uri(); ?>/img/period-page/p-item02.png'); width: 70px; height: 70px; background-size: 70px; }
   .item-3::before { content: ""; position: absolute; opacity: 1; top: 56%; left: 0px; background-image: url('<?php echo get_template_directory_uri(); ?>/img/period-page/p-item3.png'); width: 70px; height: 70px; background-size: 70px; }
       

.p-did-title{ padding-top: 20px; padding-bottom:10px; font-weight: bold; text-transform: uppercase; font-size: 16px;}
.p-did-hightlight{background-color: #fecc33; font-weight:700;}
 
.p-benefits-sec{padding-top: 40px;padding-bottom: 40px;}
.p-befefits-desc{font-weight: bold;font-size:20px; text-align: center;padding-bottom:30px;}

.benefits-sec{}
.benefits-item{}
.p-benefits-title{color:#2d99ce; text-transform: uppercase;font-weight:bold;}
.p-benefits-wrap{padding:0px 0 0px 0; line-height: 1.2em;margin-left: 25px;}
.p-benefits-li-title {font-weight: bold;}

.p-benefits-wrap::before{left: -24px; content: "\f00c"; font-family: 'FontAwesome'; position: relative; top:18px; color: #2d99ce;font-size:12px;}



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
}
.custom-button:before { content: "\f0da"; padding-right: 10px;}
.custom-button:after { content: "\f0d9"; padding-left: 10px;}
.custom-button:hover {
    background-color: #36B1ED !important; 
    color: #fff !important;
    border-color: #36B1ED !important;
    box-shadow: 0px 8px 16px rgb(45 153 206 / 50%);
}
 /* custom white button */
 .custom-button-white {
    background-color: #fff;
    color: #2d99ce;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    padding: 12px 40px 8px;
	display:inline-block;
    border-radius: 10px;
    margin-bottom:20px;
}
.custom-button-white:before { content: "\f0da"; padding-right: 10px;font-family: "Font Awesome 5 Free"; }
.custom-button-white:after { content: "\f0d9"; padding-left: 10px;font-family: "Font Awesome 5 Free"; }
.custom-button-white:hover {
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

.faq-section.redesign p.question.ui-state-active {
    transform: scale(1.02, 1);
    padding: 0.9em 0.5em 0.9em 0.9em;
}  
.section-subttile{font-size: 20px; padding-bottom:50px; width:40%; margin:auto;} 
.section-subttile2{font-size: 20px; padding-bottom:50px;} 

.subtitle{margin-bottom:30px !important; font-size:20px;}
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

@media (min-width: 1920px) and (max-width: 2560px)  {
   .period-title{text-align: center; padding-right: 0;}
   .period-description-wrapper{padding-top:200px;}
   .period-content{padding-top: 0;}

}

@media screen and (min-width: 1080px) and (max-width: 1920px) {
   .period-title {
    color: #2d99ce;
    font-family: "Playfair Display";
    font-size: 45px;
    line-height: 10px;
    text-align: left;
    font-weight: bold;
    font-style: normal;
    padding-left: 220px;
}

}

@media(max-width:1122px){
   .period-title {padding-right:0;}
   /* .period-content{width:100% !important;} */
 }


@media only screen and (min-width:601px) and (max-width:992px){
   .btnRight{margin-left:0;}
   /* .m-count{column-count:2; padding-bottom: 20px;} */
   .how-skip-period{padding-bottom:0;}
   .item-1::before { left:10px; top:50px;} 
   .item-2::before { left:10px;top:29%;}
   .item-3::before { left:10px;top:55%;}

   .p-steps-wrapper ul{margin-top:30px;}
   .p-subheading{font-size:20px;}
  
   .p-item li {line-height:1.5em;}

   .p-heading{font-size:40px;padding-bottom: 20px;}
   .youtube-wrap iframe{width:auto;height:auto;border:none;}
   .sectionCTA{text-align: center;padding-bottom: 50px;}
   .subtitle{text-align: center;}
   .period-description-wrapper { padding-top: 50px;}
   .period-title { color: #2d99ce; font-family: "Playfair Display"; font-size:39px; line-height: 14px; text-align: center; font-weight: bold; font-style: normal; padding-left: 120px;}
   .period-second-title{font-size:80px; text-align: center;}
   .period-img-wrap{order:2}

	.mHero-section{height: 200px;}
   .period-content{padding-top:0;}
   .period-content .subtitle {display:none;}
   .period-title .top-title{font-size:26px; line-height:32px}
   .period-title .middle-title{font-size:40px;line-height:45px;}
   .period-title .bottom-title{font-size:43px; line-height: 50px;}
}

@media only screen and (min-width:601px) and (max-width:768px){
   /* .custom-pad:last-child { margin-top:-20px;} */
  

   .btnRight{margin-left:0;}
   .how-skip-period{padding-bottom:0;}
   .item-1::before { left:10px; top:50px;} 
   .item-2::before { left:10px;top:29%;}
   .item-3::before { left:10px;top:55%;}

   .p-steps-wrapper ul{margin-top:30px;}
   .p-subheading{font-size:20px;}
  
   .p-item li {line-height:1.5em;}

   .p-heading{font-size:40px;padding-bottom: 20px;}
   .youtube-wrap iframe{width:auto;height:auto;border:none;}
   .sectionCTA{text-align: center;padding-bottom: 50px;}
   .subtitle{text-align: center;}
   .period-description-wrapper{padding-top:50px;}
   .period-title { color: #2d99ce; font-family: "Playfair Display"; font-size:39px; line-height: 14px; text-align: center; font-weight: bold; font-style: normal;}
   .period-second-title{font-size:80px;}
   .period-img-wrap{order:2}

	.mHero-section{height: 200px;}
   .period-content{padding-top:0;}
   .period-content{width: 80%; margin: auto; text-align: center;}
   .period-content .subtitle {display:none;}
   .period-title .top-title{font-size:26px; line-height:32px}
   .period-title .middle-title{font-size:40px;line-height:45px;}
   .period-title .bottom-title{font-size:43px; line-height: 50px;}
}
@media only screen and (max-width: 600px) {
   .faq-section.redesign {padding:40px 0;}
   .faq-section.redesign h2.title {font-size:28px;}
   .p-youtube-sec{padding-bottom:0;}
   .item-txt{font-size:14px;}
   .custom-button{text-align: center; width:260px; height:48px;}
   .custom-button-white{padding:12px 20px 8px; width:260px; height:48px;}
   .desktopOnly{display:none}
   .mobileOnly{display:block}
   
   .btnRight{margin-left:0;}
   .m-count{column-count:2;}
   .how-skip-period{padding-bottom:0;}
   .item-1::before { left: 10px; top: 50px; width: 60px; height: 60px; background-size: 60px; }
   .item-2::before { left: 10px; top: 34%; width: 60px; height: 60px; background-size: 60px; }
   .item-3::before { left: 10px; top: 58%; width: 60px; height: 60px; background-size: 60px; }

   .p-steps-wrapper ul{margin-top:30px;}
   .p-subheading{font-size:20px;}
  
   .p-item li {line-height:1.5em;padding-bottom: 10px;}

   .p-did-content{height:95px;}
   .p-did-content:nth-last-child(4){height:0;}
   .custom-pad:nth-child(5){margin-bottom:0px;}
   .custom-pad img{width:40%;}

   .p-heading{font-size:28px;padding-bottom: 20px;padding-top:30px;}
   .youtube-wrap iframe{width:auto;height:auto;border:none;}
   .sectionCTA{text-align: center;padding-bottom:40px;}
   .subtitle{text-align: center;}
   .period-description-wrapper{padding-top:50px;}
   .period-title { color: #2d99ce; font-family: "Playfair Display"; font-size:39px; line-height:10px; text-align: center; font-weight: bold; font-style: normal;padding-left: 120px;}
   .period-second-title{font-size:80px;text-align: center;}
   .period-img-wrap{order:2}


	.mHero-section{height: 200px;}
   .period-content{padding-top:0; width:80%;}
   .period-content .subtitle {display:none;}
   .period-title .top-title{font-size:26px; line-height:32px}
   .period-title .middle-title{font-size:40px;line-height:45px;}
   .period-title .bottom-title{font-size:43px; line-height: 50px;}
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
    .Button__FormStyledButton-p2mbjt-0 {border-radius:10px !important; width:300px;}
   
}
@media only screen and (max-width: 360px) {
   .custom-pad:nth-child(4){margin-bottom:24px;}
}

</style>


<div class="mPeriod-section d-block d-md-block d-lg-none d-xl-none"></div>   
<?php if( have_rows('header') ): while( have_rows('header') ) : the_row(); ?> 
<section class="period-section">
<div class="container-fluid restrictedWidth">
   <div class="row">
<div class="col-md-12 col-lg-6 period-img-wrap">
<div class="period-content">

      <img class="desktopOnly" src="<?php echo get_template_directory_uri(); ?>/img/period-page/Pandia_Health_Periods_Optional.png" alt="">
      <img class="mobileOnly" src="<?php echo get_template_directory_uri(); ?>/img/period-page/p-mobile-banner.png" alt="">
</div>
</div>
<div class="col-md-12 col-lg-5">
<div class="period-description-wrapper">
<div class="col-md-12">
   <div class="period-head-wrap">
               <p class="period-title"> <?php echo get_sub_field('tagline'); ?></p>
               <p class="period-second-title"><?php echo get_sub_field('heading'); ?></p>
   </div>
   <p class="subtitle"><?php echo get_sub_field('description'); ?> <br><span class="p-hashtag"><?php echo get_sub_field('hashtag'); ?></span></p>
<div class="sectionCTA d-md-block">   
   <a href="<?php echo get_sub_field('url'); ?>" class="custom-button"><?php echo get_sub_field('button_text'); ?></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
 <?php endwhile; endif; ?>


 <?php if( have_rows('skip_steps') ): while( have_rows('skip_steps') ) : the_row(); ?> 

<section class="how-skip-period" style="background-color:#f8f8fa;">
   <div class="container">
         <h2 class="p-heading"><?php echo get_sub_field('heading'); ?></h2>
   </div>
   <div class="container-fluid restrictedWidth">
      <div class="row">
<div class="col-md-12 col-lg-6">
   <div class="period-content">
         <img src="<?php  echo get_sub_field('image'); ?>" alt="">
   </div>
</div>
<div class="col-md-12 col-lg-5">
   <div class="p-steps-wrapper">
   <ul class="p-item">
   
   <?php $count=1; $steps = get_sub_field('steps');  foreach($steps as $step) : ?>
         <li class="item-<?php echo $count++; ?>"> <h6><?php echo $step['heading']; ?></h6> <p class="item-txt"><?php echo $step['description']; ?></p> </li>
         <?php endforeach; ?>
   </ul>
   
   <div class="sectionCTA btnRight d-md-block">   
      <a href="https://app.pandiahealth.com/" class="custom-button">Get Started</a>
   </div>
</div>
   </div>
</div>
   </div>
</section>
<?php endwhile; endif; ?>


<?php if( have_rows('period_safe_skip') ): while( have_rows('period_safe_skip') ) : the_row(); ?> 
<section class="p-youtube-sec" style="background-color:<?php echo get_sub_field('background_color'); ?>">
   <div class="container">
         <h2 class="p-heading"><?php echo get_sub_field('heading'); ?></h2>
         <h3 class="p-subheading text-center"><strong><?php echo get_sub_field('sub_text_first'); ?></strong> <?php echo get_sub_field('sub_text_second'); ?></h3>
   </div>
   <div class="container-fluid restrictedWidth">
      <div class="row">
<div class="col-md-12 col-lg-12">
   <div class="youtube-wrap">
      <?php echo get_sub_field('period_skip_video'); ?>
   </div>
</div>

   </div>
</div>
   </div>
</section>
<?php endwhile; endif; ?>


<?php if( have_rows('did_you_know') ): while( have_rows('did_you_know') ) : the_row(); ?> 

<section class="p-did-you-sec" style="background-color:#d0ebf6;">
   <div class="container">
         <h2 class="p-heading mb-2"><?php echo get_sub_field('section_heading'); ?></h2>
    </div>

 <div class="container m-count">
   <div class="row text-center pb-4">
            <?php $steps = get_sub_field('steps'); 
               foreach($steps as $step) : ?>
            <div class="col-md-4 custom-pad">
               <img src="<?php echo $step['icon']; ?>" alt="">
               <h5 class="p-did-title"><?php echo $step['heading']; ?></h5>
               <?php echo $step['text']; ?>  
            </div>
            <?php endforeach; ?>
            
   </div>
</div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('benifits') ): while( have_rows('benifits') ) : the_row(); ?> 

<section class="benefits-sec" style="background-color:#fff;">
   <div class="container">
         <h2 class="p-heading"><?php echo get_sub_field('section_heading'); ?></h2>
         <p class="p-befefits-desc"><?php echo get_sub_field('text'); ?></p>
   </div>
  
  
   <div class="container">
      <div class="row">
      <div class="col-md-12 benefits-item mb-5 d-inline-flex">
         <div class="col-xs-1 befefits-img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/period-page/benefit-medical-icon.png" alt="">
         </div>
            <div class="col-md-11">
            <h5 class="p-benefits-title">MEDICAL CONDITIONS THAT COULD BENEFIT</h5>
            <!-- <p style="margin-bottom:5px;">Medical conditions that could benefit from fewer/No periods:</p> -->
              
               <div class="row" style="margin-top:-10px;"> 
               <div class="col-md-5">

                <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">Acne</div>
                 </div>

                     <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">Diabetes</div>
                     <!-- <div>Less cycling of hormones = stable hormones = better glucose control</div> -->
                     </div>
                     
                     <div class="p-benefits-wrap">
                      <div class="p-benefits-li-title">Anemias </div>
                      </div>

                     <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">HIV, Hepatitis B, C</div>
                     <!-- <div>To avoid excess blood and infection risk to others</div> -->
                     </div>

               </div>
               <div class="col-md-1"></div>
               <div class="col-md-5">
                  <div class="p-benefits-wrap">
                        <div class="p-benefits-li-title">Bleeding disorders </div>
                  </div>

                        <div class="p-benefits-wrap">
                           <div class="p-benefits-li-title">PCOS</div>
                           <!-- <div>Polycystic ovarian syndrome</div> -->
                        </div>
                        
                        <div class="p-benefits-wrap">
                        <div class="p-benefits-li-title">Seizure disorder </div> 
                        <!-- <div>Less cycling of hormones = stable hormones = calmer state</div> -->
                        </div>
                  </div>
                  </div>
               </div>
          </div>
      </div>

      <div class="col-md-12 benefits-item mb-5 d-inline-flex p-0">
         <div class="col-xs-1 befefits-img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/period-page/benefits-lifestyle-icon.png" alt="">
         </div>
            <div class="col-md-11">
            <h5 class="p-benefits-title" style="margin-bottom:0px;">lifestyle</h5>
               
               <div class="row"> 
               <div class="col-md-5">

                <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">Lowers embarrassment</div>
                 </div>

                     <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">Less anemia</div>
                      </div>
                     
                     <div class="p-benefits-wrap">
                      <div class="p-benefits-li-title">No more painful periods </div>
                      </div>
               </div>

               <div class="col-md-1"></div>
               <div class="col-md-5">
                  
                     <div class="p-benefits-wrap">
                        <div class="p-benefits-li-title">Decreased risk of endometrial cancer</div>
                     </div>

                     <div class="p-benefits-wrap">
                           <div class="p-benefits-li-title">Decreased risk of ovarian cancer</div>
                     </div>

                  </div>
                  </div>
               </div>

          </div>

          <div class="col-md-12 benefits-item mb-5 d-inline-flex p-0">
         <div class="col-xs-1 befefits-img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/period-page/benefits-finalcial-icon.png" alt="">
         </div>
            <div class="col-md-11">
            <h5 class="p-benefits-title" style="margin-bottom:0px;">financial</h5>
               
               <div class="row"> 
               <div class="col-md-5">

                <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">Less $$ spent on feminine hygiene products</div>
                 </div>

                     <div class="p-benefits-wrap">
                     <div class="p-benefits-li-title">True Cost of Your <a href="<?php echo get_site_url(); ?>/the-true-cost-of-your-period/" style="color:#2d99ce;">click here</a> to read more about it</div>
                      </div>
               </div>

               <div class="col-md-1"></div>
               <div class="col-md-5">
                  
                     <div class="p-benefits-wrap">
                        <div class="p-benefits-li-title">Fewer missed work/school days due to menstrual pain</div>
                     </div>

                     <div class="p-benefits-wrap">
                           <div class="p-benefits-li-title">Decrease landfill</div>
                     </div>

                  </div>
                  </div>
               </div>
               
          </div>
      </div>

   </div>

   </div>
</section>
<?php endwhile; endif; ?>


<?php if( have_rows('faqs') ): while( have_rows('faqs') ) : the_row(); ?> 
<section class="faq-section redesign" style="background-color:#f8f8fa;">
   <div class="container redesign">
      <div class="row faq-title">
         <div class="col text-center">
            <h2 class="title"><?php echo get_sub_field('section_heading'); ?></h2>
         </div>
      </div>
      <?php 
       $faqs = get_sub_field('qna'); 
         foreach($faqs as $faq) :
       ?>
       <div id="" class="row faq-questions accordion ui-accordion ui-widget ui-helper-reset" role="tablist">
        <div class="col">
            <div class="transform">
               <p class="question ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-1" aria-selected="false" aria-expanded="false" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span><?php echo $faq['question']; ?></p>
               <div class="row questions ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-1 ?>" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
               <?php echo $faq['answer']; ?>
               </div>
            </div>
         </div>
      </div>
      <?php endforeach; ?>
   </div>
</section>
<?php endwhile; endif; ?>


<?php if( have_rows('tedx_talk') ): while( have_rows('tedx_talk') ) : the_row(); ?> 
<section class="p-youtube-sec" style="background-color:<?php echo get_sub_field('background_color'); ?>">
   <div class="container">
         <h2 class="p-heading"><?php echo get_sub_field('section_heading'); ?></h2>
         <p class="p-yotub-heading"><?php echo get_sub_field('text'); ?></p>
   </div>
   <div class="container-fluid restrictedWidth">
      <div class="row">
<div class="col-md-12 col-lg-12">
   <div class="youtube-wrap">
   <!-- https://www.youtube.com/embed/uJ7-_MOjEeY -->
   <iframe width="760" height="415" src="<?php echo get_sub_field('video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
</div>
   </div>
</div>
   </div>
</section>
<?php endwhile; endif; ?>

 
<section class="p-skip-sec" style="background-color:#2d99ce;">
   <div class="container">
         <h2 class="p-heading text-white">ready to skip y0ur period? </h2>
         <p class="p-yotub-heading text-white">No more camps, migraines, mood swings, sanitary emergencies. <br>
         <b class="font-weight-bold" style="font-family: 'Josefin Sans';">#PeriodsOptional</b>
</p>
   </div>
   <div class="container-fluid restrictedWidth">
      <div class="row">
<div class="col-md-12 col-lg-12">
               <div class="sectionCTA text-center pb-4">   
                     <a href="https://app.pandiahealth.com/" class="custom-button-white">Get Started</a>
               </div>
</div>
   </div>
</div>
   </div>
</section>



<?php get_footer('acne'); ?>
