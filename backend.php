<?php
	session_start();
	ini_set('display_errors', 1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
    <meta name="robots" content="noindex" />   
</head>
<body>
	<div id="page">
	<?php
		require_once("incl/config.inc.php");

		
//ADD NEW PRODUCT
print_r($_POST);
		if(isset($_GET['addnew'])) {
			if ($_GET['addnew']=="true") {
				// SUBMITED
				$sqlquery="INSERT INTO `tblProduit` (`idProduit` ,`dtName` ,`dtCategory` ,`dtText`) 
					VALUES ('$_POST[idProduit]','$_POST[dtName]','$_POST[dtCategory]','$_POST[dtText]') ;";
				$result = mysql_query($sqlquery);
			}
		}
		?>
		<h2>Ajouter Produit</h2>
		<form action="backend.php?addnew=true" method="POST">
			<label>IdProduit</label>
			<input type="text" name="idProduit" id="idProduit" maxlength="10">
			<label>dtName</label>
			<input type="text" name="dtName" id="dtName">
			<label>dtCategory</label>
			<input type="text" name="dtCategory" id="dtCategory">
			<!--<select name="dtCategory" id="dtCategory">
				<option id="ENT00403" value=""></option>
			</select> -->
			<label>dtText</label>
			<textarea name="dtText" id="dtText"></textarea>
			<label>dtImage</label>
			<input type="file" id="img">
			<input type="submit" id="submit">
		</form>
		<hr>
		<h2>Ajouter Categorie de Produit, qui n'est pas encore crée</h2>
		<?php
		
// GET ALL CATEGORIES THAT ARE NOT IN THE CATEGORY TABLE
		if(isset($_GET['addCategory'])) {
			if ($_GET['addCategory']=="true") {
				// SUBMITED
				$sqlquery="INSERT INTO `tblCategory` (`idCategory` ,`dtDescriptif` ,`dtClasse`) 
					VALUES ('$_POST[idCategory]','$_POST[dtDescriptif]','$_POST[dtClasse]') ;";
				$result = mysql_query($sqlquery);
			}
		}
		
		
		
		$sqlProduit="SELECT DISTINCT dtCategory FROM tblProduit";
		$resultProduit = mysql_query($sqlProduit);
		while($rowProduit = mysql_fetch_row($resultProduit,MYSQL_ASSOC)) {
			$arrayProduit[]=$rowProduit['dtCategory'];
		}		
		$sqlCategory="SELECT idCategory FROM tblCategory";
		$resultCategory = mysql_query($sqlCategory);
		while($rowCategory = mysql_fetch_row($resultCategory,MYSQL_ASSOC)) {
			$arrayCategory[]=$rowCategory['idCategory'];
		}
		$resultdiff=array_diff ($arrayProduit,$arrayCategory);
		if ($resultdiff) {
			echo "ET FEELEN NACH DI FOLGEND CATEGORIEN<br>";
		}
		foreach ($resultdiff as $row) {
			echo " ".$row."<br>";
		}
		echo "<br>";
		
			
	?>
	<form action="backend.php?addCategory=true" method="POST">
			<label>idCategory</label>
			<input type="text" name="idCategory" id="idCategory" maxlength="10">
			<label>dtDescriptif</label>
			<input type="text" name="dtDescriptif" id="dtDescriptif">
			<label>dtClasse</label>
			<select name="dtClasse" id="dtClasse">
				<option id="couture" value="couture">couture</option>
				<option id="ceramique" value="ceramique">ceramique</option>
				<option id="papier" value="papier">papier</option>
				<option id="jardinage" value="jardinage">jardinage</option>
				<option id="buanderie" value="buanderie">buanderie</option>
				<option id="imprimerie" value="imprimerie">imprimerie</option>
				<option id="backoffice" value="backoffice">backoffice</option>
				<option id="info-media" value="info-media">info-media</option>
				<option id="cuisine" value="cuisine">cuisine</option>
				<option id="confiserie" value="confiserie">confiserie</option>
				<option id="takeaway" value="takeaway">takeaway</option>
			</select>
			<input type="submit" id="submit">
		</form>
		
	</div>
</body>
</html>