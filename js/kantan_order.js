$(function(){
//袋サイズ選択	
$('#kantan #size').on('change',function(){
	$('html,body').animate({scrollTop:'280px'},300,'linear')
var flug = $(this).val();
switch (flug){
	case 'LS':
	$('.bagbody').animate({width:'480px',height:'397.5px'});
	break;
	case 'LT':
	$('.bagbody').animate({width:'480px',height:'675px'});
	break;
	case 'MS':
	$('.bagbody').animate({width:'420px',height:'397.5px'});
	$('.handle').animate({width:'230px'});
	break;
	case 'MT':
	$('.bagbody').animate({width:'420px',height:'600px'});
	$('.handle').animate({width:'230px'});
	break;
	case 'SS':
	$('.bagbody').animate({width:'330px',height:'397.5px',top:'-140px'});
	$('.handle').animate({width:'200px'});
	break;
	case 'ST':
	$('.bagbody').animate({width:'330px',height:'480px',top:'-140px'});
	$('.handle').animate({width:'200px'});
	break;
}


});
// 文字入力1
$('#input-title1').on('click blur keydown keyup keypress change',function(){
	var text1=$(this).val();
	$('#k-title1').text(text1);

});
// 入力1 font-size
$('#fontsize1').on('input change',function(){
	var size=$(this).val();
	$('#size1').text(size);
	$('.k-title').css('font-size',size+'%');
});
// 入力1ドラッグ移動	
$('#k-title1').mousedown(function(event){
	$(this).addClass('drag');
	var eX = event.pageX-parseInt($(this).css("left"));
 	var eY = event.pageY-parseInt($(this).css("top"));
 	$(document).mousemove(function(event){
 		$('.drag').css("left",event.pageX - eX).css("top",event.pageY - eY);
 	});
 	$(document).mouseup(function(event){
 		$('.drag').unbind('mousemove');
 		$('.drag').removeClass('drag');
 	});


	});
});