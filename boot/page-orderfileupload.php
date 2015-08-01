<?php
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
			<h2><i class="fa fa-upload"></i>ファイルアップロード</h2>	
			<form action="page-orderfileupload2.php" method="post" enctype="multipart/form-data" role="form">
			  <div class="form-group">
			    <label for="exampleInputFile">入稿するファイルを選択して下さい</label>
			    <input type="file" id="upfile" name="upfile">
			    <p class="help-block">.ai/.pdf/.psd/.epsが入稿可能です。最大サイズは50MBです。</p>
			  </div>		
				<p>
				<input type="hidden" name="time" id="time" >
				</p>
				<button type="submit" id="filesubmit" class="btn btn-default">アップロード</button>
			</form>



		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>