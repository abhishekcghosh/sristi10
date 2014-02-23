<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if($li_user!='roboticsregistrar@sristi.org.in') { header('location: tf-login.php'); }
	$viewtype="";
	if(isset($_GET['view'])) { $viewtype=strtolower(addslashes(strip_tags($_GET['view']))); }
	//if($pagecount<1) { $pagecount=1; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once('tf-head-tag.php');
	?>
    <script language="javascript" type="text/javascript" src="scripts/tf-ask.js"></script>
    <title>Robotics Event Registration</title>
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
                            	<tr><td><span  class="content-placer">home | robotics event registrations</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Robotics Event Registered User List</span> | <a href="tf-roboreg.php" class="text-body-link">Go to Registration Form</a><br /><br /></td></tr>
                                <tr><td><strong>Registered</strong>&nbsp;<span style="color: #666666"> (See Only: <a href="tf-roboreg-list.php?view=saveaqua" class="text-body-link">SaveAqua</a> | <a href="tf-roboreg-list.php?view=robosoccer" class="text-body-link">RoboSoccer</a> | <a href="tf-roboreg-list.php?view=locomotion" class="text-body-link">LocoMotion</a> | <a href="tf-roboreg-list.php?view=firstround" class="text-body-link">First Round</a> | <a href="tf-roboreg-list.php?view=secondround" class="text-body-link">Second Round</a> | <a href="tf-roboreg-list.php?view=finalround" class="text-body-link">Final Round</a> | <a href="tf-roboreg-list.php" class="text-body-link">All</a>)</td></tr>
                                <!--<tr><td><a class="text-body-link" href="tf-user-list.php?p=<?php echo $pagecount-1; ?>">Prev</a> | <a class="text-body-link" href="tf-user-list.php?p=<?php echo $pagecount+1; ?>">Next</a><br /></td></tr>-->
                                <tr>
                                	<td>
                                		<?php
											require_once('tf-date-func.php');
											require_once('tf-sql-connect.php');
											$flag_sqlfail=0;
											//GET MESSAGES
											$tbl_name=__SQL_TABLE_PREFIX__ . "roboreg";
											switch($viewtype)
											{
												case 'saveaqua':
													$sql_query="SELECT * FROM $tbl_name WHERE saveaqua='YES' ORDER BY mid ASC";
													break;
												case 'robosoccer':
													$sql_query="SELECT * FROM $tbl_name WHERE robosoccer='YES' ORDER BY mid ASC";
													break;
												case 'locomotion':
													$sql_query="SELECT * FROM $tbl_name WHERE locomotion='YES' ORDER BY mid ASC";
													break;
												case 'firstround':
													$sql_query="SELECT * FROM $tbl_name WHERE round='1' ORDER BY mid ASC";
													break;
												case 'secondround':
													$sql_query="SELECT * FROM $tbl_name WHERE round='2' ORDER BY mid ASC";
													break;
												case 'finalround':
													$sql_query="SELECT * FROM $tbl_name WHERE round='3' ORDER BY mid ASC";
													break;
												case '': 
												default:
													$sql_query="SELECT * FROM $tbl_name ORDER BY mid ASC";
													break;
											}		
											$query_result=mysql_query($sql_query);
											if(!$query_result)
											{
												$flag_sqlfail=1;
												$err_occured=1;
											}
											$printed=0;
											while($row=mysql_fetch_array($query_result))
											{
												echo "<a name='" . $row['mid'] . "'>";
												echo "<table style='border: thin solid #e0e0e0' width='100%' cellpadding='2' cellspacing='2'>";
												echo "<tr><td>Registration #" . $row['mid'] . "</td></tr>";
												echo "<tr><td><strong>" . $row['firstname'] . " " . $row['lastname'] . "</strong></td></tr>";
												echo "<tr><td>" . $row['college'] . "</td></tr>";
												echo "<tr><td>Group: " . $row['groupname'] . "</td></tr>";
												echo "<tr><td>Address: " . $row['address'] . "</td></tr>";
												echo "<tr><td>Phone: " . $row['phone'] . "</td></tr>";
												echo "<tr><td>Email ID: " . $row['emailid'] . "</td></tr>";
												echo "<tr><td>Saveaqua: " . $row['saveaqua'] . ", Robosoccer: " . $row['robosoccer'] . ", LocoMotion: " . $row['locomotion'] . "</td></tr>";
												echo "<tr><td>Round: " . $row['round'] . " (<a href='tf-roboreg-level.php?mid=" . $row['mid'] . "&level=" . ($row['round']+1) . "' class='text-body-link'>Level Up</a> | <a href='tf-roboreg-level.php?mid=" . $row['mid'] . "&level=" . ($row['round']-1) . "' class='text-body-link'>Level Down</a>)</td></tr>";
												echo "</table>";
												echo "</a>";
												echo "<table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td height='4px'></td></tr></table>";
												$printed=1;
											}
											if($printed!=1)
											{
												echo "<tr><td colspan='2'>No registered users.</td></tr>";
											}
											mysql_close($con);
										?>
                                	</td>
                                </tr>
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
