$(function(){
var tanka=96;
$('#price').text(tanka);

$('.l_5 #copies').on('change',function(){
	var copies=$(this).val();
	if(copies>=2000){
		var tanka=77.5;
		$('#price').text(tanka);
	}else{
		var tanka=96;
		$('#price').text(tanka);	
	}
	
	var price=$('#price').text()
	$('#total').text(copies*price);
	var tax=Math.round(copies*price*0.08);
	$('#tax').text(tax);
	var ship=1500;
	$('#ship').text(ship);
	$('#all_total').text(copies*price+tax+ship);


});




});