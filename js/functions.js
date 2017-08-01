/**
 Theme Name: AURA Care Construct
 Theme URI: http://www.aura.com/
 Author: Dhananjaya Maha Malage
 Author URI: http://whenalive.com/
 Description: Wordpress Theme developed for AURA Care Construct.
 Version: 1.0
 License: GNU General Public License v2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
 Text Domain: aura-care-construct

 This theme, like WordPress, is licensed under the GPL.
 Use it to make something cool, have fun, and share what you've learned with others.
 */

jQuery(document).ready(function(){

 // preloader action
 //jQuery('body').css('overflow-y','hidden');
 jQuery('#preloaderOff').click(function(){
  jQuery(window).scrollTop(0);
  jQuery('.pre-loader').fadeOut('slow');
 });

 var intViewportHeight = window.innerHeight;
 if(intViewportHeight > 600){
  // set home slider height
  jQuery('.header-carousel-slide').css('height',intViewportHeight * 0.65);
  // set inner page banner height
  jQuery('.inner-page-banner').css('height',intViewportHeight * 0.65);
  // set home projects section height
  jQuery('.home-project-item').css('height',intViewportHeight * 0.35);
 }else{
  jQuery('.header-carousel-slide').css('height','500px');
  jQuery('.inner-page-banner').css('height','500px');
  jQuery('.home-project-item').css('height','250px');
 }

 // home page header slider
 jQuery('.header-carousel').owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  /*autoplayTimeout:4000,*/
  smartSpeed: 1500
 });

 // clients slider
 jQuery('.client-slider').owlCarousel({
  loop:true,
  margin:15,
  nav:true,
  navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
  responsive:{
   0:{
    items:1
   },
   600:{
    items:3
   },
   1000:{
    items:4
   }
  }
 });

 // show hide footer on hover
 jQuery(".question-form-wrap-head").click(function (e) {
  jQuery(".question-form").slideToggle("fast");
  e.stopPropagation();
 });

 // projects page project item image height
 jQuery('.projects-main-wrap').height(jQuery('.projects-main-wrap').width() * 0.6);
 // project wrap match height
 jQuery('.projects-main-height').matchHeight();

});

