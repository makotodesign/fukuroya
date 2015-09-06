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
				"><?php 
				if(isset($_SESSION['k-order-bagdata'])){
					echo $_SESSION['k-order-bagdata']['title1'];
				}else{
					echo $title1;
				}
				?></p>
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
	</div>