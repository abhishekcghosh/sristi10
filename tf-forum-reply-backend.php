<?php
	require_once('tf-config.php');
	require_once('tf-sql-connect.php');
	//Variables assigned
	$contentid=0;
	$dateofentry=date(__DATE_FORMAT_IP__);
	$author=$_POST['author'];
	$subject=addslashes(strip_tags(trim($_POST['subject'])));
	$content=addslashes(strip_tags(trim($_POST['content'])));
	$replyto=addslashes(strip_tags(trim($_POST['replyto'])));
	$threadid=addslashes(strip_tags($_POST['threadid']));
	$treeid=addslashes(strip_tags($_POST['treeid']));
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_toomanyreplies=0;
	$flag_toomanylevels=0;
	$flag_sqlfail=0;
	//check incomplete
	if($subject=='' || $content=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	//GET parent's reply no and update
	$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
	$sql_query="SELECT replies,level FROM $tbl_name WHERE threadid='$threadid' AND treeid='$treeid'";
	$query_result=mysql_query($sql_query);
	if(!$query_result)
	{
		$flag_sqlfail=1;
		$err_occured=1;
	}
	$result_row=mysql_fetch_array($query_result);
	if(!$result_row)
	{
		$flag_sqlfail=1;
		$err_occured=1;
	}
	$reply_count=$result_row['replies'];
	$level_count=$result_row['level'];
	$reply_count++;
	$level_count++;
	if($reply_count>9999)
	{
		$flag_toomanyreplies=1;
		$err_occured=1;
	}	
	if($level_count>25)
	{
		$flag_toomanylevels=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="UPDATE $tbl_name SET replies='$reply_count' WHERE threadid='$threadid' AND treeid='$treeid'";
		$query_result=mysql_query($sql_query);
		$reply_length=strlen($reply_count);
		$padding='';
		for($count=1;$count<=4-$reply_length;$count++)
		{
			$padding=$padding . "0";
		}
		$treeid = $treeid . "." . $padding . $reply_count;
		//Put CONTENT
		$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
		$sql_query="INSERT INTO $tbl_name(threadid,treeid,level,replies,repliesdeleted,replyto,dateofentry,author,subject,content) VALUES('$threadid','$treeid','$level_count','0','0','$replyto','$dateofentry','$author','$subject','$content')";
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
		$err_string='location:tf-forum-reply.php?threadid=' . $threadid . '&treeid=' . $treeid . '&ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'forumreplysqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'forumreplyincomplete';
		}
		else if($flag_toomanyreplies==1)
		{
			$err_string=$err_string . 'forumreplytoomanyreplies';
		}
		else if($flag_toomanylevels==1)
		{
			$err_string=$err_string . 'forumreplytoomanylevels';
		}
	}
	else
	{
		$err_string='location:tf-forum-thread.php?threadid=' . $threadid;
	}
	header($err_string);
?>
