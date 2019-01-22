'use strict';

var userMenuClick = false;


function mobileMenu() {
  $(".menu-trigger").removeClass('active');
  $(".menu-ul").removeClass('slideMenu');
}

function hideMenuAfterUse() {
  $(".menu-item").on('click', function(){
    console.log('hide that menu boo');
    $(".menu-ul").removeClass('slideMenu');
  })
}

function desktopMenu() {
	$(document).scroll(function(){
		var top = $(document).scrollTop();
		if(top<"600"){
			userMenuClick = false;
		};
    if(top>"600" && !userMenuClick) {
  	    //after you've scrolled 600 pixels...
  		$(".menu-trigger").removeClass('active');
  		$(".menu-ul").removeClass('slideMenu');
  		userMenuClick = false;
    } else {
  		$(".menu-trigger").addClass('active');
  		$(".menu-ul").addClass('slideMenu');
    }
	});
};

(function menuSlide() {
    $('.menu-trigger').on('click', function () {
      $(this).toggleClass('active');
      $('.menu-ul').toggleClass('slideMenu');
      userMenuClick = !userMenuClick;
    });
}.call(this));

function smoothScroll() {
  $('a[rel="relativeanchor"]').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top}, 1000);
        return false;
    });
};
