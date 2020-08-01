
// scroll up
$(function () {
    $.scrollUp({
      scrollName: 'scrollUp', // Element ID
      topDistance: '300', // Distance from top before showing element (px)
      topSpeed: 300, // Speed back to top (ms)
      animation: 'fade', // Fade, slide, none
      animationInSpeed: 200, // Animation in speed (ms)
      animationOutSpeed: 200, // Animation out speed (ms)
      scrollText: '', // Text for element
      activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });
  });
  // scroll up
  

  //Main Carousel
  $(document).ready(function() {
   
    var owl = $(".maincaro");
   
    owl.owlCarousel({
      loop:true,
      dots:false,
      autoplay:true,
      nav:false,
      interval:5000,
      autoplayTimeout:4000,
      smartSpeed:950,
      
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
    });

    
  
  // Custom Navigation Events
  $('.next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prev').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
 
});	




// counter fun fact
jQuery(document).ready(function ($) {
  $('.counter').counterUp({
      delay: 50,
      time: 1000
  });
});
// counter fun fact
  
//service carousel
$(document).ready(function() {
 
  var owl = $(".service-caro");
 
owl.owlCarousel({
  loop:true,
autoplay:true,
  nav:false,
interval:3500,
autoplayTimeout:3500,
smartSpeed:1500,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});    


});	


//blog carousel
$(document).ready(function() {
 
  var owl = $(".blog-caro");
 
owl.owlCarousel({
  loop:true,
autoplay:true,
  nav:false,
interval:900,
autoplayTimeout:900,
smartSpeed:800,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
});    


});	



//gallery carousel
$(document).ready(function() {
 
  var owl = $(".gallery-caro");
 
owl.owlCarousel({
loop:true,
autoplay:true,
nav:false,
interval:2000,
autoplayTimeout:2000,
smartSpeed:1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
});    


});	


//testi carousel
$(document).ready(function() {
 
  var owl = $(".testi-caro");
 
owl.owlCarousel({
loop:true,
autoplay:true,
nav:false,
interval:900,
autoplayTimeout:900,
smartSpeed:800,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:2
      }
  }
});    


});	




//tab

$(document).ready(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
      var target = $(this).attr('href');

      $tabButtonItem.removeClass(activeClass);
      $(this).parent().addClass(activeClass);
      $tabSelect.val(target);
      $tabContents.hide();
      $(target).show();
      e.preventDefault();
  });

  $tabSelect.on('change', function() {
      var target = $(this).val(),
          targetSelectNum = $(this).prop('selectedIndex');

      $tabButtonItem.removeClass(activeClass);
      $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
      $tabContents.hide();
      $(target).show();
  });
});
//tab

// gallery image
$('.portfolio-item').isotope({
  itemSelector: '.item',
  layoutMode: 'fitRows'
});
$('.portfolio-menu ul li').click(function(){
  $('.portfolio-menu ul li').removeClass('active');
  $(this).addClass('active');
  
  var selector = $(this).attr('data-filter');
  $('.portfolio-item').isotope({
    filter:selector
  });
  return  false;
});
$(document).ready(function() {
var popup_btn = $('.popup-btn');
popup_btn.magnificPopup({
type : 'image',
gallery : {
  enabled : true
}
});
});