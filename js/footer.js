/* Modifiable code starts here */

// Table Sort //

$(document).ready(function(){ $("#suites").tablesorter(); });  

// Tabs functionality goes here //

$(function() { $( "#tabs" ).tabs(); });

// Filter //

$(document).ready(function(){
    $("#portfolio-filters .filter").on("click",function(){$(this).toggleClass("expand")})})
    
// bxSlider Stuff Goes Here //

$(document).ready(function(){ $('.bxslider').bxSlider(); });


// Sticky Header functionality goes here //

$(function(){
	var stickyHeaderTop = 1;
		$(window).scroll(function(){
        	if( $(window).scrollTop() > stickyHeaderTop ) {
            	$('#page-head').addClass('fixed');
			} else {
				$('#page-head').removeClass('fixed');
			}
	});
});

$(function(){
if (!$('body').hasClass("home")) {
 $('header').addClass('center-logo');   
}
});

// Fade-in Parallaxing //
/*
$(window).scroll( function(){
  $('.slidein').each( function(i){
    var bottom_of_object = $(this).position().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();
      if( bottom_of_window > bottom_of_object) {
        $(this).animate({'opacity':'1'}, 1000);
      }
    });     
  });    
*/

// Background Parallaxing //
/*
$(document).ready(function(){
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#target').parallax("50%", 0.1)
})

*/

// Safari Fixes //

$(document).ready(function() {
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 && ($(document).width() >= 768)){
  // fixes go here //
  } 
 
});

// Masonry Code //

var $container = $('.blocks');
// init
$container.packery({
  itemSelector: 'li',
  gutter: 0
});    
