<?php
session_start();

function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}



require_once('header.php');
// print_r($area2['color']);

?>
    <main class="conatact_main container peage-k-order-main">
  
   		<div class="page-header">
   			<div class="row">
   				<button class="btn btn-default no-point back" type="button"> かんたんデザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point back" type="button"> 注文詳細／お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> ご注文手続き完了 </button>
   			</div>

   			<div class="row">
				<h2 class="f-pop f-color1 text-center rem3">注文詳細　お客様情報入力</h2>
			</div>
		</div>
		
		<div class="col-md-12">

			</div>
			<div class="text-center"> 
				<button id="k-order3-backbtn" class="btn btn-default btn-lg back">戻る</button>
	
			<form class="inline-block" method="post" action="page-k-order4.php">
			  <button type="button" class="btn btn-primary btn-lg">確認</button>
			</form>  
			</div>

			
		</div>

    </main>


  </div>
<?php require_once('footer.php')?>