$(function(){
//TOP文字アクション	
$('.topmsg p').css('opacity',0);
setTimeout(function(){
	$('#t1').fadeTo(800,1)
},800);
setTimeout(function(){
	$('#t2').fadeTo(800,1)
},1900);
setTimeout(function(){
	$('#t3').fadeTo(800,1)
},2800);
//TOP文字アクション終了後スクロール
setTimeout(function(){
$("html, body").animate({scrollTop:911}, 1000, "swing");
},7000);
//ページ内scrollaction
$('a[href^=#]').click(function(){
var speed = 1000;
var href= $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top;
$("html, body").animate({scrollTop:position}, speed, "swing");
return false;
});
//スクロールイベント
$('.container').prepend('<p id="svalue">スクロール値</p>');
$('#svalue').css({position:'fixed',top:30,right:30,});
$(window).scroll(function(){
	var value =$(window).scrollTop();
	$('#svalue').text(value);
	if(value>=750){
		$('#mainnav').css({
			position:'relative',
			height:'60px',
			paddingTop:20,
			top:-782+value,
			backgroundColor:'#fff'
		})
	}else{
		$('#mainnav').css({position:'static'})		
	}
	//topメッセージ
	var topmsgtime = 1000;
	if(value>=765){
		$('#title').animate({left:0},3000,'easeOutBounce',function(){
			$('#cap1').animate({right:0},topmsgtime,'easeOutQuart',function(){
				$('#cap2').animate({left:0},topmsgtime,'easeOutQuart',function(){
					$('#cap3').animate({right:0},topmsgtime,'easeOutQuart',function(){
						$('#next').css({textAlign:'center',position:'relative',top:'15%'}).fadeIn('2000');
					});
				});
			});

		});
	}
	//s2の３つの箱登場
	if(value>=1950){
		$('#s2_1').animate({opacity:1},500,'linear',function(){
			$('#s2_2').animate({opacity:1},500,'linear',function(){
				$('#s2_3').animate({opacity:1},500,'linear');
			});
		});
	}


});

//mainnavクリック
$('nav a').click(function(evt){
	$(evt.target).addClass('click');
	$('a').not(evt.target).removeClass('click');
});



//s2の箱のclickアクション

$('#s2_1 h2').click(function(){
	$('#s2_1').animate({height:'600px'},500,'linear');
	$('.s2boxwrap').children('article').not('#s2_1').fadeOut();
	$('#s2_1 #close').css({display:'inline-block'});
});

//s2の箱の閉じるアクション
$('.s2box #close').click(function(){
	$(this).css({display:'none'});
	$(this).parent().animate({height:'200px'},500,'linear',function(){
		$('#s2_2').fadeIn();
		$('#s2_3').fadeIn();
	})

});






})

