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
			<h3 class="text-center">かんたんデザイン</h3>
			<form action="" class="form" id="kantan" method="post">
				<div class="row">
					<div class="col-xs-7">
						<div class="form-group">
							<label class="control-label" for="size">紙袋サイズ</label>
							<select id="size" name="size" class="form-control input-sm">
							  <option value="LS">L:高さスタンダード</option>
							  <option value="LT">L:高さトール</option>
							  <option value="MS">M:高さスタンダード</option>
							  <option value="MT">M:高さトール</option>
							  <option value="SS">S:高さスタンダード</option>
							  <option value="ST">S:高さトール</option>
							</select>
						</div>
					</div>
					<div class="col-xs-5">
						<div class="form-group">
							<label class="control-label" for="basecolor">紙印刷色</label>
							<select id="basecolor" name="basecolor" class="form-control input-sm">
							<option value="white">無地</option>
							  <option class="dic003" value="Dic003">Dic003</option>
							  <option class="dic009" value="Dic009">Dic009</option>
							  <option class="dic016" value="Dic016">Dic016</option>
							  <option class="dic021" value="Dic021">Dic021</option>
							  <option class="dic032" value="Dic032">Dic032</option>
							  <option class="dic051" value="Dic051">Dic051</option>
							  <option class="dic080" value="Dic080">Dic080</option>
							  <option class="dic144" value="Dic144">Dic144</option>

							</select>
						</div>
					</div>
				</div>
					<div class="form-group">
						<label class="control-label">文字1入力<br><small>入力後ドラッグして移動できます</small></label>
						<input type="text" class="form-control input-sm" name="title1" id="input-title1" placeholder="お店の名前を入力してください">
					</div>
					<div class="form-group">
						<label class="control-label">文字1の大きさ<span id="size1">200</span>%</label>
						<input type="range" id="fontsize1" class="form-control　input-sm" min="100" max="800" step="5" value="200"/>
					</div>
					<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label class="fontcolor1" for="basecolor">文字1の色</label>
								<select id="fontcolor1" name="fontcolor1" class="form-control input-sm">
								　<option>選択---</option>	
								  <option class="black" value="black">黒</option>
								  <option class="white" value="white">白</option>
					  			  <option class="dic003" value="Dic003">Dic003</option>
								  <option class="dic009" value="Dic009">Dic009</option>
								  <option class="dic016" value="Dic016">Dic016</option>
								  <option class="dic021" value="Dic021">Dic021</option>
								  <option class="dic032" value="Dic032">Dic032</option>
								  <option class="dic051" value="Dic051">Dic051</option>
								  <option class="dic080" value="Dic080">Dic080</option>
								  <option class="dic144" value="Dic144">Dic144</option>
								</select>
						
							</div>
						</div>
						<div class="col-xs-7">
							<div class="form-group">
								<label class="fontfamily1" for="basecolor">文字1の字体</label>
								<select id="fontfamily1" name="fontfamily1" class="form-control input-sm">
								  <option>選択---</option>
								  <OPTGROUP label="日本語フォント">
								   <option value="明朝体">明朝</option>
								   <option value="ゴシック">ゴシック</option>
								  </OPTGROUP>
								  <OPTGROUP label="欧文フォント">
								  <option value="ArialBlack">ArialBlack</option>
								  </OPTGROUP>
					  		
								</select>
							</div>
						</div>
					</div>						

			</form>

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