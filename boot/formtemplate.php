<?php require_once('header.php')?>
    <main class="conatact_main container">
      		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
		<h3 class="margin-bottom-20 text-center">原稿ファイルのアップロードが完了しました。続けて注文フォームにご記入下さい</h3>
		<form action="page-orderfileupload3.php" method="POST" id="orderform1" class="form-horizontal" novalidate="novalidate">
		<fieldset>
			<legend class="text-primary">ご注文フォーム</legend>

			<div class="form-group control-group">
				<label for="company_Name" class="col-sm-2 control-label">会社名</label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="company_Name" id="company_Name" placeholder="御社名">
				</div>

			</div>
			<div class="form-group control-group">
				<label for="Name" class="col-sm-2 control-label">ご担当者名</label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="Name" id="Name" placeholder="氏名:必須">
				</div>

			</div>
			<div class="form-group control-group">
				<label for="Kana" class="col-sm-2 control-label">よみがな</label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="Kana" id="Kana" placeholder="よみがな:必須">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="Email" class="col-sm-2 control-label">e-mail</label>
				<div class="col-sm-10 controls">
					<input type="email" class="form-control" name="Email" id="Email" placeholder="e-mail" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="confirmEmail" class="col-sm-2 control-label">e-mail再入力</label>
				<div class="col-sm-10 controls">
					<input type="email" class="form-control" name="confirmEmail" id="confirmEmail" placeholder="e-mail再入力" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>			
			<div class="form-actions text-center">
			  <button type="submit" class="btn btn-primary">送信</button>
			  <button type="reset" class="btn">リセット</button>
			</div>

			</fieldset>
		</form>
			




		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>