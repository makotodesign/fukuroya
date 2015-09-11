<?php
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');
$prefilename=h($_POST['filename']);
$id=$_SESSION['id'];
$_SESSION['prefilename']=$prefilename;
$dir_name="../uploadfile";
$max_size=1024*1024*50;

function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
   			<div id="orderinfo" class="row">
   				<button class="btn btn-default no-point" type="button"> ご注文内容入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
   			<h2></h2>
			</div>
		</div>
		<div class="formbox col-sm-7">
			<?php
			if(is_uploaded_file($_FILES["upfile"]["tmp_name"])){
				if($_FILES["upfile"]["size"]>$max_size){
					echo "ファイルの上限は50Mです";
					echo "&nbsp;<button class='btn btn-primary' id='filesend_back'>戻る</button>";
					exit;
				}
				$extension=pathinfo($_FILES["upfile"]["name"],PATHINFO_EXTENSION );
				if($extension== "ai" || $extension== "psd" || $extension== "pdf" || $extension== "eps"){
					$file_name="upload_".$id.".".$extension;
					print_r($file_name);
					$uploaded_file="$dir_name/$file_name";
					move_uploaded_file($_FILES["upfile"]["tmp_name"],$uploaded_file);
					$_SESSION['file_name']=$file_name;
				}else{		
					echo "<h2>対応していないファイル形式です</h2>";
					exit;

				}


			}

			?>
			
			<h3 class="margin-bottom-20 text-center">原稿ファイル【<?php echo $prefilename ?>】のアップロードが完了しました</h3>
			<div class="text-center margin-bottom-20">
			  <button id="fileup_next" class="btn btn-primary">次へ</button>
			</div>


	

		</div>
		<div class="submit_check col-sm-5">
			<div class="panel panel-primary">
				<div class="panel-heading"><h3 class="panel-title">ご注文内容確認</h3></div>
				<div class="panel-body">
					<table class="table">
						
						<tbody>
							<tr>
								<th>注文商品グレード</th>
								<td><?php echo $_SESSION['grade'] ?></td>
							</tr>
							<tr>
								<th>商品サイズ</th>
								<td><?php echo $_SESSION['size'] ?></td>
							</tr>
							<tr>
								<th>部数</th>
								<td><?php echo $_SESSION['qty'] ?></td>
							</tr>
							<tr>
								<th>印刷有・無</th>
								<td><?php echo $_SESSION['print_or_none'] ?></td>
							</tr>
							<tr>
								<th>入稿ファイル</th>
								<td><?php echo $prefilename ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="submit_check col-sm-5 col-sm-offset-7">
			<div class="panel panel-primary">
				<div class="panel-heading"><h3 class="panel-title">お客様情報確認</h3></div>
				<div class="panel-body">
					<table class="table">
						
						<tbody>
							<tr>
								<th>会社名</th>
								<td><?php echo $_SESSION['company_Name'];?></td>
							</tr>
							<tr>
								<th>担当者名</th>
								<td><?php echo $_SESSION['Name']; ?></td>
							</tr>
							<tr>
								<th>よみがな</th>
								<td><?php echo $_SESSION['Kana']; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $_SESSION['Email']; ?></td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td><?php echo $_SESSION['tel1']; ?></td>
							</tr>
							<tr>
								<th>Fax番号</th>
								<td><?php echo $_SESSION['tel2']; ?></td>
							</tr>
							<tr>
								<th>お届け先宛名</th>
								<td><?php echo $_SESSION['sendplace']; ?></td>
							</tr>
							<tr>
								<th>郵便番号</th>
								<td><?php echo $_SESSION['postcode1'].'-'.$_SESSION['postcode2']; ?></td>
							</tr>
							<tr>
								<th>お届け先住所</th>
								<td><?php echo $_SESSION['address1'].$_SESSION['address2'].'<br>'.$_SESSION['address3'].$_SESSION['address4']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>		

    </main>

  </div>
<?php require_once('footer.php')?>