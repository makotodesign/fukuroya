$(function(){
$('.fileInput').change(function(){
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


});



