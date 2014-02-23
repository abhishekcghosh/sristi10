<?php 
	require_once('tf-config.php');
	require_once('tf-sql-connect.php');
	require_once('tf-session-info.php');
	if(isset($_GET['uid']))
	{
		$uid=addslashes(strip_tags($_GET['uid']));
	}
	else
	{
		header("location:tf-updates.php");
	}
	if($li_privilege!='ADMIN')
	{
		header("location: tf-updates.php");
	}
	//error string parts (flags)
	$flag_sqlfail=0;
	$tbl_name=__SQL_TABLE_PREFIX__ . "updates";
	$sql_query="DELETE FROM $tbl_name WHERE uid='$uid'";
	$query_result=mysql_query($sql_query);
	if(!$query_result) 
	{
		$flag_sqlfail=1;
		$err_occured=1;
	}
	mysql_close($con);

	//feedback to user	
	$err_string="location:tf-updates.php";
	if($err_occured==1)
	{
		$err_string=$err_string . "&ref=";
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . "updatedeletesqlerror";
		}
	}
	header($err_string);
?>