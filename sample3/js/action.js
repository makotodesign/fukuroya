$(function(){
//topslideshow
$('#bg1').css({opacity:1});
var no = 1;
var max = $('#top article').length;
function timer() {
	$('#bg'+no).animate({opacity:0},3000,'linear');
	$('#bg'+(1+no)).animate({opacity:1},3000,'linear');
	no++;
	if(no>max){
		no=1;
		$('#bg1').animate({opacity:1},3000,'linear');
	}
}
setInterval(timer,9000);








});




