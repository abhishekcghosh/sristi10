<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if($li_privilege!='GENERAL' && $li_privilege!='ADMIN') { header('location: tf-login.php'); }
	$emid='NONE';
	if(isset($_GET['eid'])) { $emid=$_GET['eid']; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once('tf-head-tag.php');
	?>
    <title>User Profile</title>
</head>
<body onload="javascript: countDown()">
    <table class="table-page-span" border="0" cellpadding="0" cellspacing="0" width="100%">
    	<?php require_once('tf-page-header.php'); ?>
        <?php require_once('tf-page-menu.php'); ?>
        <tr>
        	<td width="80px" class="container-left"></td>
            <td align="left" class="container-center" valign="top">
            	<table class="table-container-main" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                	<tr><td height="20px" colspan="3"></td></tr>
                    <tr>
                    	<td width="20px"></td>
                        <td align="left" valign="top">
 							<table border="0" cellpadding="2" cellpadding="2" width="100%">
                            	<tr><td><span  class="content-placer">home | user profile</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">User Profile</span><br /><br /></td></tr>
                                <tr><td>
                                	<?php
										
										require_once('tf-sql-connect.php');
										$flag_sqlfail=0;
										//GET MESSAGES
										$tbl_name=__SQL_TABLE_PREFIX__ . "members";
										$sql_query="SELECT * FROM $tbl_name WHERE emailid='$emid'";
										$query_result=mysql_query($sql_query);
										$result_row=mysql_fetch_array($query_result);
										$result_row_length=strlen($result_row['emailid']);
										if($result_row_length!=0)
										{
									?>
                                	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                    	<tr><td valign="top" width="100px">Email ID</td><td><?php echo $result_row['emailid']; ?></td></tr>
                                        <tr><td valign="top" width="100px">Privilege</td><td><?php echo $result_row['privilege']; ?></td></tr>
                                        <tr><td colspan="2">&nbsp;</td></tr>
                                        <tr><td valign="top" width="100px">First Name</td><td><?php echo $result_row['firstname']; ?></td></tr>
                                        <tr><td valign="top" width="100px">Last Name</td><td><?php echo $result_row['lastname']; ?></td></tr>
                                        <tr><td colspan="2">&nbsp;</td></tr>
                                        <tr><td valign="top" width="100px">College</td><td><?php echo $result_row['college']; ?></td></tr>
                                        <tr><td valign="top" width="100px">Year</td><td><?php echo $result_row['year']; ?></td></tr>
                                        <tr><td valign="top" width="100px">City</td><td><?php echo $result_row['city']; ?></td></tr>
                                        <tr><td colspan="2">&nbsp;</td></tr>
                                        <tr><td valign="top" width="100px">Address</td><td><?php echo $result_row['address']; ?></td></tr>
                                        <tr><td valign="top" width="100px">Phone</td><td><?php echo $result_row['phone']; ?></td></tr>
                                        <tr><td colspan="2">&nbsp;</td></tr>
                                        <tr><td valign="top" width="100px">Interests</td><td><?php echo $result_row['interests']; ?></td></tr>
                                    </table>
                                	<?php
										}
										else
										{
									?>
                                    	<span style="color: #900b09">No such user registered!</span>
                                    <?php
										}
									?>
                                </td></tr>

                        	</table>
                        </td>
                        <td width="20px"></td>
                    </tr>
                    <tr><td height="20px" colspan="3"></td></tr>
                </table>
            </td>
            <td width="9px" class="container-right"></td>
            <?php require_once('tf-page-right-column.php'); ?>
        </tr>
        <?php require_once('tf-page-footer.php'); ?>
    </table>
    <table class="container-top-shadow" border="0" cellpadding="0" cellspacing="0" width="100%">
    	<tr><td>&nbsp;</td></tr>
	</table>
    <?php require_once('tf-page-login-bar.php'); ?>
</body>
</html>
