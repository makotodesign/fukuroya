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
		<div class="ctrl col-md-3 bg-primary clearfix">
			<form action="" class="form" id="kantan" method="post">
			<h3>サイズ&sdot;紙色&sdot;文字色</h3>
				<div class="row">
					
					<div class="col-xs-12">
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

				</div>

				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label" for="basecolor">印刷色</label>
							<select id="basecolor" name="basecolor" class="form-control input-sm">
							<option value="white" selected>無地</option>
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
					<div class="col-xs-6">
							<div class="form-group">
								<label for="fontcolor1">文字色</label>
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
				</div>	
				<h3><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;文字入力1</h3>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label">文字をこちらに書いてください</label>
							<textarea class="form-control input-sm" name="title1" id="input-title1" placeholder="文字を入力してください。複数行入力可能"></textarea>
							<small>入力後ドラッグして移動できます</small>
						</div>
					</div>
				</div>
	
				<div class="row">
						
						<div class="col-xs-6">
							<div class="form-group">
								<label class="fontfamily1" for="basecolor"><i class="fa fa-font"></i>字体</label>
								<select id="fontfamily1" name="fontfamily1" class="form-control input-sm">
								  <option>選択---</option>
								  <OPTGROUP label="和文フォント">
								   <option class="mincho" value="明朝体">明朝</option>
								   <option class="gothic" value="ゴシック">ゴシック</option>
								   <option class="mplus-thin" value="mplus-thin">mplus-thin</option>
								   <option class="mplus-light" value="mplus-light">mplus-light</option>
								   <option class="mplus-regular" value="mplus-regular">mplus-regular</option>
								   <option class="mplus-bold" value="mplus-bold">mplus-bold</option>
								   <option class="hiraginoMaru" value="hiraginoMaru">ヒラギノ丸ゴ Pro</option>
								   <option class="hannari" value="はんなり明朝">はんなり明朝</option>
								  </OPTGROUP>
								  <OPTGROUP label="欧文フォント">
								  <option class="ArialBlack" value="ArialBlack">ArialBlack</option>
								  <option class="TimesNewRoman" value="TimesNewRoman">TimesNewRoman</option>
								  <option class="CourierNew" value="CourierNew">Courier New</option>
								  <option class="Helvetica" value="Helvetica">Helvetica</option>
								  <option class="Marvel" value="Marvel">Marvel</option>
								  <option class="Oswald" value="Oswald">Oswald</option>
								  <option class="GreatVibes" value="GreatVibes">GreatVibes</option>
								  <option class="PoiretOne" value="PoiretOne">PoiretOne</option>
								  <option class="PermanentMarker" value="PermanentMarker">PermanentMarker</option>
								  </OPTGROUP>
					  		
								</select>
							</div>
						</div>
						<div class="col-xs-6">	
							<div class="form-group">
								<label class="control-label">文字サイズ</label>
								<input type="range" id="fontsize1" name="fontsize1" class="form-control　input-sm" min="100" max="800" step="5" value="200"/>
							</div>
						</div>
					</div>	
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="letter_spacing">文字間</label>
							<input type="range" id="letter_spacing1" name="letter_spacing1" class="form-control　input-sm" min="0.01" max="1.8" step="0.05" value="0.05"/>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="line_height1">行間</label>
							<input type="range" id="line_height1" name="line_height1" class="form-control　input-sm" min="0.7" max="2.8" step="0.1" value="1.3"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						<label >行揃え</label>&nbsp;&nbsp;
							<label class="radio-inline">
							  <input type="radio" name="align1" value="left"><i class="fa fa-align-left"></i>
							</label>
							<label class="radio-inline">
							  <input type="radio" name="align1" value="center"><i class="fa fa-align-center"></i>
							</label>
							<label class="radio-inline">
							  <input type="radio" name="align1" value="right"><i class="fa fa-align-right"></i>
							</label>
						
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label class="outline1" for="outline1">
								  <input type="checkbox" name="outline1" id="outline1" value="true"> 囲み枠
								</label>
							</div>
						</div>
						<div class="col-xs-7">
							<div class="form-group">
							<label for="outline1_bwidth">囲み枠線幅</label>
							<input type="range" id="outline1_bwidth" name="outline1_bwidth" class="form-control　input-sm" min="1" max="10" step="1" value="1" />
							</div>
						</div>	
				</div>
				<div class="row">
					<div class="col-xs-5">
						<div class="form-group">
							<label for="input_t1_bg">
							  <input type="checkbox" name="input_t1_bg" id="input_t1_bg" value="true"> 背景枠
							</label>
						</div>
					</div>
					<div class="col-xs-7">
						<div class="form-group">
						<label for="input_t1_bgsize">背景枠サイズ</label>
						<input type="range" id="input_t1_bgsize" name="input_t1_bgsize" class="form-control　input-sm" min="1" max="10" step="1" value="1" />
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<h3><label class="checkbox-inline">
							  <input type="checkbox" id="areaadd1" value="areaadd1"> 文字入力エリアを追加
							</label></h3>
						</div>
					</div>
				</div>	
				<div id="k-input2">
					<h3><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;文字入力2</h3>

					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label class="control-labe2">文字をこちらに書いてください</label>
								<textarea class="form-control input-sm" name="title2" id="input-title2" placeholder="追加入力（複数行入力可能）"></textarea>
								<small>改行は反映されます</small>
							</div>
						</div>
					</div>
		
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label class="fontfamily2" for="basecolor"><i class="fa fa-font"></i>字体</label>
								<select id="fontfamily2" name="fontfamily2" class="form-control input-sm">
								  <option>選択---</option>
								  <OPTGROUP label="和文フォント">
								   <option class="mincho" value="明朝体">明朝</option>
								   <option class="gothic" value="ゴシック">ゴシック</option>
								   <option class="mplus-thin" value="mplus-thin">mplus-thin</option>
								   <option class="mplus-light" value="mplus-light">mplus-light</option>
								   <option class="mplus-regular" value="mplus-regular">mplus-regular</option>
								   <option class="mplus-bold" value="mplus-bold">mplus-bold</option>
								   <option class="hiraginoMaru" value="hiraginoMaru">ヒラギノ丸ゴ Pro</option>
								   <option class="hannari" value="はんなり明朝">はんなり明朝</option>
								  </OPTGROUP>
								  <OPTGROUP label="欧文フォント">
								  <option class="ArialBlack" value="ArialBlack">ArialBlack</option>
								  <option class="TimesNewRoman" value="TimesNewRoman">TimesNewRoman</option>
								  <option class="CourierNew" value="CourierNew">Courier New</option>
								  <option class="Helvetica" value="Helvetica">Helvetica</option>
								  <option class="Marvel" value="Marvel">Marvel</option>
								  <option class="Oswald" value="Oswald">Oswald</option>
								  <option class="GreatVibes" value="GreatVibes">GreatVibes</option>
								  <option class="PoiretOne" value="PoiretOne">PoiretOne</option>
								  <option class="PermanentMarker" value="PermanentMarker">PermanentMarker</option>
								  </OPTGROUP>
					  		
								</select>
							</div>
						</div>
						<div class="col-xs-6">	
							<div class="form-group">
								<label class="control-label">文字サイズ</label>
								<input type="range" id="fontsize2" name="fontsize2" class="form-control　input-sm" min="50" max="800" step="5" value="100"/>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label class="letter_spacing2">文字間</label>
								<input type="range" id="letter_spacing2" name="letter_spacing2" class="form-control　input-sm" min="0.01" max="1.8" step="0.05" value="0.05"/>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label class="line_height2">行間</label>
								<input type="range" id="line_height2" name="line_height2" class="form-control　input-sm" min="0.7" max="2.8" step="0.1" value="1.3"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
							<label >行揃え</label>&nbsp;&nbsp;
								<label class="radio-inline">
								  <input type="radio" name="align2" value="left"><i class="fa fa-align-left"></i>
								</label>
								<label class="radio-inline">
								  <input type="radio" name="align2" value="center"><i class="fa fa-align-center"></i>
								</label>
								<label class="radio-inline">
								  <input type="radio" name="align2" value="right"><i class="fa fa-align-right"></i>
								</label>
							</div>
						</div>
					</div>
					
					



				</div>


			</form>

		</div>
		<div class="canvas col-md-9">
			<div id="bagwrap">
				<div class="handle">
					<?php include('svg/handle.svg'); ?>
				</div>
				<div class="bagbody">
					<div class="bgpoint">
						<p id="k-title1" class="k-title">文字スペース1</p>
						<p id="k-title2" class="k-title">文字スペース2</p>
					</div>
				</div>
			</div>
			

		</div>

		

    </main>


  </div>
<?php require_once('footer.php')?>