<?php
session_start();
$size_list=array(
"default"=>"選択して下さい",
"LS"=>"L:高さスタンダード",	
"LT"=>"L:高さトール",	
"MS"=>"M:高さスタンダード",	
"MT"=>"M:高さトール",	
"SS"=>"S:高さスタンダード",
"ST"=>"S:高さトール",	
);
require_once('header.php');

?>
<main class="conatact_main container page-k-order-main relative">
	<div id="order2_header" class="page-header hidden-xs hidden-sm">
		<button id="k-order-topbtn1" class="btn btn-default no-point" type="button"> 簡単デザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
		<button id="k-order-topbtn2" class="btn btn-default no-point" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
		<button id="k-order-topbtn3" class="btn btn-default no-point" type="button"> ご注文情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
		<button id="k-order-topbtn4" class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
		<button id="k-order-topbtn5" class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
		<button id="k-order-topbtn6" class="btn btn-success no-point" type="button"> ご注文手続き完了 </button>
	</div>
	<div class="col-md-10 col-md-offset-1">
	<?php include('bagwrap.php');?>
		<div class="panel panel-primary">	
		  <div class="panel-heading text-center">
			<?php
				if(isset($_SESSION['k-order-cdata'])){
				echo $_SESSION['k-order-cdata']['company']."&nbsp;".$_SESSION['k-order-cdata']['name']."様";}
				 ?>&nbsp;&nbsp;簡単デザインご注文内容確認

		  </div>
		  <div class="panel-body">
		  	<div class="col-md-5">
			  <table class="table">
			    <tr>
			    	<th>サイズ</th>
			    	<td><?php echo $size_list[$_SESSION["k-order-bagdata"]['size']]; ?></td>
			    </tr>
			  </table>
			 </div> 
		  </div>

		</div>
		<div class="text-center margin-bottom-40 clear">
			<button type="button" id="k-order-back4btn" class="btn btn-default btn-lg margin-bottom-20 back">お支払い手続きに戻る</button>
			<button type="button" id="k-order-next4btn" class="btn btn-primary btn-lg margin-bottom-20">注文内容確定</button>
		</div>
	</div>


<!-- 		<div class="k-order-payment">
	<form action="page-k-order4.php" method="POST" id="k_orderform1" class="form-horizontal" novalidate="novalidate">
	<div id="k-order-sec1">
			<div class="col-md-1">
				<h2 class="bg-primary roundtitle rt1 relative z-2">ご注文内容確認</h2> 
			</div>
			<div class="col-md-12 col-mf-offset-2 k_form_wrap margin-bottom-40">
				<div class="formbox">
					<fieldset class="k-order-detail">							
						<div class="well margin-xboth-30 margin-bottom-0 ">
							<h2 class="text-center">&#12304;<?php
							if(isset($_SESSION['k-order-cdata'])){
							echo $_SESSION['k-order-cdata']['company']."&nbsp;".$_SESSION['k-order-cdata']['name']."様";
							}
							 ?>&nbsp;&nbsp;ご注文内容確認&#12305;</h2>
							<h3 class="text-muted">ありがとうございます。商品の到着までのご案内を、ご登録いただきましたメールアドレス&#91;<?php echo $_SESSION['k-order-cdata']['email']?>&#93;に送信させていただきます。
							</h3>	
						</div>
					</fieldset>									
				</div>				
			</div>
			<div class="text-center margin-bottom-40 clear">
				<button type="button" id="k-order-back4btn" class="btn btn-default btn-lg margin-bottom-20 back">お支払い手続きに戻る</button>
				<button type="button" id="k-order-next4btn" class="btn btn-primary btn-lg margin-bottom-20">注文内容確定</button>
			</div>

	</div>

	</form>		
	</div> -->




		



</main>


  </div>
<?php require_once('footer.php')?>