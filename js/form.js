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


// form disable制御
$('#select01').on('change',function(){
    $('#select02').attr('disabled',false);

});


// validate the comment form when it is submitted
    $.extend(jQuery.validator.messages, {
        required: "必須項目です",
        // maxlength: jQuery.format("{0} 文字以下を入力してください"),
        // minlength: jQuery.format("{0} 文字以上を入力してください"),
        // rangelength: jQuery.format("{0} 文字以上 {1} 文字以下で入力してください"),
        email: "メールアドレスを入力してください",
        url: "URLを入力してください",
        dateISO: "日付を入力してください",
        number: "有効な数字を入力してください",
        digits: "0-9までを入力してください",
	    equalTo: "上の入力項目と同じ値を入力してください",
        // range: jQuery.format(" {0} から {1} までの値を入力してください"),
        // max: jQuery.format("{0} 以下の値を入力してください"),
        // min: jQuery.format("{0} 以上の値を入力してください"),
        //creditcard: "クレジットカード番号を入力してください"
    });

    $("#orderform1").validate({
        rules: {
            Name: {
                required: true,
            },
            tel1: {
                required: true,
            },
            Email: {
                required: true,
                email: true,
            },
            confirmEmail: {
                required: true,
                email: true,
		        equalTo: '#Email',
            },
            checkread: {
                required: true,
            },
        },
        errorClass: "help-inline",
        validClass: "help-inline",
        errorElement: "span",
        validElement: "span",
        wrapper: "span",
        highlight: function(wrapper) {
            $(wrapper).parents('.control-group').removeClass('success').addClass('error');
        },
        success: function(wrapper, validClass) {
            wrapper.text('OK!').addClass('help-inline').closest('.control-group').addClass('success');
        }
    });
    $('button:reset').click(function() {
        $('span.help-inline').hide();
        $('.error').removeClass('error');
        $('.success').removeClass('success');
        $('#select02').attr('disabled',true);
    });

    // 郵便番号入力補完
    $('#postcode1').jpostal({
    postcode : [
        '#postcode1',
        '#postcode2'
    ],
    address : {
        '#address1'  : '%3',
        '#address2'  : '%4',
        '#address3'  : '%5'
    }
});

});





