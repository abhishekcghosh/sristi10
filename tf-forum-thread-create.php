<?php
	require_once('tf-config.php'); 
	require_once('tf-sql-connect.php'); 
	//Variables assigned
	$contentid=0;
	$dateofentry=date(__DATE_FORMAT_IP__);
	$author=addslashes(strip_tags(trim($_POST['author'])));
	$subject=addslashes(strip_tags(trim($_POST['subject'])));
	$content=addslashes(strip_tags(trim($_POST['content'])));
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_sqlfail=0;
	//check incomplete
	if($subject=='' || $content=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		//GET THREAD_ID
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="SELECT MAX(threadid) as mthid FROM $tbl_name";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$threadid=$result_rows['mthid'];
		$threadid++;
		//Put CONTENT
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="INSERT INTO $tbl_name(threadid,level,treeid,replies,repliesdeleted,replyto,dateofentry,author,subject,content) VALUES('$threadid','0','0','0','0','NONE','$dateofentry','$author','$subject','$content')";
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
		$err_string='location:tf-forum.php?ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'forumthreadcreatesqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'forumthreadcreateincomplete';
		}
	}
	else
	{
		$err_string='location:tf-forum.php';
	}
	header($err_string);
	
?>
