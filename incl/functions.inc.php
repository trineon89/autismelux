<?php
	error_reporting(0);
	require_once('config.inc.php');
	function get_Category_tags($classe) {
		$sqlquery="SELECT * FROM tblCategory WHERE (`dtClasse` LIKE '$classe')";
		$result = mysql_query($sqlquery);
		if(mysql_num_rows($result) > 0) {
			$htmlcode="<ul class=\"tags\">";
			while($roow = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$htmlcode.=" <li><a href=\"produit.php?class=$roow[dtClasse]&category=$roow[idCategory]\" class=\"tag\">$roow[dtDescriptif]</a></li>";
			}
		$htmlcode.="</ul>";
		} else {
			$htmlcode.='';
		}
		return $htmlcode;
	}
	function autolink_get($pageid)
	{
	/* AUTOLINK FUNCTION
		OUTPUTS A LIST */	
		$sqlquery="SELECT * FROM tblLink WHERE (`dtIdPage` LIKE '$pageid')";
		$result = mysql_query($sqlquery);
		if(mysql_num_rows($result) > 0) {
			$linklist="<ul>";
			while($roow = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$linklist.="<li class=\"autolink\"><a href=\"$roow[dtLink]\">$roow[dtLinkName]</a></li><br />";
			}
			$linklist.="</ul>";
		} else { $linklist =''; }
		return $linklist;
	}
	function autoreclame_get()
	{
	/* AUTORECLAME FUNCTION
		OUTPUTS A LIST */	
		$sqlquery="SELECT * FROM tblReclame ORDER BY RAND()";
			$result = mysql_query($sqlquery);
		if(mysql_num_rows($result) > 0) {
			$linklist="<div class=\"reclame\"><p>";
			$roow = mysql_fetch_array($result, MYSQL_ASSOC) ;
				$linklist.=$roow[dtSlogan];
			
			$linklist.="</p></div>";
		} else { $linklist ='empty'; }
		return $linklist;
	}
	
	function get_jobs()
	{
		$sqlquery="SELECT DISTINCT idJob,dtTitre,dtSouTitre FROM tblJobs";
		$result = mysql_query($sqlquery);
		if(mysql_num_rows($result) > 0) {
			$jobs='<ul class="rig">';
			while($roow = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$jobs.="<li><a href=\"page.php?page=jobs&offer=$roow[idJob]\"><p>$roow[dtTitre]</p></a><i>$roow[dtSouTitre]</i></li>";
			}
			$jobs.='</ul>';
		} else {
			$jobs='<p>Pour l\'instant, on propose pas de poste.</p>';
		}
		return $jobs;
	}
	function get_job($jobid)
	{
		$sqlquery="SELECT * FROM tblJobs WHERE idJob=$jobid";
		$result = mysql_query($sqlquery) ;
		$raw = mysql_fetch_array($result);
		$job="<li>";
		$job.="<h2>Offre d'emploi: $raw[dtTitre]</h2>";
		$job.="</li><p class=\"back fa fa-chevron-left\"><a style=\"font-family:sans-serif;\" href=\"page.php?page=jobs\">Retour</a></p>";
		return $job;
	}
	
	function is_linkable($text,$pageid)
	{
		if (($text == '<p>!autolink!</p>') OR ($text == '!autolink!') OR ($text == '<h2>!autolink!</h2>'))
		return autolink_get($pageid); 
		else return $text;
	}
	
	function is_reclame($text)
	{
		if ($text == '<p>!reclame!</p>')
		return autoreclame_get();
		else return $text;
	}
	
	function get_all_media()
	{
		$sqlq="SELECT * FROM tblMedia ORDER BY dtCategory,dtTitle ASC";
		$result = mysql_query($sqlq) or die(mysql_error());
		if(mysql_num_rows($result) > 0)
		{
			$counti=0;
			while($roow = mysql_fetch_array($result, MYSQL_ASSOC)) {
				if ($counti == 0)  // FIRST EXECUTION for every Category
				{
					$counti++;
					$category=$roow[dtCategory];
					$mediaresult="<h2 style=\"margin-bottom:0px;\">".$category."</h2><ul class=\"rig\">";
				}
				$mediaresult.= "<li><img src=\".".$roow[dtImage]."\" /><p>".$roow[dtTitle]."</p></li>";
				if($category<>$roow[dtCategory]) //change of category
				{
					echo "</ul>";
					$counti=0;
				}
			}
		} else {
			$mediaresult= "NO MEDIA";
		}
		return $mediaresult;
	}
	
	function daily_menu_exists()
	{
		$sqlmenu="SELECT * FROM tblMenu WHERE WEEKOFYEAR(fldDate) = WEEKOFYEAR(NOW());";
		$result = mysql_query($sqlmenu) or die(mysql_error());
			if(mysql_num_rows($result) > 0)
		{ 
			$todayarr=getdate();
			$today=$todayarr['wday'];
		switch ($today)
			{
				case 1: 
					return true;
					break;
				case 2: 
					return true;
					break;
				case 3: 
					return true;
					break;
				case 4: 
					return true;
					break;
				case 5: 
					return true;
					break;
				default:
					return false;
		} //endswitch  
		} else {
			return false;
		}	
	}
		
	function daily_menu()
	{
		$menu="";
		$todayarr=getdate();
		$today=$todayarr['wday'];
		$sqlmenu="SELECT * FROM tblMenu WHERE WEEKOFYEAR(fldDate) = WEEKOFYEAR(NOW());";
		$result = mysql_query($sqlmenu) or die(mysql_error());
		$row = mysql_fetch_array($result) or die(mysql_error());
		
		switch ($today)
		{
			case 1: /* Méindeg */
				$menu=$row['fldLundi'];
				break;
			case 2: /* Daaschteg */
				$menu=$row['fldMardi'];
				break;
			case 3: /* Mettwoch */
				$menu=$row['fldMercredi'];
				break;
			case 4: /* Donneschteg */
				$menu=$row['fldJeudi'];
				break;
			case 5: /* Freideg */
				$menu=$row['fldVendredi'];
				break;
			default:
			$menu="Pas de menu pour ajourd'hui";
		}
		return $menu;
	}
	
	function get_agenda_mainpage()
	{
		$sql = "SELECT * FROM `tblevent_calendar` WHERE `event_date` > NOW() LIMIT 2;";
		$result = mysql_query($sql) or die(mysql_error()); $resulthtml='';
		if(mysql_num_rows($result) > 0) {
			while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$resulthtml.="<a href=\"page.php?page=agenda&quickjump=yes&date=$row[event_date]\"><i class=\"fa fa-calendar\"></i><p class=\"agendatitle\">".$row[title]."</p></a>";
				$resulthtml.="<p class=\"agendap\">".substr($row[description],0,40)."...</p>";
			}
		}
		RETURN $resulthtml;
	}
?>