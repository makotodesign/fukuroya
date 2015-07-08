$(function(){
if (!window.File) {
  window.alert("本ブラウザでは画像の登録と表示ができません,最新のブラウザにアップデートをお願いします");
}

//ファイル読み込み
$('#fileInput').change(function(){
                // 1. 選択されたファイルがない場合は何もせずにreturn
                if (!this.files.length) {
                    alert('ファイルが選択されていません');
                    return;
                }
 
                var file = this.files[0],            // 2. files配列にファイルが入っています
                    fileReader = new FileReader();   // 4. ファイルを読み込むFileReaderオブジェクト
 
                // 5. 読み込みが完了した際のイベントハンドラ。imgのsrcにデータをセット
                fileReader.onload = function(event) {
                    // 読み込んだデータをimgに設定
                    $('#userlogo').attr('src', event.target.result);
                };
 
                // 6. 画像読み込み
                fileReader.readAsDataURL(file);
            });




//ロゴを動かせるように
$('#imgwrap').draggable({
    containment:"parent",
    opacity:"0.6"
});



//画像のサイズ変更
////初期値
var size=$('#imgsize').val();
$('#userlogo').attr('width', +size+'px');
$('#imgsize').on('input change',function(){
var size=$('#imgsize').val();
$('#userlogo').attr('width', +size+'px');
$('#imgwrap').css('width',+size+'px');

});

//文字入力コーナー
////input type="text"に入れた文字がリアルタイムに反映
  $('#logoinput1').on('click blur keydown keyup keypress change',function(){
    var title_value=$(this).val();
    console.log(title_value);
    $('#title_prev1').text(title_value);
  });
//// drag
$('#title_prev1').draggable({
    containment:"parent",
    opacity:"0.6"
});
////fontsize change
    var f_size =$('#fontsize1').val();
    $('#title_prev1').css('font-size',f_size+'pt');
$('#fontsize1').on('input change',function(){
    var f_size =$(this).val();
    $('#title_prev1').css({fontSize:f_size+'pt',display:'inline'});
    
  });
////fontcolor change
  var f_color =$('#color').val();
  $('#title_prev1').css('color',f_color);
  //input type="color"からの入力値に対応

  $('#color').on('input change',function(){
   var f_color =$('#color').val();  
  $('#title_prev1').css('color',f_color);
  });

});







