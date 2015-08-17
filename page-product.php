<?php require_once('header.php')?>
    <main class="product_main container">
		<div class="page-header">
		<h1><span id="product_title">業界最速、最安値、をあなたに </span><small id="product_subtitle">高品質、低価格には理由があります</small></h1>
		  <p id="product_p">その理由は...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
		<section id="product_content" class="content_box">
			<div class="row margin-bottom-20">

				<h2 class="margin-top-0 margin-bottom-20 text-primary text-center"><i class="fa fa-check-square-o"></i>&nbsp;商品一覧を表示します、プランを選んで下さい</h2>
				<!--
				<div class="productselect col-sm-8 col-sm-offset-2 margin-bottom-20">
				<button type="button" id="nouki_select1" class="btn btn-primary btn-lg btn-block">エコノミープラン</button><br>
				<button type="button" id="nouki_select2" class="btn btn-primary btn-lg btn-block">スタンダードプラン</button>
				</div>
				-->

			</div>
			<div id="product_detail">
				<ul class="nav nav-tabs" style="margin-bottom:15px;">
				<li class="active"><a href="#eco" data-toggle="tab">エコノミープラン</a></li>
				<li ><a href="#st" data-toggle="tab">スタンダードプラン</a></li>
				</ul>
				<div class="tab-content">
				<article id="eco" class="tab-pane active">
					<div class="row">
					<h2 class="text-center margin-top-0">エコノミープラン</h2>
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
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_l_s">テンプレートをダウンロード</button>

							
							</div>
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">	
									<?php require_once('svg/bug_5_big_t.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ls_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_l_t">テンプレートをダウンロード</button>
								
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
												<tr>
													<td colspan="3"></td>
													<td colspan="2" id="msg"></td>
												</tr>
											</tbody>
										</table>
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>	
							<section class="modal fade template_download" id="template_l_s" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Lサイズ（スタンダード）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_l_s">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>
							<section class="modal fade template_download" id="template_l_t" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Lサイズ（トール）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_l_t">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
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
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ms_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_m_s">テンプレートをダウンロード</button>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="view1">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">
									<?php require_once('svg/bug_5_mid_t.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ms_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_m_t">テンプレートをダウンロード</button>

							
							</div>
						</div>
						<section class="modal fade m_5" id="ms_5" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">納期5営業日&nbsp;Mサイズスタンダード見積もり</h2>
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
												<tr>
													<td colspan="3"></td>
													<td colspan="2" id="msg"></td>
												</tr>
											</tbody>
										</table>
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>
							<section class="modal fade template_download" id="template_m_s" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Mサイズ（スタンダード）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_m_s">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>
							<section class="modal fade template_download" id="template_m_t" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Mサイズ（トール）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_m_t">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>			
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
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ss_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_s_s">テンプレートをダウンロード</button>							
							</div>
						</div>
						<div class="col-md-4">
								<h2 class="text-center">トール</h2>
								<div class="bagimage">
									<?php require_once('svg/bug_5_sm_l.svg')?>
								</div>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-toggle="tooltip" data-target="#ss_5" data-placement="top" title="クリックで見積もり計算フォームが開きます">この仕様で見積もり</button>
								<button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#template_s_t">テンプレートをダウンロード</button>							
							</div>
													<section class="modal fade m_5" id="ss_5" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">納期5営業日&nbsp;Sサイズスタンダード見積もり</h2>
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
												<tr>
													<td colspan="3"></td>
													<td colspan="2" id="msg"></td>
												</tr>
											</tbody>
										</table>
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>
							<section class="modal fade template_download" id="template_s_s" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Sサイズ（スタンダード）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_s_s">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>
							<section class="modal fade template_download" id="template_s_t" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<header class="modal-header text-center">
										<button class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-primary font-bold">Sサイズ（トール）テンプレート</h2>
									</header>
									<div class="modal-body">
										<div class="margin-bottom-20">
										<h2>ソフトを選択</h2>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="il" value="illustrator"> Illustrator
										</label>
										<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="ph" value="photoshop"> Photoshop
										</label>
										</div>
										<div id="il_ver_wrap" class="hidden">
	
											<button id="i_temp_download_btn" type="button" class="btn btn-primary btn-lg download_i_s_t">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Illustratorテンプレート<br>ダウンロード
											</button>
										</div>
										<div id="ph_ver_wrap" class="hidden">
											<button id="p_temp_download_btn" type="button" class="btn btn-primary btn-lg">
											<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Photoshopテンプレート<br>ダウンロード
											</button>				
										</div>
															
					                                   
									</div>
									<div class="modal-footer">

									</div>
								</div>


							</div>
							</section>				
						

					</div>
				
						
				</article>
				<article id="st" class="tab-pane">
					<div class="row">
					<h2 class="text-center margin-top-0">スタンダードプラン</h2>
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
			</div>	





			
		</section>


 
    </main>


<?php require_once('footer.php')?>