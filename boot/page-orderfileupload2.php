<?php
session_start();
require_once('token.php');
if (!isset($_POST['token']) || !Token::validate($_POST['token'])) {
	header("Content-type: text/html; charset=UTF-8");		
    die('不正な処理が行われました');
}
$time=htmlspecialchars($_POST['time'],ENT_QUOTES);
$_SESSION['time']=$time;
$dir_name="../../uploadfile";
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
		$image_name="upload_".$time.$extension;
		$uploaded_file="$dir_name/$image_name";
		move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploaded_file);
	}else{		
		echo "<h2>対応していないファイル形式です</h2>";
		exit;

	}


}
		?>
		<h2><?php print( $image_name ); ?></h2>
		
			



		<button class="btn btn-default" onclick="location.href='page-orderfileupload.php'">戻る</button>

		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>