<?php
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
   			<div class="row">
   				<button class="btn btn-success no-point" type="button"> ご注文内容入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
				<h2>ご注文内容を入力して下さい</h2>
			</div>
		</div>
		<div class="formbox">
			<form action="page-order_3.php" method="POST" id="orderform1" class="form-horizontal" novalidate="novalidate">
		<fieldset>
			<!-- <legend class="text-primary">ご注文内容</legend> -->
			<div class="form-group control-group">
				<label for="select_grade" class="col-sm-2 control-label">注文商品グレード</label>
				<div class="col-sm-4 controls">
					<select id="select_grade" name="select_grade" class="form-control">
			          <option value="">--選択して下さい</option>
			          <option value="エコノミー">エコノミー</option>
			          <option value="スタンダード">スタンダード</option>
			        </select>
				</div>	
			</div>
			<div class="form-group control-group">
				<label for="select_size" class="col-sm-2 control-label">商品サイズ</label>
				<div class="col-sm-4 controls">
					<select id="select_size" name="select_size" class="form-control" disabled>
			          <option value="">--選択して下さい</option>
			          <optgroup label="Lサイズ">
				          <option value="Lサイズ-高さ-スタンダード">L:高さ:スタンダード</option>
				          <option value="Lサイズ-高さ-トール">L:高さ:トール</option>
			      	  </optgroup>
			      	  <optgroup label="Mサイズ">
				          <option value="Mサイズ-高さ-スタンダード">M:高さ:スタンダード</option>
				          <option value="Mサイズ-高さ-トール">M:高さ:トール</option>
			      	  </optgroup>
			      	  <optgroup label="Sサイズ">
				          <option value="Sサイズ-高さ-スタンダード">S:高さ:スタンダード</option>
				          <option value="Sサイズ-高さ-トール">S:高さ:トール</option>
			      	  </optgroup>
				    </select>
				</div>
			</div>
			<div class="form-group control-group">
				<label for="select_qty" class="col-sm-2 control-label">数量</label>
				<div class="col-sm-4 controls">
					<select id="select_qty" name="select_qty" class="form-control" disabled>
			          <option value="">--選択して下さい</option>
			          <script>
			          for(i=500;i<=10000;i=i+100){
			          	document.write('<option value="'+i+'部">'+i+'部</option>');
			          }

			          </script>
			        </select>
				</div>	
			</div>
			<div class="form-group control-group">
				<label for="confirmEmail" class="col-sm-2 control-label">印刷有・無</label>
				<div class="col-sm-4 controls padding-top-5">
					<label for="radio_type"><input type="radio" name="radio_type" value="印刷あり">&nbsp;印刷あり</label><br>
					<label for="radio_type"><input type="radio" name="radio_type" value="無地">&nbsp;印刷なし-無地商品</label>
					
				</div>	
			</div>
			<div class="form-actions text-center">
			  <button type="submit" class="btn btn-primary">次へ</button>
			  <button type="reset" class="btn">リセット</button>
			</div>

		</fieldset>
		</form>
		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>