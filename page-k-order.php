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
			<form action="" class="form" id="kantan" method="post">
			
					<div class="form-group">
						<label class="control-label" for="size">紙袋サイズ</label>
						<select id="size" name="size" class="form-control">
						  <option value="LS">Lサイズ:高さスタンダード</option>
						  <option value="LT">Lサイズ:高さトール</option>
						  <option value="MS">Mサイズ:高さスタンダード</option>
						  <option value="MT">Mサイズ:高さトール</option>
						  <option value="SS">Sサイズ:高さスタンダード</option>
						  <option value="ST">Sサイズ:高さトール</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">文字入力1<br><small>入力後ドラッグして移動できます</small></label>
						<input type="text" class="form-control" name="title1" id="input-title1" placeholder="お店の名前を入力してください">
					</div>
					<div class="form-group">
						<label class="control-label">入力1の文字の大きさ<span id="size1">100</span>%</label>
						<input type="range" id="fontsize1" class="form-control" min="100" max="500" step="1" value="100"/>
					</div>					

	
	

			</form>
			  <p id="test1">eeee</p>
			  <p id="test2">eeee</p>
		</div>
		<div class="canvas col-md-9">
			<div class="handle">
				<?php include('svg/handle.svg'); ?>
			</div>
			<div class="bagbody">
				<div class="bgpoint">
				<p id="k-title1" class="k-title">お店の名前を入力してください</p>
				</div>
			</div>
			

		</div>

		

    </main>


  </div>
<?php require_once('footer.php')?>