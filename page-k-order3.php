<?php
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}

$_SESSION["k-order-cdata"]=array(
	"grade"=>h($_POST['k_select_grade']),
	"qty"=>h($_POST['k_select_qty']),
	"company"=>h($_POST['k_company_name']),
	"name"=>h($_POST['k_name']),
	"kana"=>h($_POST['k_kana']),
	"email"=>h($_POST['k_confirm_email']),
	"tel"=>h($_POST['k_tel']),
	"fax"=>h($_POST['k_fax']),
	"sendplace"=>h($_POST['k_sendplace']),
	"postcode"=>h($_POST['k_postcode1']),
	"postcode2"=>h($_POST['k_postcode2']),
	"pref"=>h($_POST['k_address1']),
	"address2"=>h($_POST['k_address2']),
	"address3"=>h($_POST['k_address3']),
	"address4"=>h($_POST['k_address4']),
);


require_once('header.php');

?>
    <main class="conatact_main container page-k-order-main relative">
   		<div id="order2_header" class="page-header hidden-xs hidden-sm">
   				<button id="k-order-topbtn1" class="btn btn-default no-point" type="button"> 簡単デザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn2" class="btn btn-default no-point" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn3" class="btn btn-default no-point" type="button"> ご注文情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn4" class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn5" class="btn btn-success no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn6" class="btn btn-default no-point" type="button"> ご注文手続き確定 </button>
		</div>

		<div class="k-order-payment">
		<form action="page-k-order4.php" method="POST" id="k_orderform1" class="form-horizontal" novalidate="novalidate">
		<div id="k-order-sec1">
				<div class="col-md-1">
					<h2 class="bg-popgreen roundtitle rt1 relative z-2">お支払い手続き</h2>
				</div>
				<div class="col-md-10 col-mf-offset-2 big-padding-top k_form_wrap margin-bottom-40">
					<div class="formbox">
						<fieldset class="k-order-detail">							
							<div class="well margin-xboth-30 margin-bottom-0 ">
								<h2>現在お支払い方法は【代引き】のみとさせていただいております</h2>
								<h3 class="text-muted">近日中に、各種決済方法を導入予定です。ご不便をおかけしますがいましばらくお待ち下さいませ。
								</h3>	
							</div>
						</fieldset>									
					</div>				
				</div>
				<div class="text-center margin-bottom-40 clear">
					<button type="button" id="k-order3-backbtn" class="btn btn-default btn-lg margin-bottom-20 back">お客様情報入力に戻る</button>
					<button type="submit" id="k-order3-nextbtn" class="btn btn-primary btn-lg margin-bottom-20">進む</button>
				</div>

		</div>

		</form>		
		</div>
    </main>


  </div>
<?php require_once('footer.php')?>