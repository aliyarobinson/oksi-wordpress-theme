"use strict"; 

var OT = OT || {};

(function($){

  // Cache DOM elements for future use
  var loader = $('.loader-wrapper');
  var menuBtn = $('.menu-btn');
  var ddBtn = $('.menu-item-has-children');
  var siteNav = $('.site-nav');
  var siteHeader = $('.site-header');
  var timelineNav = $('.time-nav');

  // If ontouchstart exists then set click handler to touchstart otherwise set clickhandler to click
  var clickHandler = ('ontouchstart' in document.documentElement ? "touchstart" : "click");

  
  /**************************************/
  /*   Application Object
  /***************************************************/
  OT = {

    init: function () {
      
      /**************************************/
      /*   Navigation Menu Button click
      /***************************************************/
      menuBtn.on(clickHandler, function(){
        menuBtn.toggleClass('active');
        siteNav.toggleClass('active');
        siteHeader.toggleClass('mobile-active');
      });

      /**************************************/
      /*   Drop Down link click 
      /***************************************************/
      ddBtn.on(clickHandler, function(e){
        var thisLink = $(e.target);
        if ( thisLink.closest('.menu-item').hasClass('menu-item-has-children') ){
          e.preventDefault();
          $(this).toggleClass('active');
          $(this).find('.sub-menu').toggleClass('active');
        }
      });

      /**************************************/
      /*   Subscribe Form Reveal Script
      /***************************************************/
      $('.visual-form').on(clickHandler, function(e){
        e.preventDefault();

        var visForm = $(this);
        var realForm = visForm.find('+ .real-form');

        visForm.addClass('hide-form');
        realForm.removeClass('hide-form');

        realForm.find('p:first-child input').focus();
      });

      /**************************************/
      /*   Scrollbar Activation
      /***************************************************/
      $(".site-nav, .grid-header .content").mCustomScrollbar();
      
      /**************************************/
      /*   Timeline Nav Generator
      /***************************************************/
      if ($('.site-content > article').hasClass('list-page')){
        var yearList = [];

        $('.list > li').each(function() {
          var thisYear = $(this).data('year');
          if (yearList.indexOf(thisYear) === -1) {
              yearList.push(thisYear);
          }  
        });

        for(var year in yearList){
          var yearStr = yearList[year];
          $('<li><button data-year="'+  yearStr +'">'+  yearStr +'</button></li>').appendTo('.time-nav ul');
        }
      }

      /**************************************/
      /*   Timeline Button Script
      /***************************************************/
      timelineNav.find('button').on(clickHandler, function(e){
        e.preventDefault();
        var $this = $(this);
        var year = $this.data('year');

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
        var vidID = $(this).attr('id');
        var iframe_url = "https://www.youtube.com/embed/" + vidID + "?rel=0&autoplay=1&autohide=1&showinfo=0";
    
        // The height and width of the iFrame should be the same as parent
        var iframe = $('<iframe/>', {'frameborder': '0', 'allowfullscreen': '', 'src': iframe_url });

        // Replace the YouTube thumbnail with YouTube HTML5 Player
        $(this).append(iframe);
      });
      
      /**************************************/
      /*   Share button Click Script
      /***************************************************/
      $(document).on( 'click', '.share-mod a', function(e) {
        /*************Open Shares in New Window Code**********/
        e.preventDefault();
        var url = $(this).attr('href');
        OT.popupCenter(url,'shareWindow','600', '600');
      });
      
      /**************************************/
      /*   Image Expand Script
      /***************************************************/
      $('.expand-btn').on('click',function(e){
        e.preventDefault();
        var overlay = $('.overlay');
        var wrapper = $(this).closest('.img-wrapper');
        var image = $(this).closest('.img-wrapper').find('img').attr('src');

        overlay.find('.img-wrapper').css('background-image', 'url('+image+')');
        overlay.addClass('active');
      });

      $('.overlay .close').on('click',function(e){
        e.preventDefault();
        var overlay = $('.overlay');
        overlay.removeClass('active');
      });

      /**************************************/
      /*   Slideshow Script
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

      /**************************************/
      /*   Collection Image Load
      /***************************************************/
      $('.grid-item img').on('load', function() {
        console.log('img loaded');
        $(this).removeClass('collapsed')
        $(this).find('+ .uil-reload-css').addClass('collapsed');
      })

      /**************************************/
      /*   Window Load
      /***************************************************/
      window.onload = function () {
        $('.hero-images').imagesLoaded(function() {
          $('.loader-wrapper').addClass('collapsed');
          $('.content-container').removeClass('collapsed');
        });
      }
    }, // End Init

    /********************************************************************/
    /*                                                                  */
    /*          Opens Share buttons in centered new window              */
    /*                                                                  */
    /********************************************************************/

    popupCenter: function(url, title, w, h) {
      // http://stackoverflow.com/questions/4068373/center-a-popup-window-on-screen
      var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
      var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

      var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
      var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

      var left = ((width / 2) - (w / 2)) + dualScreenLeft;
      var top = ((height / 2) - (h / 2)) + dualScreenTop;
      var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

      // Puts focus on the newWindow
      if (window.focus) {
          newWindow.focus();
      }
    }
  };

})(jQuery); // End Self Evoking Function

OT.init();