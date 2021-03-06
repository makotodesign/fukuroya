<?php
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
?>
<div id="bagwrap" class="margin-bottom-40">
		<div class="handle <?php 
			if(isset($_SESSION['k-order-bagdata'])){
				$size=$_SESSION['k-order-bagdata']['size'];
			}
			if($size=='SS'|| $size=='ST'){
				echo 'small_handle';
			}else{
				echo '';
			}
			?>">
			<?php include('svg/handle.svg'); ?>
		</div>
		<div class="bagbody <?php 
			if(isset($_SESSION['k-order-bagdata'])){
				echo $_SESSION['k-order-bagdata']['size'];
			}else{
			echo $size;} ?>">
			<div class="bgpoint prev-<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['basecolor'];
				}else{echo $basecolor;} 
				?>">
				<p id="k-title1-prev" class="k-title-prev font1-<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['fontcolor'];
				}else{echo $fontcolor1;}; 

				?> prev-<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_fontfamily'];
				}else{echo $fontfamily1;}
				?>" 
				style="top:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_top'];
				}else{echo $t1_top;} 
				?>px;
				left:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_left'];
				}else{echo $t1_left;} 
				?>px;
				font-size:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_size'];
				}else{echo $t1_size;} 
				?>%;
				letter-spacing:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_l_s'];
				}else{echo $t1_l_s;} 
				?>rem;
				line-height:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_l_h'];
				}else{echo $t1_l_h;} 
				?>;
				text-align:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t1_align'];
				}else{echo $t1_align;} 
				?>;
				<?php
				if(isset($_SESSION['k-order-bagdata'])){
					if($_SESSION['k-order-bagdata']['t1_border_bool']==true){
						$t1color=$_SESSION['k-order-bagdata']['fontcolor'];
					echo "border:{$_SESSION['k-order-bagdata']['t1_border_width']}px solid $color_hex[$t1color];";
					echo "padding:2%;";
					}
				}
				if($t1_border['bool']==true){
				echo "border:{$t1_border['width']}px solid $color_hex[$fontcolor1];";
				echo "padding:2%;";	

				}
				if(isset($_SESSION['k-order-bagdata'])){
					$t1color=$_SESSION['k-order-bagdata']['fontcolor'];
					$t1bgcolor=$_SESSION['k-order-bagdata']['basecolor'];
					if($_SESSION['k-order-bagdata']['t1_bg_bool']==true){
					echo "padding:".$_SESSION['k-order-bagdata']['t1_bg_padding']."%;";
					echo "background-color:".$color_hex[$t1color].";";	
					echo "color:".$color_hex[$t1bgcolor].";";
					}

				}
				if($t1_bg['bool']==true){
				echo "padding:{$t1_bg['padding']}%;";
				echo "background-color:{$color_hex[$fontcolor1]};";	
				echo "color:{$color_hex[$basecolor]};";
				}

				?>
				"><?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['title1'];
				}else{
					echo $title1;
				}
				?></p>
				<p id="k-title2-prev" class="k-title-prev prev-<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_fontfamily'];
				}else{echo $area2['fontfamily']; }
				 ?>" style="<?php 
				 if(isset($_SESSION['k-order-bagdata'])){
				 	$flag=$_SESSION['k-order-bagdata']['t2_add'];
				 	if($flag=='areaadd1'){
					echo "display:inline-block;";		
					}else if($flag==''){
						echo "display:none;"; 
					}
				 }
				if(isset($area2['add'])){ 
					if($area2['add']=='areaadd1'){
						echo "display:inline-block;";		
					}
				}?>
				left:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_left'];
				}else{echo $area2['left'];}
				?>px;
				top:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_top'];
				 }else{echo $area2['top']; }
				 ?>px;
				color:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					$color2=$_SESSION['k-order-bagdata']['fontcolor'];
					echo $color_hex[$color2];
				}else{echo $color_hex[$area2['color']];} 
				?>;
				text-align:<?php
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_align'];
				}else {echo $area2['align'];} 
				 ?>;
				font-size:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_size'];
				}else {echo $area2['size'];} 
				?>%;
				letter-spacing:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_l_s'];
				}else{echo $area2['space'];} 
				?>rem;
				line-height:<?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['t2_l_h'];
				}else{echo $area2['lineheight'];} 
				?>;


				"><?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['title2'];
				}else{
				echo $area2['title'];} ?></p>
			</div>
		</div>
	</div>
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