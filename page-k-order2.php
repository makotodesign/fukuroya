<?php
session_cache_limiter('none');
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
print_r($t1_bg['padding']);
require_once('header.php');
function h($val){
	$s=htmlspecialchars($val,ENT_QUOTES);
	return $s;
}
?>
    <main class="conatact_main container peage-k-order-main">
  
   		<div class="page-header">
   			<div class="row">
   				<button class="btn btn-default no-point back" type="button"> かんたんデザイン <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-success no-point back" type="button"> 確認 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> お客様情報入力 <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> お支払い手続き <span class="glyphicon glyphicon-arrow-right"></span></button>
   				<button class="btn btn-default no-point back" type="button"> ご注文手続き完了 </button>
   			</div>

   			<div class="row">
				<h2 class="f-pop f-color1 text-center rem3">デザインを確認しましょう！</h2>
			</div>
		</div>
		
		<div class="col-md-12">
			<div id="bagwrap" class="margin-bottom-20">
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
						echo "border:{$t1_border['width']}px solid $fontcolor1;";
						echo "padding:2%;";	

						}
						if($t1_bg['bool']==true){
						echo "padding:{$t1_bg['padding']}%;";
						echo "background-color:{$color_hex[$fontcolor1]};";	
						echo "color:{$color_hex[$basecolor]};";

						}

						?>
						"><?php echo $title1;?></p>
						<p id="k-title2-prev" class="k-title-prev" style="display:none"></p>
					</div>
				</div>
			</div>
			<div class="text-center">
			<form method="post" action="page-k-order.php" class="inline-block">		
				<input type="hidden" name="back_title1" value="<?php $text=str_replace("<br>","\n",$title1);echo $text;?>">
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
				<button type="submit" id="k-order2-backbtn" class="btn btn-default btn-lg">戻る</button>
			</form>
			<form class="inline-block">
			  <button type="button" class="btn btn-primary btn-lg">注文へ進む</button>
			</form>  
			</div>

			
		</div>

    </main>


  </div>
<?php require_once('footer.php')?>