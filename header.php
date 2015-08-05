<?php
$filename=basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--     <meta content="86400" http-equiv="Expires"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>袋屋|top</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" href="css/orig.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <div id="pagewrap" class="<?php 
    if($filename=='index.php'){
      echo 'flexwrap';
    }else{
      echo 'absolutewrap';
    }

  ?>">

      <nav class="globalnav">
      <div class="container clearfix">
        <h1 class="text-hide">格安オリジナル紙袋制作の袋屋.jp Fukuroya.jp</h1>
        <ul class="clearfix">
          <li><a href="">サイトマップ</a></li>
          <li><a href="">プライバシーポリシー</a></li>
          <li><a href="">特定商取引法に基づく表記</a></li>


        </ul>
      </div>    
    </nav> 

    <header class="mainheader navbar container-fluid">

      <div class="container text-muted">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".target">
          <i class="glyphicon glyphicon-menu-hamburger"></i>
          </button>

          <a class="navbar-brand logo-wrap clearfix" href="http://makotoschool.net/fukuroya/boot">
            <div class="logo pull-left"><?php require_once('svg/logo-svg.php') ?></div>
            <div class="logoword pull-left"><?php require_once('svg/logo-svg-word.php') ?></div>
          </a>
        </div>
        <nav class="collapse navbar-collapse target">
          <div id="page_flug" class="<?php 
            switch ($filename) {
              case 'index.php':
                echo 'index_flug';
                break;
              case 'page-product.php':
                echo 'product_flug';
                break;
              case 'page-order.php':
                echo 'order_flug';
                break;
              case 'page-company.php':
                echo 'company_flug';
                break;
              case 'page-contact.php':
                echo 'contact_flug';
                break;
              case 'page-beginner.php':
                echo 'beginner_flug';
                break;         
            }?>">
          <ul id="mainnav" class="nav navbar-nav navbar-right">
          <li><a href="index.php" id="top">Top</a></li>
          <li><a href="page-beginner.php" id="beginner">初めての方</a></li>
          <li><a href="page-product.php" id="product" data-toggle="popover"  data-html="true" data-placement="bottom" title="Click!"  data-content="こちらから簡単見積もり、テンプレートダウンロードも可能です">商品一覧</a></li>
          <li><a href="page-order.php" id="order">注文</a></li>
          <li><a href="page-company.php" id="company">会社概要</a></li>
          <li><a href="page-contact.php" id="contact">お問い合わせ</a></li>
          <li><a href="" class="socialicon"><i class="fa fa-facebook-official fa-2x"></i></a></li>
          <li><a href="" class="socialicon"><i class="fa fa-twitter-square fa-2x"></i></a></li>
          </ul>
          </div>
        </nav>
      </div>
    </header>