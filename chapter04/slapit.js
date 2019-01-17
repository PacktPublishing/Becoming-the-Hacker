/**
 * slapit.js
 *
 * @requires jQuery, Slappy
 *
 * @updated klibby@corp on 12/12/2015 
 */
 
 (function(){
    var obj = $('.target');
    /* @todo dmurphy@corp: migrate to Slappy2 library */
    var slap = new Slappy(obj, { 
      slide: false,
      speed: 300
    });
    slap.swipe();
 )();