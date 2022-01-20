/**
 * Swiper 4.0.7
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2017 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 28, 2017
 */
var swiperAnimation = new SwiperAnimation();
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 1,
	spaceBetween: 0,
	effect:"fade",
	loop: false, //유투브 영상을 첫번째 컷, 마지막 컷으로 사용하실 경우 false 로 지정하셔야 합니다. 유투브영상이 없거나 두번째이상 컷에 넣으신다면 true 로 바꾸셔도 됩니다.
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	preloadImages: false,   
	lazy: true,
	lazy: {
		loadPrevNext: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	paginationClickable: true,
	speed: 1000,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false
	},
	on: {
      init: function () {
        swiperAnimation.init(this).animate();
      },
      slideChange: function () {
        swiperAnimation.init(this).animate();
      }
    }
});
swiper.on('slideChange', function () {	
	var isVideoa = swiper.slides[swiper.activeIndex].querySelector('#background');
	if (isVideoa) {		
		$("#background").YTPPlay();	
	}else{
		$("#background").YTPPause();
	}
});


$( ".swiper-container" ).mouseover(function(){
	$(".swiper-button-next").show();
	$(".swiper-button-prev").show();
});
$( ".swiper-container" ).mouseleave(function(){
	$(".swiper-button-next").hide();
	$(".swiper-button-prev").hide();
});