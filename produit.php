<?php
	session_start();
	if (!isset($_SESSION['lang'])) {
		$_SESSION['lang']='fr';
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/smart-grid.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer_min.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/produit.css">
    <meta name="robots" content="noindex" />

	<script src='incl/jquery-1.8.3.min.js'></script>
	<script src='incl/jquery.elevatezoom.js'></script>
	<script src='incl/jquery.fancybox.pack.js'></script>
	
</head>
<body>
<div id="page">
	<header>
		<div id="headerback">
			<? require_once('incl/header.inc.php'); ?>
		</div>
	</header>
	<?php
		include('incl/config.inc.php');
		//require_once('incl/functions.inc.php');
	?>
	<!-- include of header / nav -->
<div id="sideselector" style="float:left;width:50px;height:90%;background: rgba(0,0,0,.15);">
	<ul class="cbp-vimenu">
		<li class="icon"><a title="Couture" class="tooltip" href="produit.php?class=couture"><? 
			if($_GET['class']=='couture')
				{ echo '<div class="mask"><img src="img/_thumbs/bitzerei_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/bitzerei_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Ceramique" class="tooltip" href="produit.php?class=ceramique"><? 
			if($_GET['class']=='ceramique')
				{ echo '<div class="mask"><img src="img/_thumbs/keramikfabrik_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/keramikfabrik_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Papier recyclé" class="tooltip" href="produit.php?class=papier"><? 
			if($_GET['class']=='papier')
				{ echo '<div class="mask"><img src="img/_thumbs/pabeier_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/pabeier_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Jardinage" class="tooltip" href="produit.php?class=jardinage"><? 
			if($_GET['class']=='jardinage')
				{ echo '<div class="mask"><img src="img/_thumbs/gaertnerei_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/gaertnerei_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Buanderie" class="tooltip" href="produit.php?class=buanderie"><? 
			if($_GET['class']=='buanderie')
				{ echo '<div class="mask"><img src="img/_thumbs/waescherei_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/waescherei_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Imprimerie" class="tooltip" href="produit.php?class=imprimerie"><? 
			if($_GET['class']=='imprimerie')
				{ echo '<div class="mask"><img src="img/_thumbs/dreckerei_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/dreckerei_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Back-office" class="tooltip" href="produit.php?class=backoffice"><? 
			if($_GET['class']=='backoffice')
				{ echo '<div class="mask"><img src="img/_thumbs/back-office_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/back-office_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Info-média" class="tooltip" href="produit.php?class=info-media"><? 
			if($_GET['class']=='info-media')
				{ echo '<div class="mask"><img src="img/_thumbs/info-media_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/info-media_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Cuisine" class="tooltip" href="produit.php?class=cuisine"><? 
			if($_GET['class']=='cuisine')
				{ echo '<div class="mask"><img src="img/_thumbs/kichen_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/kichen_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Confiserie" class="tooltip" href="produit.php?class=confiserie"><? 
			if($_GET['class']=='confiserie')
				{ echo '<div class="mask"><img src="img/_thumbs/confiserie_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/confiserie_thumb.png"/></a>';
			} ?></li>
		<li class="icon"><a title="Takeaway" class="tooltip" href="produit.php?class=takeaway"><? 
			if($_GET['class']=='takeaway')
				{ echo '<div class="mask"><img src="img/_thumbs/takeaway_thumb.png"/></a></div>';
			} else { 
				echo '<img src="img/_thumbs/takeaway_thumb.png"/></a>';
			} ?></li>
	</ul>
</div>
<?php 
	//####GET PRODUCT LIST####//
?>
<?php	//##DISPLAY PRODUCT CATEGORYS ------ START #####// ?>
<?php
	if(!isset($_GET['produit'] ))
	{
		if(isset($_GET['class'])) {
			$class=$_GET['class'];
			echo get_Category_tags($class);
		}
?>

<?php

	//OUTPUT THE PRODUCTITEMS list
	if(isset($_GET['class'])) { $class=$_GET['class']; 
		$sqlquery="SELECT DISTINCT idProduit, dtImage, dtName, dtText FROM `tblProduit`, `tblCategory` WHERE (`dtClasse` = '".$class."'  AND dtCategory=idCategory ";	
	}
	if(isset($_GET['category'])) { $cat=$_GET['category']; 
		$sqlquery.="AND `dtCategory` = '".$cat."')";
	} else { $sqlquery.=")"; }
	$result = mysql_query($sqlquery);
	echo "<div id=\"two-columns\" class=\"grid-container\" style=\"display:block;\"><ul class=\"rig columns-4\">";
	while($rowProduit = mysql_fetch_row($result,MYSQL_ASSOC)) {
			echo "<li> <a href=\"produit.php?";
			if(isset($_GET['class'])) { echo "class=".$_GET['class']."&"; }
			if(isset($_GET['category'])) { echo "category=".$_GET['category']."&"; }
			echo "produit=".$rowProduit['idProduit']."\"><img src=\"".$rowProduit['dtImage']."\"/>";
			echo "<h3>".$rowProduit['dtName']."</h3>";
			$thetext=$rowProduit['dtText'];
			$newtext=strip_tags($thetext,'<br>');
			echo "<p>".$thetext."</p></a></li>";
		}
	echo "</ul></div>";

?><!--
<div id="two-columns" class="grid-container" style="display:block;">
	<ul class="rig columns-4">
		<li>
			<a href="produit.php?class=couture&category=ENTTEST&produit=ENT0040301"><img src="img/prod/ent/_DSC2390.jpg" />
			<h3>Image Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></a>
		</li>
		<li>
			<img src="img/prod/ent/DSC_1853.jpg" />
			<h3>Image Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
		</li>
		<li>
			<img src="img/prod/ent/DSC_1856.jpg" />
			<h3>Image Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
		</li>
		<li>
			<img src="img/prod/ent/DSC_1867.jpg" />
			<h3>Image Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
		</li>
		<li>
			<img src="img/prod/ent/DSC_1868.jpg" />
			<h3>Image Title</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
		</li>
	</ul>
</div>-->
<?php } else { ?>
<?php	//##DISPLAY PRODUCT CATEGORYS ------ END #####// ?>
<?php	//##DISPLAY SINGLE PRODUCT  ------ START #####// ?>
<?php
	$produit=$_GET['produit'];
	$classe=$_GET['class'];
	$category=$_GET['category']; /*NOT REALLY NEEDED BECAUSE OF UNIQUE PRODUCT-ID */
	
	$query="SELECT * FROM tblProduit WHERE (`idProduit` = '$produit')";
	$res = mysql_query($query);
	$prodrow = mysql_fetch_array($res);
?>
<article class="rigsingle">
		<div id="leftsingle">
			<p class="back fa fa-chevron-left"><a style="font-family:sans-serif;" href="produit.php?class=<? echo $classe; ?>">Retour</a></p>
			<img id="zoom_01" src="<?php echo $prodrow[dtImage]; ?>" data-zoom-image="<?php echo $prodrow[dtImage]; ?>_large.jpg"  />
			<div id="gal1">
				<a href="#" data-image="<?php echo $prodrow[dtImage]; ?>" data-zoom-image="<?php echo $prodrow[dtImage]; ?>_large.jpg"> 
					<img id="img_01" class="imgthumb" src="<?php echo $prodrow[dtImage]; ?>" />
				</a>
				<a href="#" data-image="<?php echo $prodrow[dtImage]; ?>" data-zoom-image="<?php echo $prodrow[dtImage]; ?>_large.jpg"> 
					<img id="img_02" class="imgthumb" src="<?php echo $prodrow[dtImage]; ?>" />
				</a>
			</div>
		</div>
		<div id="rightsingle">
			<h3><?php echo $prodrow[dtName]; ?></h3>
			<h5><?php echo $prodrow[idProduit]; ?></h5>
			<p><?php echo $prodrow[dtText]; ?></p>
			<p class="price">€ <?php echo $prodrow[dtPrix]; ?></p>
		</div>
		<script>
			$('#zoom_01').elevateZoom({
				zoomType: "inner",
				cursor: "crosshair",
				zoomWindowFadeIn: 500,
				zoomWindowFadeOut: 750
			}); 
			
			//pass the images to Fancybox 
			$("#zoom_01").bind("click", function(e) {
				var ez = $('#zoom_01').data('elevateZoom');	
					$.fancybox(ez.getGalleryList()); 
			return false; }); 
		</script>
</article>

<?php	//##DISPLAY SINGLE PRODUCT  ------ END #####// ?>
<?php } ?>
<div class="clearfloat">
</div>
	<? require_once('incl/footer.inc.php'); ?>
		<!--footer incl -->
    </div>
	<div class="clearfloat">
	</div>
	<br /><br />
	<?php 
		//echo "dernière modification: " . date ("F d Y H:i:s.", filemtime('produit.php')); 
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

