<?php
	session_start();														//Starting Session to obtain data
	if(isset($_SESSION['sristi2010_username']))
	{
		//Logged In User's Data
		$li_user=$_SESSION['sristi2010_username'];							//Email ID
		$li_mid=$_SESSION['sristi2010_mid'];								//Internal Member ID
		$li_privilege=strtoupper($_SESSION['sristi2010_privilege']);		//User Privilege Level
	}
	else
	{
		//Guest User (No Login)
		$li_user='Guest';													//Guest Name
		$li_mid=0;															//None
		$li_privilege='GUEST';												//Guest User Privilege
	}
?>