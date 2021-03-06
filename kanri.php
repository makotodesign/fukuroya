<?php 
define('DB_DATABASE','_fukuroyadb');
define('DB_USERNAME','_fukuroyadb');
define('DB_PASSWORD','pass1126');
define('PDO_DSN','mysql:host=mysql507.heteml.jp;dbname='.DB_DATABASE.';charset=utf8');
try {
  // connect
 $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
	$stmt = $db->query('SELECT * FROM orders WHERE flag=1 ORDER BY modification_time DESC');
 	$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
 	$stmt =$db->query('SELECT * FROM contact');
 	$contact=$stmt->fetchAll(PDO::FETCH_ASSOC);
 	$stmt = $db->query('SELECT * FROM `k-orders` WHERE flag=1');
 	$k_results=$stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
// var_dump($k_results);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>袋屋|管理ページ</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" href="css/orig.css">
    <link rel="stylesheet" href="css/kanri.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
	<div class="page-header">
	  <h1>袋屋注文管理ページ <small>簡易版</small></h1>
	  <button class="btn btn-default" onClick="location.reload(true)">最新情報に更新</button>
	  <button class="btn btn-default" onClick="location.href='#order'">注文一覧</button>
	  <button class="btn btn-default" onClick="location.href='#contact'">問い合わせ一覧</button>
	</div>
	<div id="order" class="panel panel-primary">
	  <div class="panel-heading clearfix">
	    <h3 class="panel-title inline-block left">通常（原稿ファイル受け取り）注文一覧</h3>
	    <span id="orderbacge" class="badge inline-block left"></span>
	    <i id="compress1" class="fa fa-expand f-right pointer inline-block"></i>
	  </div>
	  <div id="orderbody" class="panel-body">
	    <table class="table table-bordered table-striped" style="font-size:0.9rem;">
			<thead>
			<tr>
				<th width="50">注文日時</th>
				<th width="40">注文ID</th>
				<th width="50">会社名</th>
				<th width="50">名前</th>
				<th width="50">よみがな</th>
				<th width="60">email</th>
				<th width="60">Tel</th>
				<th width="60">Fax</th>
				<th width="50">送り先宛名</th>
				<th width="30">〒</th>
				<th width="150">住所</th>
				<th width="50">グレード</th>
				<th width="130">サイズ</th>
				<th width="20">部数</th>
				<th width="30">pflug</th>
				<th width="80">up原稿名</th>
				<th width="80">原稿download</th>


				
				
			</tr>
			</thead>
			<tbody id="ordertable">
			<?php foreach($results AS $result):?>
				<tr>
					<td><?php echo $result["creation_time"]; ?></td>
					<td><?php echo $result["order_id"]; ?></td>
					<td><?php echo $result["company_name"]; ?></td>
					<td><?php echo $result["name"]; ?></td>
					<td><?php echo $result["kana"]; ?></td>
					<td><?php echo $result["email"]; ?></td>
					<td><?php echo $result["tel"]; ?></td>
					<td><?php echo $result["fax"]; ?></td>
					<td><?php echo $result["send_place"]; ?></td>
					<td><?php echo $result["postcode"]; ?></td>
					<td><?php echo $result["pref"].$result["city"].$result["area1"].$result["area2"]; ?></td>
					<td><?php echo $result["grade"]; ?></td>
					<td><?php echo $result["size"]; ?></td>
					<td><?php echo $result["qty"]; ?></td>
					<td><?php echo $result["print_flug"]; ?></td>
					<td><?php echo $result["prefilename"]; ?></td>
					<td><?php echo "<a href='http://makotodesign.heteml.jp/uploadfile/".$result["modfilename"]."'>".$result["modfilename"]."</a>"; ?></td>


				</tr>

			<?php endforeach; ?>
			</tbody>
	    </table>
	  </div>
	</div>
	<div id="order" class="panel panel-primary">
	  <div class="panel-heading clearfix">
	    <h3 class="panel-title inline-block left">簡単デザイン注文一覧</h3>
	    <span id="orderbacge" class="badge inline-block left"></span>
	    <i id="compress2" class="fa fa-expand f-right pointer inline-block"></i>
	  </div>
	  <div id="k-orderbody" class="panel-body">
	  	<?php foreach($k_results AS $k_result):?>
	  		<div class="panel panel-default k-order-detail">
	  			<div class="panel-heading clearfix">
					<div class="col-md-10">	  			
		  				<dl>
		  					<dt>【ID】</dt>
		  					<dd><?php echo $k_result['orderid'];?></dd>
		  					<dt>【注文日時】</dt>
		  					<dd><?php echo $k_result['time'];?></dd>
		  					<dt class="clear">【注文者】</dt>
		  					<dd><?php echo $k_result['company'].$k_result['name']."(".$k_result['kana'].")" ;?></dd>
		  					<dt>【Email】</dt>
		  					<dd><?php echo $k_result['email'];?></dd>
		  					<dt>【tel/fax】</dt>
		  					<dd><?php echo $k_result['tel'].'/'.$k_result['fax'];?></dd>
		  					<dt class="clear">【住所】</dt>
		  					<dd>〒<?php echo $k_result['postcode'].$k_result['pref'].$k_result['address2'].$k_result['address3'].$k_result['address4'];?></dd>
							<dt>【届け先宛名】</dt>
		  					<dd><?php echo $k_result['sendplace'];?></dd>	  	
		  				</dl>
	  				</div>
	  				<div class="col-md-2 text-center">
	  					<p class="clear text-right"><button type="button" class="btn btn-primary k-order-detailbtn">注文原稿表示</button></p>	 
					</div>
	  			</div>
	  			<div class="panel-body k-order-detail-body">

	  			</div>
	  		</div>
		<?php endforeach; ?>
	  </div>
	</div>
	<div id="contact" class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title inline-block left">問い合わせ一覧</h3>
	    <span id="inquerybacge" class="badge inline-block left"></span>
	    <i id="compress3" class="fa fa-expand f-right pointer inline-block"></i>
	  </div>
	  <div id="inquerybody" class="panel-body">
	  	<table class="table table-bordered table-striped" style="font-size:0.9rem;">
			<thead>
				<tr>
					<th width="50">問い合わせ日時</th>
					<th width="40">種別</th>
					<th width="50">名前</th>
					<th width="50">email</th>
					<th width="300">問い合わせ内容</th>	
				</tr>
			</thead>
			<tbody id="inquerytable">
				<?php foreach($contact AS $msg):?>
				<tr>
					<td><?php echo $msg['creation_time']; ?></td>
					<td><?php echo $msg['type']; ?></td>
					<td><?php echo $msg['name']; ?></td>
					<td><?php echo $msg['email']; ?></td>
					<td><?php echo $msg['inquiry']; ?></td>

				</tr>
				<?php endforeach; ?>
			</tbody>


	  	</table>
	  </div>
	</div>




<?php require_once('footer-kanri.php');?>