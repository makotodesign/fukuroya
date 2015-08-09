<?php
session_cache_limiter('none');
session_start();
$company_Name=h($_POST['company_Name']);
$Name=h($_POST['Name']);
$Kana=h($_POST['Kana']);
$Email=h($_POST['confirmEmail']);
$tel1=h($_POST['tel1']);
$tel2=h($_POST['tel2']);
$sendplace=h($_POST['sendplace']);
$postcode1=h($_POST['postcode1']);
$postcode2=h($_POST['postcode2']);
$address1=h($_POST['address1']);
$address2=h($_POST['address2']);
$address3=h($_POST['address3']);
$address4=h($_POST['address4']);
$_SESSION['company_Name']=$company_Name;
$_SESSION['Name']=$Name;
$_SESSION['Kana']=$Kana;
$_SESSION['Email']=$Email;
$_SESSION['tel1']=$tel1;
$_SESSION['tel2']=$tel2;
$_SESSION['sendplace']=$sendplace;
$_SESSION['postcode1']=$postcode1;
$_SESSION['postcode2']=$postcode2;
$_SESSION['address1']=$address1;
$_SESSION['address2']=$address2;
$_SESSION['address3']=$address3;
$_SESSION['address4']=$address4;



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
   	<?php if($_SESSION[print_or_none]!=='無地'):?>	
   			<div class="row">
   			<h2>原稿ファイルをアップロードして下さい</h2>
			</div>
		</div>
		<div class="formbox col-sm-7">
	
			<form action="page-order_5.php" method="post" enctype="multipart/form-data" role="form">
				  <div class="form-group">
				    <label for="exampleInputFile">入稿するファイルを選択して下さい</label>
				    <input type="file" id="upfile" name="upfile">
				    <p class="help-block">.ai/.pdf/.psd/.epsが入稿可能です。最大サイズは50MBです。</p>
				  </div>		
					<p>
					<input type="hidden" name="time" id="time" >
					<input type="hidden" name="filename" id="filename" >

					</p>
				<div id="loadingmsg" class="panel panel-danger" style="display:none;">
				<div class="panel-body">
				<span class="fa fa-spinner fa-spin"></span>
				ファイルをアップロードしています。このままお待ち下さい。
				</div>
			</div>
					
			<div class="form-actions text-center margin-bottom-20">
			  <button type="submit" id="filesubmit" class="btn btn-primary">アップロード</button>
			  <button type="reset" class="btn">リセット</button>
			  <button type="submit" class="btn btn-default back">戻る</button>
			</div>

			</form>
			
	<?php else:?>
		  	<div class="row">
		  	<h2>印刷無し無地<br><small>ファイルのアップロードの必要はありませんのでこのまま「次へ」をクリックしてください</small></h2>
			</div>
		</div>
		<div class="formbox col-sm-7">
			<div class="form-actions text-center margin-bottom-20">
			  <button id="mujinext" class="btn btn-primary">次へ</button>
			  <button type="submit" class="btn btn-default back">戻る</button>
			</div>

			<?php endif; ?>





	

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
								<td><?php echo $company_Name ?></td>
							</tr>
							<tr>
								<th>担当者名</th>
								<td><?php echo $Name ?></td>
							</tr>
							<tr>
								<th>よみがな</th>
								<td><?php echo $Kana ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo $Email ?></td>
							</tr>
							<tr>
								<th>電話番号</th>
								<td><?php echo $tel1 ?></td>
							</tr>
							<tr>
								<th>Fax番号</th>
								<td><?php echo $tel2 ?></td>
							</tr>
							<tr>
								<th>お届け先宛名</th>
								<td><?php echo $sendplace ?></td>
							</tr>
							<tr>
								<th>郵便番号</th>
								<td><?php echo $postcode1.'-'.$postcode2 ?></td>
							</tr>
							<tr>
								<th>お届け先住所</th>
								<td><?php echo $address1.$address2.'<br>'.$address3.$address4 ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>		

    </main>

  </div>
<?php require_once('footer.php')?>