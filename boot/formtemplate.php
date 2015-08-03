<?php require_once('header.php')?>
    <main class="conatact_main container">
      		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
		<h3 class="margin-bottom-20 text-center">原稿ファイルのアップロードが完了しました。続けて注文フォームにご記入下さい</h3>
		<form action="page-orderfileupload3.php" method="POST" accept-charset="utf-8" role="form" class="form-horizontal">
		<fieldset>
			<legend class="text-primary">ご注文フォーム</legend>
		
			<div class="form-group">
				<label for="company_name" class="col-sm-2 control-label">会社名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="company_name" id="company_name" placeholder="御社名">
				</div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">ご担当者名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" id="name" placeholder="氏名:必須" required>
				</div>
			</div>
			<div class="form-group">
				<label for="kana" class="col-sm-2 control-label">よみがな</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="kana" id="kana" placeholder="よみがな:必須" required>
				</div>
			</div>
			<div class="form-group">
				<label for="mail1" class="col-sm-2 control-label">e-mail</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="mail1" id="mail1" placeholder="e-mail" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>
			<div class="form-group">
				<label for="mail2" class="col-sm-2 control-label">e-mail再入力</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="mail2" id="mail2" placeholder="e-mail再入力" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>			
			<p class="text-center">
			<button type="submit" id="ordersubmit" class="btn btn-default margin-bottom-20 btn-primary btn-large">送信</button>
			<button type="rest" id="reset" class="btn btn-default margin-bottom-20 btn-primary btn-large">入力項目</button>
			</p>
			</fieldset>
		</form>
			




		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>