<?php
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
   			<div class="row">
   				<button class="btn btn-success no-point" type="button"> 簡易デザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
				<h2 class="f-pop f-color1 text-center rem3">簡単に、あなただけの紙袋をデザインしてみましょう！</h2>
			</div>
		</div>
		<div class="ctrl col-md-3 bg-primary">
			<h2 class="text-center">かんたんデザイン</h2>
			<form action="" class="form" method="post">
			
					<div class="form-group">
						<label class="control-label">紙袋サイズ</label>
						<select id="size" name="size" class="form-control">
						  <option value="LS">Lサイズ:高さスタンダード</option>
						  <option value="LT">Lサイズ:高さトール</option>
						  <option value="MS">Mサイズ:高さスタンダード</option>
						  <option value="MT">Mサイズ:高さトール</option>
						  <option value="SS">Sサイズ:高さスタンダード</option>
						  <option value="ST">サイズ:高さトール</option>

						</select>

					</div>
					

	
	

			</form>
		</div>
		<div class="canvas col-md-9">
			<div class="handle">
				<?php include('svg/handle.svg'); ?>
			</div>
			<div class="bagbody">
				
			</div>
			

		</div>
		

    </main>

  </div>
<?php require_once('footer.php')?>