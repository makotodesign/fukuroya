$(function(){
//表示、非表示制御	
var hash = location.hash;
if(hash=='#top'||hash==''){
	$('#bottommenu').show();
}else if(hash=='#s2'||'#s3'||'#s4'){
	$('#bottommenu').hide();
};
$('#mainnav1').click(function(){
	setTimeout(function(){
	$('#bottommenu').fadeIn()

	},400);

});	
$('#mainnav2,#mainnav3,#mainnav4').click(function(){
	$('#bottommenu').hide();
});
//クリックでライトボックス、中身はajax
var openflag = true;
$('#bottommenu').click(function(){
	if(openflag){	
		$('#topwrapInner article,#topbtn,#mainnav').fadeOut(600);
		setTimeout(function(){
			$('#topwrapInner').wrapInner('<div class="top_add_content"></div>');
			$('.top_add_content').css({display:'block'}).animate({height:'75%'},1000,'easeOutBounce').prepend('<span id="top_add_close" class="fa fa-times-circle fa-2x" style="position:absolute;right:1%;top:1%;display:block;cursor:pointer;"></span><div class="top_add_content_detail"></div>');

			$('#top_add_close').click(function(){
				$('.top_add_content').animate({left:'+100%'},800,'easeInBack',function(){
					$('.top_add_content').css({display:'none'});
					$('#topwrapInner').html('').load('topcontent.html');
									setTimeout(function(){
									$('#bg1').animate({opacity:1},500,'linear');
									},10);
									$('#topbtn,#mainnav').fadeIn(500);

				});
				
				openflag = true;
			});
		},900);
	};
openflag=!true;
});




});