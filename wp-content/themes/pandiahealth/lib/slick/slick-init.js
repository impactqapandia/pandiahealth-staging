jQuery(document).ready(function ($) {
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        arrows: true,
        autoplay: false
    });
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
		arrows: true,
        autoplaySpeed: 8000,
		responsive: [                  
         {
            breakpoint: 992,
            settings:
			 {
               slidesToShow: 2,
               slidesToScroll: 1
             }
         }
       ]		
      });
	$('.autoplay_birth_control_methods').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
		dots: false,
		arrows:true,
        autoplaySpeed: 8000,
      });
	$('.autoplay_birth_control_methods_mobile').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: false,
		infinite: true,
		centerMode:true,
		dots: true,
		arrows:false,
        autoplaySpeed: 3000,
      });

   
      
});