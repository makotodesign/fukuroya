<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ordertest</title>
	<link type="text/css" rel="stylesheet" href="./css/sanitize.css">
	<link type="text/css" rel="stylesheet" href="./css/common.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="./css/style.css">
	<link type="text/css" rel="stylesheet" href="./css/order_make.css">

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
	<script src="./js/order_make.js"></script>
</head>
<body>


<div class="order_make clearfix">
	<div class="controll">
		<form>
		<div class="controll_value">
			<label for="fileInput">ロゴファイルを選択</label>
			<input id="fileInput" type="file" onchange="uv.style.display='inline-block'; uv.value = this.value;" />
			<input type="text" id="uv" class="uploadValue" disabled />
		</div>

		<div class="controll_value">
			<label for="imgsize">画像の拡大／縮小</label>
			<input id="imgsize" type="range" min="100" max="800" step="10"/>
		</div>

		<div class="controll_value">
			<label for="logoinput1">文字を入力</label>
			<textarea id="logoinput1" name="logoinput1" class="logoinput" placeholder="Enter title here" />
			</textarea>
			<label for="fontsize">fontsize</label>
			<p class="fontsize"><input type="radio" name="fontsize" id="f1" value="10">10pt
			<input type="radio" name="fontsize" id="f2" value="12">12pt</p>
			<input type="radio" name="fontsize" id="f3" value="20">20pt</p>
			<label for="color">fontColor</label>
			<input id="color" type="color" value="#F75D86">
			<label for="fontfamily">fontFamily</label>
			<select name='fontfamily' id="fontfamily" class="select">
			<option value='"ヒラギノ明朝 ProN W6", "HiraMinProN-W6", "HG明朝E", "ＭＳ Ｐ明朝", "MS PMincho", "MS 明朝", serif'>明朝 or selif</option>
			<option value='"メイリオ","Meiryo","ヒラギノ角ゴ ProN W3","Hiragino Kaku Gothic ProN","ＭＳ Ｐゴシック","MS P Gothic",Verdana, Arial, Helvetica, sans-serif'>ゴシック or sans-selif</option>
			<option value='"ヒラギノ丸ゴ Pro W4","ヒラギノ丸ゴ Pro","Hiragino Maru Gothic Pro","ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","HG丸ｺﾞｼｯｸM-PRO","HGMaruGothicMPRO"'>丸ゴシック</option>
			</select>  

		</div>
		<div class="controll_value">
		<input id="reset" type="reset" />

		</div>
	</form>			
	</div>
	<div class="bag">
	<div id="imgwrap" class="imgwrap">
		<img id="userlogo" class="userlogo" src="" alt="" width="400px"/>
	</div>
	<span id="title_prev1" class="title_prev"></span>	
	</div>


</div>	

</body>
</html>