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
$('#tb1,#title_hide1').hide();


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

},4000);

// telリンクclick
$('#call').click(function(){
	location.href="tel:0798612826";

});
// tellリンクpcの時非表示
var ua = navigator.userAgent;
if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
	$('#call').remove();

}





  


});