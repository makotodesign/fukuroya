$(function(){
pagechange('.go_top',"index.php");
pagechange('#orderbtn1',"page-order_2.php");
pagechange('#orderbtn2',"page-k-order.php");
pagechange('#fileup_next',"page-order_6.php");
pagechange('#pay_next',"page-order_7.php");
pagechange('#mujinext',"page-order_6.php");
pagechange('.download_i_l_s',"./template/fukuroya_template_L.zip");
pagechange('.download_i_l_t',"./template/fukuroya_template_LT.zip");
pagechange('.download_i_m_s',"./template/fukuroya_template_M.zip");
pagechange('.download_i_m_t',"./template/fukuroya_template_MT.zip");
pagechange('.download_i_s_s',"./template/fukuroya_template_S.zip");
pagechange('.download_i_s_t',"./template/fukuroya_template_ST.zip");
pagechange('#k-order-next4btn',"page-k-order5.php");

$('.back').on('click',function(){
	history.back();
});

// k-order page2遷移
$('#k-order2-nextbtn').on('click',function(){
	$('#k-order-topbtn2').removeClass('btn-success').addClass('btn-default');
	$('#k-order-topbtn3').removeClass('btn-default').addClass('btn-success');
	$('#k-orderbox1').fadeIn(1000);
	var top=$('#k-orderbox1').offset().top;
	$('html,body').animate({scrollTop:top},1000,'swing');	
	});

if($('.page-k-order-main').find('div').is('#order2_header')){
setTimeout(function(){
	if($('.page-k-order-main').find('div').is('.LT')){
		var order2_header_offset2=$('.handle').offset().top;
		$('html,body').animate({scrollTop:order2_header_offset2},1000,'easeOutBounce');
	}else{
		if(p3back_flug==null){
			var order2_header_offset=$('#order2_header').offset().top;
			$('html,body').animate({scrollTop:order2_header_offset},1000,'easeOutBounce');
		}
	}
　	
},1500);
}
////戻るボタンクリック
k_goback('#k-order2-backbtn2','.page-k-order-main',500);
k_goback('#k-order2-backbtn3','#k-orderbox1',500);

function k_goback(from,to,speed){
	$(from).on('click',function(){
	$('html,body').animate({scrollTop:$(to).offset().top},speed,'linear');
});
}


////お客様情報入力有効
$('#k_select_grade,#k_select_qty').on('click blur keydown keyup keypress change',function(){
	var v1=$('#k_select_grade').val();
	var v2=$('#k_select_qty').val();
	if(v1!='no'&&v2!='no'){
		$('#k-order2-nextbtn2').prop('disabled',false);
		$('#k-order-error1').fadeOut('fast');
	}else{
		$('#k-order2-nextbtn2').prop('disabled',true);
		$('#k-order-error1').show();
	}

});
var v1=$('#k_select_grade').val();
	var v2=$('#k_select_qty').val();
	if(v1!='no'&&v2!='no'){
		$('#k-order2-nextbtn2').prop('disabled',false);
		$('#k-order-error1').hide();
	}else{
		$('#k-order2-nextbtn2').prop('disabled',true);
		$('#k-order-error1').show();
	}
$('＃k_name,#k_email,#k_tel').on('click blur keydown keyup keypress change',function(){
	var v1=$('＃k_name').val();
	var v2=$('#k_email').val();
	var v3=$('#k_tel').val();
	if(v1!=''&&v2!=''&&v3!=''){
		$('#k-order2-nextbtn3').prop('disabled',false);
		$('#k-order-error2').fadeOut('fast');
	}else{
		$('#k-order2-nextbtn3').prop('disabled',true);
		$('#k-order-error2').show();
	}
});
var v1=$('＃k_name').val();
var v2=$('#k_email').val();
var v3=$('#k_confirm_email').val();
var v4=$('#k_tel').val();
if(v1!=''&&v2!=''&&v3!=''&&v4!=''){
	$('#k-order2-nextbtn3').prop('disabled',false);
	$('#k-order-error2').fadeOut('fast');
}else{
	$('#k-order2-nextbtn3').prop('disabled',true);
	$('#k-order-error2').show();

}

////お客様情報入力
$('#k-order2-nextbtn2').on('click',function(){
	$('#k-order-topbtn3').removeClass('btn-success').addClass('btn-default');
	$('#k-order-topbtn4').removeClass('btn-default').addClass('btn-success');
	$('#k-order2-sec2title').fadeIn(500,function(){
		$('#k-order2-sec2body').fadeIn(500);
	});
	$('.conatact_main').css({minHeight:'2000px'});

	var top=$('#k-order-sec2').offset().top;
	$('html,body').animate({scrollTop:top},800,'linear');

	});

// お支払い手続きから戻ったときアクション
$('#k-order3-backbtn').hover(function(){
	 $.cookie('frompage3','true');
});
var p3back_flug=$.cookie('frompage3');
if(p3back_flug=='true'){
	$('#k-orderbox1,#k-order2-sec2title,#k-order2-sec2body').show();
	$('#load').hide();

}

// page1のアクションでcookieクリア
$('#k-order-commit,#orderbtn1,#orderbtn2').hover(function(){
	$.cookie('frompage3',null);
});

// 最終送信チェック
$('#k_checkread').on('change',function(){
	if($('#k_checkread').prop('checked')){
		$('#k-order-next4btn').prop('disabled',false);
	}else{
		$('#k-order-next4btn').prop('disabled',true);

		}
});

// ローディングストップs
$('#load').hide();

// 現在のURLを返す
var location= document.location;
//k-order5の時〜秒後にページチェンジカウントダウン。
if(location=='http://fukuroya.jp/page-k-order5.php'){
	var count=21;
	(function countdown(){
		count=count-1;
		$('#to_top_count').text(count);
		stop=setTimeout(countdown,1000);
		if(count==0){
			clearTimeout(stop);
			location.href="http://fukuroya.jp";
		}
	})();	
}




function pagechange(name,file){
	$(name).on('click',function(){
		location.href=file;
	});
}
function alertmsg(name,msg){
	$(name).on('click',function(){
		alert(msg);
	});
}


});