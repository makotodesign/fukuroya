$(function(){
$('#orderbtn1').on('click',function(){
location.href="page-order_2.php";

});

$('#orderbtn2').on('click',function(){
alert('現在、工事中です。');
});

$('.back').on('click',function(){
	history.back();
});

$('#fileup_next').on('click',function(){
location.href="page-order_6.php";

});

$('#pay_next').on('click',function(){
location.href="page-order_7.php";

});

$('.go_top').on('click',function(){
location.href="index.php";

});

$('#mujinext').on('click',function(){
location.href="page-order_6.php";

});



});