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
	$('html,body').animate({scrollTop:'300px'},300,'linear')
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
if(flug=='LT'){
	$('#bagwrap').css('top','-80px');

}else{
	$('#bagwrap').css('top','0px');
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

// textarea改行を反映して
k_textarea('#input-title1','#k-title1');
k_textarea('#input-title2','#k-title2');
function k_textarea(obj1,obj2){
$(obj1).on('click blur keydown keyup keypress change',function(){
	var text=$(this).val();
	text=text.replace(/\r\n/g, "<br />");
	text = text.replace(/(\n|\r)/g, "<br />");

	$(obj2).html(text);
});	
}

// 入力1 font-size
k_fontsize('#fontsize1','#size1','#k-title1');
k_fontsize('#fontsize2','#size2','#k-title2');
function k_fontsize(obj1,obj2,obj3){
	$(obj1).on('input change',function(){
	var size=$(this).val();
	$(obj2).text(size);
	$(obj3).css('font-size',size+'%');
	});
}

// 入力1ドラッグ移動
drag('#k-title1');
drag('#k-title2');
function drag(obj1){
$(obj1).on('mousedown',function(event){
	$(this).addClass('drag');
	var left_limit=parseInt($('.bgpoint').css('left'));
	var right_limit =left_limit + parseInt($('.bgpoint').width());
	var top_limit = $('.bgpoint').offset().top;
	var container_height=parseInt($('.bgpoint').css('height'));
	var bottom_limit =top_limit + container_height;
	var content_width=parseInt($(obj1).width());
	var content_height=parseInt($(obj1).height());
	var eX = event.pageX-parseInt($(obj1).css("left"));
 	var eY = event.pageY-parseInt($(obj1).css("top")); 	
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
}

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
fontfamily('#fontfamily2','#k-title2');

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
k_letterspacing('#letter_spacing1','#k-title1');
k_letterspacing('#letter_spacing2','#k-title2');

function k_letterspacing(obj1,obj2){
$(obj1).on('change',function(){
	var s=$(this).val();
	$(obj2).css({letterSpacing:s+'rem'});
});	
}

// 行間
k_lineheight('#line_height1','#k-title1');
k_lineheight('#line_height2','#k-title2');
function k_lineheight(obj1,obj2){
	$(obj1).on('change',function(){
	var s=$(this).val();
	$(obj2).css({lineHeight:s});
});
}
// 行揃え
$('input[name="align1"]:radio').on('change',function(){
	var a=$(this).val();
	$('#k-title1').css({textAlign:a});
});
$('input[name="align2"]:radio').on('change',function(){
	var a=$(this).val();
	$('#k-title2').css({textAlign:a});
});




// 入力エリア追加
$('#k-input2,#k-title2').hide();
$('#areaadd1').on('change',function(){
	if($(this).is(':checked')){
		$('#k-input2,#k-title2').show();
	}else{
		if($('#input-title2').val()==''){
		$('#k-input2,#k-title2').hide();
		}
		// もしエリア2に入力があったらalert
		if($('#input-title2').val()!==''){
			$('#areaadd1').prop("checked",true);
			alert('文字が入力されています');
		}

	}
});

// スクロールで袋がついてくる
$(window).scroll(function() {
	var svalue=$('html,body').scrollTop();
	$('.canvas').css('top',svalue / 3);

	
});



});//endjQuery