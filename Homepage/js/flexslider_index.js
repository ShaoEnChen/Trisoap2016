$(window).load(function() {
	$('.flexslider').flexslider({
		animation: 'fade',
		directionNav: false,
		controlsContainer: ".flexslider-controls",
		manualControls: ".flex-control-nav li",
		// 照片持續的時間
		slideshowSpeed: 8000,
		// 換照片的時間
		animationSpeed: 1000
	});
});