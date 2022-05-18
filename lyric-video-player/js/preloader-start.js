$(document).ready(function() {
	
	setTimeout(function(){
	$('.loader-loading2').css('display','block');
	},4000);
	
	//disable scrolling
	$('html, body').css({
		overflow: 'hidden',
		height: '100%',
	});
});