    // hamburger
	     $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		       $(this).toggleClass('open');
	     });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', {
        duration: 600,
        scale: .7,
        distance: '0px'
    }, 200);
    sr.reveal('.sr-button', {
        duration: 1000,
        delay: 200
    });
    sr.reveal('.sr-contact', {
        duration: 600,
        scale: 0.3,
        distance: '0px'
    }, 300);

    //back to top
   $(window).scroll(function () {
          if ($(this).scrollTop() > 100) {
              $('#back-to-top').removeClass("scale-out").addClass("scale-in");
          } else {
              $('#back-to-top').removeClass("scale-in").addClass("scale-out");
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });


    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 75)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

console.log("Hello world. Site by Woodbury Shortridge - whshortridge@gmail.com");
