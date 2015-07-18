$(function(){
//topslide
var time=2000;	
var no =1;
(function fade(){
  $('.top_slide_img').fadeOut(time);
  $('#top'+no).fadeIn(time);
  no++;
  if(no==5){
    no=1;
  }
 
  setTimeout(fade,time*5);  
})();
// 文字あくしょん
$('#title_hide1,#tb1,#pushme').hide();
$('.title_hide').css('opacity',0);
setTimeout(function(){
	$('.title_hide').animate({'opacity':1},2000,function(){
		// $(this).textillate({in: { effect: 'bounce' }});

	});

},2000);
setTimeout(function(){

		$('#tb1').show('fold','swing',1000,function(){
		$('#title_hide1').show().textillate({
			loop:false,
			initialDelay: 500,
			 in: { 
			 	effect: 'flipInx',
			 	delayScale: 2
			 	}
 	
		});
		});

},3000);

// 文字ホバーアクション





  


});