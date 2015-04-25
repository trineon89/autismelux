<?php 
if(isset($_GET["page"]))
{ ?><!--
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/smart-grid.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/footer_min.css">
<link rel="stylesheet" href="../css/fontawesome/css/font-awesome.min.css">-->
<link rel="stylesheet" href="../css/sidemenu.css">
<nav class="sidenav">
	<ul>
	<?php 
		$arr_notreass=array("Notre association", "about", "historique", "cons_admin", "organigramme", "equipe", "objectifs", "valeurs", "usagers", "partenaires", "admissions");
		$arr_autisme=array("autisme", "autismewhat", "charte", "pec", "methodeseduc");
		$arr_services=array("services", "hebergement", "hebergement#foyer1", "hebergement#foyer2", "cdj", "consult", "ses", "ateliers", "atelier_couture", "atelier_ceramique", "atelier_papier", "atelier_jardinage", "atelier_buanderie", "atelier_imprimerie", "atelier_backoffice", "atelier_info-media", "atelier_cuisine", "atelier_confiserie", "sfp", "jobcoach", "cia", "sia", "cdl", "sad", "sc");
		$arr_heberg=array("hebergement", "hebergement#foyer1", "hebergement#foyer2");
		$arr_atelier=array("ateliers", "atelier_couture", "atelier_ceramique", "atelier_papier", "atelier_jardinage", "atelier_buanderie", "atelier_imprimerie", "atelier_backoffice", "atelier_info-media", "atelier_cuisine", "atelier_confiserie");
		$arr_cia=array("cia", "sia", "cdl", "sad", "sc");
		$arr_produits=array("nosproduits", "artisanal", "infomedia", "pdb");
		$arr_contact=array("contact");
		$arr_don=array("don", "benevol", "slogan");
	if(in_array($_GET["page"], $arr_notreass)) 
	{ ?>
		<li><div class="pseudosel"><a href="page.php?page=about">Notre association</a></div>
			<ul>
				<li><a href="page.php?page=about">Qui sommes-nous?</a></li>
				<li><a href="page.php?page=historique">Historique</a></li>
				<li><a href="page.php?page=cons_admin">Conseil d'administration</a></li>
				<li><a href="page.php?page=organigramme">Organigramme</a></li>
				<li><a href="page.php?page=equipe">Equipe</a></li>
				<li><a href="page.php?page=objectifs">Nos objectifs</a></li>
				<li><a href="page.php?page=valeurs">Nos valeurs</a></li>
				<li><a href="page.php?page=usagers">Nos usagers</a></li>
				<li><a href="page.php?page=partenaires">Nos partenaires</a></li>
				<li><a href="page.php?page=admissions">Admissions</a></li>
			</ul>
		</li>
		<div class="breaksidenav"></div>
	<?
	}
	if(in_array($_GET["page"], $arr_don)) 
	{ ?>
			<li><div class="pseudosel"><a href="page.php?page=benevol">Bénévol</a></div>
			<ul>
				<li><a href="page.php?page=benevol">Devenir Bénévol</a></li>
				<li><a href="page.php?page=don">Faites un don</a></li>
				<li><a href="page.php?page=slogan">Ecoute, compétence, dynamisme</a></li>
			</ul>
			</li>
	<?
	}
	if(in_array($_GET["page"], $arr_autisme)) 
	{ ?>
		<li><div class="pseudosel"><a href="page.php?page=autisme">Autisme</a></div>
			<ul>
				<li><a href="page.php?page=autisme">Qu'est-ce que l'autisme?</a></li>
				<li><a href="page.php?page=charte">Charte par les pers. autistes</a></li>
				<li><a href="page.php?page=pec">Prise en charge</a></li>
				<li><a href="page.php?page=methodeseduc">Méthodes éducatives</a></li>
			</ul>
		</li>
		<div class="breaksidenav"></div>
	<?
	}
	if(in_array($_GET["page"], $arr_services)) 
	{ ?>
		<li><div class="pseudosel"><a href="page.php?page=services">Nos services</a></div>
			<ul>
				<li><a href="page.php?page=hebergement">Hébergement</a>
					<? if(isset($_GET["page"])) { if(in_array($_GET["page"],$arr_heberg)) { ?>
					<ul>
						<li><a href="page.php?page=hebergement#foyer1">Foyer 1</a></li>
						<li><a href="page.php?page=hebergement#foyer2">Foyer 2</a></li>
					</ul>
					<? }} ?>
				</li>
				<li><a href="page.php?page=cdj">Centre de jour</a></li>
				<li><a href="page.php?page=consult">Consultation</a></li>
				<li><a href="page.php?page=ses">Soins et santé</a></li>
				<li><a href="page.php?page=ateliers">Ateliers</a>
				<? if(isset($_GET["page"])) { if(in_array($_GET["page"],$arr_atelier)) { ?>
					<ul>
						<li><a href="page.php?page=atelier_couture">Couture créative</a></li>
						<li><a href="page.php?page=atelier_ceramique">Ceramique</a></li>
						<li><a href="page.php?page=atelier_papier">Papier recyclé</a></li>
						<li><a href="page.php?page=atelier_jardinage">Jardinage</a></li>
						<li><a href="page.php?page=atelier_buanderie">Buanderie</a></li>
						<li><a href="page.php?page=atelier_imprimerie">imprimerie</a></li>
						<li><a href="page.php?page=atelier_backoffice">Back-office</a></li>
						<li><a href="page.php?page=atelier_info-media">Info-média</a></li>
						<li><a href="page.php?page=atelier_cuisine">Cuisine</a></li>
						<li><a href="page.php?page=atelier_confiserie">Confiserie</a></li>
					</ul>
				<? }} ?>
				</li>
				<li><a href="page.php?page=sfp">SFP</a></li>
				<li><a href="page.php?page=jobcoach">Jobcoach</a></li>
				<li><a href="page.php?page=cia">CIA</a>
				<? if(isset($_GET["page"])) { if(in_array($_GET["page"],$arr_cia)) { ?>	
					<ul>
						<li><a href="page.php?page=sia">SIA</a></li>
						<li><a href="page.php?page=cdl">CDL</a></li>
						<li><a href="page.php?page=sad">Service à Domicile</a></li>
						<li><a href="page.php?page=sc">Service de Consultation</a></li>
					</ul>
				<? }} ?>
				</li>
			</ul>
		</li>
		<div class="breaksidenav"></div>
	<?
	}
	if(in_array($_GET["page"], $arr_produits)) 
	{ ?>
		<li><div class="pseudosel"><a href="prod_overview.php?page=nosproduits">Nos produits</a></div>
			<ul>
				<li><a href="prod_overview.php?classe=artisanal">Produits artisanal</a></li>
				<li><a href="prod_overview.php?classe=infomedia">Produits info-média</a></li>
				<li><a href="prod_overview.php?classe=pdb">Produits de bouche</a></li>
			</ul>
		</li>
		<div class="breaksidenav"></div>
	<?
	}
	if(in_array($_GET["page"], $arr_contact)) 
	{ ?>
		<li><div class="pseudosel"><a href="page.php?page=contact">Contact</a></div>
			<ul>
				<li><a href="page.php?page=contact">Nous contacter</a></li>
				<li><a href="page.php?page=locate">Nous localisez</a></li>
			</ul>
		</li>
		<div class="breaksidenav"></div>
	<? } ?>
	</ul>
</nav>
<? } else echo "<!-- NO SIDE MENU -->" ?>