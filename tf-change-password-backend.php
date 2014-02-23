<?php

	require_once('tf-config.php');
	require_once('tf-sql-connect.php'); 
	require_once('tf-session-info.php');
	if($li_privilege!='GUEST' && $li_privilege!='ADMIN') { header("location: tf-login.php"); }
	
	//Variables assigned
	$password=addslashes(strip_tags(trim($_POST['password'])));
	$retype=addslashes(strip_tags(trim($_POST['retype'])));
	$md5password=md5($password);
	
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_mismatch=0;
	$flag_sqlfail=0;

	//check if all data present
	if($password=='' || $retype=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	
	//check for mismatch
	if($password!=$retype)
	{
		$flag_mismatch=1;
		$err_occured=1;
	}

	//email ID validation + password match, then login
	if($err_occured!=1)
	{	
		
		$tbl_name=__SQL_TABLE_PREFIX__ . "members";
		$sql_query="UPDATE $tbl_name SET password='$md5password' WHERE emailid='$li_user'";
		$query_result=mysql_query($sql_query);
		if(!$query_result) 
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
		
		mysql_close($con);
	}
	

	//feedback to user
	$err_string="location: tf-change-password.php?ref=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "changesqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "changeincomplete";
	}
	else if($flag_mismatch==1)
	{
		$err_string=$err_string . "changemismatch";
	}
	else
	{
		$err_string=$err_string . "changesuccess";
	}
	header($err_string);

?>