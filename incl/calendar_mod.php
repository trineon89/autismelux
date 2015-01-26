<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample calendar page by PHPJabbers.com</title>
<link href="../css/calendar.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h2>Agenda</h2>
<div id="Calendar"> </div>
<div id="Events"> </div>
<script language="javascript" src="incl/calendar.js"></script>
<?php
	if ($_GET["quickjump"]=="yes")
	{
		$date=$_GET["date"];
		$fields = explode('-', $_GET["date"]);
		$selday=$fields[2];
		$selmonth=$fields[1];
		$selyear=$fields[0];
		echo "<script>LoadMonth('$selmonth', '$selyear')</script>";
		echo "<script>LoadEvents('$date')</script>";
	}
?>

</body>
</html>