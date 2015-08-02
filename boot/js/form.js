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


});