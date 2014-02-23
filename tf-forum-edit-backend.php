<?php 
	require_once('tf-config.php');
	require_once('tf-sql-connect.php');
	$subject=addslashes(strip_tags(trim($_POST['subject'])));
	$content=addslashes(strip_tags(trim($_POST['content'])));
	$threadid=addslashes(strip_tags($_POST['threadid']));
	$treeid=addslashes(strip_tags($_POST['treeid']));
	$from=addslashes(strip_tags($_POST['from']));
	//error string flags
	$flag_incomplete=0;
	$flag_sqlfail=0;
	//check incomplete
	if($subject=='' || $content=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	//UPDATE 
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="UPDATE $tbl_name SET subject='$subject',content='$content' WHERE threadid='$threadid' AND treeid='$treeid'";
		$query_result=mysql_query($sql_query);
		if(!$query_result)
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
	}
	mysql_close($con);
	//feedback to user	
	if($err_occured==1)
	{
		$err_string="location:tf-forum-edit.php?from=" . $from . "&threadid=" . $threadid . "&treeid=" . $treeid . "&page=" . $returnpage . "&ref=";
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . "forumeditsqlerror";
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . "forumeditincomplete";
		}
	}
	else
	{
		if($treeid==0)
		{
			$err_string="location:tf-forum.php";
		}
		else
		{
			$err_string="location:tf-forum-thread.php?threadid=" . $threadid;
		}
	}
	header($err_string);
	
?>
