<?php require_once('header.php')?>
    <main class="conatact_main container">
      		<div class="page-header">
			<h1>原稿をアップロードして注文</h1>
			<button class="btn btn-primary" onClick="location.href='page-order.php'">オーダートップに戻る</button>
		</div>
		<div class="formbox">
		<h3 class="margin-bottom-20 text-center">原稿ファイルのアップロードが完了しました。続けて注文フォームにご記入下さい</h3>
		<form action="page-order3.php" method="POST" id="orderform1" class="form-horizontal" novalidate="novalidate">
		<fieldset>
			<legend class="text-primary">ご注文内容</legend>

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
					<input type="text" class="form-control" name="Kana" id="Kana" placeholder="よみがな">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="Email" class="col-sm-2 control-label">e-mail</label>
				<div class="col-sm-10 controls">
					<input type="email" class="form-control" name="Email" id="Email" placeholder="e-mail:必須" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="confirmEmail" class="col-sm-2 control-label">e-mail再入力</label>
				<div class="col-sm-10 controls">
					<input type="email" class="form-control" name="confirmEmail" id="confirmEmail" placeholder="e-mail:再入力" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="tel1" class="col-sm-2 control-label">電話番号</label>
				<div class="col-sm-5 controls">
					<input type="text" class="form-control" name="tel1" id="tel1" placeholder="電話番号:必須">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="tel2" class="col-sm-2 control-label">FAX番号</label>
				<div class="col-sm-5 controls">
					<input type="text" class="form-control" name="tel2" id="tel2">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="select01" class="col-sm-2 control-label">注文商品ジャンル</label>
				<div class="col-sm-5 controls">
					<select id="select01" name="select01" class="form-control">
			          <option value="">--選択して下さい</option>
			          <option value="エコノミー">エコノミー</option>
			          <option value="スタンダード">スタンダード</option>
			        </select>
				</div>	
			</div>
			<div class="form-group control-group">
				<label for="select02" class="col-sm-2 control-label">商品サイズ</label>
				<div class="col-sm-5 controls">
					<select id="select02" name="select02" class="form-control" disabled>
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
			<legend class="text-primary">お届け先情報</legend>
			<div class="form-group control-group">
				<label for="shipName" class="col-sm-2 control-label">お届け先名</label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="shipName" id="shipName" placeholder="注文情報と異なる場合のみ記載してください">
				</div>

			</div>
			<div class="form-group control-group">
				<label for="postcode1" class="col-sm-2 control-label">郵便番号</label>
				<div class="col-sm-10 controls">
					<input type="text" name="postcode1" id="postcode1" maxlength="3">-<input type="text" name="postcode2" id="postcode2" maxlength="4">
					<p class="help-block">郵便番号から住所を自動補完します</p>
				</div>

			</div>
			<div class="form-group control-group">
				<label for="address1" class="col-sm-2 control-label">都道府県</label>
				<div class="col-sm-2 controls">
					<select id="address1" name="address1" class="form-control">
			          <option value="" selected="selected">--選択</option>
			          <option value="北海道">北海道</option>
						<option value="青森県">青森県</option>
						<option value="岩手県">岩手県</option>
						<option value="宮城県">宮城県</option>
						<option value="秋田県">秋田県</option>
						<option value="山形県">山形県</option>
						<option value="福島県">福島県</option>
						<option value="茨城県">茨城県</option>
						<option value="栃木県">栃木県</option>
						<option value="群馬県">群馬県</option>
						<option value="埼玉県">埼玉県</option>
						<option value="千葉県">千葉県</option>
						<option value="東京都">東京都</option>
						<option value="神奈川県">神奈川県</option>
						<option value="新潟県">新潟県</option>
						<option value="富山県">富山県</option>
						<option value="石川県">石川県</option>
						<option value="福井県">福井県</option>
						<option value="山梨県">山梨県</option>
						<option value="長野県">長野県</option>
						<option value="岐阜県">岐阜県</option>
						<option value="静岡県">静岡県</option>
						<option value="愛知県">愛知県</option>
						<option value="三重県">三重県</option>
						<option value="滋賀県">滋賀県</option>
						<option value="京都府">京都府</option>
						<option value="大阪府">大阪府</option>
						<option value="兵庫県">兵庫県</option>
						<option value="奈良県">奈良県</option>
						<option value="和歌山県">和歌山県</option>
						<option value="鳥取県">鳥取県</option>
						<option value="島根県">島根県</option>
						<option value="岡山県">岡山県</option>
						<option value="広島県">広島県</option>
						<option value="山口県">山口県</option>
						<option value="徳島県">徳島県</option>
						<option value="香川県">香川県</option>
						<option value="愛媛県">愛媛県</option>
						<option value="高知県">高知県</option>
						<option value="福岡県">福岡県</option>
						<option value="佐賀県">佐賀県</option>
						<option value="長崎県">長崎県</option>
						<option value="熊本県">熊本県</option>
						<option value="大分県">大分県</option>
						<option value="宮崎県">宮崎県</option>
						<option value="鹿児島県">鹿児島県</option>
						<option value="沖縄県">沖縄県 </option>
			        </select>
				</div>	
			</div>
			<div class="form-group control-group">
				<label for="address2" class="col-sm-2 control-label">市区町村</label>
				<div class="col-sm-5 controls">
					<input type="text" class="form-control" name="address2" id="address2">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="address3" class="col-sm-2 control-label">町域</label>
				<div class="col-sm-5 controls">
					<input type="text" class="form-control" name="address3" id="address3">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="address4" class="col-sm-2 control-label">建物名 お部屋番号</label>
				<div class="col-sm-5 controls">
					<input type="text" class="form-control" name="address4" id="address4">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="checkread" class="col-sm-2 control-label"></label>
				<div class="col-sm-5 controls">
					<input type="checkbox" class="" name="checkread" id="checkread">
					個人情報の取り扱いについて同意して送信する
				</div>
			</div>
									
			

			</fieldset>
			<div class="form-actions text-center margin-bottom-20">
			  <button type="submit" class="btn btn-primary">次へ</button>
			  <button type="reset" class="btn">リセット</button>
			</div>
		</form>
			




		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>