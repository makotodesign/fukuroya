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
			<form action="" class="form" id="kantan" method="post">
			<h3>紙袋を選ぶ</h3>
				<div class="row">
					
					<div class="col-xs-7">
						<div class="form-group">
							<label class="control-label" for="size">サイズ</label>
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
							<label class="control-label" for="basecolor">印刷色</label>
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
				<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label class="fontcolor1" for="basecolor">文字色</label>
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
								<label class="fontfamily1" for="basecolor"><i class="fa fa-font"></i>字体</label>
								<select id="fontfamily1" name="fontfamily1" class="form-control input-sm">
								  <option>選択---</option>
								  <OPTGROUP label="日本語フォント">
								   <option value="明朝体">明朝</option>
								   <option value="ゴシック">ゴシック</option>
								   <option value="mplus-thin">mplus-thin</option>
								   <option value="mplus-light">mplus-light</option>
								   <option value="mplus-regular">mplus-regular</option>
								   <option value="mplus-bold">mplus-bold</option>
								   <option value="はんなり明朝">はんなり明朝</option>
								  </OPTGROUP>
								  <OPTGROUP label="欧文フォント">
								  <option value="ArialBlack">ArialBlack</option>
								  </OPTGROUP>
					  		
								</select>
							</div>
						</div>
					</div>	
				<div class="row">
					<div class="col-xs-6">	
						<div class="form-group">
							<label class="control-label">大きさ<span id="size1">200</span>%</label>
							<input type="range" id="fontsize1" name="fontsize1" class="form-control　input-sm" min="100" max="800" step="5" value="200"/>
						</div>
					</div>
					<div class="col-xs-6">
							<div class="form-group">
								<label class="letter_spacing">文字間</label>
								<input type="range" id="letter_spacing1" name="letter_spacing1" class="form-control　input-sm" min="0.01" max="1.8" step="0.05" value="0.05"/>
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