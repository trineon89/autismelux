<!DOCTYPE html>
<!--created by Herman Yannick -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu de la semaine</title>
		<link rel="stylesheet" type="text/css" href="css/menu_e.css">
		<meta name="robots" content="noindex, nofollow">
	</head>
	<body>
		<?php
			// EXPORT WITH CutyCapt.exe --url=http://autisme.lu/menusemaine_export.php --out=20141215.png
			include "../incl/config.inc.php";
			mysql_query("SET NAMES 'utf8'");
			mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
			$sql="SELECT * from tblMenu ORDER BY idMenu DESC LIMIT 1";
			$result=mysql_query($sql) or die("Feeler: " . mysql_error());
			while ($row=mysql_fetch_assoc($result)) 
			{
				setlocale(LC_ALL,'fr_FR');
				$datedb=strtotime($row["fldDate"]);
				$datefrom=utf8_encode(strftime('du %d',$datedb));
				$month1=date('m',$datedb);
				$datedb=strtotime('+4 days',strtotime($row["fldDate"]));
				$month2=date('m',$datedb);
				if ((int)$month2>(int)$month1)
				{
					$datefrom.=utf8_encode(strftime(' %B',strtotime($row["fldDate"])));
				}
				$dateto=utf8_encode(strftime('au %d %B %G',$datedb)); 
				echo "<div class=\"menu-semaine\">
					<p class=\"date\">".$datefrom." ".$dateto."</p>
					<div class=\"jour\">Méindeg / Lundi</div><div class=\"menu\">".$row["fldLundi"]."&nbsp;<span>".$row["fldLundiall"]."</span></div>
					<div class=\"jour\">Dënschtes / Mardi</div><div class=\"menu\">".$row["fldMardi"]."&nbsp;<span>".$row["fldMardiall"]."</span></div>
					<div class=\"jour\">Mëttwochs / Mercredi</div><div class=\"menu\">".$row["fldMercredi"]."&nbsp;<span>".$row["fldMercrediall"]."</span></div>
					<div class=\"jour\">Donneschdes / Jeudi</div><div class=\"menu\">".$row["fldJeudi"]."&nbsp;<span>".$row["fldJeudiall"]."</span></div>
					<div class=\"jour\">Freides / Vendredi</div><div class=\"menu\">".$row["fldVendredi"]."&nbsp;<span>".$row["fldVendrediall"]."</span></div>
					<div class=\"jour\">Alternative 1:</div><div class=\"menu\">".$row["fldAlt1"]."&nbsp;<span>".$row["fldAlt1all"]."</span></div>
					<div class=\"jour\">Alternative 2:</div><div class=\"menu\">".$row["fldAlt2"]."&nbsp;<span>".$row["fldAlt2all"]."</span></div>
					
					<div class=\"aller\"><strong><u>ALLERGENES:</u></strong>
1.Arachide; 2.Celeri; 3.Crustacées; 4.Fruits à coque; 5.Gluten; 6.Lait/Lactose; 7.Lupin;<br />8.Mollusques; 9.Moutarde; 10.Oeufs; 11.Poisson; 12.Sésame; 13.Soja; 14.Anhydride sulfureux et sulfites</div>

				</div>
				<br />";
			}
		?>
	</body>
</html>