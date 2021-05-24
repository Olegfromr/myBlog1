<?php
require "first.php";
?>
<div class="container" id="middle">
	<div class="row">
		<main class="col-lg-8"> 
			<div class="article-list">
<?php
	$st=isset ($_GET['s']) ? $_GET['s'] : 0;
	if (empty($st))
	{
?>
				<section class="my-4">
<?php	require "articles/posudomoika.html"; ?>
				</section>
				<section class="my-4">
<a class="btn btn-primary" href="?s=different&st=posudomoika" role="button">Дальше...</a>
<!-- <button type="button" class="btn btn-primary">Дальше...</button> -->
				</section>
				<section class="my-4">
<?php	require "articles/bootstrap.html"; ?>
				</section>
				<section class="my-4">
<a class="btn btn-primary" href="?s=articles&st=bootstrap" role="button">Дальше...</a>
				</section>
<!-- <button type="button" class="btn btn-primary">Дальше...</button> -->

<?php
	} elseif ($st=='articles')
	{
?>				<section class="my-4">
<?php
		$st1=isset ($_GET['st']) ? $_GET['st'] : 0;
		if ($st1=='bootstrap')
		{
			require "articles/bootstrap.html";
			require "articles/bootstrap2.html";
		} elseif ($st1=='prodayushay_stranica_na_bootstrap')
		{
			require "bootstrap/prodayushay_stranica_na_bootstrap.html";
		}
?> </section> <?php
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
?>				<section class="my-4"> <?php
		require "articles/posudomoika.html";
		require "articles/posudomoika2.html";
		?> </section>  <?php
	} elseif (!empty($_GET['searchid']) || !empty($_GET['text']))
	{
		;
	}
?>
				</section>
			</div>
		</main>
		
<aside class="col-md-auto">
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
</aside>	
		</div>
	</div>
<?php
require "footer.php";
?>
	
</body>
</html>
