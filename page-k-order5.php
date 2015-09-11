<?php
session_start();
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
$k_orderid="k-".time();
$_SESSION["k-order-cdata"]['id']=h($k_orderid);
define('DB_DATABASE','_fukuroyadb');
define('DB_USERNAME','_fukuroyadb');
define('DB_PASSWORD','pass1126');
define('PDO_DSN','mysql:host=mysql507.heteml.jp;dbname='.DB_DATABASE.';charset=utf8');
try {
  // connect
 $db = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
 $stmt = $db->prepare('INSERT INTO `k-orders`(orderid,size,basecolor,fontcolor,title1,t1_top,t1_left,t1_size,t1_font,t1_l_s,t1_l_h,t1_align,t1_outline,t1_bwidth,t1_bg,t1_bgpadding,t2_add,title2,t2_top,t2_left,t2_size,t2_font,t2_l_s,t2_l_h,t2_align,grade,qty,company,name,kana,email,tel,fax,sendplace,postcode,pref,address2,address3,address4)
  VALUES (:orderid,:size,:basecolor,:fontcolor,:title1,:t1_top,:t1_left,:t1_size,:t1_font,:t1_l_s,:t1_l_h,:t1_align,:t1_outline,:t1_bwidth,:t1_bg,:t1_bgpadding,:t2_add,:title2,:t2_top,:t2_left,:t2_size,:t2_font,:t2_l_s,:t2_l_h,:t2_align,:grade,:qty,:company,:name,:kana,:email,:tel,:fax,:sendplace,:postcode,:pref,:address2,:address3,:address4);');
$stmt = $stmt->execute(
		array(
			':orderid'=>$_SESSION["k-order-cdata"]['id'],
			':size'=>$_SESSION["k-order-bagdata"]['size'],
			':basecolor'=>$_SESSION["k-order-bagdata"]['basecolor'],
			':fontcolor'=>$_SESSION["k-order-bagdata"]['fontcolor'],
			':title1'=>$_SESSION["k-order-bagdata"]['title1'],
			':t1_top'=>$_SESSION["k-order-bagdata"]['t1_top'],
			':t1_left'=>$_SESSION["k-order-bagdata"]['t1_left'],
			':t1_size'=>$_SESSION["k-order-bagdata"]['t1_size'],
			':t1_font'=>$_SESSION["k-order-bagdata"]['t1_fontfamily'],
			':t1_l_s'=>$_SESSION["k-order-bagdata"]['t1_l_s'],
			':t1_l_h'=>$_SESSION["k-order-bagdata"]['t1_l_h'],
			':t1_align'=>$_SESSION["k-order-bagdata"]['t1_align'],
			':t1_outline'=>$_SESSION["k-order-bagdata"]['t1_border_bool'],
			':t1_bwidth'=>$_SESSION["k-order-bagdata"]['t1_border_width'],
			':t1_bg'=>$_SESSION["k-order-bagdata"]['t1_bg_bool'],
			':t1_bgpadding'=>$_SESSION["k-order-bagdata"]['t1_bg_padding'],
			':t2_add'=>$_SESSION["k-order-bagdata"]['t2_add'],
			':title2'=>$_SESSION["k-order-bagdata"]['title2'],
			':t2_top'=>$_SESSION["k-order-bagdata"]['t2_top'],
			':t2_left'=>$_SESSION["k-order-bagdata"]['t2_left'],
			':t2_size'=>$_SESSION["k-order-bagdata"]['t2_size'],
			':t2_font'=>$_SESSION["k-order-bagdata"]['t2_fontfamily'],
			':t2_l_s'=>$_SESSION["k-order-bagdata"]['t2_l_s'],
			':t2_l_h'=>$_SESSION["k-order-bagdata"]['t2_l_h'],
			':t2_align'=>$_SESSION["k-order-bagdata"]['t2_align'],
			':grade'=>$_SESSION["k-order-cdata"]['grade'],
			':qty'=>$_SESSION["k-order-cdata"]['qty'],
			':company'=>$_SESSION["k-order-cdata"]['company'],
			':name'=>$_SESSION["k-order-cdata"]['name'],
			':kana'=>$_SESSION["k-order-cdata"]['kana'],
			':email'=>$_SESSION["k-order-cdata"]['email'],
			':tel'=>$_SESSION["k-order-cdata"]['tel'],
			':fax'=>$_SESSION["k-order-cdata"]['fax'],
			':sendplace'=>$_SESSION["k-order-cdata"]['sendplace'],
			':postcode'=>$_SESSION["k-order-cdata"]['postcode'].$_SESSION["k-order-cdata"]['postcode2'],
			':pref'=>$_SESSION["k-order-cdata"]['pref'],
			':address2'=>$_SESSION["k-order-cdata"]['address2'],
			':address3'=>$_SESSION["k-order-cdata"]['address3'],
			':address4'=>$_SESSION["k-order-cdata"]['address4']	
		)

	);



} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}


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

 

