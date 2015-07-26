<?php require_once('header.php')?>
    <main class="product_main container">
		<div class="page-header">
		<h1><span id="product_title">業界最速、最安値、をあなたに </span><small id="product_subtitle">高品質、低価格には理由があります</small></h1>
		  <p id="product_p">その理由は...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
		<section id="product_content" class="content_box">
			<div class="row margin-bottom-20">

				<h2 class="col-md-7 col-md-offset-2 margin-top-0 text-primary"><i class="fa fa-check-square-o"></i>&nbsp;商品一覧を表示します、納期を選んで下さい</h2>
				<div class="col-md-3">
					<div class="btn-group ">
					<button type="button" class="btn btn-primary"><i class="fa fa-arrow-circle-right"></i>&nbsp;納期を選択</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
					<li><a href="#" id="nouki_select1">5営業日</a></li>
					<li><a href="#" id="nouki_select2">7営業日</a></li>
					
					</ul>
					</div>
				</div>
			</div>
			<div id="product_detail">
				<article id="day5" class="product_select container">
					<div class="row">
					<h2 class="bg-primary text-center margin-top-0">納期5営業日</h2>
					</div>
					<div class="row product_row">
						<div class="col-md-4 bag_inq big_bag">
							<div class="product_box">
								<h2><span class="rem10">L</span>サイズ</h2>
								<p class="bagcaption">
									雑貨店、食料品店の店舗でよく使われるサイズです。
									雑貨、アパレル、服など様々な用途に対応出来ます。
									背の高いトールサイズとスタンダードサイズをご用意いたしました
									<span class="bagsize">幅32cm×奥行き11cm<br>×高さ(26.5cm or 45cm)</span>
									
								</p>
								

							</div>
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">スタンダード</h2>
								<div class="bagimage s">
									<?php require_once('svg/bug_5_big_s.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>

							
							</div>
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">	
									<?php require_once('svg/bug_5_big_t.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>
								
							</div>
						</div>
						<section class="modal fade l_5" id="ls_5" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">納期5営業日&nbsp;Lサイズスタンダード見積もり</h2>
									</header>
									<div class="modal-body">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>部数</th>
													<th>単価</th>
													<th>合計</th>
													<th>消費税</th>
													<th>送料</th>													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<select name="copies" id="copies">
															<option value="0">選んで下さい</option>
															<script>
															for(i=500;i<=10000;i=i+100){
																document.write('<option value="'+i+'">'+i+'部</option>');
															}
															</script>
														</select>
													</td>
													<td><span id="price"></span>円/1部</td>
													<td><span id="total"></span>円</td>
													<td><span id="tax"></span>円</td>
													<td><span id="ship"></span>円</td>	
												</tr>
												<tr class="danger">
													<th colspan="5" class="text-right">総合計&nbsp;&nbsp;<span id="all_total"></span>円</th>
												</tr>
											</tbody>
										</table>
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>	

					</div>
					

					<div class="row product_row">
						<div class="col-md-4 bag_inq mid_bag">
							<div class="product_box">
								<h2><span class="rem10">M</span>サイズ</h2>
								<p class="bagcaption">
									少し小振りのサイズです。小物雑貨、枚数の少ない服などでよく使われるサイズです。
									雑貨、アパレル、服など様々な用途に対応出来ます。
									<span class="bagsize">幅28cm×奥行き8cm<br>×高さ(26.5cm or 40cm)</span>
								</p>							
							</div>	
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">スタンダード</h2>
								<div class="bagimage s">
									<?php require_once('svg/bug_5_mid_s.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">
									<?php require_once('svg/bug_5_mid_t.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>

							
							</div>
						</div>
					</div>					
					<div class="row product_row">
						<div class="col-md-4 bag_inq mini_bag">
							<div class="product_box">
								<h2><span class="rem10">S</span>サイズ</h2>
								<p class="bagcaption">
									A4サイズの商品を入れたり、お菓子、小物類に最適です。<br>
									Toolサイズはワイン、お酒にもちょうど良いサイズです。
									<span class="bagsize">幅22cm×奥行き6.5cm<br>×高さ(26.5cm or 32cm)</span>
								</p>							
							</div>	
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">スタンダード</h2>
								<div class="bagimage s">
									<?php require_once('svg/bug_5_sm_s.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>							
							</div>
						</div>
						<div class="col-md-4">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">
									<?php require_once('svg/bug_5_sm_l.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block">注文する</button>							
							</div>
						</div>
					</div>
				
						
				</article>
				<article id="day7" class="product_select container">
					<div class="row">
					<h2 class="bg-primary text-center margin-top-0">納期7営業日</h2>
					</div>
					<div class="row product_row">
						<div class="col-md-4 bag_inq big_bag">
							<div class="product_box">
								<h2><span class="rem10">L</span>サイズ</h2>
								<p class="bagcaption">
									雑貨店、食料品店の店舗でよく使われるサイズです。
									雑貨、アパレル、服など様々な用途に対応出来ます。
									背の高いトールサイズとスタンダードサイズをご用意いたしました
									<span class="bagsize">幅32cm×奥行き11cm<br>×高さ(26.5cm or 45cm)</span>
								</p>
								

							</div>
						</div>
						<div class="col-md-4">
							<div class="product_box">



							</div>
						</div>
						<div class="col-md-4">
							<div class="product_box">
							</div>
						</div>
					</div>
					<div class="row product_row">
						<div class="col-md-4 bag_inq mid_bag">
							<div class="product_box">
								<h2><span class="rem10">M</span>サイズ</h2>
								<p class="bagcaption">
									少し小振りのサイズです。小物雑貨、枚数の少ない服などでよく使われるサイズです。
									雑貨、アパレル、服など様々な用途に対応出来ます。
									<span class="bagsize">幅28cm×奥行き8cm<br>×高さ(26.5cm or 40cm)</span>
								</p>							
							</div>	
						</div>
						<div class="col-md-4">
							<div class="product_box">
							</div>
						</div>
						<div class="col-md-4">
							<div class="product_box">
							</div>
						</div>
					</div>					
					<div class="row product_row">
						<div class="col-md-4 bag_inq mini_bag">
							<div class="product_box">
								<h2><span class="rem10">S</span>サイズ</h2>
								<p class="bagcaption">
									A4サイズの商品を入れたり、お菓子、小物類に最適です。<br>
									Toolサイズはワイン、お酒にもちょうど良いサイズです。
									<span class="bagsize">幅22cm×奥行き6.5cm<br>×高さ(26.5cm or 32cm)</span>
								</p>							
							</div>	
						</div>
						<div class="col-md-4">
							<div class="product_box">
							</div>
						</div>
						<div class="col-md-4">
							<div class="product_box">
							</div>
						</div>
					</div>
				
						
				</article>
			</div>	





			
		</section>


 
    </main>


<?php require_once('footer.php')?>