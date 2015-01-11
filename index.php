<?php
	session_start();
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="engine1/style.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
	<!--[if IE]><link rel="stylesheet" href="engine1/ie.css"><![endif]-->
	<!--[if lte IE 9]><script type="text/javascript" src="engine1/ie.js"></script><![endif]-->
	<script type="text/javascript" src="engine1/gestures.js"></script>
    <meta name="robots" content="noindex" />   
</head>
<body>
<div id="page">
	<header>
		<div id="headerback">
			<? require_once('incl/header.inc.php'); 
			require_once('incl/functions.inc.php');?>
		</div>
	</header>
	<!-- include of header / nav -->
	<section id="mainself">
		<article id="featuredimage">	<?php //require_once('iframe_cssslider.html');	?><iframe src="cssslider.html" style="width:597px;height:280px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</article>
		<a href="page.php?page=benevol"><article id="benevol">&nbsp;</article></a>
		<a href="page.php?page=don"><article id="don"><div id="don_background">
			<header>Faites un don pour assister AutismeLuxembourg!</header>
			<p id="virement">Virement bancaire</p>
			<p id="virementcode">BCEE LU99 0000 1111 2222 3333<br/>BGLLUL LU12 1234 5678 9101 1013</p>
		</div> <!-- background Donenconfiance -->
		</article></a>
		<a href="page.php?page=slogan" class="slogan"><article id="ecoute"><p id="ecoute_p">Ecoute</p><p id="competence">Compétence</p><p id="dynamisme">Dynamisme</p></article></a>
	</section>
	<div class="clearfloat">
	</div>
	<? require_once('incl/footer.inc.php'); ?>
		<!--footer incl -->
    
	<div class="clearfloat">
	</div>
	<br /><br />
	<?php 
		// echo "dernière modification: " . date ("F d Y H:i:s.", filemtime('index.php')); 
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
</div>
</body>
</html>

