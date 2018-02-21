(function ($) {
	// if(window.innerWidth < 1200)
    $('.certification-block .certificate-wrapper').slick({
        slidesToShow: 6,
        slidesToScroll: 3,
        // infinite: true,
        dots: true,
        arrows: false,
        responsive: [
	        {
	            breakpoint: 1200,
	            settings: {
	                slidesToShow: 5,
	                slidesToScroll: 5
	            }
	        }, 
	        {
	            breakpoint: 991,
	            settings: {
	                slidesToShow: 4,
	                slidesToScroll: 4
	            }
	        }, 
	        {
	            breakpoint: 769,
	            settings: {
	                slidesToShow: 3,
	                slidesToScroll: 3
	            }
	        }, 
	        {
	            breakpoint: 479,
	            settings: {
	                slidesToShow: 2,
	                slidesToScroll: 2
	            }
	        },
	        {
	            breakpoint: 381,
	            settings: {
	                slidesToShow: 1,
	                slidesToScroll: 1
	            }
	        }
        ]
    });
})(jQuery);