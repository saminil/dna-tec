/**
 * Swiper 5.2.1
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://swiperjs.com
 *
 * Copyright 2014-2019 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: November 16, 2019
 */
$(document).ready(function(){						
			
	var newsList = new Swiper('.swiper-container2', {		
		slidesPerView: "auto", 
		initialSlide:3,
		spaceBetween: 20,
		slidesPerGroup: 1,
		loop: false, // false 로 고정하셔야 합니다.
		spaceBetween: 20,
		centeredSlides: true,
		loopFillGroupWithBlank: true,
		autoplay: {
			delay: 3000, //롤링되는 속도
			disableOnInteraction: false
		},
		scrollbar: {
			el: '.swiper-scrollbar2',
			hide: false,
		},
		navigation: {
			nextEl: '.swiper-button-next2',
			prevEl: '.swiper-button-prev2',
		},
		pagination:{
			el:'.swiper-pagination2',
			type:'bullets',
			clickable:true
		},
		breakpoints: {
			 640: {
			  slidesPerView: 2,
			  spaceBetween: 20,
			},
			768: {
			  slidesPerView: 3,
			  spaceBetween: 20,
			  centeredSlides: false,
			},
			1024: {
			  slidesPerView: 4,
			  spaceBetween: 20,
			  centeredSlides: false,
			}
		}
	});

	$(".swiper-container2 .swiper-slide img").css("width",$(".swiper-container2 .swiper-slide").width());


	$(window).resize(function(){
		$(".swiper-container2 .swiper-slide img").css("width",$(".swiper-container2 .swiper-slide").width());
	}); 

	
});