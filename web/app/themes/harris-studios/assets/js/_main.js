/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

 (function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      //smoothState
      // $('#main-wrapper').smoothState();

      // Sidr
      $('.simple-menu').sidr({
        side: 'right'
      });

      // Navbar
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 75) {
          $(".navbar-default").addClass("navbar-bg");
        } else {
          $(".navbar-default").removeClass("navbar-bg");
        }
      });

      // Scroll to
      $(function() {
        $('a[href*=#]:not([href=#],[href=#sidr],[href=#remote-content-menu])').click(function() {
          if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });

    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page

      $('nav.section-navigation li a').tooltip();

      // Navbar
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 307) {
          $(".navbar-default").addClass("navbar-bg");
        } else {
          $(".navbar-default").removeClass("navbar-bg");
        }
      });

      $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
          $(".newsticker").fadeOut('slow');
        } else {
          $(".newsticker").fadeIn('slow');
        }
      });


    }
  },
  lesson_signup: {
    init: function() {

      var lesson_title = $('.post-lesson-title').attr('data-lesson');
      $('.wpcf7-form span.lesson input').val(lesson_title);

    }
  },
  class_registration: {
    init: function() {

      // $('input#stripe_first_name').val('');
      // $('input#stripe_last_name').val('');
      // $('input#stripe_email').val('');

      // For testing billing info
      // $('input#stripe_first_name').val('Jesse');
      // $('input#stripe_last_name').val('Kade');
      // $('input#stripe_email').val('jesse@sharpmachinemdia.com');
      // $('input#stripe_address').val('1452 Oregon St');
      // $('input#stripe_city').val('Redding');
      // $('input#stripe_state').val('Ca');
      // $('input#stripe_zip').val('98901');

      // For testing credit card info
      // $('input#stripe_cc').val('4242424242424242');
      // $('input#stripe_csc').val('098');


      // For testing registration details
      // $('input.TEXT_13').val('Jesse Kade');
      // $('input.email').val('jesse@sharpmachinemedia.com');
      // $('input.phone').val('6193987595');
      // $('input.fname').val('Shelly');
      // $('input.lname').val('Kade');
      // $('input.TEXT_12').val('27');
    }
  },

  // Instructors page
  instructors: {
    init: function() {

      // Full Instructor Bios
      $('.remote-content-menu').sidr({
        name: 'sidr-remote-content',
        side: 'left',
        renaming: false,
        displace: false,
      });

      // Give overlay proper height
      $(window).load(function(){
        var body_height = $('body').outerHeight();
        var overlay_height = body_height -52;
        $('.instructor-overlay').height(overlay_height);
      });

      // Instructors Ajax
      $.ajaxSetup({cache:false});
      $(".remote-content-menu").click(function() {
        var post_link = $(this).attr("href");

        $("#the-full-bio").html("<img class='loading-gif' src='/content/themes/harris-studios/assets/img/ajax-loader.gif'>");
        $("#the-full-bio").load(post_link + " .single-instructor");
        $('.instructor-overlay').toggleClass('active');
        return false;
      });

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
