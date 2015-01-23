<?php

error_reporting(0);
require_once("functions.inc.php");

$sql = "SELECT * FROM tblevent_calendar WHERE `event_date` = '".mysql_real_escape_string($_REQUEST["date"])."'";
$sql_result = mysql_query ($sql) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) {
	echo "<h2>".stripcslashes($row["title"])."</h2>";
	echo "<span>".stripcslashes($row["description"])."</span>";
}
?>