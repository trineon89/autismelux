<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
	<meta charset="utf-8"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/footer_min.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
    <meta name="robots" content="noindex" />
	
<script language="javascript">
	function toggleDiv(divid, collapser){
		if(document.getElementById(divid).style.display == 'none'){
			document.getElementById(divid).style.display = 'block';
			
			document.getElementById(collapser).className =  'collapsermax';
		}else{
			document.getElementById(divid).style.display = 'none';
			document.getElementById(collapser).className =  'collapsermin';
		}
	}
</script>
</head>
<body>
<div id="page">
	<header>
		<div id="headerback">
			<? require_once('incl/header.inc.php'); ?>
		</div>
	</header>
	<!-- include of header / nav -->
<section id="mainself">
	<a class="collapsermax" id="collapsedirection" href="javascript:;" onmousedown="toggleDiv('direction', 'collapsedirection');"></a>
	<header style="font-size: 2em;font-family: 'Open Sans Condensed', sans-serif;">Direction</header>
	<section id="direction"> <!-- DIRECTION -->
		<article> <!-- Marc de Geest -->
			<img src="img/contact/Marc_de_Geest.jpg">
			<header>Marc de Geest</header>
			<p>Directeur</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 22</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:direction@autisme.lu?subject=<? echo "[". date("Y-m-d")."]: "; ?>Contact à partir de la page web">direction</a></p>
		</article>
		<article> <!-- Vincent Brack -->
			<img src="img/contact/Vincent_Brack.jpg">
			<header>Vincent Brack</header>
			<p>Chargé de direction</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 24</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:vincent.brack@autisme.lu">vincent.brack</a></p>
		</article>
		<article> <!-- Sonja Guedes -->
			<img src="img/contact/Son_Guedes.jpg">
			<header>Sonja Guedes</header>
			<p>Chargé de direction</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 41</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:son.guedes@autisme.lu">son.guedes</a></p>
		</article>
		<article> <!-- Danielle Philippi -->
			<img src="img/contact/Danielle_Philippi.jpg">
			<header>Danielle Philippi</header>
			<p>Chargé de direction</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 26</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:danielle.philippi@autisme.lu">danielle.philippi</a></p>
		</article>
	</section>
	<div class="clearfloat"></div>
	<a class="collapsermax" id="collapseateliers" href="javascript:;" onmousedown="toggleDiv('ateliers', 'collapseateliers');"></a>
	<header style="font-size: 2em;font-family: 'Open Sans Condensed', sans-serif;">Ateliers</header>
	<section id="ateliers"> <!-- ATELIERS -->
		<article> <!-- Greg Foetz -->
			<img src="img/contact/Greg_Foetz.jpg">
			<header>Greg Foetz</header>
			<p>Imprimerie</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 42</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:grafik@autisme.lu">grafik</a></p>
		</article>
		<article> <!-- Cynthia_Flesch -->
			<img src="img/contact/Cynthia_Flesch.jpg">
			<header>Cynthia Flesch</header>
			<p>Papier recyclé</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 43</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:papier.recycle@autisme.lu">papier.recycle</a></p>
		</article>
		<article> <!-- Müller Carmen -->
			<img src="img/contact/Carmen_Mueller.jpg">
			<header>Carmen Müller </header>
			<p>Jardinage</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 44</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:jardinage@autisme.lu">jardinage</a></p>
		</article>
		<article> <!-- Gaertner Pierre -->
			<img src="img/contact/Pierre_Gaertner.jpg">
			<header>Pierre Gaertner</header>
			<p>Cuisine</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 49</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:cuisine@autisme.lu">cuisine</a></p>
		</article>
		<article> <!-- Wilma Kirsch -->
			<img src="img/contact/Wilma_Kirsch.jpg">
			<header>Wilma Kirsch</header>
			<p>Confiture</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 50</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:cuisine@autisme.lu">cuisine</a></p>
		</article>
		<article> <!-- Peter Stein -->
			<img src="img/contact/Peter_Stein.jpg">
			<header>Peter Stein</header>
			<p>Céramique</p>
			<p><i class="fa fa-phone fa-lg"></i> 265 503 92</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:keramikfabrik@autisme.lu">keramikfabrik</a></p>
		</article>
		<article> <!-- Chantal_Longhino -->
			<img src="img/contact/Chantal_Longhino.jpg">
			<header>Chantal Longhino</header>
			<p>Entretien</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 45</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:entretien@autisme.lu">entretien</a></p>
		</article>
	</section>
	<div class="clearfloat"></div>
	
	<a class="collapsermax" id="collapseconsultation" href="javascript:;" onmousedown="toggleDiv('consultation', 'collapseconsultation');"></a>
	<header style="font-size: 2em;font-family: 'Open Sans Condensed', sans-serif;">Service de consultation, d'information et de rencontre</header>
	<section id="consultation"> <!-- Service de consultation, d'information et de rencontre -->
		<article> <!-- Samira Messina -->
			<img src="img/contact/Samira_Messina.jpg">
			<header>Samira Messina</header>
			<p>Psychologue</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 23</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:samira@autisme.lu">samira</a></p>
		</article>
		<article> <!-- Melanie_Karp -->
			<img src="img/contact/Melanie_Karp.jpg">
			<header>Melanie Karp</header>
			<p>Psychologue</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 23</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:melanie@autisme.lu">melanie</a></p>
		</article>
		<article> <!-- Michael_Wortmann -->
			<img src="img/contact/Michael_Wortmann.jpg">
			<header>Michael Wortmann</header>
			<p>Pédagogue</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 23</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:michael.wortmann@autisme.lu">michael.wortmann</a></p>
		</article>
		<article> <!-- Arlette -->
			<img src="img/contact/empty_portrait.jpg">
			<header>Arlette</header>
			<p>Ergothérapeute</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 28</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:arlette@autisme.lu">arlette</a></p>
		</article>
		<article> <!-- Liz Theis -->
			<img src="img/contact/Liz_Theis.jpg">
			<header>Liz Theis</header>
			<p>Ergothérapeute</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 28</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:liz.theis@autisme.lu">liz.theis</a></p>
		</article>
		<article> <!-- Martine Lux -->
			<img src="img/contact/Martine_Lux.jpg">
			<header>Martine Lux</header>
			<p>Infirmière</p>
			<p><i class="fa fa-phone fa-lg"></i> 265 503 92</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:infirmerie@autisme.lu">infirmerie</a></p>
		</article>
		<article> <!-- Claudine_Weidert -->
			<img src="img/contact/Claudine_Weidert.jpg">
			<header>Claudine Weidert</header>
			<p>Infirmière</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 45</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:infirmerie@autisme.lu">infirmerie</a></p>
		</article>
		<article> <!-- Cathy Soeder -->
			<img src="img/contact/Cathy_Soeder.jpg">
			<header>Cathy Soeder</header>
			<p>Sophrologue</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 26</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:cathy.soeder@autisme.lu">cathy.soeder</a></p>
		</article>
		<article> <!-- Anna-Domenica Trunfio -->
			<img src="img/contact/Anna_Domenica_Trunfio.jpg">
			<header>Anna-Domenica Trunfio</header>
			<p>Orthophoniste</p>
			<p><i class="fa fa-phone fa-lg"></i> 266 233 28</p>
			<p><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:anna-domenica@autisme.lu">anna-domenica</a></p>
		</article>
	</section>
	<div class="clearfloat"></div>
	
	<a class="collapsermax" id="collapsemap" href="javascript:;" onmousedown="toggleDiv('map', 'collapsemap');"></a>
	<header style="font-size: 2em;font-family: 'Open Sans Condensed', sans-serif;">Map</header>
	<section id="map"> <!-- MAP -->
		<article> <!-- Marc de Geest -->
			<header style="margin-left:0px;">Autisme Luxembourg asbl</header>
		
			<div style="float:left; width:150px;">
				<p style="margin-left:0px;font-size:20px;font-family: 'Open Sans Condensed', sans-serif;">Centre Roger Thelen</p>
				<p style="margin-left:0px;">1, rue Jos Seyler</p>
				<p style="margin-left:0px;margin-bottom:30px;">L-8521 BECKERICH</p>
				<p style="margin-left:0px;"><i class="fa fa-phone fa-lg"></i> 266 233</p>
				<p style="margin-left:0px;"><i class="fa fa-fax fa-lg"></i> 266 233 33</p>
			</div>
			<div style="float:left; width:150px;">
				<p style="margin-left:0px;font-size:20px;font-family: 'Open Sans Condensed', sans-serif;">Keramikfabrik</p>
				<p style="margin-left:0px;">116, route de Luxembourg</p>
				<p style="margin-left:0px;">L-4221 ESCH-SUR-ALZETTE</p>
				<p style="margin-left:0px;"><i class="fa fa-phone fa-lg"></i> 265 503 92</p>
				<p style="margin-left:0px;"><i class="fa fa-fax fa-lg"></i> 265 523 92</p>
			</div>
		</article>
		<article> <!-- GMap -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2579.271567288394!2d5.899687999999999!3d49.724514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eaade0121c6011%3A0x51ef380e63d2139d!2sAutisme+Luxembourg+Asbl!5e0!3m2!1sde!2sde!4v1410443969301" width="888" height="300" frameborder="0" style="border:0"></iframe>
		</article>
	</section>
	<div class="clearfloat"></div>
	
	<?php 
		//echo "dernière modification: " . date ("F d Y H:i:s.", filemtime('contact.php')); 
		?>  
<div class="clearbottom"></div>
</section>
<div class="clearfloat">
</div>
	<? require_once('incl/footer.inc.php'); ?>
		<!--footer incl -->
    </div>
	<div class="clearfloat">
	</div>
	<br /><br />
	
</body>
</html>
