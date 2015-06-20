$(function(){
var hash = location.hash;
if(hash='#s2'||'#s3'||'#s4'){
	$('#bottommenu').hide();
};


$('#mainnav1').click(function(){
	setTimeout(function(){
	$('#bottommenu').fadeIn()

	},400);
;
});	
$('#mainnav2,#mainnav3,#mainnav4').click(function(){
	$('#bottommenu').hide();
});


});