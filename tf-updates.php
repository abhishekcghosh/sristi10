<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	$feedback_msg='';
	if(isset($_GET['ref']))
	{
		switch($_GET['ref'])
		{
			case 'updatesqlerror':
				$feedback_msg='A problem occured while putting the update. Sorry for the inconvinience. Please try again later.';
				break;
			case 'updateincomplete':
				$feedback_msg='You have not put any update. Please write something in the update box and then click on Update.';
				break;
			case 'updatedeletesqlerror':
				$feedback_msg='A problem occured while deleting the update. Sorry for the inconvinience. Please try again later.';
				break;
			default:
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once('tf-head-tag.php');
	?>
    <script language="javascript" type="text/javascript" src="scripts/tf-ask.js"></script>
    <title>Updates</title>
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
                            	<tr><td colspan="2"><span  class="content-placer">home | updates</span><br /><br /></td></tr>
                                <tr><td colspan="2"><span class="content-header">Updates</span><br /><br /></td></tr>
                                <?php if($li_privilege=='ADMIN')
									{
								?>
                                <tr><td>
                            		<script language="javascript" type="text/javascript">
										function checkLength()
										{
											strText=document.getElementById("update_update").value;
											leftChars=139-strText.length;
											if(leftChars>=0)
											{
												if(leftChars==1) { isTS=""; } else { isTS="s"; }
												document.getElementById("spanCharsLeft").innerHTML="["+leftChars+" character"+isTS+" left]";
											}
											else
											{
												document.getElementById("update_update").value=strText.substring(0,139);
											}
										}
									</script>
                                    <form name="form_update" method="post" action="tf-update-backend.php">
                                    <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                		<tr><td><strong>Put an update</strong>&nbsp;&nbsp;<span style="color: #c0c0c0;" id="spanCharsLeft">[140 characters left]</span></td></tr>    
                                        <tr><td><textarea class="form-items-textarea" style="width: 400px" name="update" rows="4" id="update_update" onkeypress="javascript: checkLength();"></textarea></td>
                                        <tr><td><input class="form-items-submit" id="update_submit" type="submit" name="submit" value="Update" />&nbsp;&nbsp;<span style="color: #c0c0c0">(A copy of this update will automatically be posted on <strong>Twitter</strong> @sristi2010jgec)</span></td></tr>
                                        <tr><td height="16px"></td></tr>
                                        <tr><td><span style="color: #900b09"><?php echo $feedback_msg; ?></span></td></tr>    
                                        <tr><td height="16px"></td></tr>
                          		        <tr><td><strong>Recent Updates</strong><br /></td></tr>
                                    </table>
                                    </form>    	
                                </td></tr>	
								<?php
									}
	                                echo "<tr><td>";
									require_once('tf-date-func.php');
									require_once('tf-sql-connect.php');
									$flag_sqlfail=0;
									//GET MESSAGES
									$tbl_name=__SQL_TABLE_PREFIX__ . "updates";
									$sql_query="SELECT * FROM $tbl_name ORDER BY uid DESC LIMIT 0,30";
									$query_result=mysql_query($sql_query);
									if(!$query_result)
									{
										$flag_sqlfail=1;
										$err_occured=1;
									}
									$printed=0;
									while($row=mysql_fetch_array($query_result))
									{
										echo "<a name='" . $row['uid'] . "'>";
										echo "<table style='border: none' width='100%' cellpadding='2' cellspacing='2'>";
										echo "<tr><td>" . $row['utext'] . "</td></tr>";
										echo "<tr><td style='color: #808080'>" . date_ip_to_op($row['udatetime']) . "</td></tr>";
										echo "<tr><td>";
											if($li_privilege=='ADMIN')
											{
												echo "<span class='' style='cursor: pointer; text-decoration: none; color: #617f10' title='Does not delete from Twitter though' onclick='tf_ask(\"Are you sure you want to delete this update?\",\"tf-update-delete.php?uid=" . $row['uid'] . "\",\"\")'>Delete</span>";
											}
										echo "</td></tr>";						
										echo "</table>";
										echo "</a>";
										echo "<table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td height='6px'></td></tr></table>";
										$printed=1;
									}
									if($printed!=1)
									{
										echo "<tr><td colspan='2'>No updates are available.</td></tr>";
									}
									mysql_close($con);
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
