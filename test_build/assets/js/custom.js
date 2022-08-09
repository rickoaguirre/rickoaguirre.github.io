$(document).ready(function() {
	
	// header logo behavior on desktop
	function changeHeaderLogoSize() {

		$(window).scroll(function() {
			if($(window).scrollTop() > 200) {
				$('.header-logo').css('height', '40px');
				$('.header-logo').css('width', '210px');
				$('.header-logo').css('margin-top', '-20px');
				$('.header-logo').css('box-shadow', 'none');
			}
			else {
				$('.header-logo').css('height', '90px');
				$('.header-logo').css('width', '430px');
				$('.header-logo').css('margin-top', '0px');
				$('.header-logo').css('box-shadow', 'rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px');
			}
		})
	}

	changeHeaderLogoSize();

	$(window).resize(function(){
		var window_width = $(this).width();
		if(window_width >= 1199) {
			changeHeaderLogoSize();
		}
	});
});