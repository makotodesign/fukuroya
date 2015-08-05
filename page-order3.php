<?php
session_cache_expire(0);
session_cache_limiter('private_no_expire');
session_start();
$company_Name=h($_POST['company_Name']);
$Name=h($_POST['Name']);
$shipName=h($_POST['shipName']);
$Kana=h($_POST['Kana']);
$Email=h($_POST['confirmEmail']);
$tel1=h($_POST['tel1']);
$tel2=h($_POST['tel2']);
$select01=h($_POST['select01']);
$select02=h($_POST['select02']);
$postcode1=h($_POST['postcode1']);
$postcode2=h($_POST['postcode2']);
$address1=h($_POST['address1']);
$address2=h($_POST['address2']);
$address3=h($_POST['address3']);
$address4=h($_POST['address4']);
$_SESSION['$company_Name']=$company_Name;
$_SESSION['$Name']=$Name;
$_SESSION['$shipName']=$shipName;
$_SESSION['$Kana']=$Kana;
$_SESSION['$Email']=$Email;
$_SESSION['$tel1']=$tel1;
$_SESSION['$tel2']=$tel2;
$_SESSION['$select01']=$select01;
$_SESSION['$select02']=$select02;
$_SESSION['$postcode1']=$postcode1;
$_SESSION['$postcode2']=$postcode2;
$_SESSION['$address1']=$address1;
$_SESSION['$address2']=$address2;
$_SESSION['$address3']=$address3;
$_SESSION['$address4']=$address4;


require_once('token.php');
require_once('header.php');
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
?>
    <main class="conatact_main container">
   		<div class="page-header">
			<h1>注文情報・お届け先確認</h1>
			<!-- <button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button> -->
		</div>
		<div class="formbox">
			<div class="col-md-6">
				<table class="table table-bordered confirm">
					<tr>
						<th colspan="2" class="bg-primary">注文情報</th>
					</tr>
					<tr>
						<th>会社名</th>
						<td><?php echo $company_Name ?></td>
					</tr>
					<tr>
						<th>担当者名</th>
						<td><?php echo $Name ?></td>
					</tr>
					<tr>
						<th>担当者名よみがな</th>
						<td><?php echo $Kana ?></td>
					</tr>
					<tr>
						<th>E-mail</th>
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
						<th>注文商品ジャンル</th>
						<td><?php echo $select01 ?></td>
					</tr>
					<tr>
						<th>注文商品サイズ</th>
						<td><?php echo $select02 ?></td>
					</tr>
					

				</table>

			</div>
			<div class="col-md-6">
			<table class="table table-bordered confirm">
					<tr>
						<th colspan="2" class="bg-primary">お届け先情報</th>
					</tr>
					
					<tr>
						<th>郵便番号</th>
						<td><?php echo $postcode1.'-'.$postcode2 ?></td>
					</tr>
					<tr>
						<th>お届け先名<br><small>※注文情報と異なる場合</small></th>
						<td><?php echo $shipName ?></td>
					</tr>
					<tr>
						<th>住所</th>
						<td><?php echo $address1.$address2.$address3.'<br>'.$address4 ?></td>
					</tr>
					
					

				</table>
				
			</div>
			<div class="col-md-12 text-center margin-bottom-20">
			  <button class="btn btn-primary">お支払い情報入力</button>
			  <button class="btn" onclick="history.back();">再入力</button>
			</div>	
		


		</div>

    </main>

  </div>
<?php require_once('footer.php')?>