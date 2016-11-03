"use strict"; 

var AYR = AYR || {};

(function($){


  // Cache DOM elements for future use
  var loader = $('.loader-wrapper');
  var homepageImgBase = 'http://74.220.215.75/~oksanata/ot_v2/wp-content/uploads/2016/10';
  // var homepageImgBase = 'http://localhost/oksanat/wp-content/themes/oksanat/img/hero';
  var demoImgArray = [
  homepageImgBase + '/img_1.jpg', 
  homepageImgBase + '/img_2.jpg', 
  homepageImgBase + '/img_3.jpg', 
  homepageImgBase + '/img_4.jpg', 
  homepageImgBase + '/img_5.jpg', 
  homepageImgBase + '/img_6.jpg'];


  
  /**************************************/
  /*   Application Object
  /***************************************************/
  AYR = {
  

    init: function () {
      console.log('init');

      /**************************************/
      /*   Preloader Script
      /***************************************************/
      // var stripesAnim;
      var calcPercent;
      
      var $progress = $('.progress-bar');
      var $percent = $('.percentage');
      
      
      preload(demoImgArray);
      
      /* WHEN LOADED */
      $(window).load(function() {
        var loaded = true;
        $progress.animate({
          width: "100%"
        }, 100, function() {
          loader.addClass('collapsed');
          $percent.text('100%');
          clearInterval(calcPercent);
        });
      });
      
      /* LOADING */
      function preload(imgArray) {
        var increment = Math.floor(100 / imgArray.length);

        // $(imgArray).each(function() {
        $('.cycle-slide > img').each(function() {
          // $('<img>').attr("src", this).load(function() {
          $(this).load(function() {
            console.log('loaded: ', this);
            console.log('loaded increment: ', increment);
            (function(inc){
              $progress.animate({
                width: "+=" + inc + "%"
              }, 100);
              console.log('loaded increment: ', inc);
            })(increment)
          });
        });

        calcPercent = setInterval(function() {
          //loop through the items
          $percent.text(Math.floor(($progress.width() / $('.loader').width()) * 100) + '%');
        });
      }
  
    } // End Init


  };

})(jQuery); // End Self Evoking Function

AYR.init();