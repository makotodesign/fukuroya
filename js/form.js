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
$('#select_grade').on('change',function(){
    $('#select_size').attr('disabled',false);
    $('.disabled_msg').remove();

});
$('#select_size').on('change',function(){
    $('#select_qty').attr('disabled',false);

});

$('select:disabled').parent().append('<span class="text-muted disabled_msg">上の項目を入力すると有効になります</span>');

//カナ自動入力
$(function() {
    $.fn.autoKana('#Name', '#Kana', {
        katakana : true  //true：カタカナ、false：ひらがな（デフォルト）
    });
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
        number: "数字を入力してください",
        digits: "0-9までを入力してください",
	    equalTo: "emailで入力したメールアドレスと同じ値を入力してください",
        // range: jQuery.format(" {0} から {1} までの値を入力してください"),
        // max: jQuery.format("{0} 以下の値を入力してください"),
        // min: jQuery.format("{0} 以上の値を入力してください"),
        //creditcard: "クレジットカード番号を入力してください"
    });

    $("#orderform1").validate({
        rules: {
            select_grade: {
                required: true,
            },
            select_size: {
                required: true,
            },
            select_qty: {
                required: true,
            }


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
        $("#orderform2,#contactform1").validate({
        rules: {
            Name: {
                required: true,
            },
            tel1: {
                required: true,
                number: true,
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
            q_select: {
                required: true,
            },
            inquiry: {
                required: true,
            }
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

// アップロードファイル名取得
$('#upfile').on('change',function(){
$('#filename').val($(this).val());

});  

// 簡単オーダーformチェック
$("#k_orderform1").validate({
        rules: {
            k_name: {
                required: true,
            },
            k_tel: {
                required: true,
                number: true,
            },
            k_email: {
                required: true,
                email: true,
            },
            k_confirm_email: {
                required: true,
                email: true,
                equalTo: '#k_email',
            }
            
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
            // var aflug=$('#k_address').find('.help-inline').prop('id');
            // if(aflug=='k_postcode1-error'){
            //     $('#k_postcode1-error').hide();

            // }
        }
        
    });
// 簡単オーダー郵便番号入力補完
$('#k_postcode1').jpostal({
    postcode : [
        '#k_postcode1',
        '#k_postcode2'
    ],
    address : {
        '#k_address1'  : '%3',
        '#k_address2'  : '%4',
        '#k_address3'  : '%5'
    }
});     

});//end Jquery





