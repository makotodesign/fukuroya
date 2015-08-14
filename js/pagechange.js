$(function(){
pagechange('.go_top',"index.php");
pagechange('#orderbtn1',"page-order_2.php");
pagechange('#fileup_next',"page-order_6.php");
pagechange('#pay_next',"page-order_7.php");
pagechange('#mujinext',"page-order_6.php");


$('.back').on('click',function(){
	history.back();
});


// アラート
alertmsg('#orderbtn2','現在、工事中です。');

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