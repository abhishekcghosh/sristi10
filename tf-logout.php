<?php
	
	session_start();										//start session to access session info
	unset($_SESSION['sristi2010_username']);				//delete logged in user's Email ID info
	unset($_SESSION['sristi2010_privilege']);				//delete logged in user's privilege info
	session_destroy();										//destroy session completely
	header("location:tf-home.php");							//go to home page
	
?>
