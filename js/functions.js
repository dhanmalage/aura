 /**
 * Created by Dananjaya Maha Malage on 6/20/2017.
 */

jQuery(document).ready(function(){
 // home page header slider
 jQuery('.header-carousel').owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  autoplayTimeout:4000,
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
 })
});
