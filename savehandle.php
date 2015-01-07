<?php
require_once("incl/config.inc.php");

if(isset($_GET['addCategory'])) {
			if ($_GET['addCategory']=="true") {
				// SUBMITED
				$sqlquery="INSERT INTO `tblCategory` (`idCategory` ,`dtDescriptif` ,`dtClasse`) 
					VALUES (UCASE('$_POST[input]'),'$_POST[input1]','$_POST[select]') ;";
				$result = mysql_query($sqlquery);
			}
		header("Location: http://autisme-alpha.netty.lu/formoid.php?save=ok&id=$_POST[input]");
		}
		
if(isset($_GET['addnew'])) {
			if ($_GET['addnew']=="true") {
				// SUBMITED
				$sqlquery="INSERT INTO `tblProduit` (`idProduit` ,`dtName` ,`dtCategory` ,`dtText`) 
					VALUES ('$_POST[idProduit]','$_POST[dtName]','$_POST[dtCategory]','$_POST[dtText]') ;";
				$result = mysql_query($sqlquery);
			}
		}
		?>
	?>