<?php require_once('header.php')?>
    <main class="conatact_main container">
		<div class="page-header">
		<h1>お問い合わせフォーム</h1>
		<p>
		</p>
		</div>
    	<div class="formbox">
    		<form action="page-contact_2.php" method="POST" id="contactform1" class="form-horizontal" novalidate="novalidate">
    			<div class="form-group control-group">
				<label for="q_select" class="col-sm-2 control-label">お問い合わせ内容</label>
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


    		</form>
    	</div>
    </main>

  </div>
<?php require_once('footer.php')?>