<!DOCTYPE html>
<html lang="ru">
<head>
		<meta http-equiv="x-dns-prefetch-control" content="on">
		<meta charset="utf-8">		
		<title>Блог программиста</title>
		<meta property="og:title" content="Блог программиста">
		<meta name="referrer" content="origin">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
<meta name="description" content="Блог о программировании, веб-разработке и обо мне."/>
<meta property="og:description" content="Блог о программировании, веб-разработке и обо мне."/>
<meta name="keywords" content="сайт,блог,статьи,программист,создание сайтов,проекты,портфолио,php,mysql,programming,web"/>
						<!-- Icons -->
<link rel="shortcut icon" href="file-earmark-diff.svg" type="image/x-icon">
<meta name="theme-color" content="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
		<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- agat.js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.5.0/build/styles/agate.min.css">
  <!-- jQuery с CDN -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <!-- Bootstrap Bundle JS с CDN -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS с CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous">  

<style>
h1{ 
	text-align: center;
	font-size: 50px;
}
#h1 a:hover{
	text-decoration: none;
	color: #3a5b66;
}	 
#h1 a{
	text-decoration: none;
	color: #3a5b66;
}	
h2  a{
	text-decoration: none;
	color: #333;
} 
h2  a:hover{
	color: #333;
} 
@media (max-width: 767.98px) {
h1 {
	  font-size: 25px;
}
} 
</style>
</head>
<body>
<?php
require "yandex_metrika.html";
?>
<header>
<h1 id="h1" ><a href="index.php">Блог программиста</a></h1>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <?php 
	$st=isset ($_GET['s']) ? $_GET['s'] : 0;
	?>
    <ul class="navbar-nav mr-auto">
      
		  <?php 
	if (empty($st))
	{
		echo '<li class="nav-item active">';
	}else
	{
		echo '<li class="nav-item">';
	}
    ?>
        <a class="nav-link" href="index.php"> Главная<span class="sr-only">(current)</span>
</a>
	</li>
		  <?php 
	if ($st=='articles' && !empty($st))
	{
		echo '<li class="nav-item dropdown active">';
	}else
	{
		echo '<li class="nav-item dropdown">';
	}
    ?>
        <a class="nav-link dropdown-toggle" href="index.php?s=articles&st=bootstrap" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bootstrap
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="index.php?s=articles&st=bootstrap">Bootstrap</a>
<!--			<a class="dropdown-item" href="?s=bootstrap&st1=prodayushay_stranica_na_bootstrap">Продающая страница на Bootstrap</a>
-->
        </div>
      </li>
		  <?php 
	if ($st=="about" && !empty($st))
	{
		echo '<li class="nav-item active">';
	}else
	{
		echo '<li class="nav-item">';
	}
    ?>
        <a class="nav-link" href="index.php?s=about">О сайте</a>
      </li>
    </ul>

<!-- мой код !!! -->
<style type="text/css">
	#yandex_norm  {
		 max-width: 300px;
		 }
</style>
<div id="yandex_norm">
<!--   Поиск от Яндекс -->
<?php
require "yandex_search.html";
?>
</div>
  </div>
</nav>
