
$(document).ready(function(){
	/*$('.your-class').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
	  	autoplaySpeed: 2000,
	});*/

	$('.autoplay').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  arrows: false,
	 // dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear',
	});
});


$(function() {
var el;
$("#cost").change(function() {
el = $(this);
el
.next("#ong")
.text(el.val());
})
.trigger('change');
});