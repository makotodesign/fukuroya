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
//window幅取得
var w_width = $(document).width();
var w_calwidth = w_width / 4;//横並び4枚分で割る
//orderpage_action
//order1
$('#order1>h2').click(function(){
	$('#order2').fadeOut();
	$('#order3').fadeOut();
	$('#order1>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
	$('#order1').animate({height:'95%',top:'-1%'},1000,'easeOutExpo',function(){
		$('#order1>h2').fadeOut(500,function(){
			if(w_calwidth <= 880){
			$('#order1').animate({position:'static',height:'500%'},800,'linear');
			$('#order1_inner .lineup').css('height','15%');
			$('#close1').css('top','0.5%');
			}else{
			$('#order1').animate({position:'static',height:'200%'},800,'linear');
			$('#order1_inner .lineup').css('height','40%');	
			$('#close1').css('top','1%');
			}
			$('#order1_inner').fadeIn();
			$('#close1').fadeIn();
		});

	});
});
$('#close1').click(function(){
	$('#close1').fadeOut();	
	$('.order_inner').fadeOut(100);
	$('#order1').animate({height:'25%',top:'0%'},1000,'easeOutExpo',function(){
	$('#order2').fadeIn();
	$('#order3').fadeIn();
	$('#order1>h2').css({fontSize:'300%'}).fadeIn();
	
	})

});//order2
$('#order2>h2').click(function(){
	$('#order3').fadeOut();
	$('#order2>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
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
		
	})
});
//order3
$('#order3 h2').click(function(){
	$('#order2').fadeOut();
	$('#order3>h2').animate({fontSize:'500%'},1000,'easeOutBounce').delay(1000);
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
		
	})
});

});







