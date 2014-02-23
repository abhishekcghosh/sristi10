<?php
	require_once('tf-config.php'); 
	require_once('tf-sql-connect.php'); 
	//Variables assigned
	$cdate=date(__DATE_FORMAT_IP__);
	$cuser=addslashes(strip_tags(trim($_GET['u'])));
	$ctext=addslashes(strip_tags(trim($_GET['t'])));
	//Put CONTENT
	$tbl_name=__SQL_TABLE_PREFIX__ . "chat";
	$sql_query="INSERT INTO $tbl_name(cuser,cdatetime,ctext) VALUES('$cuser','$cdate','$ctext')";
	$query_result=mysql_query($sql_query);
	mysql_close($con);
?>
