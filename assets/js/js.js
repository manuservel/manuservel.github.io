 


 $(window).on("scroll", function () {
  "use strict";

  // menu scroll
  if ($(this).scrollTop() > 200) {
    $(".navigation").addClass("nav-scroll");
    }
  else {
    $(".navigation").removeClass("nav-scroll");
  };

});

$(document).ready(function(){
   "use strict";

	// Navigation
	$("#menu-toggle").on("click", function(){
		$(".menu-wrap").toggleClass("open");
	});


	$(".menu li").hover(function() {
  	 	$(this).find(".submenu").stop(true, true).delay(1).slideDown(170);
	}, function() {
	    $(this).find(".submenu").stop(true, true).delay(200).slideUp(170);
	});

	//Search
	$("#search-toggle").on("click", function() {
	    $("#search-bar").slideDown(170);
	});
	$("#search-close").on("click", function() {
	    $("#search-bar").slideUp(170);
	});


	// Nivo Light-Box
	var nivoActivator = $('.nivo-activator');
	if (nivoActivator.css("display") == "block"){
   		$('.slider-btn, .nivo-trigger').nivoLightbox({
   			theme: 'default'
   		});
	};

    // Countdown
    if ($('.countdown').length>0) {
        $(".countdown").countdown({
            date: "28 june 2016 12:00:00", // Edit this line
            format: "on"
        },
        function() {
          // This will run when the countdown ends
        });
    }

    // Main Slider
  	if($("#home-slider").length>0){
    	jQuery("#home-slider").revolution({
      		sliderType:"standard",
      		sliderLayout:"auto",
      		delay:9000,
      		gridwidth:1230,
      		gridheight:600,
      		navigation: {
      	  	keyboard_direction: "horizontal",
      	  	mouseScrollNavigation: "off",
      	  	onHoverStop: "off",
      	  	arrows: {
      	  	  	style: "erinyen",
      	  	  	enable: true,
      	  	  	hide_under: 768,
      	  	  	hide_onleave: false,
      	  	  	left: {
      	  	  	    h_align: "left",
      	  	      	v_align: "center",
      	  	      	h_offset: 55,
      	  	      	v_offset: 2
      	  	  	},	
      	  	  	right: {
      	  	      	h_align: "right",
      	  	      	v_align: "center",
      	  	      	h_offset: 55,
      	  	      	v_offset: 2
      	  	 	}
      	  	},
      	  	bullets: {
      	  	 	enable: true,
      	  	  	hide_onmobile: false,
      	  	  	style: "simplebullets",
      	  	  	hide_onleave: false,
      	  	  	direction: "horizontal",
      	  	  	h_align: "center",
      	  	  	v_align: "bottom",
      	  	  	h_offset: 20,
      	  	  	v_offset: 50,
      	  	  	space: 5,
      	  	  	tmp: '<span class="bullet-inner"></span>'
      	  	}	
      		},
    	});
  	};

	 // Carousels
    if($("#partners-slider").length>0){
    	$("#partners-slider").owlCarousel({
    		items: 4,
    		responsiveClass:true,
	      	dots: true,
    		responsive:{
	        0:{
	            items:1
	        },
	        450:{
	            items:2,
	        },
	        650:{
	            items:3,
	        },
	        991:{
	        	item: 4,
	        },

	    }
    	});
    };

   	if ($("#post-slider").length>0) {
    	$("#post-slider").owlCarousel({
    		items: 1,
	    	nav : true,
	      	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	      	autoPlay: true,
	      	dots: true,
    	});
    };


  // Causes Filter 
  var $causeslist = $('.causes-list');
   
  // initialize isotope
  if (($causeslist).length> 0) {
    $causeslist.isotope();
    $(window).resize( function(){ 
      setTimeout(function() { 
        $causeslist.isotope('layout'); 
      }, 1000);  
    });
    $(window).load(function(){ 
       $causeslist.isotope('layout'); 
    });
  };

  $(".causes-filter").on("click", "li", function() {
    $("li.selected").removeClass("selected");
    $(this).addClass("selected");
    var selector = $(this).attr("data-filter");
    $causeslist.isotope({
      filter: selector,
    });
  });

	

	// Dropdown
	$(".dropdown ").on("click", function(){
		$(".dropdown-list").toggleClass("on");
	});


	// Dropdown Replaced Texts
	$(".dropdown-list ").on("click", "li",function(){
	    $('.dropdown-label').text($(this).text());
	    $('.dropdown-label').text();
	});


});


