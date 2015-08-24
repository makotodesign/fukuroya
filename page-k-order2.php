<?php

$size=h($_POST['size']);
$basecolor=h($_POST['basecolor']);
$fontcolor1=h($_POST['fontcolor1']);
$t1_top=h($_POST['k-title1-top']);
$t1_left=h($_POST['k-title1-left']);
$t2_top=h($_POST['k-title1-top']);
$t2_left=h($_POST['k-title1-left']);
$title1=h($_POST['title1']);
require_once('header.php');
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
?>
    <main class="conatact_main container peage-k-order-main">
  
   		<div class="page-header">
   			<div class="row">
   				<button class="btn btn-default no-point back" type="button"> かんたんデザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point back" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
				<h2 class="f-pop f-color1 text-center rem3">デザインを確認しましょう！</h2>
			</div>
		</div>
		
		<div class="col-md-12">
			<div id="bagwrap">
				<div class="handle <?php 
					if($size=='SS'|| $size=='ST'):
						echo 'small_handle';
					else:
						echo '';
					endif;?>">
					<?php include('svg/handle.svg'); ?>
				</div>
				<div class="bagbody <?php echo $size; ?>">
					<div class="bgpoint prev-<?php echo $basecolor; ?>">
						<p id="k-title1-prev" class="k-title-prev font1-<?php echo $fontcolor1; ?>" style="top:<?php echo $t1_top?>px;left:<?php echo $t1_left?>px;"><?php echo $title1; ?></p>
						<p id="k-title2-prev" class="k-title-prev" style="display:none"></p>
					</div>
				</div>
			</div>
			
		</div>

    </main>


  </div>
<?php require_once('footer.php')?>