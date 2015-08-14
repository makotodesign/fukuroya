<?php require_once('header.php')?>
    <main class="conatact_main container">
		<div class="page-header">
		<h1>お問い合わせフォーム</h1>
		<p>
		</p>
		</div>
    	<div class="formbox">
    	<div class="panel panel-default">
		  <div class="panel-body">
    		<form action="page-contact_2.php" method="POST" id="contactform1" class="form-horizontal" novalidate="novalidate">
    			<div class="form-group control-group">
				<label for="q_select" class="col-sm-2 control-label">項目</label>
					<div class="col-sm-4 controls">
						<select id="q_select" name="q_select" class="form-control">
				          <option value="">--選択して下さい</option>
				          <option value="注文前質問">ご注文前のお問い合わせ</option>
				          <option value="注文後質問">ご注文後のお問い合わせ</option>
				        </select>
					</div>	
				</div>
				<div class="form-group control-group">
					<label for="Name" class="col-sm-2 control-label">お名前</label>
					<div class="col-sm-4 controls">
						<input type="text" class="form-control" name="Name" id="Name" placeholder="必須">
					</div>

				</div>
				<div class="form-group control-group">
				<label for="Email" class="col-sm-2 control-label">e-mail</label>
				<div class="col-sm-4 controls">
					<input type="email" class="form-control" name="Email" id="Email" placeholder="必須" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
				</div>
				<div class="form-group control-group">
					<label for="confirmEmail" class="col-sm-2 control-label">e-mail再入力</label>
					<div class="col-sm-4 controls">
						<input type="email" class="form-control" name="confirmEmail" id="confirmEmail" placeholder="e-mail:再入力" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
					</div>
				</div>
				<div class="form-group control-group">
					<label for="inquiry" class="col-sm-2 control-label">内容</label>
					<div class="col-sm-10 controls">
						<textarea class="form-control" name="inquiry" id="inquiry" style="height:300px;" placeholder="お問い合わせ内容を入力して下さい:必須"></textarea>
					</div>

				</div>
				<div class="form-actions text-center margin-bottom-20">
				  <button type="submit" class="btn btn-primary">送信</button>
				  <button type="reset" class="btn">リセット</button>

				</div>



    		</form>
    		</div>
    		</div>
    	</div>
    </main>

  </div>
<?php require_once('footer.php')?>