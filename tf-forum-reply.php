<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if(isset($_GET['threadid']) && isset($_GET['treeid']))
	{
		$threadid=addslashes(strip_tags($_GET['threadid']));
		$treeid=addslashes(strip_tags($_GET['treeid']));
	}
	else
	{
		header("location:tf-forum.php");
	}
	if($li_privilege!='ADMIN' && $li_privilege!='GENERAL')
	{
		header("location:tf-forum-thread.php?threadid=" . $threadid);
	}
	$feedback_msg='';
	if(isset($_GET['ref']))
	{
		switch (strtolower(addslashes(strip_tags($_GET['ref']))))
		{
			case 'forumreplysqlerror':
				$feedback_msg='A problem occured while posting. Sorry for the inconvinience. Please try again later.';
			break;
			case 'forumreplytoomanyreplies':
				$feedback_msg='<b>Too many posts</b> have already been put. Further reply to this post is not possible. Sorry for the inconvinience.';
			break;
			case 'forumreplytoomanylevels':
				$feedback_msg='<b>Too many post levels</b> have been conceded. Further reply to this post is not possible. Sorry for the inconvinience.';
			break;
			case 'forumreplyincomplete':
				$feedback_msg='One or more fields empty. Please provide <b>all</b> the details.';
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
                            	<tr><td><span  class="content-placer">home | forum | reply</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Sristi 2010 Forum</span><br /><br /></td></tr>
                                <tr><td><strong>Post to</strong><br /></td></tr>
                                <tr>
                                	<td>
										 <?php 
										 	require_once('tf-date-func.php');
										 	require_once('tf-sql-connect.php');
                                            $flag_sqlfail=0;
                                            //GET MESSAGES
                                            $tbl_name=__SQL_TABLE_PREFIX__ . "forum";
                                            $sql_query="SELECT * FROM $tbl_name WHERE threadid='$threadid' AND treeid='$treeid'";
                                            $query_result=mysql_query($sql_query);
                                            if(!$query_result)
                                            {
                                                $flag_sqlfail=1;
                                                $err_occured=1;
                                            }
                                            $result_row=mysql_fetch_array($query_result);
                                            $result_row_length=strlen($result_row['threadid']);
                                            if($result_row_length==0)
                                            {
                                                //header("location:tf-forum.php");
                                               ?>
                                                	<script type="text/javascript">
														window.location.href="tf-forum.php";
												</script>
                                                <?php 
                                            }
                                            mysql_close($con);
                                            $reply_sub=$result_row['replies'];
                                            $reply_del=$result_row['repliesdeleted'];
                                            $reply_pre=$reply_sub-$reply_del;
                                            if($reply_pre==0) { $reply_str="No posts pre-existing"; }
                                            else if($reply_pre==1) {$reply_str="1 Post pre-existing"; }
                                            else {$reply_str=$reply_pre . " Posts pre-existing"; }
                                            $reply_str=$reply_str . " (" . $reply_sub . " submitted, " . $reply_del . " deleted)";
                                         ?>
                                         <table style="border: thin solid #c0c0c0" width="100%" cellpadding="2" cellspacing="2">
                                            <tr><td style="color: #808080"><?php echo date_ip_to_op($result_row['dateofentry']); ?></td></tr>
                                            <tr><td><em><a href="tf-user-profile.php?eid=<?php echo $result_row['author']; ?>" class='text-body-link'><?php echo $result_row['author']; ?></a><em></td></tr>
                                            <?php if($result_row['replyto']!='NONE') { echo '<tr><td>Reply To: <span style="color: #808080; font-weight: 700">' . $result_row['replyto'] . '</span></td></tr>'; } ?>
                                            <tr><td><strong><?php echo $result_row['subject']; ?></strong></td></tr>
                                            <tr><td><?php echo $result_row['content']; ?></td></tr>
                                            <tr><td style="color: #808080"><?php echo $reply_str; ?></td></tr>
                                        </table>
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        	<tr><td height="20px"></td></tr>
                                            <tr><td><strong>Your Message</strong></td></tr>
                                        </table>
                                        <table width="100%" cellpadding="2" cellspacing="2">
                                        	<form action="tf-forum-reply-backend.php" method="post">
                                            <tr><td><input class="form-items" type="text" name="subject" maxlength="256" style="font-style:italic; width: 400px; color: #c0c0c0" value="Enter the subject of your post" onFocus="javascript: if(this.value=='Enter the subject of your post') {this.value=''; this.style.fontStyle='normal'; this.style.color='#000000';}" onBlur="javascript: if(this.value=='') {this.value='Enter the subject of your post'; this.style.fontStyle='italic'; this.style.color='#c0c0c0';}"></td></tr>
                                            <tr><td><textarea class="form-items-textarea" name="content" cols="79" rows="10" style="font-style:italic; width: 400px; color: #c0c0c0" onFocus="javascript: if(this.value=='Enter your message') {this.value=''; this.style.fontStyle='normal'; this.style.color='#000000';}" onBlur="javascript: if(this.value=='') {this.value='Enter your message'; this.style.fontStyle='italic'; this.style.color='#c0c0c0';}">Enter your message</textarea></td>
                                            <tr><td><input class="form-items-submit" type="submit" name="submit" value="Reply"></td>
                                            <input type="hidden" name="replyto" value="<?php echo $result_row['subject']; ?>">
                                            <input type="hidden" name="author" value="<?php echo $li_user; ?>">
                                            <input type="hidden" name="threadid" value="<?php echo $threadid; ?>">
                                            <input type="hidden" name="treeid" value="<?php echo $treeid; ?>">
                                            </form>
                                        </table>
                                        
                                	</td>
                                </tr>
                                <tr><td><span style="color: #900b09"><?php echo $feedback_msg; ?></span></td></tr>
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