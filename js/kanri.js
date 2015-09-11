$(function(){
// open close	
var openflug1=false;	
$('#compress1').on('click',function(){
	$('#orderbody').slideToggle(500,function(){
		openflug1=!openflug1;
		if(openflug1==true){
			$('#compress1').removeClass('fa-expand').addClass('fa-compress');
		}else if(openflug1==false){
			$('#compress1').removeClass('fa-compress').addClass('fa-expand');
		}
	});
});
var openflug2=false;	
$('#compress3').on('click',function(){
	$('#inquerybody').slideToggle(500,function(){
		openflug2=!openflug2;
		if(openflug2==true){
			$('#compress3').removeClass('fa-expand').addClass('fa-compress');
		}else if(openflug2==false){
			$('#compress3').removeClass('fa-compress').addClass('fa-expand');
		}
	});
});
// badge
$('#orderbacge').text($('#ordertable tr').length);
$('#inquerybacge').text($('#inquerytable tr').length);
});//endjquery
