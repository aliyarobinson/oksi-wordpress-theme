"use strict"; 

var AYR = AYR || {};

(function($){


  // Cache DOM elements for future use
  var mainContent = $('main');
  var displayContent = $('.content-display-wrapper > .content-display');
  var loader = $('.loader-wrapper');
  var menuBtn = $('.menu-btn');
  var ddBtn = $('.drop-down');
  var timelineNav = $('.time-nav');
  var timelineBtn = timelineNav.find('button');
  // var subMenu = $('.drop-down > .sub-nav');
  var timelineBtns = $('.timeline-btn');
  var siteNav = $('.site-nav');
  var siteHeader = $('.site-header');
  var last_known_scroll_position = 0;
  var ticking = false;

  // If ontouchstart exists then set click handler to touchstart otherwise set clickhandler to click
  var clickHandler = ('ontouchstart' in document.documentElement ? "touchstart" : "click");

  
  /**************************************/
  /*   Application Object
  /***************************************************/
  AYR = {
    currPageName:"",
    contentElement: {},

    init: function () {
      console.log('init');

      /**************************************/
      /*   Navigation link click
      /***************************************************/

      menuBtn.on(clickHandler, function(){
        console.log('clicked menu');
        menuBtn.toggleClass('active');
        siteNav.toggleClass('active');
        siteHeader.toggleClass('mobile-active');
      });

      ddBtn.on(clickHandler, function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).find('.sub-nav').toggleClass('active');
      });

      $(".site-nav").mCustomScrollbar({
        // theme:"minimal"
      });
      
      $(".grid-header .content").mCustomScrollbar({
        // theme:"minimal"
      });

      timelineBtn.on(clickHandler, function(e){
        e.preventDefault();
        console.log('time click');
        var $this = $(this);
        var year = $this.data('year');
        console.log('time click year: ', year);

        $('.list li').removeClass('collapsed');
        
        if ( !($this).hasClass('all') ){
          $('.list li').not('[data-year="'+year+'"]').addClass('collapsed');
        }
      });

  

      /**************************************/
      /*   Video Click image swap
      /***************************************************/
      $(document).on( clickHandler, '.video', function(e) { 
        e.preventDefault();
        console.log('!!!'); 
        var vidID = $(this).attr('id');

        var iframe_url = "https://www.youtube.com/embed/" + vidID + "?rel=0&autoplay=1&autohide=1&showinfo=0";
    
        // The height and width of the iFrame should be the same as parent
        var iframe = $('<iframe/>', {'frameborder': '0', 'allowfullscreen': '', 'src': iframe_url });

        // Replace the YouTube thumbnail with YouTube HTML5 Player
        $(this).append(iframe);
      });




      /**************************************/
      /*   Image Expand Code
      /***************************************************/

      $('.expand-btn').on('click',function(e){
        e.preventDefault();

        // currImg = $(this).attr('href');
        var overlay = $('.overlay');
        var wrapper = $(this).closest('.img-wrapper');
        var image = $(this).closest('.img-wrapper').find('img').attr('src');

        // Fill img wrapper
        wrapper.css({
          'background-image': image
        });

        // Show Overlay
        overlay.addClass('active');
      });

      $('.overlay .close').on('click',function(e){
        e.preventDefault();

        var overlay = $('.overlay');

        // Hide Overlay
        overlay.removeClass('active');
      });





      /**************************************/
      /*   Slideshow Code
      /***************************************************/
      var progress = $('#progress'),
      slideshow = $( '.cycle-slideshow' );

      slideshow.on( 'cycle-initialized cycle-before', function( e, opts ) {
          progress.stop(true).css( 'width', 0 );
      });

      slideshow.on( 'cycle-initialized cycle-after', function( e, opts ) {
          if ( ! slideshow.is('.cycle-paused') )
              progress.animate({ width: '100%' }, opts.timeout, 'linear' );
      });

      slideshow.on( 'cycle-paused', function( e, opts ) {
         progress.stop(); 
      });

      slideshow.on( 'cycle-resumed', function( e, opts, timeoutRemaining ) {
          progress.animate({ width: '100%' }, timeoutRemaining, 'linear' );
      });




      // $('.category .grid').masonry({
      //   itemSelector: '.grid-item'
      // });
      /**************************************/
      /*   Window Scroll
      /***************************************************/
      // Reference: https://developer.mozilla.org/en-US/docs/Web/Events/scroll
      // Reference: http://www.html5rocks.com/en/tutorials/speed/animations/

      function doSomething(scroll_pos) {
        // if(ayrApi.isMobile() === false) {
        //   if(last_known_scroll_position >= 100 ){
        //     siteHeader.classList.add('small');
        //   }else{
        //     siteHeader.classList.remove('small');
        //   }
        // }
      }

      window.addEventListener('scroll', function(e) {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        last_known_scroll_position = scrollTop;
        if (!ticking) {
          window.requestAnimationFrame(function() {
            doSomething(last_known_scroll_position);
            ticking = false;
          });
        }
        ticking = true;
      });


      /**************************************/
      /*   Window Load
      /***************************************************/

      window.onload = function () {

        $('#gallery > div').imagesLoaded( { background: true }, function() {
          console.log('#container background image loaded');
          $('.loader-wrapper').addClass('collapsed');
          $('.content-container').removeClass('collapsed');
        });

        
        // ayrApi.toTop();
      }


      /**************************************/
      /*   Window Resize
      /***************************************************/
      // Reference: https://developer.mozilla.org/en-US/docs/Web/Events/resize
      var optimizedResize = (function() {
          var callbacks = [],
              running = false;
          
          // fired on resize event
          function resize() {
              if (!running) {
                  running = true;
                  if (window.requestAnimationFrame) {
                      window.requestAnimationFrame(runCallbacks);
                  } else {
                      setTimeout(runCallbacks, 66);
                  }
              }
          }

          // run the actual callbacks
          function runCallbacks() {
              callbacks.forEach(function(callback) {
                  callback();
              });
              running = false;
          }

          // adds callback to loop
          function addCallback(callback) {
              if (callback) {
                  callbacks.push(callback);
              }
          }

          return {
              // public method to add additional callback
              add: function(callback) {
                  if (!callbacks.length) {
                      window.addEventListener('resize', resize);
                  }
                  addCallback(callback);
              }
          }
      }());

      // start process
      optimizedResize.add(function() {
        // if(ayrApi.isMobile()){
        //   siteHeader.classList.remove('small');
        // } else {
        //   if(last_known_scroll_position >= 100 ){
        //     siteHeader.classList.add('small');
        //   }else{
        //     siteHeader.classList.remove('small');
        //   }
        // }

        // Resize Content Display Wrapper based on new height of content on resize
        // contentDisplayWrapper.style.height = $('.content-pages > .' + AYR.currPageName + '-page').offsetHeight + 'px';
      });

    }, // End Init

  };

})(jQuery); // End Self Evoking Function

AYR.init();