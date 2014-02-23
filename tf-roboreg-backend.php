<?php

	require_once('tf-config.php');
	require_once('tf-sql-connect.php'); 

	//Variables assigned
	//set default
	$txtcollege="";
	$chksaveaqua=1; 
	$chkrobosoccer=1;
	$chkpcknplc=1; 
	//get variables
	$firstname=addslashes(strip_tags($_POST['firstname']));
	$lastname=addslashes(strip_tags($_POST['lastname']));
	$college=addslashes(strip_tags($_POST['college']));
	if(isset($_POST['txtcollege'])) { $txtcollege=addslashes(strip_tags($_POST['txtcollege'])); }
	$groupname=addslashes(strip_tags($_POST['groupname']));
	$address=addslashes(strip_tags($_POST['address']));
	$phone=addslashes(strip_tags($_POST['phone']));
	$emailid=addslashes(strip_tags($_POST['emailid']));
	if(isset($_POST['chksaveaqua'])) { $chksaveaqua=$_POST['chksaveaqua']; }
	if(isset($_POST['chkrobosoccer'])) { $chkrobosoccer=$_POST['chkrobosoccer']; }
	if(isset($_POST['chkpcknplc'])) { $chkpcknplc=$_POST['chkpcknplc']; }
	
	//create interest string and survey parameters
	//$istring=""; 
	if($chksaveaqua=="on") {  $chksaveaqua="YES"; } else { $chksaveaqua="NO"; }
	if($chkrobosoccer=="on") {  $chkrobosoccer="YES"; } else { $chkrobosoccer="NO"; }
	if($chkpcknplc=="on") {  $chkpcknplc="YES"; } else { $chkpcknplc="NO"; }
	
	//college setting
	if($txtcollege!="") { $collegefinal=$txtcollege; } else { $collegefinal=$college; }
	
	//$password=substr(md5(rand(0,1000000)),1,10);
	//$password='password';
	//$md5password=md5($password);
	
	//error string flags
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_success=0;

	//echo $emailid . '<br>' . $firstname . '<br>' . $lastname . '<br>' . $college . '<br>'.  $city . '<br>' . $year;
	//check if all data present
	if($firstname=='' || $lastname=='' || $college=='' || $groupname=='' || $address=='' || $phone=='' || $emailid=='') // || $address=='' || $phone=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	
		 
	//validate legal emailid
	/*if (!filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}*/

	//emailID/collegeRoll existence check, then entry
	if($err_occured!=1)
	{
		//put info
		$tbl_name=__SQL_TABLE_PREFIX__ . "roboreg"; 
		$sql_query_2="INSERT INTO $tbl_name(firstname,lastname,college,groupname,address,phone,emailid,saveaqua,robosoccer,locomotion,round) VALUES('$firstname','$lastname','$collegefinal','$groupname','$address','$phone','$emailid','$chksaveaqua','$chkrobosoccer','$chkpcknplc','1')";
		$query_result_2=mysql_query($sql_query_2);
		if(!$query_result_2)
		{
			$flag_sqlfail=1;
		}
		else
		{
			{
				$flag_success=1;
				//survey sql
			}
		}
	}		
		mysql_close($con);

//feedback to user	
	$err_string="location:tf-roboreg.php?ref=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "registersqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "registerincomplete";
	}
	else
	{
		$err_string=$err_string . "registersuccess";
	}
	header($err_string);
?>