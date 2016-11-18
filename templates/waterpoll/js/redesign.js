jQuery(document).ready(function() {
    function slickSliderPools () {
        jQuery('.pools-slick').slick({
          infinite: true,
          autoplay: true,
          autoplaySpeed: 4000,
          speed: 1000,
          slidesToShow: 5,
          slidesToScroll: 1,
		  prevArrow: '<a href="#" class="prev_prod">&nbsp;</a>',
          nextArrow: '<a href="#" class="next_prod">&nbsp;</a>',
		  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 380,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
        });        
    }
    
	
	
	
	
	
	
	
    function slickSliderReviews () {
        jQuery('.review-slider').slick({
          infinite: true,
          speed: 1000,
          slidesToShow: 2,
          slidesToScroll: 1,
          prevArrow: '<a href="#" class="prev_prod">&nbsp;</a>',
          nextArrow: '<a href="#" class="next_prod">&nbsp;</a>',
		   responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        
      }
    }
    
  ]
		  
		  
        });        
    }
	
	slickSliderPools ();
	slickSliderReviews ();

});