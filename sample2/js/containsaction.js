$(function(){
//s2登場	
$('#s2_1').animate({opacity:1},500,'linear',function(){
$('#s2_2').animate({opacity:1},500,'linear',function(){
	$('#s2_3').animate({opacity:1},500,'linear');
});
});

//mainnavクリック
$('nav a').click(function(evt){
	$(evt.target).addClass('click');
	$('a').not(evt.target).removeClass('click');
});



//s2の箱のclickアクション

$('#s2_1 h2').click(function(){
	var obj=$(this).parent();
	obj.animate({height:'600px'},500,'linear');
	$('.s2boxwrap').children('article').not(obj).fadeOut();
	$(this).parent().children('#close').css({display:'inline-block'});
});



//s2の箱の閉じるアクション
$('.s2box #close').click(function(){
	$(this).css({display:'none'});
	$(this).parent().animate({height:'200px'},500,'linear',function(){
		$('#s2_2').fadeIn();
		$('#s2_3').fadeIn();
	});

});
})	