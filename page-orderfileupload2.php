<?php
session_start();
require_once('token.php');
if (!isset($_POST['token']) || !Token::validate($_POST['token'])) {
	header("Content-type: text/html; charset=UTF-8");		
    die('不正な処理が行われました');
}
$time=htmlspecialchars($_POST['time'],ENT_QUOTES);
$_SESSION['time']=$time;
$dir_name="../../../uploadfile";
$max_size=1024*1024*50;

require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
		<?php
		if(is_uploaded_file($_FILES["upfile"]["tmp_name"])){
			if($_FILES["upfile"]["tmp_name"]>$max_size){
				echo "ファイルの上限は50Mです";
				exit;
			}
			$extension=pathinfo($_FILES["upfile"]["name"],PATHINFO_EXTENSION );
			if($extension== "ai" || $extension== "psd" || $extension== "pdf" || $extension== "eps"){
				$file_name="upload_".$time.".".$extension;
				$uploaded_file="$dir_name/$file_name";
				move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploaded_file);
				$_SESSION['file_name']=$file_name;
			}else{		
				echo "<h2>対応していないファイル形式です</h2>";
				exit;

			}


		}

		?>
		<h2 class="text-center">原稿ファイルのアップロードが完了しました<br>続けて注文フォームにご記入下さい</h2>
		<form action="page-orderfileupload3.php" method="POST" accept-charset="utf-8" role="form" class="form-horizontal">
			<div class="form-group">
				<label for="company_name" class="col-sm-3 control-label">会社名</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="company_name" id="company_name" placeholder="御社名">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-3 control-label">ご担当者名</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="name" id="name" placeholder="ご担当者様　氏名">
				</div>
			</div>


		</form>
			




		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>