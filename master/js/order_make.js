$(function(){
if (!window.File) {
  window.alert("本ブラウザではファイルの表示ができません");
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

});



});





