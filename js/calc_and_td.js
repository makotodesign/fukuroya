$(function(){
// 見積もり エコノミー	
calc('#ls_5',96,77.5,1500);
calc('#ms_5',93,73.5,1500);
calc('#ss_5',102.5,72,1500);
// 見積もり　スタンダード
calc('#ls_s',106,87.5,1500);
calc('#ms_s',103,83.5,1500);
calc('#ss_s',105,77,1500);

function calc(section,price1,price2,shipval){	
var tanka=price1;
$(section).find('#price').text(tanka);
$(section).find('#msg').html('1部あたりの単価<br>2000枚まで'+price1+'円/1部<br>2000枚以上'+price2+'円/1部');

$(section).find('#copies').on('change',function(){
	var copies=$(this).val();
	if(copies>=2000){
		var tanka=price2;
		$(section).find('#price').text(tanka);
	}else{
		var tanka=price1;
		$(section).find('#price').text(tanka);	
	}
	
	var price=$(section).find('#price').text()
	$(section).find('#total').text(copies*price);
	var tax=Math.round(copies*price*0.08);
	$(section).find('#tax').text(tax);
	var ship=shipval;
	$(section).find('#ship').text(ship);
	$(section).find('#all_total').text(copies*price+tax+ship);
	});

}

// テンプレートダウンロード
$('.template_download').find('#il').on('change',function(){
	$('.template_download').find('#il_ver_wrap').removeClass().addClass('show');
	$('.template_download').find('#ph_ver_wrap').removeClass().addClass('hide');
});
$('.template_download').find('#ph').on('change',function(){
	$('.template_download').find('#ph_ver_wrap').removeClass().addClass('show');
	$('.template_download').find('#il_ver_wrap').removeClass().addClass('hide');
});


});