<!DOCTYPE html>
<!--created by Herman Yannick -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Menu de la semaine</title>
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<meta name="robots" content="noindex, nofollow">
	</head>
	<body>
		<?php
			require_once('config.inc.php');
			$sql="SELECT * from tblMenu ORDER BY idMenu DESC LIMIT 2";
			$result=mysql_query($sql) or die("Feeler: " . mysql_error());
			echo "<ol>";
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
					<div class=\"jour\">Méindeg / Lundi</div><div class=\"menu\">".$row["fldLundi"]."</div><div class=\"aller\">".$row["fldLundiall"]."*</div>
					<div class=\"jour\">Dënschtes / Mardi</div><div class=\"menu\">".$row["fldMardi"]."</div><div class=\"aller\">".$row["fldMardiall"]."*</div>
					<div class=\"jour\">Mëttwochs / Mercredi</div><div class=\"menu\">".$row["fldMercredi"]."</div><div class=\"aller\">".$row["fldMercrediall"]."*</div>
					<div class=\"jour\">Donneschdes / Jeudi</div><div class=\"menu\">".$row["fldJeudi"]."</div><div class=\"aller\">".$row["fldJeudiall"]."*</div>
					<div class=\"jour\">Freides / Vendredi</div><div class=\"menu\">".$row["fldVendredi"]."</div><div class=\"aller\">".$row["fldVendrediall"]."*</div>
					<div class=\"jour\">Alternative 1:</div><div class=\"menu\">".$row["fldAlt1"]."</div><div class=\"aller\">".$row["fldAlt1all"]."*</div>
					<div class=\"jour\">Alternative 2:</div><div class=\"menu\">".$row["fldAlt2"]."</div><div class=\"aller\">".$row["fldAlt2all"]."*</div>
					<div class=\"info\">*voir liste allergènes ci-dessous</div>
				</div>
				<br />";
			}
		?>
		<div class="menu-semaine">
			<p class="date">Liste Allergènes</p>
			<div class="amenu">1. Arachide</div>
			<div class="amenu">2. Celeri</div>
			<div class="amenu">3. Crustacées</div>
			<div class="amenu">4. Fruits à coque</div>
			<div class="amenu">5. Gluten</div>
			<div class="amenu">6. Lait/Lactose</div>
			<div class="amenu">7. Lupin</div>
			<div class="amenu">8. Mollusques</div>
			<div class="amenu">9. Moutarde</div>
			<div class="amenu">10. Oeufs</div>
			<div class="amenu">11. Poisson</div>
			<div class="amenu">12. Sésame</div>
			<div class="amenu">13. Soja</div>
			<div class="amenu">14. Anhydride sulfureux et sulfites</div>
		</div>
		</ol>
	</body>
</html>