<?php
$q_select=h($_POST['q_select']);
$Name=h($_POST['Name']);
$Email=h($_POST['confirmEmail']);
$inquiry=h($_POST['inquiry']);

define('DB_DATABASE','_fukuroyadb');
define('DB_USERNAME','_fukuroyadb');
define('DB_PASSWORD','pass1126');
define('PDO_DSN','mysql:host=mysql507.heteml.jp;dbname='.DB_DATABASE.';charset=utf8');
try{
$db=new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
$stmt=$db->prepare('INSERT INTO contact(type,name,email,inquiry) VALUES(:type,:name,:email,:inquiry)');
$stmt=$stmt->execute(array(
        ':type'=>$q_select,
        ':name'=>$Name,
        ':email'=>$Email,
        ':inquiry'=>$inquiry
    ));



}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}

function h($val){
    $s=htmlspecialchars($val,ENT_QUOTES);
    return $s;
}
require_once('header.php')
?>
    <main class="conatact_main container">
		<div class="page-header">
		<h1>お問い合わせ送信完了しました</h1>
		<p>
		</p>
		</div>
    	<div class="formbox">
            <p><strong><?php echo $Name;?>様、お問い合わせありがとうございます</strong></p>
        <p>
        担当者が折り返し、<?php echo $Name?>様のemailアドレス【<?php echo $Email?>】にご連絡させていただきます。
        今しばらく、お待ち下さいませ.



        </p>
    		
    	</div>
    </main>

  </div>
<?php require_once('footer.php')?>