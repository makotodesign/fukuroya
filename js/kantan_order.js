$(function(){
// $('.ctrl').draggable();
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
	$('.bagbody').animate({width:'330px',height:'397.5px'});
	$('.handle').animate({width:'200px'});
	break;
	case 'ST':
	$('.bagbody').animate({width:'330px',height:'480px'});
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
	$('.bgpoint').animate({backgroundColor:hex},1000,'linear');
	$('.k-title-bg').css({color:hex});
});

// textarea改行を反映して
k_textarea('#input-title1','#k-title1');
k_textarea('#input-title2','#k-title2');
function k_textarea(obj1,obj2){
$(obj1).on('click blur keydown keyup keypress change',function(){
	var text=$(this).val();
	text=text.replace(/\r\n/g, "<br>");
	text = text.replace(/(\n|\r)/g, "<br>");

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
	if(event.pageY<=top_limit+50){
	$('.drag').css('top','50px');
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
	var bc=$('.bgpoint').css('background-color');
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
	$('.k-title').css({borderColor:hex});
	$('.k-title-bg').css({backgroundColor:hex,color:bc});
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
		case 'mincho':
		font='"ヒラギノ明朝 ProN W6", "HiraMinProN-W6","MS 明朝", serif';
		break;
		case 'gothic':
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
		case 'hannari':
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
// 囲み枠
$('#outline1_bwidth').prop('disabled',true);
$('#outline1').on('change',function(){
	if($(this).is(':checked')){
		$('#input_t1_bg').prop('disabled',true);
		$('#outline1_bwidth').prop('disabled',false);
		
		var c =$('#k-title1').css('color');
		$('#k-title1').css({
							borderStyle:'solid',
							borderColor:c,
							padding:'2%'
							
						});
		$('#outline1_bwidth').on('change',function(){
			var b=$('#outline1_bwidth').val();
			$('#k-title1').css({borderWidth:b+'px'});

		});
	}else{
		$('#input_t1_bg').prop('disabled',false);
		$('#k-title1').css({border:'none',paddingRight:0,paddingLeft:0});
		$('#outline1_bwidth').prop('disabled',true);
		$('#outline1_bwidth').val(1);
	}
});
// 背景枠
$('#input_t1_bgsize').prop('disabled',true);
var fc=$('#k-title1').css('color');
$('#input_t1_bg').on('change',function(){
	if($(this).is(':checked')){
		var fc=$('#k-title1').css('color');
		var bc=$('.bgpoint').css('background-color');
		$('#input_t1_bgsize').prop('disabled',false);
		$('#outline1').prop('disabled',true);
		$('#outline1').prop('checked',false);

		$('#k-title1').addClass('k-title-bg').css({border:'none',paddingRight:0,paddingLeft:0});
		$('.k-title-bg').css({
			color:bc,
			backgroundColor:fc
		});
		$('#input_t1_bgsize').on('change',function(){
			var val =$(this).val();
			$('.k-title-bg').css({padding:val+'%'});

		});
	}else{
		$('#input_t1_bgsize').prop('disabled',true);
		$('#outline1').prop('disabled',false);
		$('#input_t1_bgsize').val(1);
		var color=$('#fontcolor1').val();
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
		$('.k-title-bg').css({color:hex,background:'none',padding:0});
		$('#k-title1').removeClass('k-title-bg');

	}


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
	// $('.container').prepend('<p id="v" style="position:fixed;z-index:110"></p>');
$(window).scroll(function() {
	var svalue=$('html,body').scrollTop();
	// $('#v').text(svalue);
	$('.canvas,#k-o-submit').css('top',svalue / 3);	
	if(svalue>=480 && svalue<=800){
		$('.canvas,#k-o-submit').css('top',svalue-300);
	}

	else if(svalue >780){
		$('.canvas,#k-o-submit').css('top',500);
	}
});

// hiddenに仕込む
$('#k-order-commit').on('mouseover',function(){
	var t1top=parseInt($('#k-title1').css('top'));
	var t1left=parseInt($('#k-title1').css('left'));
	var t2top=parseInt($('#k-title2').css('top'));
	var t2left=parseInt($('#k-title2').css('left'));
	var t1_title=$('#k-title1').html();
	$('#k-title1-top').val(t1top);
	$('#k-title1-left').val(t1left);
	$('#k-title2-top').val(t2top);
	$('#k-title2-left').val(t2left);
	$('#k-title1-mod').val(t1_title);

});








});//endjQuery