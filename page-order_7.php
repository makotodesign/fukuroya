<?php
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');
define('DB_DATABASE','_fukuroyadb');
define('DB_USERNAME','_fukuroyadb');
define('DB_PASSWORD','pass1126');
define('PDO_DSN','mysql:host=mysql507.heteml.jp;dbname='.DB_DATABASE.';charset=utf8');
try {
  // connect
 $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
 $stmt = $db->prepare('INSERT INTO orders(order_id,company_name,name,kana,send_place,email,tel,fax,postcode,pref,city,area1,area2,grade,size,qty,print_flug,prefilename,modfilename)
  VALUES (:orderid,:company_name,:name,:kana,:send_place,:email,:tel,:fax,:postcode,:pref,:city,:area1,:area2,:grade,:size,:qty,:print_flug,:prefilename,:modfilename);');
$stmt = $stmt->execute(
		array(
			':orderid'=>$_SESSION['id'],
			':company_name'=>$_SESSION['company_Name'],
			':name'=>$_SESSION['Name'],
			':kana'=>$_SESSION['Kana'],
			':send_place'=>$_SESSION['sendplace'],
			':email'=>$_SESSION['Email'],
			':tel'=>$_SESSION['tel1'],
			':fax'=>$_SESSION['tel2'],
			':postcode'=>$_SESSION['postcode1'].$_SESSION['postcode2'],
			':pref'=>$_SESSION['address1'],
			':city'=>$_SESSION['address2'],
			':area1'=>$_SESSION['address3'],
			':area2'=>$_SESSION['address4'],
			':grade'=>$_SESSION['grade'],
			':size'=>$_SESSION['size'],
			':qty'=>$_SESSION['qty'],
			':print_flug'=>$_SESSION['print_or_none'],
			':prefilename'=>$_SESSION['prefilename'],
			':modfilename'=>$_SESSION['file_name'],
	
		)

	);



} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
   			<div id="orderinfo" class="row">
   				<button class="btn btn-default no-point" type="button"> ご注文内容入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
   			<h2>ご注文手続き完了</h2>
   			 <button class="btn btn-primary go_top">Topページへ</button>
			</div>
		</div>
		<div class="well">
			<p>ご注文ありがとうございます。</p>
				
			<h2>今回のご注文ID【<?php echo $_SESSION['id']; ?>】</h2>
			<p>担当者より今後の流れについて、E-mailにてご連絡させていただきます。</p>
		</div>
		<div class="submit_check col-sm-6">
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
							<?php if(!$_SESSION['prefilename']=='無地'){
							echo "<tr>
								<th>入稿ファイル</th>
								<td>".$_SESSION['prefilename']."</td>
							</tr>";
							}
							?>
							<tr>
								<th>お支払い方法</th>
								<td>代引き</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="submit_check col-sm-6">
			<div class="panel panel-primary">
				<div class="panel-heading"><h3 class="panel-title">お客様情報確認</h3></div>
				<div class="panel-body">
					<table class="table">
						
						<tbody>
							<tr>
								<th>会社名</th>
								<td><?php echo $_SESSION['company_Name']; ?></td>
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
<?php 
$_SESSION = array();	
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
require_once('footer.php');
?>
