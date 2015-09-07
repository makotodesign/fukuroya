<?php
session_start();
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
$k_orderid="k-".time();
$_SESSION["k-order-cdata"]['id']=h($k_orderid);


require_once('header.php');
?>

    <main id="k-compleate" class="order_main container mid-padding-top">
		<div class="col-md-8 col-md-offset-2">
			<div class="well">
				<h2 class="text-center">簡単デザインご注文完了いたしました</h2>
				<h3 class="text-center margin-bottom-20">
					<?php 
					echo $_SESSION["k-order-cdata"]['company'].$_SESSION["k-order-cdata"]['name']."様のご注文IDは&#12304;{$_SESSION["k-order-cdata"]['id']}&#12305;です。"	
					?>
				</h3>
				<p class="text-center">ご登録いただきましたメールアドレスに、ご注文詳細を送信させていただきました。<br>商品到着まで大切に保管して下さいませ。</p>
				<p class="text-center rem2"><span id="to_top_count"></span>秒後にトップページに戻ります</p>
				

			</div>	
		</div>
 
    </main>

  </div>
<?php require_once('footer.php')?>

 

