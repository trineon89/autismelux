<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/smart-grid.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer_min.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/produit-index.css">
    <meta name="robots" content="noindex" /> 
</head>
<body>
<div id="page">
	<header>
		<div id="headerback">
			<? require_once('incl/header.inc.php'); ?>
		</div>
	</header>
</div>
	<!-- include of header / nav -->
<div id="two-columns" class="grid-container" style="display:block;">
<ul class="rig columns-6">
<?php
	if(isset($_GET['classe'] ))
	{
		switch ($_GET['classe'])
		{
			case 'artisanal':
				?>
				<li class="viewslide">
					<a href="produit.php?class=couture"><img src="img/picto-atelier/bitzerei.png" />	
					<div class="mask">
						<h3>Couture</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
					</div>
				</li>
				<li>
					<a href="produit.php?class=ceramique"><img src="img/picto-atelier/keramikfabrik.png" />
					<div class="mask">
						<h3>Ceramique</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
					</div>
				</li>
				<li>
					<a href="produit.php?class=papier"><img src="img/picto-atelier/pabeier.png" />
					<div class="mask">
						<h3>Pabier recyclé</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
					</div>
				</li>
				<li>
					<a href="produit.php?class=jardinage"><img src="img/picto-atelier/gaertnerei.png" />
					<div class="mask">
						<h3>Jardinage</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
					</div>
				</li>
				<li>
					<a href="produit.php?class=buanderie"><img src="img/picto-atelier/waescherei.png" />
					<div class="mask">
						<h3>Buanderie</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
					</div>
				</li>
				<?
			break;
			case 'infomedia':
				?>
					<li>
						<a href="produit.php?class=imprimerie"><img src="img/picto-atelier/dreckerei.png" />
						<div class="mask">
							<h3>Imprimerie digitale</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
					<li>
						<a href="produit.php?class=backoffice"><img src="img/picto-atelier/back-office.png" />
						<div class="mask">
							<h3>Back-office</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
					<li>
						<a href="produit.php?class=info-media"><img src="img/picto-atelier/info-media.png" />
						<div class="mask">
							<h3>Info-média</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
				<?
			break;
			case 'pdb':
				?>
					<li>
						<a href="produit.php?class=cuisine"><img src="img/picto-atelier/kichen.png" />
						<div class="mask">
							<h3>Cuisine</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
					<li>
						<a href="produit.php?class=confiserie"><img src="img/picto-atelier/confiserie.png" />
						<div class="mask">
							<h3>Confiserie</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
					<li>
						<a href="produit.php?class=takeaway"><img src="img/picto-atelier/takeaway.png" />
						<div class="mask">
							<h3>Takeaway</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
						</div>
					</li>
				<?
			break;
		}
	} else {
?>
		<li class="viewslide">
			<a href="produit.php?class=couture"><img src="img/picto-atelier/bitzerei.png" />	
			<div class="mask">
				<h3>Couture</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=ceramique"><img src="img/picto-atelier/keramikfabrik.png" />
			<div class="mask">
				<h3>Ceramique</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=papier"><img src="img/picto-atelier/pabeier.png" />
			<div class="mask">
				<h3>Pabier recyclé</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=jardinage"><img src="img/picto-atelier/gaertnerei.png" />
			<div class="mask">
				<h3>Jardinage</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=buanderie"><img src="img/picto-atelier/waescherei.png" />
			<div class="mask">
				<h3>Buanderie</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=imprimerie"><img src="img/picto-atelier/dreckerei.png" />
			<div class="mask">
				<h3>Imprimerie digitale</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=backoffice"><img src="img/picto-atelier/back-office.png" />
			<div class="mask">
				<h3>Back-office</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=info-media"><img src="img/picto-atelier/info-media.png" />
			<div class="mask">
				<h3>Info-média</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=cuisine"><img src="img/picto-atelier/kichen.png" />
			<div class="mask">
				<h3>Cuisine</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=confiserie"><img src="img/picto-atelier/confiserie.png" />
			<div class="mask">
				<h3>Confiserie</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
		<li>
			<a href="produit.php?class=takeaway"><img src="img/picto-atelier/takeaway.png" />
			<div class="mask">
				<h3>Takeaway</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
			</div>
		</li>
	<? } //end else?>
	</ul>
</div>
	
<div class="clearfloat">
</div>
	<? require_once('incl/footer.inc.php'); ?>
		<!--footer incl -->
    
	<div class="clearfloat">
	</div>
	<br /><br />
	<?php 
		//echo "dernière modification: " . date ("F d Y H:i:s.", filemtime('index.php')); 
		/*    <section> <!-- Main Section -->
			<article> <!-- "image gallery" --> 
			</article>
			<article> <!-- "Benevol" -->
			</article>
			<article> <!-- "faites un don" -->
			</article>
			<article> <!-- "Slogan" -->
			</article>
        </section>
		*/
		?>
</body>
</html>