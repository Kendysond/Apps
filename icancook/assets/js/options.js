var teslaThemes = {

  settings: {
    scripts: [
      // 'js/plugins/queryloader.js',
      // 'js/plugins/simple-slider.js',
      // 'js/plugins/isotope.pkgd.min.js',
      // 'js/plugins/imagesloaded.js',
      // 'js/plugins/swipebox.js',
      // 'js/plugins/plugins.js',
      // 'js/plugins/placeholder.js',
      // 'js/plugins/enquire.js',
      // 'js/plugins/jquery.finger.js',
    ]
  },
  init: function() {
    "use strict";
    this.loadScripts();
  },

  module: function() {
    "use strict";
    this.queryLoader();
    this.homeSlider();
    this.simpleSlider();
    this.portfolioFilter();
    this.menu();
    this.tabs();
    this.pageSliders();
    this.zoomImage();
    this.izotopeList();
    this.contactForm();
  },


  loadScripts: function() {
    "use strict";
    teslaThemes.module();
    Modernizr.load([{}, {
      test: window.matchMedia,
      nope: ['js/media.match.js']
    }]);
  },

  queryLoader: function() {
    "use strict";
    jQuery(document).ready(function() {
      showContent();

      function showContent() {
        jQuery('#home').addClass('show-content');
      }
    });
  },

  sticky: function() {
    "use strict";
    if (jQuery('.sticky-bar').length) {
      jQuery(".sticky-bar").sticky({
        topSpacing: 0
      });
    }
  },

  fitvids: function() {
    "use strict";
    var video = jQuery('noscript').text();

    if (video.trim().search('iframe') === 1) {
      jQuery('noscript').parent().append(video);
    }


    jQuery("#home").fitVids({
      customSelector: "iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"
    });
  },

  scrolld: function() {
    "use strict";
    jQuery(".main-nav > ul > li > a, .intro-button").stop(true).on('click', function(e) {
      jQuery(".main-nav > ul > li").removeClass('current-menu-item');

      if (jQuery(this).hasClass('intro-button')) {
        jQuery(".main-nav > ul > li").eq(0).addClass('current-menu-item');
      } else {
        jQuery(this).parent().addClass('current-menu-item');
      }


      e.preventDefault();
      jQuery(this).scrolld({
        scrolldEasing: 'easeOutBack'
      });
    });
  },

  menu: function() {
    "use strict";
    var menu = jQuery('.responsive-nav');
    var li = jQuery('.responsive-nav.to-right ul > li').clone();

    var responsive = jQuery('.responsive-nav.to-left').clone();
    responsive.find('ul').first().append(li);

    var bodyPosition;
    var menuButtonHTML = '<a href="#" class="mobile-menu-button"><i class="icon-62"></i></a>';
    var menuButtonHolder = jQuery('.menu-button');

    //var menuMarkup = menu.clone(); 
    var menuMarkup = responsive.first();

    //menuMarkup.prepend(menuButtonHTML);

    jQuery(document).on('click', '.mobile-menu-button', function(e) {
      e.preventDefault();

      if (menuMarkup.hasClass('active-menu')) {
        menuMarkup.removeClass('active-menu');
      } else {
        menuMarkup.toggleClass('active-menu');
      }

      if (jQuery('body').hasClass('active-menu')) {
        jQuery('body').removeClass('active-menu');
      } else {
        jQuery('body').toggleClass('menu-effect');
      }
    });

    jQuery(document).on('drag', 'body .responsive-nav', function(e) {
      bodyPosition = -(e.adx - 200);

      if (e.adx < 100) {
        jQuery('body.menu-effect .boxed-view').css({
          '-webkit-transform': 'translate3d(' + bodyPosition + 'px,0,0)'
        });
      }

      if (e.end === true) {
        jQuery('body.menu-effect .boxed-view').removeAttr("style");
        if (e.adx > 100) {
          jQuery('body ').removeClass('menu-effect');
          jQuery('body > .responsive-nav').removeClass('active-menu');
        }
      }
      //jQuery('body .main-nav').removeClass('active-menu');
      //jQuery('body ').removeClass('menu-effect');              
    });

    enquire.register("screen and (max-width:992px)", {

      // OPTIONAL
      // If supplied, triggered when a media query matches.
      match: function() {
        menu.hide();

        jQuery('body').prepend(menuMarkup);
        menuButtonHolder.append(menuButtonHTML);
      },


      // OPTIONAL
      // If supplied, triggered when the media query transitions 
      // *from a matched state to an unmatched state*.
      unmatch: function() {
        menuMarkup.remove();
        menu.show();
        jQuery('.logo .mobile-menu-button').remove();
      },

      // OPTIONAL
      // If supplied, triggered once, when the handler is registered.
      setup: function() {},

      // OPTIONAL, defaults to false
      // If set to true, defers execution of the setup function 
      // until the first time the media query is matched
      deferSetup: true,

      // OPTIONAL
      // If supplied, triggered when handler is unregistered. 
      // Place cleanup code here
      destroy: function() {}

    });

  },

  homeSlider: function() {
    "use strict";
    jQuery(document).ready(function() {
      jQuery('#home_slider').sudoSlider({
        numeric: false,
        auto: true,
        responsive: true,
        vertical: true,
        autoHeight: true,
        moveCount: 1,
        prevhtml: ' <a href="#" class="prev-nav"></a> ',
        nexthtml: ' <a href="#" class="next-nav"></a> ',
        controlsattr: 'id="home_controls" class="controls"',
        numericattr: 'class="slider-nav"',
        continuous: false,
        animationZIndex: 10
      });
    });
  },

  pageSliders: function() {
    "use strict";
    jQuery(document).ready(function() {
      var slider_breakfast = jQuery('#breakfast').sudoSlider({
        numeric: false,
        responsive: true,
        vertical: false,
        autoHeight: true,
        moveCount: 4,
        prevhtml: ' <a href="#" class="prev-nav"></a> ',
        nexthtml: ' <a href="#" class="next-nav"></a> ',
        controlsattr: 'id="breakfast_controls" class="controls"',
        numericattr: 'class="slider-nav"',
        slideCount: 4,
        continuous: false,
        animationZIndex: 10
      });

      var slider_lunch = jQuery('#lunch').sudoSlider({
        numeric: false,
        responsive: true,
        vertical: false,
        autoHeight: true,
        moveCount: 4,
        prevhtml: ' <a href="#" class="prev-nav"></a> ',
        nexthtml: ' <a href="#" class="next-nav"></a> ',
        controlsattr: 'id="lunch_controls" class="controls"',
        numericattr: 'class="slider-nav"',
        slideCount: 4,
        continuous: false,
        animationZIndex: 10
      });

      var slider_dinner = jQuery('#dinner').sudoSlider({
        numeric: false,
        responsive: true,
        vertical: false,
        autoHeight: true,
        moveCount: 4,
        prevhtml: ' <a href="#" class="prev-nav"></a> ',
        nexthtml: ' <a href="#" class="next-nav"></a> ',
        controlsattr: 'id="dinner_controls" class="controls"',
        numericattr: 'class="slider-nav"',
        slideCount: 4,
        continuous: false,
        animationZIndex: 10
      });

      if (jQuery('#breakfast').length) {
        if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
          slider_breakfast.setOption('slideCount', 3);
          slider_breakfast.setOption('moveCount', 3);
        } else if (jQuery(window).width() < 468) {
          slider_breakfast.setOption('slideCount', 2);
          slider_breakfast.setOption('moveCount', 2);
        } else {
          slider_breakfast.setOption('slideCount', 4);
          slider_breakfast.setOption('moveCount', 4);
        }

        jQuery(window).resize(function() {
          if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
            slider_breakfast.setOption('slideCount', 3);
            slider_breakfast.setOption('moveCount', 3);
          } else if (jQuery(window).width() < 468) {
            slider_breakfast.setOption('slideCount', 2);
            slider_breakfast.setOption('moveCount', 2);
          } else {
            slider_breakfast.setOption('slideCount', 4);
            slider_breakfast.setOption('moveCount', 4);
          }
        });
      }

      if (jQuery('#lunch').length) {
        if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
          slider_lunch.setOption('slideCount', 3);
          slider_lunch.setOption('moveCount', 3);
        } else if (jQuery(window).width() < 468) {
          slider_lunch.setOption('slideCount', 2);
          slider_lunch.setOption('moveCount', 2);
        } else {
          slider_lunch.setOption('slideCount', 4);
          slider_lunch.setOption('moveCount', 4);
        }

        jQuery(window).resize(function() {
          if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
            slider_lunch.setOption('slideCount', 3);
            slider_lunch.setOption('moveCount', 3);
          } else if (jQuery(window).width() < 468) {
            slider_lunch.setOption('slideCount', 2);
            slider_lunch.setOption('moveCount', 2);
          } else {
            slider_lunch.setOption('slideCount', 4);
            slider_lunch.setOption('moveCount', 4);
          }
        });
      }

      if (jQuery('#dinner').length) {
        if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
          slider_dinner.setOption('slideCount', 3);
          slider_dinner.setOption('moveCount', 3);
        } else if (jQuery(window).width() < 468) {
          slider_dinner.setOption('slideCount', 2);
          slider_dinner.setOption('moveCount', 2);
        } else {
          slider_dinner.setOption('slideCount', 4);
          slider_dinner.setOption('moveCount', 4);
        }

        jQuery(window).resize(function() {
          if (jQuery(window).width() < 990 && jQuery(window).width() > 468) {
            slider_dinner.setOption('slideCount', 3);
            slider_dinner.setOption('moveCount', 3);
          } else if (jQuery(window).width() < 468) {
            slider_dinner.setOption('slideCount', 2);
            slider_dinner.setOption('moveCount', 2);
          } else {
            slider_dinner.setOption('slideCount', 4);
            slider_dinner.setOption('moveCount', 4);
          }
        });
      }

    });
  },

  tabs: function() {
    "use strict";
    jQuery(document).ready(function() {

      jQuery('#tabs_widgets a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
      });

      jQuery('#toggle_tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
      });

    });
  },

  simpleSlider: function() {
    "use strict";
  },

  zoomImage: function() {
    "use strict";
    jQuery('.zoom-image').swipebox();
  },

  izotopeList: function() {
    "use strict";
    var box = jQuery('.filter-items');

    jQuery(document).ready(function() {
      box.isotope({
        itemSelector: 'li',
        layoutMode: 'fitRows',
        getSortData: {
          category: '[data-category]'
        }
      });
    });
  },

  portfolioFilter: function() {
    "use strict";
    jQuery('.filter-cats > li a').click(function(e) {
      e.preventDefault();
      var tag = jQuery(this).text();
      var box = jQuery('.menu-items');

      var selector = tag.toLowerCase() == 'all' ? 'li' : '.' + tag.toLowerCase();
      box.isotope({
        filter: selector
      });
    });
  },

  contactForm: function() {
    "use strict";

    jQuery('#contact_form').each(function() {
      "use strict";
      var t = jQuery(this);
      var t_result = jQuery('#submit');
      var t_result_init_val = t_result.val();
      var validate_email = function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      };
      var t_timeout;
      jQuery(this).submit(function(event) {

        event.preventDefault();
        var t_values = {};
        var t_values_items = t.find('input[name],textarea[name]');

        t_values_items.each(function() {
          t_values[this.name] = jQuery(this).val();
        });


        if (t_values['name'] === '' || t_values['e-mail'] === '' || t_values['message'] === '') {
          t_result.val('Please fill in all the required fields.');
        } else
        if (!validate_email(t_values['e-mail']))
          t_result.val('Please provide a valid e-mail.');
        else
          jQuery.post("php/contacts.php", t.serialize(), function(result) {
            t_result.val(result);
          });
        clearTimeout(t_timeout);
        t_timeout = setTimeout(function() {
          t_result.val(t_result_init_val);
        }, 3000);
      });
    });
  }
};

teslaThemes.init();