$(function(){
$('.container').append('<p style="position:fixed;bottom:30%;left:10px;z-index:1400;">ウィンドウ幅<span id="w_value"></span></p>');
	var w_width = $(document).width();
	var w_calwidth = w_width / 4;//横並び4枚分で割る
	$('#w_value').text(w_calwidth);
$(window).resize(function(){
	var w_width = $(document).width();
	var w_calwidth = w_width / 4;//横並び4枚分で割る
	$('#w_value').text(w_calwidth);

});




});
