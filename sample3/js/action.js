$(function(){
//topslider
$('#bg1').css({opacity:1});
var no = 1;
var max = $('#top article').length;
/*
$('#bg'+no).animate({opacity:1},2000,'linear').delay(3000).animate({opacity:0},2000,'linear');	
*/
function timer() {
	$('#bg'+no).animate({opacity:1},2000,'linear').delay(4000).animate({opacity:0},2000,'linear');
	no++;
	if(no>max){
		no=1;
	}
}

	setInterval(timer,8000);





});




