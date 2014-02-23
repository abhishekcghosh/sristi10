<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	$feedback_msg='';
	$feedback_type='';
	if(isset($_GET['ref']))
	{
		switch (strtolower(addslashes(strip_tags($_GET['ref']))))
		{
			case 'forumthreadcreatesqlerror':
				$feedback_type='create';
				$feedback_msg='A problem occured while creating the new thread. Sorry for the inconvinience. Please try again later.';
			break;
			case 'forumthreadcreateincomplete':
				$feedback_type='create';
				$feedback_msg='One or more fields empty. Please provide <b>all</b> the details.';
			break;
			case 'forumdeletesqlerror':
				$feedback_type='delete';
				$feedback_msg='A problem occured while deleting the thread. Sorry for the inconvinience. Please try again later.';
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
    <title>Forum</title>
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
                            	<tr><td><span  class="content-placer">home | forum</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Sristi 2010 Forum</span><br /><br /></td></tr>
                                <tr><td><strong>Available Threads</strong><br /></td></tr>
                                <tr>
                                	<td>
                                		<?php
											require_once('tf-date-func.php');
											require_once('tf-sql-connect.php');
											$flag_sqlfail=0;
											//GET MESSAGES
											$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
											$sql_query="SELECT * FROM $tbl_name WHERE level=0 ORDER BY subject ASC";
											$query_result=mysql_query($sql_query);
											if(!$query_result)
											{
												$flag_sqlfail=1;
												$err_occured=1;
											}
											$printed=0;
											while($row=mysql_fetch_array($query_result))
											{
												echo "<a name='" . $row['threadid'] . "'>";
												echo "<table style='border: thin solid #e0e0e0' width='100%' cellpadding='2' cellspacing='2'>";
												echo "<tr><td width='80px' style='color: #808080' valign='top'>Date</td><td colspan='2' style='color: #808080'>" . date_ip_to_op($row['dateofentry']) . "</td></tr>";
												echo "<tr><td style='color: #808080' valign='top'>Added by</td><td colspan='2' id=''><em><a href='tf-user-profile.php?eid=" . $row['author'] . "' class='text-body-link'>" . $row['author'] . "</a></em></td></tr>";
												echo "<tr><td style='color: #808080' valign='top'>Thread Name</td><td colspan='2' id=''><strong>" . $row['subject'] . "</strong></td></tr>";
												echo "<tr><td style='color: #808080' valign='top'>Description</td><td colspan='2'>" . $row['content'] . "</td></tr>";
												echo "<tr><td></td><td>";
												echo "<a href='tf-forum-thread.php?threadid=" . $row['threadid'] . "' style='text-decoration: none; color: #617f10'>View</a>";
												
													if($li_privilege=='ADMIN' || ($li_user==$row['author'] && $li_privilege=='GENERAL'))
													{	
														echo " | <a href='tf-forum-edit.php?from=thread&threadid=" . $row['threadid'] .  "&treeid=0' style='text-decoration: none; color: #617f10'>Edit</a>";
													}
													if($li_privilege=='ADMIN')
													{
														$thread_id=$row['threadid'];
														$tree_id=$row['treeid'];
														echo " | <span class='' style='cursor: pointer; text-decoration: none; color: #617f10' onclick='tf_ask(\"Are you sure you want to delete this thread?\",\"tf-forum-delete.php?threadid=" . $row['threadid'] . "&treeid=" . $row['treeid'] . "\",\"\")'>Delete</span>";
													}
													
												echo "</td></tr>";						
												echo "</table>";
												echo "</a>";
												echo "<table border='0' cellpadding='0' cellspacing='0' width='100%'><tr><td height='4px'></td></tr></table>";
												$printed=1;
											}
											if($printed!=1)
											{
												echo "<tr><td colspan='2'>No threads are available.</td></tr>";
											}
											mysql_close($con);
										?>
                                	</td>
                                </tr>
                                <tr><td><span style="color: #900b09"><?php if($feedback_type=='delete') { echo $feedback_msg; } ?></span></td></tr>
								<?php
									if($li_privilege=='ADMIN'/* || $li_privilege=='GENERAL'*/)
									{
                                ?>
                                <tr><td height="20px"></td></tr>
                                <tr><td><strong>Create New Thread</strong></td></tr>
                                <tr>
                                	<td>
                                        <form action="tf-forum-thread-create.php" method="post">
                                        <table class="body_text" width="100%" cellpadding="2" cellspacing="2">
                                            <input class="formitems" type="hidden" name="author" maxlength="256" value="<?php echo $li_user; ?>">
                                            <tr><td><input class="form-items" style="width: 400px; font-style:italic; color: #c0c0c0" type="text" name="subject" maxlength="256" id="forumcreate_threadname" value="Enter the thread name" onFocus="javascript: if(this.value=='Enter the thread name') {this.value=''; this.style.fontStyle='normal'; this.style.color='#000000'; }" onBlur="javascript: if(this.value=='') {this.value='Enter the thread name'; this.style.fontStyle='italic';  this.style.color='#c0c0c0'; }"></td></tr>
                                            <tr><td><textarea class="form-items-textarea" style="width: 400px; font-style:italic; color: #c0c0c0" name="content" rows="10" id="forumcreate_threaddescription" onFocus="javascript: if(this.value=='Describe the subject and purpose of the thread') {this.value=''; this.style.fontStyle='normal'; this.style.color='#000000'; }" onBlur="javascript: if(this.value=='') {this.value='Describe the subject and purpose of the thread'; this.style.fontStyle='italic';  this.style.color='#c0c0c0'; }">Describe the subject and purpose of the thread</textarea></td>
                                            <tr><td><input class="form-items-submit" type="submit" name="submit" value="Create"></td>
                                            <tr><td>&nbsp;</td></tr>
                                            <tr><td><span style="color: #900b09"><?php if($feedback_type=='create') { echo $feedback_msg; } ?></span></td></tr>
                                    	</table>
                                        </form>
                                    </td>
                                </tr>
                                <?php
									}
                                ?>
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
