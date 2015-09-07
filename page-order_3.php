<?php
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');
$select_grade=h($_POST['select_grade']);
$select_size=h($_POST['select_size']);
$select_qty=h($_POST['select_qty']);
$print_or_none=h($_POST['radio_type']);
$_SESSION['grade']=$select_grade;
$_SESSION['size']=$select_size;
$_SESSION['qty']=$select_qty;
$_SESSION['print_or_none']=$print_or_none;



function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
require_once('header.php');
?>
    <main class="conatact_main container">
   		<div class="page-header">
   			<div id="orderinfo" class="row">
   				<button class="btn btn-default no-point" type="button"> ご注文内容入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> 原稿ファイルアップロード <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point" type="button"> ご注文手続き完了 </button>


   			</div>

   			<div class="row">
				<h2>お客様情報を入力して下さい</h2>
			</div>
		</div>
		<div class="formbox col-sm-7">
			<form action="page-order_4.php" method="POST" id="orderform2" class="form-horizontal" novalidate="novalidate">
		<fieldset>

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
				<label for="Kana" class="col-sm-2 control-label">ヨミガナ</label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="Kana" id="Kana" placeholder="氏名:カナ">
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
					<input type="tel" class="form-control" name="tel1" id="tel1" placeholder="電話番号:必須">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="tel2" class="col-sm-2 control-label">FAX番号</label>
				<div class="col-sm-5 controls">
					<input type="tel" class="form-control" name="tel2" id="tel2">
				</div>
			</div>
			<h3 class="margin-bottom-20">お届け先情報</h3>
			<div class="form-group control-group">
				<label for="sendplace" class="col-sm-2 control-label"><small>お届け先宛名</small></label>
				<div class="col-sm-10 controls">
					<input type="text" class="form-control" name="sendplace" id="sendplace" placeholder="お届け先が宛名が上記と違う場合のみ記入">
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
				<div class="col-sm-3 controls">
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
				<div class="col-sm-6 controls">
					<input type="text" class="form-control" name="address2" id="address2">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="address3" class="col-sm-2 control-label">町域</label>
				<div class="col-sm-6 controls">
					<input type="text" class="form-control" name="address3" id="address3">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="address4" class="col-sm-2 control-label">建物名 お部屋番号</label>
				<div class="col-sm-6 controls">
					<input type="text" class="form-control" name="address4" id="address4">
				</div>
			</div>
			<div class="form-group control-group">
				<label for="checkread" class="col-sm-2 control-label"></label>
				<div class="col-sm-8 controls">
					<input type="checkbox" class="" name="checkread" id="checkread">
					<a href="./page-privacy.php" target="blank">個人情報の取り扱い</a>について同意して送信する
				</div>
			</div>
			<input type="hidden" name="time" id="time">
									
			

			</fieldset>
			<div class="form-actions text-center margin-bottom-20">
			  <button type="submit" class="btn btn-primary">次へ</button>
			  <button type="reset" class="btn">リセット</button>
			  <button type="submit" class="btn btn-default back">戻る</button>
			</div>
		</form>
	

		</div>
		<div class="submit_check col-sm-5">
			<div class="panel panel-primary">
				<div class="panel-heading"><h3 class="panel-title">ご注文内容確認</h3></div>
				<div class="panel-body">
					<table class="table">
						
						<tbody>
							<tr>
								<th>注文商品グレード</th>
								<td><?php echo $select_grade ?></td>
							</tr>
							<tr>
								<th>商品サイズ</th>
								<td><?php echo $select_size ?></td>
							</tr>
							<tr>
								<th>部数</th>
								<td><?php echo $select_qty ?></td>
							</tr>
							<tr>
								<th>印刷有・無</th>
								<td><?php echo $print_or_none ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>	

    </main>

  </div>
<?php require_once('footer.php')?>