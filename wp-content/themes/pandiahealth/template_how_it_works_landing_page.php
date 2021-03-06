<?php 
/* Template Name: Acne Howitworks Page */
get_header('acne'); ?>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


<style>

/* toogle button */
input[type="checkbox"].switch_1{
 	-webkit-appearance: none;
   -moz-appearance: none;
	appearance: none;
	width: 3.5em;
	height: 1.5em;
	border:1px solid #009BD2;
 	border-radius: 3em;
	position: relative;
	cursor: pointer;
	outline: none;
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
  }
  
input[type="checkbox"].switch_1:checked{
/* background: #0ebeff; */
}

input[type="checkbox"].switch_1:after{
	position: absolute;
	content: "";
	width: 1.5em;
	height: 1.5em;
	border-radius: 50%;
	background: #009BD2;
	-webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
	box-shadow: 0 0 .25em rgba(0,0,0,.3);
	-webkit-transform: scale(.7);
	transform: scale(.7);
	left: 0;
	-webkit-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
}
  
input[type="checkbox"].switch_1:checked:after{
left: calc(100% - 1.5em);
}
/* end toogle button */

.header-content ul#menu-nav>li a { font-size: 14px; line-height:2rem; font-family: 'Montserrat', sans-serif; letter-spacing: 1px; font-weight:500; }
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
 
.restrictedWidth{max-width:1700px !important}
.section-padding{padding:64px 0;}
.section-heading{ color: #2A3445; font-family: Playfair Display; font-weight: 600; font-size: 48px; line-height: 50px; letter-spacing: 0.03em; margin-bottom: 20px; }
.section-heading a{color:#2A3445;}
#page_banner{display: none;}


/* custom button */
.custom-button { background-color: #2D99CE; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; padding: 2px 40px 2px; border-radius: 100px; display: inline-flex; align-items: center; }
.custom-button:before { content: "\f0da"; padding-right: 10px;font-size: 30px;vertical-align: middle;}
.custom-button:after { content: "\f0d9"; padding-left: 10px;font-size: 30px;vertical-align: middle;}
.custom-button:hover { background-color: #36B1ED !important; color: #fff !important; border-color: #36B1ED !important; box-shadow: 0px 8px 16px rgb(45 153 206 / 50%); }
/* end custom button */

/* common title */
.section-subttile{font-size: 20px; padding-bottom:50px; width:40%; margin:auto;} 
.section-subttile2{font-size: 16x; padding-bottom:30px;line-height:26px;margin-bottom: 0;} 
.subtitle{margin-bottom:30px !important;}
.font-10{font-size:10px;}
/* end common title */

/* hero section  */
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
.hero-section .subtitle{ position: relative; font-size: 18px; text-transform: uppercase; font-weight: 500; }
.hero-section .subtitle span{position:relative;}
.hero-section .subtitle span:after { content: ""; border-bottom: 1.5px solid #fff; width: 100%; position: absolute; bottom: -4px; left: 0; } .custom-button:after, .custom-button:before { font-family: "Font Awesome 5 Free"; display: inline-block; font-weight:900; }
.hero-section .custom-button{margin-top:15px;}
.header-content .custom-button{display: inline; padding: 12px 26px 12px;}
.header-content .custom-button:before{padding-right: 3px;}
.header-content .custom-button:after{padding-left: 3px;}
/* end hero section */


/* answer quiz sec  */
#answer-quiz{padding:0px 0; background-color: #D0EBF6;}
#answer-quiz .quiz-wrap{margin: 0; position: absolute; top: 50%; transform: translate(0, -50%)    }
#answer-quiz .quiz-wrap h3{font-size: 20px;font-weight: 700;}
#answer-quiz .quiz-wrap a{font-size: 14px;font-weight: 700;line-height: 18px; color: #2D99CE;}
.modal-body{padding:0}
.modal-content{border-radius: 6px; -webkit-border-radius: 6px; -moz-border-radius: 6px; overflow: hidden; background-color: transparent;}
#quizmodal .close{position:absolute;}
.quiz-content h3, .quiz-cta a, .quiz-answer .quiz-header span{font-family: 'Playfair Display',serif;}
.steps{display: flex; background-color: #fff;}
.steps.quiz-question{background-color: #D0EBF6;}
.steps .quiz-img {
    background-repeat: no-repeat;
    background-position: top right;
	background-size: cover;
    width: 40%;
    height: 348px;
	z-index:9;
    border-radius: 0 50% 50% 0;
	-webkit-border-radius: 0 50% 50% 0;
}
.quiz-inner {
    width: 60%;
    padding: 20px;
    display: flex;
    align-items: center;
    text-align: center;
}
.quiz-answer .quiz-inner{
	width: 100%;
	padding: 0;
	align-items: inherit;
	position: absolute;
    height: 100%;
	text-align:left;
	font-family: 'Montserrat', sans-serif;
}
.quiz-answer .quiz-header { background-color: #D0EBF6; padding: 20px 24% 20px 45%; font-weight: 900;}
.quiz-answer .quiz-header p{opacity: 0.3; margin-bottom:0; font-size:18px; font-weight: 600;}
.quiz-answer .quiz-header span {
    position: absolute;
    right: 13%;
    top: 6%;
    font-size: 30px;
    font-weight: 800;
    opacity: 0.3;
	font-family: 'Playfair Display', serif;
	text-transform: capitalize;
}
.quiz-answer .quiz-content { padding: 20px 30px 20px 45%; font-size: 16px;}
.quiz-answer .quiz-content a.exCtaBtn {
    border: 2px solid #2D99CE;
    border-radius: 24px;
    padding: 8px 40px;
    margin-top: 10px;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    text-decoration: none;
}
.quiz-content h3 {
    font-size: 2rem;
    line-height: 2.5rem;
	font-weight: 600;
	margin-top: 0;
}
.quiz-cta { margin-top: 1.5rem;}
.quiz-cta a {
    font-size: 2.5rem;
    line-height: 3rem;
    font-weight: 800;
    color: #000;
	position:relative;
	text-decoration:none;
}
.quiz-cta a:first-child { margin-right: 5rem;}
.quiz-cta a:hover:after {
    position: absolute;
    content: '';
    width: 70px;
    height: 12px;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/how-it-works/marker-line.png');
    background-repeat: no-repeat;
    background-size: contain;
    bottom: -13px;
    left: -5px;
}

.toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
.toggle.ios .toggle-handle { border-radius: 20rem; }

.first-toogle {font-family: 'Montserrat', sans-serif; font-size: 18px; font-style: normal; font-weight: 700; line-height: 22px; letter-spacing: 1px; text-align: left; color:#323232}
.third-toogle {font-family: 'Montserrat', sans-serif; font-size: 18px; font-style: normal; font-weight: 700; line-height: 22px; letter-spacing: 1px; text-align: left; color:#323232;}

/* end quiz sec */

.displayTbl{display:table; height:100%;}
.displayTbl .vAlign{display:table-cell; vertical-align:middle;}
/* compare table */
section.comparision{margin-bottom:1rem;}
section.comparision .container { padding: 0 30px;}
.toggleArea {
    background-color: #D0EBF6;
    background-image: url('<?php echo get_template_directory_uri(); ?>/img/how-it-works/bubbles.png');
    background-repeat: no-repeat;
    background-position: 70% center;
}
.toggleArea h3 {
    margin: 20px 0;
	padding-left:14px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 600;
	color: #2D99CE;
    font-family: 'Montserrat', sans-serif;
}
.p-0{padding:0 !important;}
.compare-tbl p {font-size: 16px; margin-bottom:0}
.row.even { background-color: #E7F5FA;}
.head-row, .foot-row{background: #F3FAFC;}
.compare-tbl .head-row .compare-col{
    padding: 20px;
    text-transform: uppercase;
	height: 91px;
}
.compare-tbl .compare-col{padding:30px 20px;}
.compare-tbl .compare-col a{font-weight:600}
.compare-tbl .row .row-cell:first-child h3 {padding-left: 10px; text-transform: uppercase; font-size: 16px; color: #2D99CE;}
.compare-tbl .compare-col h3 {
    margin: 0;
    font-size: 18px;
    line-height: 26px;
    font-weight: 600;
}
.closeToggle {
    background-color: #D0EBF6;
    padding: 20px;
    font-weight: 600;
    color: #2D99CE;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 0 0 20px 20px;
	-webkit-border-radius: 0 0 20px 20px;
	-moz-border-radius: 0 0 20px 20px;
}
.closeToggle span, .compareToggle{cursor:pointer;}
.closeToggle img{width:20px; margin-top:-2px;}
.foot-row .compare-col {padding-top: 30px; padding-bottom: 30px;}
@keyframes truck-animation {
    0% {
        opacity: 0;
        transform: translateX(400%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}
.truck{
    -webkit-animation-duration: 0.9s;
    animation-duration: 0.9s;
    -webkit-animation-name: truck-animation;
    animation-name: truck-animation;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
	margin-left: 20px;
}
/*	compare table end */
/* borad certfication strip */
#banner_cta .banner-cta>.banner-cta-point{height:60px;}
#banner_cta .banner-cta>.banner-cta-point h3, #banner_cta .banner-cta>.banner-cta-point p { letter-spacing:0; text-align: left; align-self:center; color: #2D99CE !important; }
.banner-cta-point{border-right:1px solid #2D99CE;min-height:45px;}
.banner-cta-point:last-child{border-right:none;}
#banner_cta.redesign .banner-cta img{width:auto;}
#banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:15px; color:#2D99CE !important; font-weight:bold;font-family: 'Montserrat', sans-serif;}
/* end board certification strip */


.medsOnline .medsBox {padding: 0 2rem;}
.medsOnline h3{text-transform: uppercase; font-size: 18px; line-height:24px; font-weight: 600; }
span.number { border: 3px solid #2E99CF; padding: 2px 8px; border-radius: 100%; width: 50px; height: 50px; font-size: 30px; font-weight: 600; color: #2E99CF; display: inline-block; background-color: #F2F2F2; margin-bottom: 20px; }
 

/* how it works start */
.how-it-wrapper{padding-top:64px;}
#how-it-work .description {font-family: 'Montserrat', sans-serif; font-size: 16px; font-style: normal; font-weight: 500; line-height: 24px; letter-spacing: 0px; text-align: center; padding-bottom: 30px; width:30%; margin:auto;}
.howitworks-box1{padding:0;margin-left:10px;margin-right:10px;}
.howitworks-box2{padding:0;margin-left:10px;margin-right:10px;}

.howitworks-icon-wrapper{padding:100px;padding-top: 0;padding-bottom: 0;}
.howitworks-img {margin-bottom: 20px;}
.how-it-work-btn{text-align:center;padding-bottom:62px;padding-top:62px; width: 100%;}
.howitworks-subtitle{font-family: 'Montserrat', sans-serif; font-style: normal; font-weight: bold; font-size: 16px; line-height: 20px; letter-spacing: 1px; color: #323232;text-transform: uppercase;}
.howitworks-subdescription{font-size: 16px; line-height: 24px;color: #323232;}
.howitwork-element-wrapper{background-color:#F8F8FA;border-radius:10px 10px 0 0; -webkit-border-radius:10px 10px 0 0;}

.steps-padd {padding:30px;}
 


/* steps progress bar */
/*Vertical Steps*/
.list-group-item {background-color:transparent;} .list-group.vertical-steps{ padding-left:10px; padding-top: 30px; }
.list-group.vertical-steps .list-group-item{ border:none; border-left:3px solid #ece5dd; box-sizing:border-box; border-radius:0; counter-increment: step-counter; padding-left:20px; padding-right:0px; padding-bottom:32px; padding-top:0px; }
.list-group.vertical-steps .list-group-item.active{ background-color:transparent; color:inherit; }
.list-group.vertical-steps .list-group-item:last-child{ border-left:3px solid transparent; padding-bottom:0; }
.list-group.vertical-steps .list-group-item::before { border-radius: 50%; background-color:#ece5dd; color:#555; content: counter(step-counter); display:inline-block; float:left; height:60px; line-height:60px; margin-left:-52px; text-align:center; width:60px; font-weight: bold; font-size: 36px; }
.list-group.vertical-steps .list-group-item span, .list-group.vertical-steps .list-group-item a{ display:block; overflow:hidden; padding-top:2px; }

/*Active/ Completed States*/
.list-group.vertical-steps .list-group-item.active::before{ background-color:#0052c2; color:#fff; }
.list-group.vertical-steps .list-group-item.completed{ border-left:3px dashed #2D99CE; }
.list-group.vertical-steps .list-group-item.completed::before{ background-color:#fff; color:#2D99CE; border:2px solid #2D99CE; }
.list-group.vertical-steps .list-group-item.completed:last-child{ border-left:3px solid transparent; }
/* end progress bar */

.step-wrapper{padding-left:20px;}
.step-title{font-weight: bold; font-size:18px;}
.how-ul{margin-bottom: 62px;}
.workWrapper { margin: 0 20px; height: 100%; border-radius: 0 0 10px 10px; -webkit-border-radius: 0 0 10px 10px; -moz-border-radius: 0 0 10px 10px;}

/* end how it work sec */
 

/* footer navigation  */
#menu-item-4509,#menu-item-8167,#menu-item-8597{display:none;}
.footer-socials{padding:64px 0;}
/* end footer navigation */


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
   .pres-terms{text-align:left}
   .section-heading{font-size: 40px;}
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
   .steps-padd{padding:32px 40px 0px;}
   .pres-need { text-align: center; font-weight: 600; font-size: 24px; margin-bottom: 0; }
   .list-group.vertical-steps .list-group-item span, .list-group.vertical-steps .list-group-item a{font-size:14px;}
   .step-title{font-size:16px !important;}
   .how-ul{ margin-bottom: 222px;  margin-top: 10px;}
    .how-it-work-btn{padding-top: 32px; padding-bottom: 32px;}
   .workWrapper span br {display: none;}

   .acne-ul-wrapper li{font-size: 15px;padding-left:60px;}
   .acne-ul-wrapper-x li{font-size: 16px;padding-left: 60px;}

   .section-padding { padding: 48px 0 60px; }
   .section-subttile2 { font-size: 16px; padding-bottom:10px; line-height: 26px; }

   #banner_cta .banner-cta>.banner-cta-point{border-bottom: 1px solid #009BD3;}
   #banner_cta .banner-cta>.banner-cta-point:last-child{border-bottom: 0;}
 
    span.md{display:block; font-size:0.5rem;}	 
   .card-body a{color:#212529;}
   .acne-ul-wrapper-x br{display:none;}
   .headline-mobile-svg{display:none !important;}
   .modal-dialog{max-width:700px;}
   .toggleArea{background-position: right center; background-size: contain;}

   #answer-quiz .quiz-wrap h3{font-size: 14px;}
   #answer-quiz .quiz-wrap a{font-size: 10px;}
   #answer-quiz .quiz-wrap{top:60%}

   #how-it-work .description{width: 45%;}
   .first-toogle, .third-toogle {font-size: 16px;}

   .steps-padd{padding: 0;}
   .workWrapper{margin:0}

   .howitworks-icon-wrapper{padding:40px}
   .howitworks-subtitle{font-size: 13px;}
   .howitworks-subdescription{font-size: 14px;}
   .how-it-wrapper{padding-top: 48px;}

}
@media(max-width:767px){
	/*compare table mobile */
	.mobile-compare .head-row {
		background-color: #2D99CE;
		color: #fff;
		text-align: center;
	}
	.mobile-compare .head-row h3 {
		font-size: 18px;
		margin: 0;
		padding: 20px 0;
		text-transform: uppercase;
		font-weight: 600;
		letter-spacing: 1px;
	}
	.compare-tbl .compare-col h3 {
		text-transform: uppercase;
		margin-bottom: 10px;
		font-size: 16px;
	}
	.mobile-compare .row.even {background-color: #F8F8FA;}
	section.comparision .container{background-color: #f8f8fa;}
	.container.compare-tbl {background-color: #fff !important;}
}
@media(min-width:621px) and (max-width:768px){
	.modal-dialog{max-width:600px;}
	.quiz-content h3 { font-size: 1.5rem; line-height: 2rem;}
	.quiz-cta a { font-size: 2rem; line-height: 2.5rem;}
	.quiz-cta a:first-child { margin-right: 3rem;}
}
@media only screen and (min-width:601px) and (max-width:768px){
   /* .custom-button{display:block !important;} */
   .banner-cta-point{border-right: none}
   .hero-content{width:auto;}
 	/* .hero-section{background-image:none; background-color: #fff; padding:2rem 0;} */
	.hero-title span{color: #75C4C9; }
	.workWrapper span br{display:none;}
   .headline-mobile-svg{display:none !important;}

}
@media(max-width: 620px) {
	#global_search_form input.form-control{padding: 20px 0 20px 15px; font-size: 14px;}
	#global_search_form button{ padding: 0 12px;}
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
   .how-it-wrapper{padding-top: 40px; padding-bottom: 40px; background-color:#F8F8FA}
   .howitworks-box1{margin-bottom: 0; margin:0;}
   .howitworks-box2{margin-bottom: 0; margin-left: 0; margin-right: 0;}
   .workWrapper{margin:0; padding:40px;border-radius:10px;padding-bottom: 10px;}
   .steps-padd{padding:30px 30px 0px}
   #banner_cta.redesign a, #banner_cta.redesign a:hover{font-size:12px}
   .how-ul{margin-bottom: 0; margin-top:0}
   .prescription-txt{font-size: 16px; padding: 0 2rem;}
   .pres-terms {font-size: 10px; margin: 10px auto 0; width: 90%; text-align: left; }
   .section-padding { padding: 40px 0 60px; }
   .medsOnline{margin-bottom: -20px;}
   .doc-skinacare{text-align: center;}
   .section-subttile2{font-size: 14px;padding-bottom: 20px;}
   
   .workWrapper span br{display:none;}
   .card-body a{color:#212529;}
   
   .subscribe-subHead{font-weight:400 !important;}
   .step-title{font-size: 14px !important;}
   .how-it-work-btn{visibility: hidden; padding-bottom: 0; padding-top: 0;}
   .headline-svg{display:none !important;}
   .headline-mobile-svg{display:block !important; margin:auto;}
   .howitworks-box2{margin-top:24px;}
   .howitwork-element-wrapper .mt-3{margin-top: 0 !important;}
   .mobSpace{margin-bottom:24px;}
	.steps .quiz-img{height:200px;}
	.quiz-answer .quiz-img{display:none;}
	.quiz-cta{margin-top:1rem;}
	.quiz-content h3{font-size: 1rem; line-height: 1.5rem;}
	.quiz-cta a{font-size: 1.2rem; line-height: 2rem;}
	.quiz-cta a:after{width: 40px; height: 8px; bottom: -10px; left: -3px;}
	.quiz-cta a:first-child{margin-right:1.5rem;}
	.quiz-answer .quiz-header{padding: 20px 20% 10px 10%;}
	.quiz-answer .quiz-header p, .quiz-answer .quiz-content{font-size: 14px;}
	.quiz-answer .quiz-header span{right: 7%; top: 14px;}
	.quiz-answer .quiz-inner{position:relative;}
	.quiz-answer .quiz-content{padding: 10px 5% 20px 10%; background-color: #D0EBF6;}

	/* #answer-quiz .quiz-wrap h3{font-size: 12px;margin-bottom: 0;} */
	#answer-quiz .quiz-wrap h3 { font-size: 11px; margin-top: 5px; margin-bottom: 0; }
	#how-it-work .description { width: 80%; }

	.howitworksMobile{display:none;}
	.howitwork-element-wrapper{display:none;}

	.pres-need{font-size: 16px;}
	.list-group.vertical-steps .list-group-item::before{width:50px;height:50px; line-height: 50px;margin-left: -48px;font-size: 30px;}
	.toggleArea{background-image:none; border-radius: 10px 10px 0 0; -webkit-border-radius: 10px 10px 0 0;}
	img.truck{display:none;}

   #how-it-work .description {padding-bottom: 10px;}

}

/* small iphone device */
@media only screen and (min-width: 320px)  and (max-width: 360px)   {
  .hero-title .top-title { font-size: 30px; line-height: 40px; }
  .hero-title .middle-title { font-size: 50px; line-height: 60px; }
  .hero-title .bottom-title { font-size: 50px;    line-height: 50px; }
  #answer-quiz .quiz-wrap h3{font-size:9px;margin-bottom:0;}
  #answer-quiz .quiz-wrap a{font-size: 8px;}
  #answer-quiz .quiz-wrap{top:65%;}
  
}


 </style>


<div class="mHero-section d-block- d-md-block- d-lg-none d-xl-none d-md-none"></div>   

<?php if( have_rows('header') ): while( have_rows('header') ) : the_row(); 
	$btnTxt = get_sub_field('button_text');
	$btnURL = get_sub_field('url');
 ?>   
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
					<a href="https://app.pandiahealth.com/" class="custom-button float-mobile" style="color: #fff !important;">Get Started </a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ctaOnly d-block d-sm-none text-center d-none d-md-block d-lg-none" style="background-color:#2D99CE;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sectionCTA">   
				  	<a href="<?php echo $btnURL; ?>" class="custom-button bg-white bg-white-btn col-acne m-3"> <?php echo $btnTxt; ?>  </a>
 				</div>
			</div>
		</div>
	</div>
</section>

<?php  
if(have_rows('quiz_section')): 
	while( have_rows('quiz_section') ) : the_row(); 
		$image = get_sub_field('section_image');
		$section_text = get_sub_field('section_text');
		$section_background = get_sub_field('section_background');
?>
<!-- answer quiz sec -->
<section class="answer-quiz-sec" id="answer-quiz" <?php if($section_background){ echo 'style="background-color:'.$$section_background.'"'; } ?>>
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-4 col-lg-5 d-flex justify-content-end">  
				<img src="<?php echo $image; ?>" alt="Answer our quiz"> 
			</div>
			<div class="col-6 col-md-8 col-lg-7">
				<div class="quiz-wrap">
					<h3 class="quiz-title"><?php echo $section_text; ?></h3>
					<p class="quiz-content"><a href="#!" class="text-uppercase" data-toggle="modal" data-target="#quizmodal">Answer our quiz</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end answer quiz sec -->
<?php endwhile;
endif; 

if(have_rows('how_it_works')):
	while(have_rows('how_it_works')) : the_row();
		$section_heading = get_sub_field('section_heading');
		$section_text = get_sub_field('section_text');
		$dont_have_prescription = get_sub_field('dont_have_prescription');
		$have_a_prescription = get_sub_field('have_a_prescription');
		// echo '<pre>';print_r($dont_have_prescription['pointers']).'</pre>';
?>

<!-- how it works -->
<section class="how-it-work" id="how-it-work" style="background-color:#fff;">
   <div class="how-it-wrapper">
   <div class="container">
      <h2 class="section-heading text-center mobSpace"><?php echo $section_heading; ?></h2>
      <div class="description"><?php echo $section_text; ?></div>
   </div>

	<!-- phone layout start here  -->
	<div class="d-block d-sm-none">
		<div class="container need-prescription-wrapper">
            <div class="row">
				<div class="col-lg-12 col-md-12 d-md-flex mt-3">
				<div class="col-lg-6 col-md-6 howitworks-box1">
					<div class="workWrapper bg-white">
						<div class="pres-need-wrap">
							<p class="pres-need col-acne text-uppercase">Don???t have a prescription? </p>
							<ul class="list-group vertical-steps">
							<?php foreach($dont_have_prescription['pointers'] as $pointer){ ?>
							   <li class="list-group-item completed">
								  <div class="step-wrapper">
									 <span class="step-title"><?php echo $pointer['heading']; ?></span>
									 <span><?php echo $pointer['text']; ?></span>
								  </div>
							   </li>
							<?php } ?>   
							</ul>
							<div class="how-it-work-btn">
								<a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
							</div>
						</div>
					</div>	  
				</div>
				<div class="col-lg-6 col-md-6 howitworks-box2">
					<div class="workWrapper bg-white">
						<div class="pres-need-wrap">
							<p class="pres-need col-acne text-uppercase">have a prescription? </p>
							<ul class="list-group vertical-steps how-ul">
							<?php foreach($have_a_prescription['pointers'] as $pointer){ ?>
							   <li class="list-group-item completed">
								  <div class="step-wrapper">
									 <span class="step-title"><?php echo $pointer['heading']; ?> </span>
									 <span><?php echo $pointer['text']; ?></span>
								  </div>
							   </li>
							<?php } ?>   
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
	</div>
	<!-- phone layout end here -->

   <div class="container howitworksMobile">
      <div class="row mb-1">
         <div class="col-12 col-lg-5 col-sm-5  col-md-6 d-flex justify-content-end text-uppercase">
            <div class="first-toogle">Don???t have a prescription? </div>
         </div>
         <div class="col-12 col-md-1 col-sm-2 col-lg-2 d-flex justify-content-center">
            <div class="second-toogle">
               <!-- <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-height="10"> -->
               <div class="switch_box box_1">
               <input type="checkbox" class="switch_1">
               </div>
            </div>
         </div>
         <div class="col-12 col-md-5 col-lg-5 col-sm-5 d-flex justify-content-start text-uppercase">
            <div class="third-toogle"> Have a prescription? </div>
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-12 col-md-4 col-sm-2"> </div>
         <div class="col-12 ml-5 col-md-2 col-sm-5">
            <img src="<?php echo get_template_directory_uri(); ?>/img/how-it-works/select-toggle-text.svg" alt="">
         </div>
         <div class="col-12 col-md-4"> </div>
      </div>
	<div class="container howitwork-element-wrapper">
		<div class="row have-prescription" id="off">
         <div class="step-icon-wrapper">
            <div class="col-lg-12 col-md-12 d-md-flex mt-3">
               <div class="col-lg-6 col-md-6 howitworks-box1-">
                  <div class="workWrapper">
                     <div class="steps-padd">
                        <ul class="list-group vertical-steps">
						<?php foreach($have_a_prescription['pointers'] as $pointer){ ?>
						   <li class="list-group-item completed">
							  <div class="step-wrapper">
								 <span class="step-title"><?php echo $pointer['heading']; ?> </span>
								 <span><?php echo $pointer['text']; ?></span>
							  </div>
						   </li>
						<?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 howitworks-box2">
                  <div class="workWrapper">
                     <div class="steps-padd">
                        <img src="<?php echo $have_a_prescription['image']; ?>" class="rounded-circle" alt="Have a Prescription"> 
                     </div>
                  </div>
               </div>
            </div>

            <div class="howitworks-icon-wrapper">
               <div class="row">
					<?php foreach($have_a_prescription['questions'] as $question){ ?>
					<div class="col-sm-4">
						<div class="howitworks-icon-wrap">
							<div class="howitworks-img">
							   <img src="<?php echo $question['icon']; ?>" class="rounded-circle" alt="<?php echo $question['heading']; ?>" width="60" height="60">
							</div>
							<h4 class="howitworks-subtitle"><?php echo $question['heading']; ?></h4>
							<div class="howitworks-subdescription"><?php echo $question['text']; ?></div>
						</div>
					</div>
					<?php } ?>
                  <div class="how-it-work-btn d-md-none d-lg-block">
                     <a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
                  </div>
               </div>
            </div>
         </div>
		</div>
         
		<div class="row dont-prescription" id="on">
         <div class="step-icon-wrapper">
            <div class="col-lg-12 col-md-12 d-md-flex mt-3">
               <div class="col-lg-6 col-md-6 howitworks-box1-">
                  <div class="workWrapper">
                     <div class="steps-padd">
                        <ul class="list-group vertical-steps">
						<?php foreach($dont_have_prescription['pointers'] as $pointer){ ?>
						   <li class="list-group-item completed">
							  <div class="step-wrapper">
								 <span class="step-title"><?php echo $pointer['heading']; ?></span>
								 <span><?php echo $pointer['text']; ?></span>
							  </div>
						   </li>
						<?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 howitworks-box2">
                  <div class="workWrapper">
                     <div class="steps-padd">
                        <img src="<?php echo $dont_have_prescription['image']; ?>" class="rounded-circle" alt="Have a Prescription">
                     </div>
                  </div>
               </div>
            </div>
      
            <div class="howitworks-icon-wrapper">
				<div class="row">
				<?php foreach($dont_have_prescription['questions'] as $question){ ?>
					<div class="col-sm-4">
						<div class="howitworks-icon-wrap">
							<div class="howitworks-img">
							   <img src="<?php echo $question['icon']; ?>" class="rounded-circle" alt="<?php echo $question['heading']; ?>" width="60" height="60">
							</div>
							<h4 class="howitworks-subtitle"><?php echo $question['heading']; ?></h4>
							<div class="howitworks-subdescription"><?php echo $question['text']; ?></div>
						</div>
					</div>
				<?php } ?>  
                  <div class="how-it-work-btn d-md-none d-lg-block">
                     <a href="https://app.pandiahealth.com/" target="_blank" class="custom-button">Get Started</a>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>
      </div>  
      </div>
 
</section>                  
<!-- end how it works -->
<?php endwhile;
endif; ?>
<section class="comparision">
	<div class="container">
		<div class="row">
			<div class="col-md-12 toggleArea"><h3 class="compareToggle">What's right for me?</h3></div>
		</div>
	</div>
	<div class="container compare-tbl" style="display:none;">
		<div class="d-none d-sm-none d-md-block">
			<div class="row head-row">
				<div class="col-md-4 p-0">
					<div class="compare-col"></div>
				</div>
				<div class="col-md-4 p-0">
					<div class="compare-col">
						<h3>Don't have a <br>prescription?</h3>
					</div>
				</div>
				<div class="col-md-4 p-0">
					<div class="compare-col">
						<h3>Have a <br>prescription</h3>
					</div>
				</div>
			</div>
			<?php 
			if(have_rows('compare_table')): 
				$counter = 0;
				while(have_rows('compare_table')):the_row(); 
					$questions[] .= get_sub_field('question');
					$have_prescription[] .= get_sub_field('have_prescription');
					$dont_have_prescription[] .= get_sub_field('dont_have_prescription');
				?>
					<div class="row <?php if($counter%2 == 0){ echo 'odd';}else{ echo 'even';  }?>">
						<div class="col-md-4 row-cell p-0">
							<div class="compare-col">
								<h3><?php echo get_sub_field('question'); ?></h3>
							</div>
						</div>
						<?php if(get_sub_field('same_for_both') == 'yes'){?>
							<div class="col-md-8 col-lg-5 row-cell p-0">
								<div class="compare-col">
									<?php echo get_sub_field('have_prescription'); ?>
								</div>
							</div>
						<?php }else{ ?>
							<div class="col-md-4 row-cell p-0">
								<div class="compare-col">
									<?php echo get_sub_field('dont_have_prescription'); ?>
								</div>
							</div>
							<div class="col-md-4 row-cell p-0">
								<div class="compare-col">
									<?php echo get_sub_field('have_prescription'); ?>
								</div>
							</div>
						<?php } ?>
					</div>
			<?php  $counter++; endwhile;  endif;?>		
		</div>
		<div class="d-block d-sm-block d-md-none mobile-compare">
			<div class="row">
				<div class="col-md-12 head-row">
					<h3>Don't have a <br>prescription?</h3>
				</div>
			</div>
			<?php 
			$totalQuestion = sizeof($questions);
			for($i = 0; $i < $totalQuestion; $i++){ ?>
				<div class="row <?php if($i%2 == 0){ echo 'odd'; }else{ echo 'even'; } ?>">
					<div class="col-md-12">
						<div class="compare-col">
							<h3><?php echo $questions[$i]; ?></h3>
							<?php echo $dont_have_prescription[$i]; ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<div class="col-md-12 head-row">
					<h3>Have a <br>prescription?</h3>
				</div>
			</div>
			<?php for($i = 0; $i < $totalQuestion; $i++){ ?>
			<div class="row <?php if($i%2 == 0){ echo 'odd'; }else{ echo 'even'; } ?>">
				<div class="col-md-12">
					<div class="compare-col">
						<h3><?php echo $questions[$i]; ?></h3>
						<?php echo $have_prescription[$i]; ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div class="row closeToggle">
			<div class="col-md-12 text-center"><span>Close <img src="<?php echo get_template_directory_uri(); ?>/img/how-it-works/up-icon.svg" alt="Close"></span></div>
		</div>
	</div>
</section>
<!-- Start Modal -->
<div class="modal fade" id="quizmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
	  <div class="modal-body">
		<div class="quiz-wrapper">
		<?php
		if(have_rows('quiz_section')): 
			$stepCounter = 1;
			while(have_rows('quiz_section')): the_row(); 
				$popup_modal = get_sub_field('popup_modal'); 
				foreach($popup_modal as $modal){
					if($stepCounter != 1){$style = 'style="display:none"';}else{$style = '';}
					if($modal['modal_type'] == 'question'){?>
						<div class="step<?php echo $stepCounter; ?> steps quiz-question" <?php echo $style; ?>>
							<div class="quiz-img" style="background-image:url('<?php echo $modal['modal_image']; ?>');"></div>
							<div class="quiz-inner">
								<div class="quiz-content">
									<h3><?php echo $modal['modal_question']; ?></h3>
									<div class="quiz-cta">
										<a href="#!" data-toggle="<?php echo $modal['next_step_yes']; ?>" class="ctaBtn">Yes</a>
										<a href="#!" data-toggle="<?php echo $modal['next_step_no']; ?>" class="ctaBtn">No</a>
									</div>
								</div>
							</div>
						</div>
					<?php }else{ ?>		
						<div class="step<?php echo $stepCounter; ?> steps quiz-answer" <?php echo $style; ?>>
							<div class="quiz-img" style="background-image:url('<?php echo $modal['modal_image']; ?>');"></div>
							<div class="quiz-inner">
								<div class="quiz-desc">
									<div class="quiz-header">
										<p><?php echo $modal['modal_question']; ?></p>
										<span><?php echo $modal['answer_type']; ?></span>
									</div>
									<div class="quiz-content">
										<div class="inner-content">
											<?php echo $modal['modal_text']; ?>
											<a href="<?php echo $modal['external_url']; ?>" target="_blank" class="exCtaBtn">Get Started</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } // end if
					$stepCounter++;
				} // endforeach					
			endwhile; endif; ?>				
		</div>
	  </div>
	</div>
  </div>
</div>
<!-- End Modal -->



<script>
jQuery(document).ready(function(){
	// dynamic height for the menu bar
	var headerHeight = jQuery('header').outerHeight();
	jQuery('#page_content').css('padding-top', headerHeight - 2 + 'px');
	// popup next steps
	jQuery('.ctaBtn').click(function(){
		var nextStep = jQuery(this).attr('data-toggle');
		jQuery('.steps').hide();
		jQuery('.'+nextStep).show();
	});
	//  compare toggle
	jQuery(".compareToggle").click(function(){
	  jQuery(".compare-tbl").slideToggle('slow');
	});
	
	jQuery('.closeToggle span').click(function(){
		jQuery(".compare-tbl").slideToggle('slow');
	});
});
</script>

<script>

jQuery(document).ready(function(){
	jQuery('#off').hide();
	jQuery('.switch_1').click(function(){  
	var hasClass = jQuery('.third-toogle').hasClass('col-acne');
	jQuery('#on').toggle();
		if(!hasClass) {
			jQuery('#off').show();
			jQuery('.third-toogle').addClass('col-acne');
			jQuery('.first-toogle').removeClass('col-acne');
		}else{
			jQuery('#off').hide();
			jQuery('.third-toogle').removeClass('col-acne');
			jQuery('.first-toogle').addClass('col-acne');
		}
	 });  
});
</script>

<?php get_footer('acne'); ?>
