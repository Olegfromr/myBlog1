<?php
require "first.php";
?>
<div class="container" id="middle">
	<div class="row">
		<main class="col-lg-8"> 
			<div class="article-list">
				<section class="mb-5 my-4">
<?php
	$st=isset ($_GET['s']) ? $_GET['s'] : 0;
	if (empty($st))
	{
?>
<?php	require "articles/posudomoika.html"; ?>
<?php	require "articles/bootstrap.html"; ?>
<?php
	} elseif ($st=='bootstrap')
	{
		$st1=isset ($_GET['st1']) ? $_GET['st1'] : 0;
		if (empty($st1))
		{
			require "bootstrap/bootstrap.html";
		} elseif ($st1=='prodayushay_stranica_na_bootstrap')
		{
			require "bootstrap/prodayushay_stranica_na_bootstrap.html";
		}
	} elseif ($st=='rubric')
	{
		$st1=isset ($_GET['st']) ? $_GET['st'] : 0;
		if ($st1=='bootstrap')
		{
?>
					<div class="mb-2 mt-4">
						<small>2021.04.19</small>
						<small class="ml-3">
							<a href="?s=rubric&st=bootstrap">Bootstrap</a>
						</small>
					</div>
<?php	require "rubric/bootstrap.min.html"; ?>
					<div class="mb-2 mt-4">
						<small>2021.04.19</small>
						<small class="ml-3">
							<a href="?s=rubric&st=bootstrap">Bootstrap</a>
						</small>
					</div>
<?php	require "rubric/prodayushay_stranica_na_bootstrap.min.html"; ?>
<?php
#			require "rubric/bootstrap";
		}
	} elseif ($st=='articles')
	{
		$st1=isset ($_GET['st']) ? $_GET['st'] : 0;
		require "articles/".$st1.".html";
	} elseif ($st=='about')
	{
		require "about.php";
	} elseif ($st=='different')
	{
		require "articles/posudomoika.html";
	} elseif (!empty($_GET['searchid']) || !empty($_GET['text']))
	{
		;
	}
?>
				</section>
			</div>
		</main>
		
					<div class="mb-2 mt-4">
	<p class="title">
		<strong>В другом месте</strong>
	</p>
	<div class="content">
		<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href='https://github.com/Olegfromr/myBlog1'>GitHub</a>
				</li>
		</ul>
	</div>
	</div>
	
		</div>
	</div>
<?php
require "footer.php";
?>
	
</body>
</html>
