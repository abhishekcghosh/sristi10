<?php

	require_once('tf-config.php');
	require_once('tf-sql-connect.php'); 

	//Variables assigned
	//set default
	$txtcollege="";
	$chksaveaqua=1; 
	$chkrobosoccer=1;
	$chkpcknplc=1; 
	$chkcodndbug=1; 
	$chkgamingcs=1;
	$chkgamingmw=1;
	$chkgamingfifa=1;
	$chkbplan=1;
	$chkinnovation=1; 
	//get variables
	$emailid=strtolower(addslashes(strip_tags($_POST['emailid'])));
	$firstname=addslashes(strip_tags($_POST['firstname']));
	$lastname=addslashes(strip_tags($_POST['lastname']));
	$college=addslashes(strip_tags($_POST['college']));
	if(isset($_POST['txtcollege'])) { $txtcollege=addslashes(strip_tags($_POST['txtcollege'])); }
	$city=addslashes(strip_tags($_POST['city']));
	$year=addslashes(strip_tags($_POST['year']));
	$address=addslashes(strip_tags($_POST['address']));
	$phone=addslashes(strip_tags($_POST['phone']));
	if(isset($_POST['chksaveaqua'])) { $chksaveaqua=$_POST['chksaveaqua']; }
	if(isset($_POST['chkrobosoccer'])) { $chkrobosoccer=$_POST['chkrobosoccer']; }
	if(isset($_POST['chkpcknplc'])) { $chkpcknplc=$_POST['chkpcknplc']; }
	if(isset($_POST['chkcodndbug'])) { $chkcodndbug=$_POST['chkcodndbug']; }
	if(isset($_POST['chkbplan'])) { $chkbplan=$_POST['chkbplan']; }
	if(isset($_POST['chkgamingcs'])) { $chkgamingcs=$_POST['chkgamingcs']; }
	if(isset($_POST['chkgamingmw'])) { $chkgamingmw=$_POST['chkgamingmw']; }
	if(isset($_POST['chkgamingfifa'])) { $chkgamingfifa=$_POST['chkgamingfifa']; }
	if(isset($_POST['chkinnovation'])) { $chkinnovation=$_POST['chkinnovation']; }
	
	//create interest string and survey parameters
	$istring=""; 
	if($chksaveaqua=="on") {  $istring=$istring . "SaveAqua, ";  }
	if($chkrobosoccer=="on") {  $istring=$istring . "RoboSoccer, ";  }
	if($chkpcknplc=="on") { $istring=$istring . "Pick N Place, "; }
	if($chkcodndbug=="on") { $istring=$istring . "Coding and Debugging, "; }
	if($chkbplan=="on") { $istring=$istring . "Business Plan, "; }
	if($chkgamingcs=="on") { $istring=$istring . "Counter-Strike 1.6, "; }
	if($chkgamingmw=="on") { $istring=$istring . "NFS Most Wanted, "; }
	if($chkgamingfifa=="on") { $istring=$istring . "FIFA 08, "; }
	if($chkinnovation=="on") { $istring=$istring . "Innovation, "; }

	//college setting
	if($txtcollege!="") { $collegefinal=$txtcollege; } else { $collegefinal=$college; }
	
	$password=substr(md5(rand(0,1000000)),1,10);
	//$password='password';
	$md5password=md5($password);
	
	//error string flags
	$flag_incomplete=0;
	$flag_mismatch=0;
	$flag_exists_emailid=0;
	$flag_exists_collegeroll=0;
	$flag_sqlfail=0;
	$flag_success=0;
	$flag_emailid=0;
	
	//echo $emailid . '<br>' . $firstname . '<br>' . $lastname . '<br>' . $college . '<br>'.  $city . '<br>' . $year;
	//check if all data present
	if($emailid=='' || $firstname=='' || $lastname=='' || $college=='' || $city=='' || $year=='') // || $address=='' || $phone=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}

	//validate legal emailid
	if (!filter_var($emailid, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}

	//emailID/collegeRoll existence check, then entry
	if($err_occured!=1)
	{
	
		$tbl_name=__SQL_TABLE_PREFIX__ . "members";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE emailid='$emailid'";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$existing_count=$result_rows['existing'];
		if($existing_count!=0) 
		{
			$flag_exists_emailid=1;
		}
		else
		{
			//put info
			$tbl_name=__SQL_TABLE_PREFIX__ . "members"; 
			$sql_query_2="INSERT INTO $tbl_name(emailid,password,privilege,firstname,lastname,college,city,year,address,phone,interests) VALUES('$emailid','$md5password','GENERAL','$firstname','$lastname','$collegefinal','$city','$year','$address','$phone','$istring')";
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
					$tbl_name=__SQL_TABLE_PREFIX__ . "general"; 
					$sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='totalregistered'";
					$query_result_survey=mysql_query($sql_query_survey);
					if($chksaveaqua=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveysaveaqua'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkrobosoccer=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveyrobosoccer'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkpcknplc=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveypcknplc'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkcodndbug=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveycodndbug'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkbplan=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveybplan'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkgamingcs=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveygamingcs'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkgamingmw=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveygamingmw'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkgamingfifa=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveygamingfifa'"; $query_result_survey=mysql_query($sql_query_survey); }
					if($chkinnovation=="on") { $sql_query_survey="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='surveyinnovation'"; $query_result_survey=mysql_query($sql_query_survey); }
					$email_msg='You have been successfully registered for Sristi 2010. Your account password is ' . $password . '. You may login now.';
					mail($emailid,'Sristi 2010 - Account Password',$email_msg,'From: admin@sristi.org.in');
				}
			}
		}
	}		
		mysql_close($con);

//feedback to user	
	$err_string="location:tf-register.php?ref=";
	if($flag_confail==1 || $flag_sqlfail==1)
	{
		$err_string=$err_string . "registersqlerror";
	}
	else if($flag_incomplete==1)
	{
		$err_string=$err_string . "registerincomplete";
	}
	else if($flag_emailid==1)
	{
		$err_string=$err_string . "registerinvalidemailid";
	}
	else if($flag_exists_emailid==1)
	{
		$err_string=$err_string . "registeremailidexists";
	}
	else
	{
		$err_string=$err_string . "registersuccess";
	}
	header($err_string);
?>