$(window).load(function() {
	
	//audio control
	setTimeout(function(){
		$('#sana').get(0).play();
	}, 10000);
	
	//remove loading word
	setTimeout(function(){
	$('.loader-loading2').css('display','none');
	},4000);
	
	//background control
	var gif=['img/guy-gurl.gif','img/stars.gif','img/petals.gif'];

	setInterval(function(){
	  var url=gif[Math.floor(Math.random() * gif.length)];
	  document.body.style.backgroundImage = 'url('+url+')';  
	},8000);
	
	//lyrics control
	setTimeout(function(){
	$('#L1').css('display','block');
	},27000);
	
	setTimeout(function(){
	$('#L1').css('display','none');
	$('#L2').css('display','block');
	},31000);
	
	setTimeout(function(){
	$('#L2').css('display','none');
	$('#L3').css('display','block');
	},35000);
	
	setTimeout(function(){
	$('#L3').css('display','none');
	$('#L4').css('display','block');
	},38000);
	
	setTimeout(function(){
	$('#L4').css('display','none');
	$('#L5').css('display','block');
	},43500);
	
	setTimeout(function(){
	$('#L5').css('display','none');
	$('#L6').css('display','block');
	},60000);
	
	setTimeout(function(){
	$('#L6').css('display','none');
	$('#L7').css('display','block');
	},63500);
	
	setTimeout(function(){
	$('#L7').css('display','none');
	$('#L8').css('display','block');
	},68500);
	
	setTimeout(function(){
	$('#L8').css('display','none');
	$('#L9').css('display','block');
	},71500);
	
	setTimeout(function(){
	$('#L9').css('display','none');
	$('#L10').css('display','block');
	},77000);
	
	setTimeout(function(){
	$('#L10').css('display','none');
	$('#L11').css('display','block');
	},109500);
	
	setTimeout(function(){
	$('#L11').css('display','none');
	$('#L12').css('display','block');
	},112000);
	
	setTimeout(function(){
	$('#L12').css('display','none');
	$('#L13').css('display','block');
	},118000);
	
	setTimeout(function(){
	$('#L13').css('display','none');
	$('#L14').css('display','block');
	},120500);
	
	setTimeout(function(){
	$('#L14').css('display','none');
	$('#L15').css('display','block');
	},127000);
	
	setTimeout(function(){
	$('#L15').css('display','none');
	$('#L16').css('display','block');
	},143500);
	
	setTimeout(function(){
	$('#L16').css('display','none');
	},195500);
	
	setTimeout(function(){
	$('#T').css('display','block');
	},197500);
	
});