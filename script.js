$(document).ready(function(){
	$('.slider').slick({
		arrows:true,
		dots:true,
		slidesToShow: 2,
		slidesToScroll: 2,
		autoplay:true,
		speed:1500,
		autoplaySpeed:1200,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:2
				}
			}
		]
	});
});


