$(function(){
$('.ctrl').draggable();
// enterで送信できないように
$("input"). keydown(function(e) {
            if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                return false;
            } else {
                return true;
            }
        });

//袋サイズ選択	
$('#kantan #size').on('change',function(){
	$('html,body').animate({scrollTop:'280px'},300,'linear')
var flug = $(this).val();
switch (flug){
	case 'LS':
	$('.bagbody').animate({width:'480px',height:'397.5px'});
	break;
	case 'LT':
	$('.bagbody').animate({width:'480px',height:'675px'});
	break;
	case 'MS':
	$('.bagbody').animate({width:'420px',height:'397.5px'});
	$('.handle').animate({width:'230px'});
	break;
	case 'MT':
	$('.bagbody').animate({width:'420px',height:'600px'});
	$('.handle').animate({width:'230px'});
	break;
	case 'SS':
	$('.bagbody').animate({width:'330px',height:'397.5px',top:'-140px'});
	$('.handle').animate({width:'200px'});
	break;
	case 'ST':
	$('.bagbody').animate({width:'330px',height:'480px',top:'-140px'});
	$('.handle').animate({width:'200px'});
	break;
}


});
// 紙色選択
$('#basecolor').on('change',function(){
	var hex='';
	var color=$(this).val();
	switch (color){
		case 'Dic003':
		hex ='#FDD2E5';
		break;
		case 'Dic009':
		hex ='#FFEA98';
		break;
		case 'Dic016':
		hex ='#84D7CB';
		break;
		case 'Dic021':
		hex ='#B5DCF2';
		break;
		case 'Dic032':
		hex ='#FFD78C';
		break;
		case 'Dic051':
		hex ='#FF686C';
		break;
		case 'Dic080':
		hex ='#FF4220';
		break;
		case 'Dic144':
		hex ='#3E63B4';
		break;

	}
	$('.bgpoint').animate({backgroundColor:hex},1000,'linear');
});


// 文字入力1
$('#input-title1').on('click blur keydown keyup keypress change',function(){
	var text1=$(this).val();
	$('#k-title1').text(text1);

});


// 入力1 font-size
$('#fontsize1').on('input change',function(){
	var size=$(this).val();
	$('#size1').text(size);
	$('.k-title').css('font-size',size+'%');
});
// 入力1ドラッグ移動	
$('#k-title1').on('mousedown',function(event){
	$(this).addClass('drag');
	var left_limit=parseInt($('.bgpoint').css('left'));
	var right_limit =left_limit + parseInt($('.bgpoint').width());
	var top_limit = $('.bgpoint').offset().top;
	var container_height=parseInt($('.bgpoint').css('height'));
	var bottom_limit =top_limit + container_height;
	var content_width=parseInt($('#k-title1').width());
	var content_height=parseInt($('#k-title1').height());
	var eX = event.pageX-parseInt($('#k-title1').css("left"));
 	var eY = event.pageY-parseInt($('#k-title1').css("top")); 	
 	$(document).mousemove(function(event){
	$('.drag').css("left",event.pageX - eX).css("top",event.pageY - eY);
	if(event.pageX - eX>=right_limit-content_width){
		$('.drag').css('left',right_limit - content_width+'px');
	}
	if(event.pageX - eX<=left_limit){
	$('.drag').css('left',0);
	}
	if(event.pageY<=top_limit){
	$('.drag').css('top',0);
	}
	if(event.pageY>=bottom_limit){
	　$('.drag').css('top',container_height-content_height+'px');
	}		
	});
	$(document).on('mouseup',function(event){
	$('.drag').off('mousemove');
	$('.drag').removeClass('drag');
	});
});
// 文字色選択
fontcolor('#fontcolor1','.k-title');
function fontcolor(obj1,obj2){
$(obj1).on('change',function(){
	var hex='';
	var color=$(this).val();
	switch (color){
		case 'black':
		hex ='#000';
		break;
		case 'white':
		hex ='#FFFFFF';
		break;
		case 'Dic003':
		hex ='#FDD2E5';
		break;
		case 'Dic009':
		hex ='#FFEA98';
		break;
		case 'Dic016':
		hex ='#84D7CB';
		break;
		case 'Dic021':
		hex ='#B5DCF2';
		break;
		case 'Dic032':
		hex ='#FFD78C';
		break;
		case 'Dic051':
		hex ='#FF686C';
		break;
		case 'Dic080':
		hex ='#FF4220';
		break;
		case 'Dic144':
		hex ='#3E63B4';
		break;

	}
	$(obj2).css({color:hex});
});
}
// font-family
fontfamily('#fontfamily1','#k-title1');

function fontfamily(obj1,obj2){
$(obj1).on('change',function(){
	var font='';
	var f=$(this).val();
	switch (f){
		case '明朝体':
		font='"ヒラギノ明朝 ProN W6", "HiraMinProN-W6","MS 明朝", serif';
		break;
		case 'ゴシック':
		font='"Hiragino Kaku Gothic ProN", "Meiryo", "sans-serif"';
		break;
		case 'mplus-thin':
		font='mplus-thin';
		break;
		case 'mplus-light':
		font='mplus-light';
		break;
		case 'mplus-regular':
		font='mplus-regular';
		break;
		case 'mplus-bold':
		font='mplus-bold';
		break;
		case 'hiraginoMaru':
		font='ヒラギノ丸ゴ Pro';
		break;
		case 'はんなり明朝':
		font='hannari';
		break;
		case 'ArialBlack':
		font='Arial Black';
		break;
		case 'TimesNewRoman':
		font='Times New Roman';
		break;
		case 'CourierNew':
		font='Courier New';
		break;
		case 'Helvetica':
		font='Helvetica';
		break;
		case 'Oswald':
		font='Oswald';
		break;
		case 'GreatVibes':
		font='Great Vibes';
		break;
		case 'PermanentMarker':
		font='Permanent Marker';
		break;
		case 'Marvel':
		font='Marvel';
		break;
		case 'PoiretOne':
		font='Poiret One';
		break; 

	}
	$(obj2).css({fontFamily:font});
});
}
// 文字間
$('#letter_spacing1').on('change',function(){
	var s=$(this).val();
	$('#k-title1').css({letterSpacing:s+'rem'});

});


});//endjQuery