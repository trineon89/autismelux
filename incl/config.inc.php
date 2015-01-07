<?php
	$sqlhost="localhost";
	$dbuser="c1autisme_alpha";
	$dbuserpw="aJ!buEZ0Jgw";
	$dbdatabase="c1autisme_alpha";
	mysql_connect($sqlhost,$dbuser,$dbuserpw);
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
	mysql_select_db($dbdatabase);
	
	require_once("functions.inc.php");
?>