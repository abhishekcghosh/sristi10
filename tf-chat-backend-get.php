<?php
	require_once('tf-config.php');
	require_once('tf-date-func.php'); 
	require_once('tf-sql-connect.php'); 
	//Variables assigned
	$cid=addslashes(strip_tags(trim($_GET['s'])));
	//Get CONTENT
	$tbl_name=__SQL_TABLE_PREFIX__ . "chat";
	$sql_query="SELECT cid,cuser,cdatetime,ctext FROM $tbl_name WHERE cid>'$cid' ORDER BY cid ASC";
	$query_result=mysql_query($sql_query);
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
	echo '<messages>';
	while($row=mysql_fetch_array($query_result))
	{
		echo "<message><id>" . $row['cid'] . "</id><time>" . date_ip_to_op($row['cdatetime']) . "</time><user>" . $row['cuser'] . "</user><text>" . stripslashes($row['ctext']) . "</text></message>";
	}
	if(!$query_result) 
	{
		echo "<message><id>0</id><time>" . date(__DATE_FORMAT_OP__) . "</time><user>ERROR</user><text>Can't fetch data from server</text></message>.";
	}
	echo '</messages>';
	mysql_close($con);
?>
