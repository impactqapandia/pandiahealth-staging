<?php 
/* Template Name: Acne Landing Page */
get_header('acne'); ?>
<style>

.header-content ul#menu-nav>li a {
	font-size: 14px;
	line-height:2rem;
	font-family: 'Montserrat', sans-serif;
	letter-spacing: 1px;
	font-weight:500;
}
.header-content ul#menu-nav>li .sub-menu li a{line-height:1rem;}
.header-content .logo img{max-width:170px; width:100%;}
.header-content{justify-content: left;}
.header-content .left-side{ max-width: 550px;}
.header-content ul#menu-nav>li a, .header-content li.menu-item-has-children .sub-menu li a{text-transform:none;}
.col-acne {color:#009BD2 !important;}
.bg-acne{background-color:#D0EBF6;}

@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');


html, body{font-family: 'Montserrat', sans-serif;}
h2.title { text-transform: none; }
/* body{font-family: 'Montserrat', sans-serif;} */

.restrictedWidth{max-width:1700px !important}
.section-padding{padding:64px 0;}
.section-heading{
	color: #2A3445;
	font-family: Playfair Display;
    font-weight: 600;
    font-size: 48px;
    line-height: 50px;
    letter-spacing: 0.03em;
	margin-bottom: 20px;
}
.section-heading a{color:#2A3445;}
#page_banner{display: none;}
.hero-section, .mHero-section{
	background-image: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/hero-image1.png'),linear-gradient(89deg, rgb(111 196 200) 19%, rgb(99 191 198) 73%);
    background-repeat: no-repeat;
    background-position: right;
	background-size: contain;
    padding: 3rem 0;
 
    
}
.hero-title span{display:block; font-family: 'Playfair Display',serif; color:#fff;}
.hero-title .top-title{font-size:46px; line-height:50px; font-weight:300;}
.hero-title .middle-title{font-size:80px; line-height:85px; font-weight:300;}
.hero-title .bottom-title{font-size:86px; line-height:80px; font-weight:700;}
.hero-title .last-title{font-size:46px; line-height:50px; font-weight:300;margin-bottom:30px;}

.hero-section .subtitle{
	position: relative;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 500;
}
.hero-section .subtitle span{position:relative;}
.hero-section .subtitle span:after {
    content: "";
    border-bottom: 1.5px solid #fff;
    width: 100%;
    position: absolute;
    bottom: -4px;
    left: 0;
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
    padding: 2px 40px 2px;
    border-radius: 100px;
	display: inline-flex;
    align-items: center;
}
.custom-button:before { content: "\f0da"; padding-right: 10px;font-size: 30px;vertical-align: middle;}
.custom-button:after { content: "\f0d9"; padding-left: 10px;font-size: 30px;vertical-align: middle;}
.header-content .custom-button{display: inline; padding: 12px 26px 12px;}
.header-content .custom-button:before{padding-right: 3px;}
.header-content .custom-button:after{padding-left: 3px;}
.custom-button:hover {
    background-color: #36B1ED !important; 
    color: #fff !important;
    border-color: #36B1ED !important;
    box-shadow: 0px 8px 16px rgb(45 153 206 / 50%);
}
.tabletsImg{margin:70px 0 20px;}
.displayTbl{display:table; height:100%;}
.displayTbl .vAlign{display:table-cell; vertical-align:middle;}
.overlapStiker{position:absolute; right: 52px; top: 18px;}
.overlapStiker span{display: block; font-size: 8px; font-weight: 600; margin-top:8px;}
.medicine p{ margin-bottom: 10px; line-height: 20px;  font-weight: 600;}
#banner_cta .banner-cta>.banner-cta-point{height:60px;}
#banner_cta .banner-cta>.banner-cta-point h3, #banner_cta .banner-cta>.banner-cta-point p {
   letter-spacing:0;
   text-align: left;
   align-self:center;
   color: #2D99CE !important;
}
.banner-cta-point{border-right:1px solid #2D99CE;min-height:45px;}
.banner-cta-point:last-child{border-right:none;}

#banner_cta.redesign .banner-cta img{width:auto;}
#banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:15px; color:#2D99CE !important; font-weight:bold;font-family: 'Montserrat', sans-serif;}
.font-10{font-size:10px;}
.medsOnline .medsBox {padding: 0 2rem;}
.medsOnline h3{text-transform: uppercase; font-size: 18px; line-height:24px; font-weight: 600; }
span.number { border: 3px solid #2E99CF; padding: 2px 8px; border-radius: 100%; width: 50px; height: 50px; font-size: 30px; font-weight: 600; color: #2E99CF; display: inline-block; background-color: #F2F2F2; margin-bottom: 20px; }

.acne-ul-wrapper, .acne-ul-wrapper-x{ line-height:1.5em; margin-top:1.5rem;}

.acne-ul-wrapper li{   
      padding-bottom: 20px;
      font-size: 1rem;
      list-style: none;
      background: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-right-icon.png');
      background-repeat: no-repeat;
      padding-left: 90px;
      margin-left: 0;
	  font-weight:bold;
      }
.acne-ul-wrapper-x li{   
      padding-bottom: 20px;
      font-size: 1rem;
      list-style: none;
      background: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-right-x-icon.png');
      background-repeat: no-repeat;
      padding-left: 90px;
      margin-left: 0;
	  font-weight:bold;
      }

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
.newsletter-feilds input {width: 400px; border-radius: 10px 0px 0 10px; border: 1px solid #ccc; padding:10px;}
#menu-item-4509,#menu-item-8167,#menu-item-8597{display:none;}
.three-month-mob{display:none;}
.three-month-desktop{display:block;}
.questions p{font-family: 'Montserrat', sans-serif;}


.TextInput__FormStyledTextInput-sc-1o6de9f-0 {width:400px !important; height:40px !important;}
.Button__FormStyledButton-p2mbjt-0 {border-radius:100px !important; width:200px;background-color:#fff !important;color:#2D99CE !important;}

/* subscribe btn arrow */
.Button__FormStyledButton-p2mbjt-0:before { content: "\f0da"; padding-right: 10px; font-family: 'FontAwesome'; display: inline; }
.Button__FormStyledButton-p2mbjt-0:after { content: "\f0d9"; padding-left: 10px; font-family: 'FontAwesome'; display: inline; }
/* end subscribe btn */
 
.Button__FormStyledButton-p2mbjt-0:hover {background-color: #36B1ED !important;
    color: #fff !important;
    border-color: #36B1ED !important;
    box-shadow: 0px 8px 16px rgb(45 153 206 / 50%);
}
.how-it-wrapper{padding-top:64px;}
.howitworks-box1{margin-bottom:64px;padding:0;margin-left:10px;margin-right:10px;}
.howitworks-box2{margin-bottom:64px;padding:0;margin-left:10px;margin-right:10px;margin-top:36px;}


/* steps progress bar */
/*Vertical Steps*/
.list-group-item {background-color:transparent;}
.list-group.vertical-steps{
  padding-left:10px;
  padding-top: 30px;
}
.list-group.vertical-steps .list-group-item{
  border:none;
  border-left:3px solid #ece5dd;
  box-sizing:border-box;
  border-radius:0;
  counter-increment: step-counter;
  padding-left:20px;
  padding-right:0px;
  padding-bottom:32px;  
  padding-top:0px;
}
.list-group.vertical-steps .list-group-item.active{
  background-color:transparent;
  color:inherit;
}
.list-group.vertical-steps .list-group-item:last-child{
  border-left:3px solid transparent;
  padding-bottom:0;
}
.list-group.vertical-steps .list-group-item::before {
  border-radius: 50%;
  background-color:#ece5dd;
  color:#555;
  content: counter(step-counter);
  display:inline-block;
  float:left;
  height:60px;
  line-height:60px;
  margin-left:-52px;
  text-align:center;  
  width:60px;  
  font-weight: bold;
  font-size: 36px;
}
.list-group.vertical-steps .list-group-item span,
.list-group.vertical-steps .list-group-item a{
  display:block;
  overflow:hidden;
  padding-top:2px;
}

/*Active/ Completed States*/
.list-group.vertical-steps .list-group-item.active::before{
  background-color:#0052c2;
  color:#fff;
}
.list-group.vertical-steps .list-group-item.completed{
  border-left:3px dashed #2D99CE;
}
.list-group.vertical-steps .list-group-item.completed::before{
  background-color:#fff;
  color:#2D99CE;
  border:2px solid #2D99CE;
}
.list-group.vertical-steps .list-group-item.completed:last-child{
  border-left:3px solid transparent;
}
/* end progress bar */
.step-wrapper{padding-left:20px;}
.step-title{font-weight: bold; font-size:18px;}
.image-part{margin:20px;}
.image-part img{width:90%;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;}
.how-it-work-btn{text-align:center;padding-bottom:62px;padding-top:62px;}
.how-ul{margin-bottom: 62px;}

.prescription-txt{font-style: normal; font-weight: 500; font-size: 18px; line-height: 26px; text-align: center; color: #323232;}

.prescription-wrapper{margin-top: 0px;}
.prescription-title {font-style: normal; font-weight: bold; font-size: 24px; line-height: 29px; color: #323232;}
.prescription-desc {font-weight: 500; font-size: 15px; line-height: 24px; color: #323232;}
.prescription-btn{margin-top: 30px; margin-bottom: 30px;}


.prescription-table-wrap{padding:20px 20px 5px;}
.prescription-table-title {font-weight: bold; font-size: 24px; line-height: 29px;}
.prescription-table-desc{font-weight: 500; font-size: 16px; line-height: 24px;}
table .tbl-subHead{font-size:12px;}
.prescription-table th{text-transform:uppercase;}
.table-striped tbody tr:nth-of-type(odd) {background-color: #D0EBF6 ;}
.pres-terms{text-align: center; color:#999999; font-size: 12px;}

.doctor-img img{border-radius:0;}
.faq-section.redesign p.question{font-weight: 700; width: 100%; border-top: 1px solid #979797; border-radius: 0;}
.faq-section.redesign p.question:first-child {border-top: none;}
.faq-section .ui-accordion .ui-accordion-header{ padding: 0.9em 0 0.3em;}
.klaviyo-form-W7pzYT{width: 60%;}
 
.klaviyo-form-W7pzYT input{border-radius:100px;background-color:none !important; background:none !important; border:none !important;font-family: 'Montserrat', sans-serif;}
.klaviyo-form-W7pzYT input:focus{border:none !important}

.klaviyo-form-W7pzYT form input[type="email"]{margin-left:1rem;font-family: 'Montserrat', sans-serif !important;}
.klaviyo-form-W7pzYT button:after, .klaviyo-form-W7pzYT button:before { font-family: "Font Awesome 5 Free"; display: inline-block !important; font-weight:900; }
.klaviyo-form-W7pzYT button{background-color: #fff !important; color: #2D99CE !important;border-radius: 100px !important;padding:11px 30px !important; font-family: 'Montserrat', sans-serif !important; display: inline-flex; align-items: center; justify-content: center;margin-right: 1px;}
.klaviyo-form-W7pzYT button:before { content: "\f0da"; padding-right: 10px;font-size: 20px;vertical-align: middle;}
.klaviyo-form-W7pzYT button:after { content: "\f0d9"; padding-left: 10px;font-size: 20px;vertical-align: middle;}


.iAMCek.iAMCek{border-radius:100px;}
.gBKwYK.gBKwYK{background-color: rgb(45, 153, 206);border-radius:100px; overflow: visible; padding:0;}
.cmoGyf.cmoGyf.cmoGyf.cmoGyf.cmoGyf.cmoGyf{font-family: 'Montserrat', sans-serif !important;}
.cmoGyf.cmoGyf.cmoGyf.cmoGyf.cmoGyf.cmoGyf:focus{box-shadow: none !important;}
 

.pres-top-title{text-transform:uppercase;background-color:#009BD2;color:#fff;text-align:center;font-size:14px;line-height: 16px;font-weight: 700;padding:10px; margin-bottom:0}
.pres-need-wrap{padding:32px 50px 0px;}
.pres-need{text-align: center;font-weight: 600;font-size: 32px;}

.faq-questions .ui-widget-content a.custom-button{color:#fff !important;line-height: 2.4rem;}
.faq-questions .ui-accordion-content a{color:#2D99CE !important}
.prescription-table .table td, .table th{width:300px;}


table a { color: #212529;}
.table thead th{border:none;}
.table td, .table th{border-top:0;}

.table thead th{text-transform: uppercase;}
.faq-section.redesign {padding:64px 0;}

.footer-socials{padding:64px 0;}
.displayTable { display: table; height: 100%;}
.displayTable .vAlign {vertical-align: middle; display: table-cell;}
.rounded-1{border-radius:10px; -webkit-border-radius:10px; -moz-border-radius:10px;}
.table thead th, .table tbody td {vertical-align: middle;}
.table tbody tr.evenRow td{padding: 1.5rem .75rem;}
.table th { padding: 1.5rem 0;}
.table tbody tr td:first-child, thead tr th:first-child {padding-left:1rem}
span.md {
    font-size: 0.8rem;
    font-weight: 500;
    letter-spacing: 0.05rem;
}
.workWrapper { margin: 0 20px; height: 100%; border-radius: 0 0 10px 10px; -webkit-border-radius: 0 0 10px 10px; -moz-border-radius: 0 0 10px 10px;}
.treatment-wrapper {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    margin: 0 auto 1.5rem;
}
 
.faq-section ul li{font-family: 'Montserrat', sans-serif;}
.faq-section.redesign p.question.ui-state-active, .ui-accordion .ui-accordion-content.ui-accordion-content-active {height:auto !important;}
.faq-section .questions.ui-accordion-content-active{margin-top:10px;}
.benefits-logo{margin:auto; width:130px;}
 
.klaviyo-form-W7pzYT form{background-color:#009BD2 !important;border-radius:100px !important; overflow: visible !important; padding:0 !important;}
@media(max-width:1400px){
	.hero-section .subtitle{font-size: 16px;}
	.hero-title .top-title, .hero-title .last-title {font-size: 30px; line-height: 40px;}
	.hero-title .middle-title, .hero-title .bottom-title {font-size: 60px; line-height: 70px;}
	.custom-button{padding: 2px 25px;}
}
@media(max-width:1280px){
	.hero-section, .mHero-section{background-position: calc(45vw) 0; background-color: #6fc4c8;}
	#banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:14px;}
}
@media(max-width:1024px){
   #banner_cta.redesign .banner-cta {margin-bottom:20px;}
   .how-ul {margin-bottom: 94px; margin-top: 135px;	}
   .headline-mobile-svg{display:none !important;}
}
@media(max-width:992px){
	.treatment-wrapper {padding:2px;}
	.treatment-wrapper>div.row>div>div { padding: 12px 12px 0 12px;}
	.treatment-wrapper>div.row>div>div.displayTable { padding-top: 15px;}
	.treatment-wrapper .prescription-title{font-weight: 700; font-size: 1rem; margin-bottom: 0.3rem;}
	.treatment-wrapper .prescription-desc { font-size: 14px; font-weight: 500;  line-height: 22px;}
	.treatment-wrapper .table td, .table th{font-size:10px;}
	.treatment-wrapper tr:last-child td:first-child { border-radius: 0 0 0 10px;}
	.treatment-wrapper tr:last-child td:last-child { border-radius: 0 0 10px 0;}
	.pres-terms{text-align:left}
   .faq-section.redesign {padding:40px 0;}
   .section-heading{font-size: 36px;}
   .section-subttile{font-size: 16px;width: 80%;}
   #banner_cta.redesign{width: auto !important; margin-left: 100px !important;margin-right:100px !important; box-shadow: none !important; margin-bottom:-15px; margin-top:15px;}

#banner_cta.redesign .banner-cta>.banner-cta-point {justify-content: left;align-items: center;}
.banner-cta-point{border-right: none}
#banner_cta .banner-cta {display:block;}
.hero-content{width:auto;float:left}
.mHero-section{height:300px;display: none;}
.hero-title span{color:#fff !important;}

.hero-section, .mHero-section{ background-image: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/acne-banner-tab.png'); background-repeat: no-repeat; background-position: right; background-size: cover; padding: 12rem 0; }
.hero-title span{color: #75C4C9; }

.hero-section .subtitle{font-size: 16px;}
.hero-title .top-title{font-size: 30px;line-height: 20px;}
.hero-title .middle-title { font-size: 60px; line-height: 85px; font-weight: 300; }
.hero-title .bottom-title { line-height: 60px; font-weight: 700; }
.hero-title .last-title { font-size: 30px; line-height: 30px; font-weight: 300; margin-bottom: 30px; }
.custom-button { background-color: #2D99CE; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; padding: 2px 30px 2px; border-radius: 100px; font-size: 14px; }
.custom-button:before {font-size:25px;}
.custom-button:after {font-size:25px;}
.pres-need-wrap{padding:32px 40px 0px;}
.pres-need { text-align: center; font-weight: 600; font-size: 24px; margin-bottom: 0; }
.list-group.vertical-steps .list-group-item span, .list-group.vertical-steps .list-group-item a{font-size:14px;}
.step-title{font-size:16px !important;}
.howitworks-box2{margin-top:52px;}
.how-ul{ margin-bottom: 222px;  margin-top: 10px;}
.how-it-wrapper{width: 95%;padding-top: 48px;}
.how-it-work-btn{padding-top: 32px; padding-bottom: 32px;}
.workWrapper span br {display: none;}

/* Prescription grade acne medication card */
.profile-card-5{ margin-top:20px; border-radius:10px; }
.profile-card-5 .btn{ border-radius:2px; text-transform:uppercase; font-size:12px; padding:7px 20px; }
.profile-card-5 .card-img-block { width: 91%; margin: 0 auto; position: relative; top: 20px; margin-bottom: 20px; }
.profile-card-5 .card-img-block img{ border-radius:5px; }
.profile-card-5 h5{ font-weight:700; font-size: 16px; }
.profile-card-5 p{ font-size:14px; font-weight:500; line-height: 22px; }
.profile-card-5 .btn-primary{ background-color:#4E5E30; border-color:#4E5E30; }
/* End Prescription grade acne medication card */

.table-tablet{margin:5px;}
.table-tablet .table td, .table th{font-size: 10px;}
.table-tablet .table thead th {font-size: 10px;text-align: center;text-transform: uppercase;}
table .tbl-subHead{font-size:7px;}
.tickImg{width:18px; height:18px;}

.acne-ul-wrapper li{font-size: 15px;padding-left:60px;}
.acne-ul-wrapper-x li{font-size: 16px;padding-left: 60px;}

.section-padding { padding: 48px 0 60px; }
.section-subttile2 { font-size: 16px; padding-bottom:10px; line-height: 26px; }

.klaviyo-form-W7pzYT{width: 80%;}

 .doctor-img img{max-width:none;}

#banner_cta .banner-cta>.banner-cta-point{border-bottom: 1px solid #009BD3;}
#banner_cta .banner-cta>.banner-cta-point:last-child{border-bottom: 0;}

.table thead th{border:none;}
.table td, .table th{border-top:0;}
tr:first-child td:first-child { border-top-left-radius: 0; }
tr:first-child td:first-child { border-bottom-left-radius: 0; }

tr:first-child td:last-child { border-top-right-radius: 0; }
tr:first-child td:last-child { border-bottom-right-radius: 0; }

tr:last-child td:first-child { border-bottom-left-radius: 0; }
tr:last-child td:first-child { border-top-left-radius: 0; }

tr:last-child td:last-child { border-bottom-right-radius: 0; }
tr:last-child td:last-child { border-top-right-radius: 0; }

.table-tablet .table td, .table th{vertical-align: middle;}

td.price strong{font-size:1rem;}
span.md{display:block; font-size:0.5rem;}	 
table>tbody>tr>td:first-child { text-align: left;}
.table thead th{vertical-align: top; padding:0.8rem 0; text-transform: uppercase;}
.card-body a{color:#212529;}
.acne-ul-wrapper-x br{display:none;}
.headline-mobile-svg{display:none !important;}
 }

@media only screen and (min-width:601px) and (max-width:768px){
   /* .custom-button{display:block !important;} */
   .banner-cta-point{border-right: none}
   .hero-content{width:auto;}
 	/* .hero-section{background-image:none; background-color: #fff; padding:2rem 0;} */
	.hero-title span{color: #75C4C9; }
	.doctorsImgs{height:430px; max-width:510px;}
	.dctrImg img{width:250px; height:250px;}
	.doctorsImgs .dctrImg:nth-child(2){left:25%; bottom:0}
	.doctorsImgs .dctrImg:last-child{right:15px;}
	.workWrapper span br{display:none;}
   .headline-mobile-svg{display:none !important;}

}
@media only screen and (max-width: 600px) {
	#global_search_form input.form-control{padding: 20px 0 20px 15px; font-size: 14px;}
	#global_search_form button{ padding: 0 12px;}
	.treatment-wrapper{margin: 0 0.8rem;}
	.mHero-section{height: 200px;display:none !important;}
   .hero-content .subtitle {display:none;}
   .hero-title .top-title{font-size:30px; line-height:60px}
   .hero-title .middle-title{font-size:60px;line-height:45px;}
   .hero-title .bottom-title{font-size:60px;}
	h2 br, h3 br, p br{display:none;}
   .banner-cta-point{border-bottom: 2px solid #2D99CE;border-right:none; margin-bottom: 10px;} 
   .banner-cta-point a{font-weight: bold;}
   .footer-socials h3.subtitle{line-height:40px;}
   .acne-ul-wrapper{padding-left:10px;}
   .acne-ul-wrapper-x{padding-left:10px;}
   .section-heading{font-size:26px; line-height:30px; font-weight: bold; color: #000;}
   .doctorsImgs {height: 280px; max-width: 320px;}
   .dctrImg img{width:160px; height:160px;}
   #banner_cta.redesign{box-shadow:none; margin-bottom:-12px;}
   .banner-cta-point:last-child {border-right: none;}
   .ctaOnly{height:30px;}
   .medicine p{min-height:60px;}
   .acne-ul-wrapper li {padding-left:70px;margin:10px;}
   .acne-ul-wrapper-x{display:none;}
   .three-month-mob{display:block; text-align: center; margin: auto;}
   .three-month-desktop{display:none !important;}
   .overlapStiker{top:auto;}
   .section-subttile{width:auto; margin:auto;font-size: 14px;} 
   #ui-id-6{height:auto !important}
   .TextInput__FormStyledTextInput-sc-1o6de9f-0 {width:auto !important; border-radius:10px !important;}
	.custom-button{padding: 2px 25px 2px;}
   .lnviXl.lnviXl {display: inline-block; width: 300px;}
   /* .iLvYxn.iLvYxn.iLvYxn.iLvYxn.iLvYxn.iLvYxn{width:300px;} */
   .Button__FormStyledButton-p2mbjt-0 {border-radius:10px !important; width:300px;}
   
   .bg-white-btn, .header-content .custom-button{display:none;}
   #banner_cta.redesign{margin-left: 25px !important; margin-right: 25px !important;margin-top:200px;}

   .hero-section, .mHero-section{ background-image: url('<?php echo get_template_directory_uri(); ?>/img/acne-page/hero-image-mobile.jpg'); background-repeat: no-repeat; background-position: center center; background-size: cover; padding:2.8rem 0; }
   .hero-content{float:none;position:relative;top:250px;}
   .hero-title span{color:#65C8CA !important;}

   #banner_cta .banner-cta>.banner-cta-point{height:auto;}
   .hero-title .last-title{margin-bottom: 0;}
   
   .ctaOnly{height:auto;}
   .ctaOnly .sectionCTA { position: fixed; right: 0; left: 0; bottom:0; z-index: 10;margin-bottom: 24px;}
   .float-mobile{  -moz-box-shadow:2px 10px 18px #00000; -webkit-box-shadow: 2px 10px 18px #000; box-shadow:2px 10px 18px #000;}
   .how-it-wrapper{padding-top: 40px; padding-bottom: 40px;}
   .howitworks-box1{margin-bottom: 0;}
   .howitworks-box2{margin-bottom: 0;}
   .workWrapper{margin:0}
   .pres-need-wrap{padding:30px 30px 0px}
   #banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:12px}
   .how-ul{margin-bottom: 0; margin-top:0}
   .prescription-txt{font-size: 16px; padding: 0 2rem;}
   .pres-terms {font-size: 10px; margin: 10px auto 0; width: 90%; text-align: left; }
   .section-padding { padding: 40px 0 60px; }
   .medsOnline{margin-bottom: -20px;}
   .doc-skinacare{text-align: center;}
   .section-subttile2{font-size: 14px;padding-bottom: 20px;}


.klaviyo-form-W7pzYT{width: 80%;}

 

.klaviyo-form-W7pzYT input{border-radius:100px;border:1px solid #ccc; font-family: 'Montserrat', sans-serif !important;}
  

.klaviyo-form-W7pzYT button:after, .klaviyo-form-W7pzYT button:before { font-family: "Font Awesome 5 Free"; display: inline-block !important; font-weight:900; }
.klaviyo-form-W7pzYT button{background-color: #2D99CE !important; color: #fff !important;border-radius: 100px !important;}
.klaviyo-form-W7pzYT button:before { content: "\f0da"; padding-right: 10px;font-size: 20px;vertical-align: middle;}
.klaviyo-form-W7pzYT button:after { content: "\f0d9"; padding-left: 10px;font-size: 20px;vertical-align: middle;}

.klaviyo-form-W7pzYT form.needsclick input[type='email'] {
    background-color: #fff !important;
    border-radius: 50px !important;
    height: 58px !important;
    text-align: center !important;
    padding: 0 10px !important;
    font-family: 'Montserrat', sans-serif !important;
}
.klaviyo-form-W7pzYT form.needsclick .cxWQXf.cxWQXf{display: block;}
.klaviyo-form-W7pzYT form.needsclick button {
    width: 100%;
    height: 36px;
}
.klaviyo-form-W7pzYT form input[type="email"]{margin-left:0;}
 

.iAMCek.iAMCek{border-radius:100px;}
.klaviyo-form-W7pzYT form{background-color:transparent !important;border-radius:0px;}
.klaviyo-form form>.needsclick>.needsclick{display:block;}

.table thead th{border:none;}
.table td, .table th{border-top:0;}
.table-tablet .table td, .table th{font-size:12px;}
tr:first-child td:first-child { border-top-left-radius: 0; }
tr:first-child td:first-child { border-bottom-left-radius: 0; }

tr:first-child td:last-child { border-top-right-radius: 0; }
tr:first-child td:last-child { border-bottom-right-radius: 0; }

tr:last-child td:first-child { border-bottom-left-radius: 0; }
tr:last-child td:first-child { border-top-left-radius: 0; }

tr:last-child td:last-child { border-bottom-right-radius: 0; }
tr:last-child td:last-child { border-top-right-radius: 0; }

.table-tablet .table td, .table th{vertical-align: middle;}

.faq-section.redesign {padding:40px 0;}
.workWrapper span br{display:none;}
.card-body a{color:#212529;}
.faq-section.redesign p.question{font-size:1rem; }
.subscribe-subHead{font-weight:400 !important;}
.step-title{font-size: 15px !important;}
.how-it-work-btn{visibility: hidden; padding-bottom: 0; padding-top: 0;}
.headline-svg{display:none !important;}
.headline-mobile-svg{display:block !important; margin:auto;}
.howitworks-box2{margin-top:24px;}
.need-prescription-wrapper .mt-3{margin-top: 0 !important;}
.mobSpace{margin-bottom:24px;}
.kQoZek.kQoZek{padding: 10px 0px 10px 0px;}
.faq-section.redesign p.question.ui-state-active, .ui-accordion .ui-accordion-content.ui-accordion-content-active {height:auto !important;}
}

/* small iphone device */
@media only screen and (min-width: 320px)  and (max-width: 360px)   {
   .hero-title .top-title { font-size: 30px; line-height: 40px; }
   .hero-title .middle-title { font-size: 50px; line-height: 60px; }
   .hero-title .bottom-title { font-size: 50px;    line-height: 50px; }
   
}


 </style>


<div class="mHero-section d-block- d-md-block- d-lg-none d-xl-none d-md-none"></div>   

<?php if( have_rows('header') ): while( have_rows('header') ) : the_row(); 
	$btnTxt = get_sub_field('button_text');
	$btnURL = get_sub_field('url');
 ?>
      <!-- <section class="hero-section">
         <div class="container-fluid restrictedWidth">
            <div class="row">
               <div class="col-md-12 col-lg-6">
                  <div class="hero-content text-center">
                     <p class="subtitle text-white d-xs-none"><span><?php echo get_sub_field('tagline'); ?></span></p>
                     <h1 class="hero-title">
						<img class="headline-svg" src="<?php echo get_template_directory_uri(); ?>/img/acne-page/headline.svg" >
                  <img class="headline-mobile-svg d-none d-md-block d-lg-none" src="<?php echo get_template_directory_uri(); ?>/img/acne-page/headline-mobile@2x.svg" >

                        <?php //echo get_sub_field('heading'); ?>
                     </h1>
                     <div class="sectionCTA d-none d-md-block">   
                        <a href="<?php echo get_sub_field('url'); ?>" class="custom-button" target="_blank"><?php echo get_sub_field('button_text'); ?></a>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section> -->
      <section class="hero-section">
         <div class="container-fluid restrictedWidth">
            <div class="row">
               <div class="col-md-12 col-lg-5">
                  <div class="hero-content text-center">
                     <p class="subtitle text-white d-xs-none"><span><?php echo get_sub_field('tagline'); ?></span></p>
                     <h1 class="hero-title">
                        <?php echo get_sub_field('heading'); ?>
                     </h1>
                     <div class="sectionCTA d-none d-md-block">   
                        <a href="<?php echo get_sub_field('url'); ?>" class="custom-button" target="_blank"><?php echo get_sub_field('button_text'); ?></a>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
<?php endwhile; endif; ?>

<section id="banner_cta" class="redesign">
    <div class="container redesign restrictedWidth">
        <div class="row">
		    <div class="col-md-12">
			   <div class="banner-cta">
               <?php 
                  if( have_rows('pointers') ): while( have_rows('pointers') ) : the_row();
                  $services = get_sub_field('services');    
                  foreach($services as $service) :
                ?>
					<div class="banner-cta-point col-md-12 col-lg-4">
						<!-- <a href="<?php echo $service['url']; ?>"> -->
                  <a style="cursor:default;" href="javascript:void(0)">
							<img src="<?php echo $service['icon']; ?>" alt="Delivery Service"> 
						</a>
						<h3>
							<!-- <a href="<?php echo $service['url']; ?>" target="_blank"> -->
                     <a style="cursor:default;" href="javascript:void(0)">
							   <?php echo $service['text']; ?>                             
							</a>
						</h3>
					</div>

					<?php endforeach; endwhile;  endif; ?>

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


<section class="how-it-work" style="background-color:#F8F8FA;">
<div class="how-it-wrapper">
	<div class="container">
	   <h2 class="section-heading text-center mobSpace">How it works</h2>
	</div>
	<div class="container need-prescription-wrapper">
      <div class="row">
         <div class="col-lg-12 col-md-12 d-md-flex mt-3">

           <div class="col-lg-6 col-md-6 howitworks-box1">
			<div class="workWrapper bg-white">
             <p class="pres-top-title">INCLUDES ONLINE DOCTOR CONSULTATION</p>   
                <div class="pres-need-wrap">
                  <p class="pres-need">Need a prescription? </p>
                  <ul class="list-group vertical-steps">
                     <li class="list-group-item completed">
                        <div class="step-wrapper">
                           <span class="step-title">Fill out health form &amp; upload photos</span>
                           <span>Have your acne evaluated by a doctor online for only $35. Take photos of problem areas & upload on our HIPAA compliant website.</span>
                        </div>
                     </li>
                     <li class="list-group-item completed">
						<div class="step-wrapper">
                           <span class="step-title">Doctor reviews your prescription</span>
                           <span>Doctors evaluate your health chart and prescribe medication that best fits you.</span>
                           </div>

                     </li>
                     <li class="list-group-item completed">
                     <div class="step-wrapper">
                     <span class="step-title">FREE delivery to your mailbox</span>
                     <span>FREE delivery &amp; FREE goodies sent straight to your mailbox.</span>
                     </div></li> 
                 </ul>
                     <div class="how-it-work-btn">
                        <a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
                     </div>
                   
                  </div>
			</div>	  
		  </div>
                   
                   
         <div class="col-lg-6 col-md-6 howitworks-box2">
			<div class="workWrapper bg-white">
             <!-- <p class="pres-top-title">INCLUDES ONLINE DOCTOR CONSULTATION</p>    -->
                <div class="pres-need-wrap">
                  <p class="pres-need">Have an active prescription? </p>
                  <ul class="list-group vertical-steps how-ul">
                     <li class="list-group-item completed">
                        <div class="step-wrapper">
                           <span class="step-title">Fast &amp; easy transfer</span>
                           <span>Simply provide your current <br>pharmacy or doctor’s info and <br>we will handle the rest.</span>
                        </div>
                     </li>
                <li class="list-group-item completed">
                   <div class="step-wrapper">
                           <span class="step-title">FREE delivery to your mailbox</span>
                           <span>FREE delivery &amp; FREE goodies sent straight to your mailbox.</span>
                           </div>

               </li>
                      
                 </ul>
                  <div class="how-it-work-btn">
                     <a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
                  </div>
                  
               </div>
			   </div>
            </div>     

                   </div>
        
        
         </div>       
	</div>
</section>

<section class="section-padding tabletSection" style="background-color:#D0EBF6;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			  <h2 class="section-heading">Prescription grade acne treatment</h2>
			  <p class="prescription-txt">Our board certified doctors evaluate your skin online and provide quality<br> prescription grade acne medication delivered straight to your mailbox.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-11" style="margin:0 auto; padding-top: 1.5rem;">
				<div class="treatment-wrapper">
				<div class="row">
					<div class="col-md-12 col-lg-6 order-lg-12">
						<div class="pre-image-part">
							<img class="rounded-1" src="<?php echo get_template_directory_uri(); ?>/img/acne-page/topical-acne-treatment.jpg" alt="Topical Acne Treatment">
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="displayTable">
							<div class="vAlign">
								<div class="prescription-wrapper">
									<a href="https://www.pandiahealth.com/tretinoin-before-after-benefits-of-retin-a-for-acne-aging/">
									<p class="prescription-title">Topical acne treatment</p>
									<p class="prescription-desc">Mild & moderate acne is best treated with prescription topical acne medication. Topical acne medication works by killing Acne bacteria and “normalizing” the skin (less greasy & smaller pores).</p></a>
								</div>
								<div class="prescription-btn d-none d-lg-block">
									<a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped text-center mb-0 mt-3">
					<thead>
						<tr>
							<th scope="col"><a href="https://www.pandiahealth.com/tretinoin-before-after-benefits-of-retin-a-for-acne-aging/" class="d-none d-lg-block text-left">Topical Medication</a><span class="d-block d-md-block d-lg-none text-left">Medication</span></th>
							<th scope="col">Insurance Price <br><span class="tbl-subHead" style="font-weight:400;">copay + deductible*</span></th>
							<th scope="col">Out-of-Pocket Price <br><span  class="tbl-subHead" style="font-weight:400;">as low as</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Clindamycin phosphate lotion</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$20</strong> <span class="md">/MONTH</span></td>
						</tr>
						<tr class="evenRow">
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Benzaclin gel</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$35</strong> <span class="md">/MONTH</span></td>
						</tr>
						<tr>
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Tretinoin cream</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$30</strong> <span class="md">/MONTH</span></td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
			<div class="col-md-6 col-lg-11" style="margin:0 auto; padding-top: 1.5rem;">
				<div class="treatment-wrapper">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="pre-image-part">
							<img class="rounded-1" src="<?php echo get_template_directory_uri(); ?>/img/acne-page/oral-acne-treatment.jpg" alt="Oral acne treatment">
						</div>
					</div>
					<div class="col-md-12 col-lg-6">
						<div class="displayTable">
							<div class="vAlign">
								<div class="prescription-wrapper">
									<a href="https://www.pandiahealth.com/resources/what-are-acne-oral-antibiotics/">
									<p class="prescription-title">Oral acne treatment</p>
									<p class="prescription-desc">Moderate and severe acne is treated with prescription oral and topical acne medication. Oral antibiotics work by attacking acne bacteria from the inside out and decreasing inflammation.</p>
									</a>
								</div>
								<div class="prescription-btn d-none d-lg-block">
									<a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<table class="table table-striped text-center mt-3 mb-0">
					<thead>
						<tr>
							<th scope="col"><a href="https://www.pandiahealth.com/resources/what-are-acne-oral-antibiotics/" class="d-none d-lg-block text-left">Oral Medication</a><span class="d-block d-md-block d-lg-none text-left">Medication</span></th>
							<th scope="col">Insurance Price <br><span class="tbl-subHead" style="font-weight:400;">copay + deductible*</span></th>
							<th scope="col">Out-of-Pocket Price <br><span class="tbl-subHead" style="font-weight:400;">as low as</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Antibiotics</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$40</strong> <span class="md">/MONTH</span></td>
						</tr>
						<tr class="evenRow">
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Spironolactone</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$30</strong> <span class="md">/MONTH</span></td>
						</tr>
						<tr>
							<td align="left"><a href="https://www.nurx.com/antibiotic/clindamycin/" target="_blank">Birth control pills</a></td>
							<td><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/check-mark.png" width="30" height="30" alt="check-mark" class="tickImg" /></td>
							<td class="price"><strong>$15</strong> <span class="md">/MONTH</span></td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="pres-terms">*Please check your insurance coverage; the final medication price may vary based on your insurance, so this estimated pricing is not guaranteed.</div> 
			</div>
		</div>
	</div> 
</section>
 

<?php if( have_rows('benifits') ): while( have_rows('benifits') ) : the_row(); ?>
<section class="section-padding medsOnline" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
      <div class="col-md-12 text-center">
				<h2 class="section-heading"><?php echo get_sub_field('section_heading'); ?></h2>
				<p class="section-subttile_"><?php echo get_sub_field('text'); ?></p>
		 </div>
		</div>
	<div class="row">
      <div class="col-lg-1 col-md-0"></div>
			<div class="col-md-6 col-lg-5">  
          <p class="benefits-logo d-none d-sm-block"><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/logo-ph.png" alt=""></p>
               <ul class="acne-ul-wrapper">
               <?php  $pros = get_sub_field('pros'); foreach($pros as $pro) : ?>
               <li> <?php echo $pro['list_item']; ?></li>
               <?php endforeach; ?>
               </ul>
         </div>
			<div class="col-md-6 col-lg-5">
         <p class="benefits-logo d-none d-sm-block mt-2"><img height="20" src="<?php echo get_template_directory_uri(); ?>/img/acne-page/in-person.png" alt=""></p>
               <ul class="acne-ul-wrapper-x">
               <?php  $cons = get_sub_field('cons'); foreach($cons as $con) : ?>
               <li> <?php echo $con['list_item']; ?></li>
               <?php endforeach; ?>
                </ul>
         </div>
         <div class="col-md-0 col-lg-1"></div>
		</div>
      <div class="sectionCTA d-none d-md-block text-center">   
		      <a href="<?php echo get_sub_field('url'); ?>" class="custom-button" target="_blank"><?php echo get_sub_field('button_text'); ?></a>
	   </div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php if( have_rows('our_doctors') ): while( have_rows('our_doctors') ) : the_row(); ?>
<section class="section-padding medsOnline" style="background-color:<?php echo get_sub_field('background_color'); ?>">
	<div class="container">
		<div class="row">
      <h2 class="section-heading mx-auto d-none d-md-block d-lg-none"><a href="https://www.pandiahealth.com/about#sectionour_doctors"><?php echo get_sub_field('section_heading'); ?></a></h2>

			<div class="col-md-6 doc-skinacare">
				<h2 class="section-heading d-md-none d-lg-block d-xl-block"><a href="https://www.pandiahealth.com/about#sectionour_doctors"><?php echo get_sub_field('section_heading'); ?></a></h2>
				<p class="section-subttile2"><?php echo get_sub_field('text'); ?></p>
            <div class="sectionCTA d-none d-md-block">   
               <a href="<?php echo get_sub_field('url'); ?>" class="custom-button" target="_blank"><?php echo get_sub_field('button_text'); ?></a>
            </div>
			</div>
         
         
        <div class="col-md-6">
            <div class="doctor-img">
                <a href="https://www.pandiahealth.com/about#sectionour_doctors"><img src="<?php echo get_template_directory_uri(); ?>/img/acne-page/doctors-image.png" alt=""></a>

            </div>


	 <!-- <div class="doctorsImgs">
      <?php  $doctors = get_sub_field('doctors'); foreach($doctors as $doctor) : ?>
			<div class="dctrImg"><img src="<?php echo $doctor['doctor_image'] ?>" alt="<?php echo $doctor['doctor_name'] ?>"></div>
      <?php endforeach; ?>
	 </div> -->
		
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
	 <div class="row faq-questions accordion">
      <?php $i = 1; $qnas = get_sub_field('qna'); 
	  foreach($qnas as $qna) : ?>
		   <p class="question"><?php echo $qna['question']; ?></p>
		   <div class="questions">
			  <?php echo $qna['answer']; ?>
			  <?php /* <a href="https://app.pandiahealth.com/?discount_code=Holidays2020" class="button redesign home-new">
				 <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="unhover-arrow" alt="Right Arrow" data-lazy-src="/wp-content/themes/pandiahealth/img/arrow-right.png">
				 <noscript><img src="/wp-content/themes/pandiahealth/img/arrow-right.png" class="unhover-arrow" alt="Right Arrow"></noscript>
				 <span>GET STARTED </span>
				 <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="unhover-arrow" alt="Left Arrow" data-lazy-src="/wp-content/themes/pandiahealth/img/arrow-left.png">
				 <noscript><img src="/wp-content/themes/pandiahealth/img/arrow-left.png" class="unhover-arrow" alt="Left Arrow"></noscript>
			  </a> */ ?>
		   </div>
     <?php $i+=2; endforeach; ?>
     </div> 
   </div>
</section>
<?php endwhile; endif; ?>

<section>

         <div class="footer-socials">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="subtitle">
                        Stay in touch
                        </h3>
                    </div>
                </div>
             
                <div class="row">
                    <div class="col text-center">
                        <p class="font-weight-bolder subscribe-subHead">
                        Sign-up for newsletter to receive updates and offers.
                        </p>
                    </div>
                </div>
                <div class="row">
                <div class="klaviyo-form-W7pzYT mx-auto"></div>

                    <!-- <div class="newsletter-feilds d-flex m-auto"> 
                         <input type="text" value="" placeholder="Enter email to start">
                            <div class="sectionCTA d-none d-md-block text-center">   
                            <a href="#!" class="custom-button">Subscribe</a>
                            </div>
                    </div> -->
                </div>
            </div>
        </div>

</section>
<script>
jQuery(document).ready(function(){
	var headerHeight = jQuery('header').outerHeight();
	jQuery('#page_content').css('padding-top', headerHeight - 2 + 'px');
});

</script>


<?php get_footer('acne'); ?>
