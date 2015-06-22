$(function(){
//topcontent Load
$('#topwrapInner').load('topcontent.html');
//topslideshow
setTimeout(function(){
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
},10);//loadしてから開始
//window幅取得
var w_width = $(document).width();
var w_calwidth = w_width / 4;//横並び4枚分で割る
//orderpage_action
//order1
$('#order1>h2').click(function(){
	$('#order2').fadeOut();
	$('#order3').fadeOut();
	if(w_calwidth>=600){
	$('#order1>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
	}else{
	$('#order1>h2').animate({fontSize:'200%'},1000,'easeOutBounce').delay(1000);	
	}
	$('#order1').animate({height:'95%'},1000,'easeOutExpo',function(){
		$('#order1>h2').fadeOut(500,function(){
			if(w_calwidth <= 880){
			$('.c2_content').css({top:'-6%',height:'500%'});	
			$('#order1').animate({height:'100%'},800,'linear');
			$('#order1_inner .lineup').css('height','16%');
			$('#close1').css('top','0.5%');
			}else{
			$('.c2_content').css({top:'-6%',height:'150%'});		
			$('#order1').animate({position:'static',height:'100%'},800,'linear');
			$('#order1_inner .lineup').css('height','40%');	
			$('#close1').css('top','1%');
			}
			$('#order1_inner').fadeIn();
			$('#close1').fadeIn();
			//ここから商品詳細をクリックアクション
			$('.lineup_a').click(function(evt){//クリックした詳細ボタンを判定。クリックした以外の要素を操作する
				var target=$(evt.target);
				$('.lineup_a_wrap a').not(target).parent().parent().fadeOut(800,function(){
					$('#close1').fadeOut(100);
					$('.lineup_box p img').fadeOut(100);
					$('.lineup').animate({width:'98%',height:'95%',marginRight:'1%',marginLeft:'1%'},800,'swing',function(){

						$('.lineup_a').text('注文する');

					});
						

				});
			});
		});

	});
});
$('#close1').click(function(){
	$('.c2_content').css({top:'0',height:'100%'});	
	$('#close1').fadeOut();	
	$('.order_inner').fadeOut(100);
	$('#order1').animate({height:'25%',top:'0%'},1000,'easeOutExpo',function(){
	$('#order2').fadeIn();
	$('#order3').fadeIn();
	$('#order1>h2').css({fontSize:'300%'}).fadeIn();
	if(w_calwidth<=880){
	$('#order1>h2').css({fontSize:'200%'}).fadeIn();	
	}
	})

});//order2
$('#order2>h2').click(function(){
	$('#order3').fadeOut();
	if(w_calwidth>=600){
	$('#order2>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
	}else{
	$('#order2>h2').animate({fontSize:'200%'},1000,'easeOutBounce').delay(1000);	
	}
	$('#order1').fadeOut(300,function(){
		$('#order2').animate({top:'-1%',height:'95%'},1000,'easeOutExpo',function(){
			$('#order2>h2').fadeOut();
			$('#close2').fadeIn();
		});

		});
});
$('#close2').click(function(){
	$('#close2').fadeOut();	
	$('#order2').animate({height:'25%',top:'30%'},1000,'easeOutExpo',function(){
	$('#order1').fadeIn();
	$('#order3').fadeIn();
	$('#order2>h2').css({fontSize:'300%'}).fadeIn();
	if(w_calwidth<=880){
	$('#order2>h2').css({fontSize:'200%'}).fadeIn();	
	}	
	})
});
//order3
$('#order3 h2').click(function(){
	$('#order2').fadeOut();
	if(w_calwidth>=600){
	$('#order3>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
	}else{
	$('#order3>h2').animate({fontSize:'200%'},1000,'easeOutBounce').delay(1000);	
	}
	$('#order1').fadeOut(300,function(){
		$('#order3').animate({top:'-1%',height:'95%'},1000,'easeOutExpo',function(){
			$('#order3>h2').fadeOut();
			$('#close3').fadeIn();
		});

		});
});
$('#close3').click(function(){
	$('#close3').fadeOut();	
	$('#order3').animate({height:'25%',top:'60%'},1000,'easeOutExpo',function(){
	$('#order1').fadeIn();
	$('#order2').fadeIn();
	$('#order3>h2').css({fontSize:'300%'}).fadeIn();
	if(w_calwidth<=880){
	$('#order3>h2').css({fontSize:'200%'}).fadeIn();	
	}	
	})
});
//main nav 文字出現action
if(w_calwidth>=1150){
	$('#mainnav a').text('');
	$('#mainnav1').hover(function(){
		$(this).text('\n\ntop');
	},function(){
		$(this).text('');
	});
	navtext('#mainnav1','\ntop');
	navtext('#mainnav2','\norder');
	navtext('#mainnav3','\nabout');
	navtext('#mainnav4','\ncontact');
};
function navtext(node,title) {
	$(node).hover(function(){
		$(this).text(title);
	},function(){
		$(this).text('');
	});
};







});







