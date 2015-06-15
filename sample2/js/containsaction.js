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



//s2の箱のclickopenアクション
openbox(s2_1);
openbox(s2_2);
openbox(s2_3);


function openbox(box) {
	$(box).children('h2').click(function(){
		var obj=$(this).parent();
		$('.s2boxwrap').children('article').not(obj).fadeTo(500,0,function(){
		obj.animate({height:'600px'},500,'linear');
		obj.children('#close').css({display:'inline-block'});
		});
	});
}




//s2の箱の閉じるアクション
$('.s2box').children('#close').click(function(){
	$(this).css({display:'none'});
	$(this).parent().animate({height:'200px'},500,'linear',function(){
		$('#s2_1').fadeTo(500,1);		
		$('#s2_2').fadeTo(500,1);
		$('#s2_3').fadeTo(500,1);
	});

});

})//jquery end	