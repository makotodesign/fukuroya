<?php
$size_list=array(
"default"=>"選択して下さい",
"LS"=>"L:高さスタンダード",	
"LT"=>"L:高さトール",	
"MS"=>"M:高さスタンダード",	
"MT"=>"M:高さトール",	
"SS"=>"S:高さスタンダード",
"ST"=>"S:高さトール",	
);
$basecolor_list=array(
"default"=>"--選択",
"white"=>"無地",
"Dic003"=>"Dic003",
"Dic009"=>"Dic009",
"Dic016"=>"Dic016",
"Dic021"=>"Dic021",
"Dic032"=>"Dic032",
"Dic051"=>"Dic051",
"Dic080"=>"Dic080",
"Dic144"=>"Dic144",
);
$fontcolor_list=array(
"default"=>"--選択",
"black"=>"黒",
"white"=>"白",
"Dic003"=>"Dic003",
"Dic009"=>"Dic009",
"Dic016"=>"Dic016",
"Dic021"=>"Dic021",
"Dic032"=>"Dic032",
"Dic051"=>"Dic051",
"Dic080"=>"Dic080",
"Dic144"=>"Dic144",
);
$color_hex=array(
"black"=>"#000",
"white"=>"#fff",
"Dic003"=>"#FDD2E5",
"Dic009"=>"#FFEA98",
"Dic016"=>"#84D7CB",
"Dic021"=>"#B5DCF2",
"Dic032"=>"#FFD78C",
"Dic051"=>"#FF686C",
"Dic080"=>"#FF4220",
"Dic144"=>"#3E63B4",
);
$fontfamily_list1=array(
"mincho"=>"明朝",
"gothic"=>"ゴシック",
"mplus-thin"=>"mplus-thin",
"mplus-light"=>"mplus-light",
"mplus-regular"=>"mplus-regular",
"mplus-bold"=>"mplus-bold",
"hiraginoMaru"=>"ヒラギノ丸ゴ Pro",
"hannari"=>"はんなり明朝"
);
$fontfamily_list2=array(
"ArialBlack"=>"ArialBlack",
"TimesNewRoman"=>"TimesNewRoman",
"CourierNew"=>"Courier New",
"Helvetica"=>"Helvetica",
"Marvel"=>"Marvel",
"Oswald"=>"Oswald",
"GreatVibes"=>"GreatVibes",
"PoiretOne"=>"PoiretOne",
"PermanentMarker"=>"PermanentMarker"
);
$align1=array('left','center','right');
require_once('header.php');
// print_r($_POST['back_l_s2']);
?>
    <div id="load" class="load">
    	<p><img src="img/icon/load.gif" height="150" width="150"><br>loading</p>
    </div>
    <main class="conatact_main container peage-k-order-main">
    <form action="page-k-order2.php" class="form" id="kantan" method="post">
   		<div class="page-header">
   			<div class="row">
   				<button id="k-order-topbtn1" class="btn btn-success no-point" type="button"> かんたんデザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn2" class="btn btn-default no-point" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn3" class="btn btn-default no-point" type="button"> ご注文情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn4" class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn5" class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn6" class="btn btn-default no-point" type="button"> ご注文手続き確定 </button>
   			</div>

   			<div class="row">
				<h2 class="f-pop f-color1 text-center rem3">簡単に、あなただけの紙袋をデザインしてみましょう！</h2>
			</div>
		</div>
		<div class="ctrl col-md-3 bg-primary clearfix">
		
			<h3>サイズ&sdot;紙色&sdot;文字色</h3>
				<div class="row">
					
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label" for="size">サイズ</label>
							<select id="size" name="size" class="form-control input-sm">
							<?php 
							foreach ($size_list as $key => $value) {
								if($key==$_POST['back_size']){
									echo "<option id='bag-size-select' class='bag-size' value='$key' selected>".$value."</option>";
								}else{
									echo "<option class='bag_size' value='$key'>".$value."</option>";
								}
							}?>
							</select>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="control-label" for="basecolor">印刷色</label>
							<select id="basecolor" name="basecolor" class="form-control input-sm">
							<?php
							foreach ($basecolor_list as $key => $value) {
								if($key==$_POST['back_basecolor']){
									echo "<option class='$key basecolor_select' value='$key' selected>$value</option>";
								}else{
									echo "<option class='$key basecolor_select' value='$key'>$value</option>";
								}
							}
							?>
							</select>
						</div>
					</div>
					<div class="col-xs-6">
							<div class="form-group">
								<label for="fontcolor1">文字色</label>
								<select id="fontcolor1" name="fontcolor1" class="form-control input-sm">
								<?php								
								foreach ($fontcolor_list as $key => $value) {
									if($key==$_POST['back_fontcolor1']){
									echo "<option class='$key fontcolor1_select' value='$key' selected>$value</option>";	
									}else{
									echo "<option class='$key fontcolor1_select' value='$key'>$value</option>";
									}
								}
								?>
								</select>
						
							</div>
						</div>
				</div>	
				<h3><i class="fa fa-pencil-square-o"></i>&nbsp;&nbsp;文字入力1</h3>

				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label class="control-label">文字をこちらに書いてください</label>
							<textarea class="form-control input-sm" name="title1" id="input-title1" placeholder="文字を入力してください。複数行入力可能" required><?php 
								if(isset($_POST['back_title1'])&&$_POST['back_title1']!=''&&$_POST['back_title1']!='\n'):
									$back_title=ltrim($_POST['back_title1'],'\n');
									echo $back_title; 
								endif;
								

							?></textarea>
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
								  <?php
								  foreach ($fontfamily_list1 as $key => $value) {
								  	if($key==$_POST['back_fontfamily1']){
								  		echo "<option class='$key fontfamily1' value='$key' selected>$value</option>";
								  	}else{
								  		echo "<option class='$key fontfamily1' value='$key'>$value</option>";
								  	}
								  }
								  ?>
								  </OPTGROUP>								  
								  <OPTGROUP label="欧文フォント">
								  <?php
								  foreach ($fontfamily_list2 as $key => $value) {
								  	if($key==$_POST['back_fontfamily1']){
								  		echo "<option class='$key fontfamily1' value='$key' selected>$value</option>";
								  	}else{
								  		echo "<option class='$key fontfamily1' value='$key'>$value</option>";
								  	}
								  }
								  ?>
								  </OPTGROUP>
					  		
								</select>
							</div>
						</div>
						<div class="col-xs-6">	
							<div class="form-group">
								<label class="control-label">文字サイズ</label>
								<input type="range" id="fontsize1" name="fontsize1" class="form-control　input-sm" min="100" max="800" step="5" value="<?php if(isset($_POST['back_fontsize1'])){echo $_POST['back_fontsize1'];}else{echo '150';}  ?>"/>
							</div>
						</div>
					</div>	
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label class="letter_spacing">文字間</label>
							<input type="range" id="letter_spacing1" name="letter_spacing1" class="form-control　input-sm" min="0.01" max="1.8" step="0.05" value="<?php if(isset($_POST['back_l_s1'])){echo $_POST['back_l_s1'];}else{echo '0.05';}  ?>"/>
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label class="line_height1">行間</label>
							<input type="range" id="line_height1" name="line_height1" class="form-control　input-sm" min="0.7" max="2.8" step="0.1" value="<?php if(isset($_POST['back_l_h1'])){echo $_POST['back_l_h1'];}else{echo '1.3';}  ?>"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
						<label >行揃え</label>&nbsp;&nbsp;
							<?php
								foreach ($align1 as $key => $value) {
									if(isset($_POST['back_align1'])){
										if($_POST['back_align1']==$value){
											echo "<label class='radio-inline'><input type='radio' name='align1' value='$value' checked><i class='fa fa-align-$value'></i></label>";

										}else{
											echo "<label class='radio-inline'><input type='radio' name='align1' value='$value'><i class='fa fa-align-$value'></i></label>";
										}
								
									}else{
										echo "<label class='radio-inline'><input type='radio' name='align1' value='$value'><i class='fa fa-align-$value'></i></label>";
									}
									
								}
							?>

						
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-xs-5">
							<div class="form-group">
								<label class="outline1" for="outline1" title="チェック→有効 チェック外す→無効">
								<?php
								if(isset($_POST['back_border1_bool'])){
									if($_POST['back_border1_bool']=='true'){
										echo "<input type='checkbox' name='outline1' id='outline1' value='true' checked>";
									}else{
										echo "<input type='checkbox' name='outline1' id='outline1' value='true'>";
									}
								}else{
									echo "<input type='checkbox' name='outline1' id='outline1' value='true'>";
								}
								   
								 ?>
								  囲み枠
								</label>
							</div>
						</div>
						<div class="col-xs-7">
							<div class="form-group">
							<label for="outline1_bwidth">囲み枠線幅</label>
							<input type="range" id="outline1_bwidth" name="outline1_bwidth" class="form-control　input-sm" min="1" max="10" step="1" value="<?php if(isset($_POST['back_border1_width'])){echo $_POST['back_border1_width'];}else{echo '1';}  ?>" />
							</div>
						</div>	
				</div>
				<div class="row">
					<div class="col-xs-5">
						<div class="form-group">
							<label id="input_t1_bg_ravel" for="input_t1_bg" title="チェック→有効 チェック外す→無効">
							<?php 
								if(isset($_POST['back_bg_bool'])){
									if($_POST['back_bg_bool']=='true'){
										echo "<input type='checkbox' name='input_t1_bg' id='input_t1_bg' value='true' checked> ";
									}else{
										echo "<input type='checkbox' name='input_t1_bg' id='input_t1_bg' value='true'> ";		
									}

								}else{
									echo "<input type='checkbox' name='input_t1_bg' id='input_t1_bg' value='true'> ";	
								}

							?>
							 背景枠
							</label>
						</div>
					</div>
					<div class="col-xs-7">
						<div class="form-group">
						<label for="input_t1_bgsize">背景枠サイズ</label>
						<input type="range" id="input_t1_bgsize" name="input_t1_bgsize" class="form-control　input-sm" min="1" max="10" step="1" value="<?php if(isset($_POST['back_bg_padding'])){echo $_POST['back_bg_padding'];}else{echo "1";}?>" />

						
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<h3><label class="checkbox-inline">
							<?php
							if(isset($_POST['back_area2_check'])){
								if($_POST['back_area2_check']=='areaadd1'){
									echo '<input type="checkbox" id="areaadd1" name="areaadd1" value="areaadd1" checked>';		
								}else{
									echo '<input type="checkbox" id="areaadd1" name="areaadd1" value="areaadd1">'; 
								}
							}else{
								echo '<input type="checkbox" id="areaadd1" name="areaadd1" value="areaadd1">';
							}	
							?>
							   文字入力エリアを追加
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
								<textarea class="form-control input-sm" name="title2" id="input-title2" placeholder="追加入力（複数行入力可能）"><?php 
								if(isset($_POST['back_title2'])&&$_POST['back_title2']!=''):
								
									echo $_POST['back_title2']; 
								endif;
								

								?></textarea>
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
								  <?php
								  foreach ($fontfamily_list1 as $key => $value) {
								  	if($key==$_POST['back_fontfamily2']){
								  		echo "<option class='$key fontfamily1' value='$key' selected>$value</option>";
								  	}else{
								  		echo "<option class='$key fontfamily1' value='$key'>$value</option>";
								  	}
								  }
								  ?>
								  </OPTGROUP>								  
								  <OPTGROUP label="欧文フォント">
								  <?php
								  foreach ($fontfamily_list2 as $key => $value) {
								  	if($key==$_POST['back_fontfamily2']){
								  		echo "<option class='$key fontfamily2' value='$key' selected>$value</option>";
								  	}else{
								  		echo "<option class='$key fontfamily2' value='$key'>$value</option>";
								  	}
								  }
								  ?>
								  </OPTGROUP>
					  		
					  		
								</select>
							</div>
						</div>
						<div class="col-xs-6">	
							<div class="form-group">
								<label class="control-label">文字サイズ</label>
								<input type="range" id="fontsize2" name="fontsize2" class="form-control　input-sm" min="50" max="800" step="5" value="<?php
									if(isset($_POST['back_fontsize2'])){
										echo $_POST['back_fontsize2'];
									}else{
										echo "100";
									}	
								 ?>"/>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<label class="letter_spacing2">文字間</label>
								<input type="range" id="letter_spacing2" name="letter_spacing2" class="form-control　input-sm" min="0.01" max="1.8" step="0.05" value="<?php
								if(isset($_POST['back_l_s2'])){
									echo $_POST['back_l_s2'];
								}else{
									echo "0.05";
								}

								 ?>"/>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label class="line_height2">行間</label>
								<input type="range" id="line_height2" name="line_height2" class="form-control　input-sm" min="0.7" max="2.8" step="0.1" value="<?php
								if(isset($_POST['back_l_h2'])){
									echo $_POST['back_l_h2'];
								}else{
									echo "1.3";
								}

								 ?>"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
							<label >行揃え</label>&nbsp;&nbsp;
								<?php
								foreach ($align1 as $key => $value) {
									if(isset($_POST['back_align2'])){
										if($_POST['back_align2']==$value){
											echo "<label class='radio-inline'><input type='radio' name='align2' value='$value' checked><i class='fa fa-align-$value'></i></label>";
										}else{
											echo "<label class='radio-inline'><input type='radio' name='align2' value='$value'><i class='fa fa-align-$value'></i></label>";
										}
									}else{
										echo "<label class='radio-inline'><input type='radio' name='align2' value='$value'><i class='fa fa-align-$value'></i></label>";
									}
									
								}
							?>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="canvas col-md-7">
			<div id="bagwrap">
				<div class="handle">
					<?php include('svg/handle.svg'); ?>
				</div>
				<div class="bagbody">
					<div class="bgpoint">
						<p id="k-title1" class="k-title" style="
						font-size:<?php if(isset($_POST['back_fontsize1'])){echo $_POST['back_fontsize1'];}; ?>%;
						top:<?php if(isset($_POST['back_top1'])){echo $_POST['back_top1'].'px';}; ?>;
						left:<?php if(isset($_POST['back_left1'])){echo $_POST['back_left1'].'px';}; ?>;
						letter-spacing:<?php if(isset($_POST['back_l_s1'])){echo $_POST['back_l_s1'];}; ?>rem;
						line-height:<?php if(isset($_POST['back_l_h1'])){echo $_POST['back_l_h1'];}; ?>;
						color:<?php if(isset($_POST['back_fontcolor1'])){echo $color_hex[$_POST['back_fontcolor1']];}; ?>;
						<?php
						if(isset($_POST['back_bg_bool'])){
							if($_POST['back_bg_bool']=='true'){					
							echo "background-color:{$color_hex[$_POST['back_fontcolor1']]};";
							echo "color:{$color_hex[$_POST['back_basecolor']]};";
							echo "padding:{$_POST['back_bg_padding']}%";
							}
						}?>
							">
						</p>
						<p id="k-title2" class="k-title" style="
						top:<?php if(isset($_POST['back_top2'])){echo $_POST['back_top2'].'px';}; ?>;
						left:<?php if(isset($_POST['back_left2'])){echo $_POST['back_left2'].'px';}; ?>;
						font-size:<?php if(isset($_POST['back_fontsize2'])){echo $_POST['back_fontsize2'];}; ?>%;
						letter-spacing:<?php if(isset($_POST['back_l_s2'])){echo $_POST['back_l_s2'];}; ?>rem;
						line-height:<?php if(isset($_POST['back_l_h2'])){echo $_POST['back_l_h2'];}; ?>;



						">							
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div id="k-o-submit" class="k-order-submit">
			<button type="submit" id="k-order-commit" class="btn btn-primary btn-lg">このデザインで<br>決定する</button>
			</div>
		</div>
		<input type="hidden" name="k-title1-top" id="k-title1-top" value="">
		<input type="hidden" name="k-title1-left" id="k-title1-left" value="">
		<input type="hidden" name="k-title2-top" id="k-title2-top" value="">
		<input type="hidden" name="k-title2-left" id="k-title2-left" value="">
		<input type="hidden" name="k-title1-mod" id="k-title1-mod" value="">
		<input type="hidden" name="k-title2-mod" id="k-title2-mod" value="">
	</form>
    </main>
  </div>
<?php require_once('footer.php'); ?>