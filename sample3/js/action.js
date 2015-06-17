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
//orderpage_action
/*
$('.order').hover(function(){
	$(this).css({backgroundColor: '#11B8C4',color:'#fff'})
},function(){
	$(this).css({backgroundColor: '#EFE8E8',color:'#000'})
});
*/
$('#order1 h2').click(function(){
	$('#order2').fadeOut();
	$('#order3').fadeOut();
	$(this).parent().animate({height:'95%',top:'-5%'},1000,'linear',function(){
		$('#order1 h2').fadeOut();
		$('#close1').fadeIn();
	});
});
$('#close1').click(function(){
	$('#order1').animate({height:'25%',top:'0%'},1000,'linear',function(){
	$('#order2').fadeIn();
	$('#order3').fadeIn();
	$('#order1 h2').fadeIn();
	$('#close1').fadeOut();		
	})

});



});







