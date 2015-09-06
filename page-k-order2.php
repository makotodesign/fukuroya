<?php
session_start();
header('Expires: -1');
header('Cache-Control:');
header('Pragma:');
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
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
$size_list=array(
"default"=>"選択して下さい",
"LS"=>"L:高さスタンダード",	
"LT"=>"L:高さトール",	
"MS"=>"M:高さスタンダード",	
"MT"=>"M:高さトール",	
"SS"=>"S:高さスタンダード",
"ST"=>"S:高さトール",	
);
$size=h($_POST['size']);
$basecolor=h($_POST['basecolor']);
$fontcolor1=h($_POST['fontcolor1']);
$t1_top=h($_POST['k-title1-top']);
$t1_left=h($_POST['k-title1-left']);
$t2_top=h($_POST['k-title1-top']);
$t2_left=h($_POST['k-title1-left']);
$title1=strip_tags($_POST['k-title1-mod'],'<br>');
$fontfamily1=h($_POST['fontfamily1']);
$t1_size=h($_POST['fontsize1']);
$t1_l_s=h($_POST['letter_spacing1']);
$t1_l_h=h($_POST['line_height1']);
$t1_align=h($_POST['align1']);
$t1_border=array(
"bool"=>h($_POST['outline1']),
"width"=>h($_POST['outline1_bwidth'])
	);
$t1_bg=array(
"bool"=>h($_POST['input_t1_bg']),
"padding"=>h($_POST['input_t1_bgsize'])
	);

// 文字エリア2
$area2=array(
"add"=>h($_POST['areaadd1']),
"title"=>strip_tags($_POST['k-title2-mod'],'<br>'),
"top"=>h($_POST['k-title2-top']),
"left"=>h($_POST['k-title2-left']),
"color"=>$color_hex[h($_POST['fontcolor1'])],
"fontfamily"=>h($_POST['fontfamily2']),
"align"=>h($_POST['align2']),
"size"=>h($_POST['fontsize2']),
"space"=>h($_POST['letter_spacing2']),
"lineheight"=>h($_POST['line_height2'])
);
// session
$_SESSION["k-order-bagdata"]=array(
	"size"=>$size,
	"basecolor"=>$basecolor,
	"fontcolor"=>$fontcolor1,
	"title1"=>$title1,
	"t1_top"=>$t1_top,
	"t1_left"=>$t1_left,
	"t1_fontfamily"=>$fontfamily1,
	"t1_size"=>$t1_size,
	"t1_l_s"=>$t1_l_s,
	"t1_l_h"=>$t1_l_h,
	"t1_align"=>$t1_align,
	"t1_border_bool"=>$t1_border['bool'],
	"t1_border_width"=>$t1_border['width'],
	"t1_bg_bool"=>$t1_bg['bool'],
	"t1_bg_padding"=>$t1_bg['padding'],
	"title2"=>$area2['title'],
	"t2_top"=>$t2_top,
	"t2_left"=>$t2_left,
	"t2_size"=>$area2['size'],
	"t2_l_s"=>$area2['space'],
	"t2_l_h"=>$area2['lineheight'],
	"t2_align"=>$area2['align']
);
require_once('header.php');
?>   
	<div id="load" class="load">
    	<p><img src="img/icon/load.gif" height="150" width="150"><br>loading</p>
    </div>
    <main class="conatact_main container page-k-order-main relative">
  
   		<div id="order2_header" class="page-header hidden-xs hidden-sm">
   				<button id="k-order-topbtn1" class="btn btn-default no-point" type="button"> 簡単デザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn2" class="btn btn-success no-point" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn3" class="btn btn-default no-point" type="button"> ご注文情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn4" class="btn btn-default no-point" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn5" class="btn btn-default no-point" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button id="k-order-topbtn6" class="btn btn-default no-point" type="button"> ご注文手続き完了 </button>
		</div>
		<div class="container clearfix">

			<div class="col-md-1">
				<h2 class="bg-popred roundtitle rt2">デザインを確認しましょう！</h2>
			</div>
			<div class="col-md-11">
				<?php include('bagwrap.php');?>
				<!-- <div id="bagwrap" class="margin-bottom-40">
					<div class="handle <?php 
						if($size=='SS'|| $size=='ST'):
							echo 'small_handle';
						else:
							echo '';
						endif;?>">
						<?php include('svg/handle.svg'); ?>
					</div>
					<div class="bagbody <?php echo $size; ?>">
						<div class="bgpoint prev-<?php echo $basecolor; ?>">
							<p id="k-title1-prev" class="k-title-prev font1-<?php echo $fontcolor1; ?> prev-<?php echo $fontfamily1; ?>" 
							style="top:<?php echo $t1_top; ?>px;
							left:<?php echo $t1_left; ?>px;
							font-size:<?php echo $t1_size; ?>%;
							letter-spacing:<?php echo $t1_l_s; ?>rem;
							line-height:<?php echo $t1_l_h; ?>;
							text-align:<?php echo $t1_align; ?>;
							<?php
							if($t1_border['bool']==true){
							echo "border:{$t1_border['width']}px solid $color_hex[$fontcolor1];";
							echo "padding:2%;";	

							}
							if($t1_bg['bool']==true){
							echo "padding:{$t1_bg['padding']}%;";
							echo "background-color:{$color_hex[$fontcolor1]};";	
							echo "color:{$color_hex[$basecolor]};";

							}

							?>
							"><?php echo $title1;?></p>
							<p id="k-title2-prev" class="k-title-prev prev-<?php echo $area2['fontfamily'] ?>" style="<?php 
							if($area2['add']=='areaadd1'){
								echo "display:inline-block;";		
							}else{
								echo "display:none;"; 
							}?>
							left:<?php echo $area2['left']; ?>px;
							top:<?php echo $area2['top']; ?>px;
							color:<?php echo $area2['color']; ?>;
							text-align:<?php echo $area2['align']; ?>;
							font-size:<?php echo $area2['size']; ?>%;
							letter-spacing:<?php echo $area2['space']; ?>rem;
							line-height:<?php echo $area2['lineheight'] ?>;


							"><?php echo $area2['title']; ?></p>
						</div>
					</div>
				</div> -->
				<div class="text-center margin-bottom-40">
					<form method="post" action="page-k-order.php" class="inline-block">		
						<input type="hidden" name="back_title1" value="<?php $text=str_replace("<br>","\n",$title1); echo $text;?>">
						<input type="hidden" name="back_title1_br" value="<?php echo $title1; ?>">
						<input type="hidden" name="back_size" value="<?php echo $size; ?>">
						<input type="hidden" name="back_basecolor" value="<?php echo $basecolor; ?>">
						<input type="hidden" name="back_fontcolor1" value="<?php echo $fontcolor1; ?>">
						<input type="hidden" name="back_fontfamily1" value="<?php echo $fontfamily1; ?>">
						<input type="hidden" name="back_fontsize1" value="<?php echo $t1_size; ?>">
						<input type="hidden" name="back_top1" value="<?php echo $t1_top; ?>">
						<input type="hidden" name="back_left1" value="<?php echo $t1_left; ?>">
						<input type="hidden" name="back_l_s1" value="<?php echo $t1_l_s; ?>"> 
						<input type="hidden" name="back_l_h1" value="<?php echo $t1_l_h; ?>"> 
						<input type="hidden" name="back_align1" value="<?php echo $t1_align; ?>"> 
						<input type="hidden" name="back_border1_bool" value="<?php echo $t1_border['bool'] ?>"> 
						<input type="hidden" name="back_border1_width" value="<?php echo $t1_border['width'] ?>">
						<input type="hidden" name="back_bg_bool" value="<?php echo $t1_bg['bool'] ?>"> 
						<input type="hidden" name="back_bg_padding" value="<?php echo $t1_bg['padding'] ?>"> 
						<input type="hidden" name="back_area2_check" value="<?php echo $area2['add'] ?>">
						<input type="hidden" name="back_title2" value="<?php $t2check=ltrim($area2['title'],'<br>'); $text2=str_replace("<br>","\n",$t2check); echo $text2;?>">
						<input type="hidden" name="back_top2" value="<?php echo $area2['top']; ?>">
						<input type="hidden" name="back_left2" value="<?php echo $area2['left']; ?>">
						<input type="hidden" name="back_fontfamily2" value="<?php echo $area2['fontfamily']; ?>">
						<input type="hidden" name="back_fontsize2" value="<?php echo $area2['size']; ?>">
						<input type="hidden" name="back_l_s2" value="<?php echo $area2['space']; ?>"> 
						<input type="hidden" name="back_l_h2" value="<?php echo $area2['lineheight']; ?>">
						<input type="hidden" name="back_align2" value="<?php echo $area2['align']; ?>">  

		  
						<button type="submit" id="k-order2-backbtn" class="btn btn-default btn-lg margin-bottom-20">簡単デザインに戻る</button>
					</form>

					<button type="button" id="k-order2-nextbtn" class="btn btn-primary btn-lg margin-bottom-20">注文情報を入力する</button>

				</div>

			</div>
		</div>
		<div class="k-order" id="k-orderbox1">
		<form action="page-k-order3.php" method="POST" id="k_orderform1" class="form-horizontal" novalidate="novalidate">
			<div id="k-order-sec1">
				<div class="col-md-1">
					<h2 class="bg-popgreen roundtitle rt2 relative z-2">注文情報を入力してください</h2>
				</div>
				<div class="col-md-10 col-mf-offset-2 big-padding-top k_form_wrap margin-bottom-40">
					<div class="formbox">
						<fieldset class="k-order-detail">
							<div class="col-sm-3 hidden-xs hidden-sm">
								<div class="k-order-icon1">
									<img src="img/svg/k-order-icon1.svg">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group control-group margin-bottom-30">
									<label for="k_select_grade" class="col-sm-4 control-label">注文商品グレード</label>
									<div class="col-sm-8 controls">
										<select id="k_select_grade" name="k_select_grade" class="form-control">
								          <option value="no">--選択して下さい</option>
								          <option value="エコノミー">エコノミー</option>
								          <option value="スタンダード">スタンダード</option>
								        </select>
									</div>	
								</div>
								<div class="form-group control-group margin-bottom-30">
									<label for="k_select_size" class="col-sm-4 control-label">商品サイズ</label>
									<div class="col-sm-8 controls">
										<p id="k_select_size" class="form-control">
										<?php foreach ($size_list as $key => $value):
											if($key==$size): 
												echo $value;

												endif;
											endforeach; ?>	
									    </p>
									</div>
								</div>
								<div class="form-group control-group margin-bottom-30">
									<label for="select_qty" class="col-sm-4 control-label">数量</label>
									<div class="col-sm-8 controls">
										<select id="k_select_qty" name="k_select_qty" class="form-control" >
								          <option value="no">--選択して下さい</option>
								          <script>
								          for(i=500;i<=10000;i=i+100){
								          	document.write('<option value="'+i+'部">'+i+'部</option>');
								          }

								          </script>
								        </select>
									</div>	
								</div>
							</div>
						</fieldset>									
					</div>				
				</div>
				<div class="text-center margin-bottom-40 clear">
					<button type="button" id="k-order2-backbtn2" class="btn btn-default btn-lg margin-bottom-20">デザイン確認に戻る</button>
					<button type="button" id="k-order2-nextbtn2" class="btn btn-primary btn-lg margin-bottom-20" disabled>お客様情報を入力する</button>
				</div>
				<p id="k-order-error1" class="k-order-error col-sm-4 col-sm-offset-4 alert alert-warning text-center" role="alert">注文商品グレード、数量を入力してください</p>
			</div>
		<div id="k-order-sec2" class="k-order-sec">
			<div id="k-order2-sec2title" class="col-md-1">
				<h2 class="bg-primary roundtitle rt1 relative z-2">お客様情報</h2>
			</div>
			<div id="k-order2-sec2body" class="col-md-10 col-mf-offset-2 big-padding-top k_form_wrap margin-bottom-40">
				<div class="formbox">
					<fieldset class="k-order-detail margin-bottom-40">
						<div class="col-sm-10 col-sm-offset-2">
							<div class="form-group control-group">									
								<div class="col-sm-10 controls">
								<label for="k_company_Name" class="control-label">会社名</label>
									<input type="text" class="form-control" name="k_company_name" id="k_company_name" placeholder="御社名">
								</div>									
								
							</div>
							<div class="form-group control-group">									
								<div class="col-sm-5 controls">
									<label for="k_name" class="control-label">ご担当者名</label>
									<input type="text" class="form-control" name="k_name" id="k_name" placeholder="氏名:必須" >
								</div>								
								<div class="col-sm-5 controls">
									<label for="k_kana" class="control-label">ヨミガナ</label>
									<input type="text" class="form-control" name="k_kana" id="k_kana" placeholder="氏名:カナ">
								</div>
							</div>
							<div class="form-group control-group">									
								<div class="col-sm-5 controls">
									<label for="k_email" class="control-label">e-mail</label>
									<input type="email" class="form-control" name="k_email" id="k_email" placeholder="e-mail:必須" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
								</div>								
								<div class="col-sm-5 controls">
									<label for="k_confirm_email" class="control-label">e-mail再入力</label>
									<input type="text" class="form-control" name="k_confirm_email" id="k_confirm_email" placeholder="e-mail:再入力" placeholder="e-mail:再入力" pattern="^[0-9a-zA-Z]+[\w-]+@[\w\.-]+\.\w{2,}$">
								</div>
							</div>
							<div class="form-group control-group">									
								<div class="col-sm-5 controls">
									<label for="k_tel" class="control-label">電話番号</label>
									<input type="text" class="form-control" name="k_tel" id="k_tel" placeholder="電話番号:必須 -(ハイフン除く)">
								</div>								
								<div class="col-sm-5 controls">
									<label for="k_fax" class="control-label">FAX番号</label>
									<input type="text" class="form-control" name="k_fax" id="k_fax">
								</div>
							</div>
							<div class="form-group control-group">									
								<div class="col-sm-10 controls">
									<label for="k_sendplace" class="control-label">お届け先宛名</label>
									<input type="text" class="form-control" name="k_sendplace" id="k_sendplace" placeholder="お届け先が宛名が上記と違う場合のみご記入下さい">
								</div>								
								
							</div>
							<div class="form-group control-group">
								<div class="col-sm-2 controls">
									<label for="k_postcode1" class="control-label">郵便番号</label><br>
									<input type="text" name="k_postcode1" id="k_postcode1" maxlength="3" style="width:3em;height:40px">-<input type="text" name="k_postcode2" id="k_postcode2" maxlength="4" style="width:3em;height:40px;">
								</div>
								<div class="col-sm-3 controls">
									<label for="k_address1" class="control-label">都道府県</label>
									<select id="k_address1" name="k_address1" class="form-control">
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
								<div class="col-sm-5 controls">
									<label for="k_address2" class="control-label">市区町村</label>
									<input type="text" class="form-control" name="k_address2" id="k_address2">
								</div>	
							</div>
							<div class="form-group control-group">
								<div class="col-sm-5 controls">
									<label for="k_address3" class="control-label">町域</label>
									<input type="text" class="form-control" name="k_address3" id="k_address3">
								</div>
								<div class="col-sm-5 controls">
									<label for="k_address4" class="control-label">建物名／お部屋番号</label>
									<input type="text" class="form-control" name="k_address4" id="k_address4">
								</div>		
								

							</div>

						</div>
				
					</fieldset>
				</div>
					<div class="text-center margin-bottom-20 clear">
						<button type="button" id="k-order2-backbtn3" class="btn btn-default btn-lg margin-bottom-20">注文情報入力に戻る</button>
						<button type="submit" id="k-order2-nextbtn3" class="btn btn-primary btn-lg margin-bottom-20" disabled>お支払い手続きに進む</button>
					</div>
					<p id="k-order-error2" class="k-order-error col-sm-4 col-sm-offset-4 alert alert-warning text-center" role="alert">必須項目を入力してください</p>
				</div>				
			</div>
		</div>

		</form>		
		</div>
    </main>


  </div>
<?php require_once('footer.php')?>