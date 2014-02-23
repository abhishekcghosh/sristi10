<?php 
	require_once('tf-config.php');
	require_once('tf-sql-connect.php');
	require_once('tf-session-info.php');
	if(isset($_GET['threadid']) && isset($_GET['treeid']))
	{
		$threadid=addslashes(strip_tags($_GET['threadid']));
		$treeid=addslashes(strip_tags($_GET['treeid']));
	}
	else
	{
		header("location:tf-forum.php");
	}
	if($li_privilege!='ADMIN')
	{
		header("location: tf-forum.php");
	}
	//error string parts (flags)
	$flag_sqlfail=0;
	$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
	$sql_query="DELETE FROM $tbl_name WHERE threadid='$threadid' AND treeid LIKE '$treeid%'";
	$query_result=mysql_query($sql_query);
	if(!$query_result) 
	{
		$flag_sqlfail=1;
		$err_occured=1;
	}
	if($treeid!='0') 
	{
		$treeid=substr($treeid,0,strlen($treeid)-5);
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="UPDATE $tbl_name SET repliesdeleted=repliesdeleted+1 WHERE threadid='$threadid' AND treeid='$treeid'";
		$query_result=mysql_query($sql_query);
		if(!$query_result)
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
	}
	mysql_close($con);
	//feedback to user	
	$err_string="location:tf-forum-thread.php?threadid=" . $threadid;
	if($err_occured==1)
	{
		$err_string=$err_string . "&ref=";
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . "forumdeletesqlerror";
		}
	}
	header($err_string);
?>