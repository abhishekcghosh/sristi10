<?php

	require_once('tf-config.php');
	require_once('tf-sql-connect.php'); 
	if($li_user!='roboticsregistrar@sristi.org.in') { header('location: tf-login.php'); }
	//get variables
	$mid=addslashes(strip_tags($_GET['mid']));
	$level=addslashes(strip_tags($_GET['level']));
	
	//error string flags
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_success=0;

	if($err_occured!=1 && ($level>=1 && $level<=3))
	{
		//put info
		$tbl_name=__SQL_TABLE_PREFIX__ . "roboreg"; 
		$sql_query_2="UPDATE $tbl_name SET round='$level' WHERE mid='$mid'";
		$query_result_2=mysql_query($sql_query_2);
		if(!$query_result_2)
		{
			$flag_sqlfail=1;
		}
		else
		{
			{
				$flag_success=1;
			}
		}
	}		
		mysql_close($con);

	header("location: tf-roboreg-list.php");
?>