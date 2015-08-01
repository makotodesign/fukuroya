<?php
$time=$_POST['time'];
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
		<h2><?php echo $time;?></h2>
		
			




		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>