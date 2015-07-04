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
	var topslidectl=setInterval(timer,9000);
	var topslidectl_2;
	$('#mainnav1').click(function(){
 		topslidectl_2=setInterval(timer,9000);
	});
	
	$('#mainnav li:not(":first-child") a').click(function(){
	clearInterval(topslidectl);
	clearInterval(topslidectl_2);
	});

	


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
		//lineupの画像orコンテンツのグローバル変数
		var lineup1 ='<img src="img/order/lineup1.jpg" alt="" width="100%">';
		var lineup2 ='<img src="img/order/lineup2.jpg" alt="" width="100%">';
		var lineup3 ='<img src="img/order/lineup3.jpg" alt="" width="100%">';
		var lineup4 ='<img src="img/order/lineup4.jpg" alt="" width="100%">';
		var lineup5 ='<img src="img/order/lineup5.jpg" alt="" width="100%">';
		var lineup6 ='<img src="img/order/lineup6.jpg" alt="" width="100%">';
		//lineup画像読み込み関数
		function lineup_load(no){
		target=eval('lineup'+no);	
		$('.lineup:nth-child('+no+') .lineup_img').html(target);
		}

		$('#order1>h2').fadeOut(500,function(){
			if(w_calwidth <= 880){
			$('.c2_content').css({top:'-6%',height:'500%'});	
			$('#order1').animate({height:'100%',top:'-7%'},800,'linear');
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
			//lineup画像をそれぞれに読み込み
			for(i=1;i<=6;i++){
			eval(`lineup_load(`+i+`)`);
			}
			//ここから商品詳細をクリックアクション
			$('.lineup_a').click(function(evt){//クリックした詳細ボタンを判定。クリックした以外の要素を操作する
				$('.order_inner h2').hide();
				var target=$(evt.target);
				var click_flag=target.attr('title');
				$(this).addClass('next_'+click_flag);//クリックしたaにclassを付与
				$('.lineup_a_wrap a').not(target).parents('.lineup').fadeOut(800,function(){
					$('#close1').hide();					
					$('.lineup_img').hide();
					$('body,html').animate({scrollTop:0},300,'linear');
					$('.lineup').animate({width:'98%',height:'95%',marginRight:'1%',marginLeft:'1%'},300,'easeOutElastic',function(){											
						switch(click_flag){
							case 'order1':
							$('.lineup_box').load('order1.html');
							break;
							case 'order2':
							$('.lineup_box').load('order2.html');
							break;
							case 'order3':
							$('.lineup_box').load('order3.html');
							break;
							case 'order4':
							$('.lineup_box').load('order4.html');
							break;
							case 'order5':
							$('.lineup_box').load('order5.html');
							break;
							case 'order6':
							$('.lineup_box').load('order6.html');
							break;
						}
						$('.lineup_close').show();
						$('#lineup_order').text('注文する');


					});

				});
			//ここから商品オーダーページへ
			$('.next_order1').click(function(event){
				event.preventDefault();
				location.href='./order_make.html';
				



			});//ここまで商品オーダーページへ


			});//end .lineup_a click

			//ここから商品詳細戻るアクション
			$('.lineup_close').click(function(evt){				
				var target_back =$(evt.target);
				target_back.next().removeClass (function (index, css) {
				    return (css.match (/(^|\s)next\S+/g) || []).join(' ');//class="nextなんちゃら"をリセット
				});
				target_back.parents('.lineup').css({width:'31%',height:'40%',marginRight:'0.8%',marginLeft:'0.8%'});
				$('#close1').show().css('z-index',2);
				$('.lineup_box').html('<p class="lineup_img"></p>');
				for(i=1;i<=6;i++){
					eval(`lineup_load(`+i+`)`);
				}
				$('.lineup_close').hide();
				$('#lineup_order').text('詳細/注文');
				$('.lineup_close').not(target_back).parents('.lineup').css({width:'31%',height:'40%',marginRight:'0.8%',marginLeft:'0.8%'}).fadeIn(800,function(){
					var order_top = $('.orderwrap').offset().top;
					$('body,html').delay(100).animate({scrollTop:order_top},300,'linear');

				});

			});	//ここまで商品詳細戻るclickend




		});


	});//#order1 animate
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







