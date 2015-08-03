$(function(){
var now =new Date();	
var time = now.getTime();
$('#time').val(time);
// filesend
$('#filesubmit').attr('disabled','true');

$('#upfile').on('change',function(){
if($('#upfile').val().length==0){
$('#filesubmit').attr('disabled',true).removeClass('btn-primary');
}else{
$('#filesubmit').attr('disabled',false).addClass('btn-primary');

}
});

$('#filesubmit').on('click',function(){
	$('#loadingmsg').show();
});


// emailチェック
$('#mail2').attr('disabled',true
	);
$('#mail1').on('keypress',function(){
	$('#mail2').attr('disabled',false);
});


$('#mail2').on('keyup',function(){
if($('#mail1').val()===$('#mail2').val()){
	$('#mail1,#mail2').parent().append('<span class="glyphicon glyphicon-ok form-control-feedback"></span>');

}	

});

});





