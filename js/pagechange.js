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


$('.back').on('click',function(){
	history.back();
});

// k-order page2遷移
$('#k-order2-nextbtn').on('click',function(){
	$('#k-order-topbtn2').removeClass('btn-success').addClass('btn-default');
	$('#k-order-topbtn3').removeClass('btn-default').addClass('btn-success');
	$('#k-orderbox1').fadeIn(1000);
	var top=parseInt($('#k-orderbox1').offset().top);
	$('html,body').animate({scrollTop:top},2000,'easeInOutExpo');	
	});

if($('.peage-k-order-main').find('div').is('#order2_header')){
setTimeout(function(){
	if($('.peage-k-order-main').find('div').is('.LT')){
		var order2_header_offset2=$('.handle').offset().top;
		$('html,body').animate({scrollTop:order2_header_offset2},1000,'easeOutBounce');
	}else{
	var order2_header_offset=$('#order2_header').offset().top;
	$('html,body').animate({scrollTop:order2_header_offset},1000,'easeOutBounce');
	}
　	
},1500);
}

////お客様情報入力
$('#k-order2-nextbtn2').on('click',function(){
	$('.k-order').css({minHeight:'2000px'});
	var top=parseInt($('#k-order-sec2').offset().top);
	$('html,body').animate({scrollTop:top},2000,'easeInOutExpo',function(){
		$('#k-order2-sec2title').fadeIn(500,function(){
			$('#k-order2-sec2body').fadeIn(500);
		});

	});

});




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