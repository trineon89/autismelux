<?php
	session_start();
	if (!isset($_SESSION['lang'])) {
		$_SESSION['lang']='fr';
	}
	// log php errors
@ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')
@ini_set('display_errors','Off'); // enable or disable public display of errors (use 'On' or 'Off')
@ini_set('error_log','./log/php-errors.log'); // path to server-writable log file
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Welcome!</title>
	<?php if(isset($_GET["editable"])) 
	{ echo '<script src="incl/ckeditor/ckeditor.js"></script>';$editable=true; 
	?>
	<script>
		function Save() {
			document.getElementById("hidden_TITLE_big_").value=document.getElementById("_TITLE_big_").innerHTML;
			document.getElementById("hidden_CONTENT_first_").value=document.getElementById("_CONTENT_first_").innerHTML;
			document.getElementById("hidden_CONTENT_second_").value=document.getElementById("_CONTENT_second_").innerHTML;
			document.editform.submit()
		}
	</script>
	<script>CKEDITOR.dtd.$removeEmpty['span'] = false;</script>
	<?
	} else {$editable=false;} ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/smart-grid.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/footer_min.css">
	<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="css/menu.css">-->
    <meta name="robots" content="noindex" />   
</head>
<body>
<div id="page">
	<header>
		<div id="headerback"><? include('incl/header.inc.php'); ?></div>
	</header><?php
		include('incl/config.inc.php');
		$pageselect=$_GET["page"];
		/* ### SPECIAL PAGES ### */
		?><div class="container row" id="content"><?
		switch ($pageselect)
		{
			case 'actualites':
				/* ### ACTUALITES PAGE ### */
				echo "actualites";
			break;
			case 'agenda':
				/* ### AGENDA PAGE ### */
				echo "agenda";
			break;
			case 'media':
				/* ### MEDIA PAGE ### */
				include('incl/media.php');
			break;
			case 'jobs':
				/* ### JOBS PAGE ### */
				include('incl/jobs.php');
			break;
			case 'takeaway' :
				/* ### AGENDA PAGE ### */
				/* ### par Yannick ### */
				include('incl/menusemaine.php');			
				/* ### par Yannick  - END ### */
			break;
			case 'prodact' :
				/* ### PRODUIT ACTUELLE PAGE ### */
				echo "prodact";
			break;
			default:
		
		/* ### DEFAULT PAGES ### */
		if(isset($_POST["hidden_TITLE_big_"]))
		{
			$newval=$_POST["hidden_TITLE_big_"];
			if (strpos($newval,'<!--')>=0) { $newval=substr_replace($newval,'',strpos($newval,'<!--')); }
			$newval=addslashes($newval);
			if ($_SESSION['lang']=='fr') {
				$sqlupdatequery="UPDATE tblContent Set `dtContentFr`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_TITLE_big_')";
			} else {
				$sqlupdatequery="UPDATE tblContent Set `dtContentLu`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_TITLE_big_')";
			}
			$result = mysql_query($sqlupdatequery);
		}
		if(isset($_POST["hidden_CONTENT_first_"]))
		{
			$newval=$_POST["hidden_CONTENT_first_"];
			if (strpos($newval,'<!--')>=0) { $newval=substr_replace($newval,'',strpos($newval,'<!--')); }
			$newval=addslashes($newval); //#39;
			if ($_SESSION['lang']=='fr') {
				$sqlupdatequery="UPDATE tblContent Set `dtContentFr`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_CONTENT_first_')";
			} else {
				$sqlupdatequery="UPDATE tblContent Set `dtContentLu`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_CONTENT_first_')";
			}
			$result = mysql_query($sqlupdatequery);
		}
		if(isset($_POST["hidden_CONTENT_second_"]))
		{
			$newval=$_POST["hidden_CONTENT_second_"];
			if (strpos($newval,'<!--')>=0) { $newval=substr_replace($newval,'',strpos($newval,'<!--')); }
			$newval=addslashes($newval);
			if ($_SESSION['lang']=='fr') {
				$sqlupdatequery="UPDATE tblContent Set `dtContentFr`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_CONTENT_second_')";
			} else {
				$sqlupdatequery="UPDATE tblContent Set `dtContentLu`='$newval' WHERE (`dtSite` LIKE '$pageselect'  AND dtType LIKE  '_CONTENT_second_')";
			}
			$result = mysql_query($sqlupdatequery);
		}
	
		$result = mysql_query("SELECT * FROM tblContent WHERE dtSite == `$pageselect`");
		

		
		if ($_SESSION['lang']=='fr') {
			$result = mysql_query("SELECT dtContentFr FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_TITLE_big_'");
			$title_big = mysql_fetch_array($result);
			$result = mysql_query("SELECT dtContentFr FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_CONTENT_first_'");
			$title_cofi = mysql_fetch_array($result);
			$result = mysql_query("SELECT dtContentFr FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_CONTENT_second_'");
			$title_cose = mysql_fetch_array($result);
		} else {
			$result = mysql_query("SELECT dtContentLu FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_TITLE_big_'");
			$title_big = mysql_fetch_array($result);
			$result = mysql_query("SELECT dtContentLu FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_CONTENT_first_'");
			$title_cofi = mysql_fetch_array($result);
			$result = mysql_query("SELECT dtContentLu FROM tblContent WHERE dtSite LIKE '$pageselect' AND dtType LIKE  '_CONTENT_second_'");
			$title_cose = mysql_fetch_array($result);
		}

		
		/* ERROR 404 */
		$sqlupdatequery="SELECT COUNT(*) from tblContent WHERE `dtSite` LIKE '$pageselect'";
		//echo $sqlupdatequery;
		$result = mysql_query($sqlupdatequery);
		$countlines = mysql_fetch_row($result);
		if($countlines[0]<=0) {
			?><h2 style="text-align:center;">WHOOPS!</h2><p style="text-align:center;">Cette page n'est pas encore accessible.</p><?
		}
		
		
	if($editable) {
		?>
		<form action="page.php?page=<? echo $_GET["page"];?>" method="POST" name="editform">
			<div contenteditable="true" id="_TITLE_big_"><?php echo $title_big[0]; ?><!-- _TITLE_big_ --></div>
			<div class="row">
				<div class="columns four">				
					<div contenteditable="true" id="_CONTENT_second_"><?php echo $title_cose[0]; ?><!-- _CONTENT_second_ --></div>
				</div>
				<div class="columns eight">
					<div contenteditable="true" id="_CONTENT_first_"><?php echo $title_cofi[0]; ?><!-- _CONTENT_first_ --></div>
				</div>
			</div>
			<!-- SAVE BUTTON -->
			<div class="SaveButton"><input type="button" value="Save" onclick="Save()"></div>
			<input type="hidden" id="hidden_TITLE_big_" name="hidden_TITLE_big_">
			<input type="hidden" id="hidden_CONTENT_first_" name="hidden_CONTENT_first_">
			<input type="hidden" id="hidden_CONTENT_second_" name="hidden_CONTENT_second_">
		</form>
		
		
		<?
	} else {
			$titler_second=$title_cose[0];
			$titler_second=is_linkable($titler_second,$pageselect);
			$reclamefield=$title_tise[0];
			$reclamefield=is_reclame($reclamefield);
		?>
			<div><?php echo $title_big[0]; ?><!-- _TITLE_big_ h1--></div>
			<div class="row">
				<div class="columns four">
					<div>
					<?php 
						require_once('./incl/sidemenu.inc.php');
						echo $titler_second; 
					?><!-- _CONTENT_second_ p--></div>
				</div>
				<div class="columns eight">
					<div><?php echo $title_cofi[0]; ?><!-- _CONTENT_first_ p--></div>
				</div>
			</div>
		<?
	}
} // endswitch ?>
</div>	<!-- END DIV CONTENT -->
<div class="clearfloat">
</div>
	<? require_once('incl/footer.inc.php'); ?>
		<!--footer incl -->
    
	<div class="clearfloat">
	</div>
	<br /><br />

</div>
</body>
</html>