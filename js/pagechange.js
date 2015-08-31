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

// k-order page遷移
$('#k-order2-nextbtn').on('click',function(){
	$('#k-orderbox1').fadeIn('1000',function(){
	var top=parseInt($('#k-orderbox1').offset().top);
	$('html,body').animate({scrollTop:top},2000,'easeInOutExpo');	
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