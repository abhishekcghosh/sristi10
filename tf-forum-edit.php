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
	if(isset($_GET['from']) && strtolower($_GET['from'])=='thread')
	{
		$head1="Thread";
		$head2="Thread Name";
		$head3="Description";
		$widthval="80";
	}
	else
	{
		$head1="Post";
		$head2="Subject";
		$head3="Content";
		$widthval="50";
	}
	$feedback_msg='';
	if(isset($_GET['ref']))
	{
		switch (strtolower(addslashes(strip_tags($_GET['ref']))))
		{
			case 'forumeditsqlerror':
				$feedback_msg='A problem occured while editing the post. Sorry for the inconvinience. Please try again later.';
			break;
			case 'forumeditincomplete':
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
                            	<tr><td><span  class="content-placer">home | forum | edit</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Sristi 2010 Forum</span><br /><br /></td></tr>
                                <tr><td><strong>Edit <?php echo $head1; ?></strong><br /></td></tr>
                                <tr>
                                	<td>
										 <?php require_once('tf-sql-connect.php'); 
                                            //GET MESSAGES
                                            $tbl_name=__SQL_TABLE_PREFIX__ . "forum";
                                            $sql_query="SELECT * FROM $tbl_name WHERE threadid='$threadid' AND treeid='$treeid'";
                                            $query_result=mysql_query($sql_query);
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
                                            if($li_privilege!='ADMIN' && $li_user!=$result_row['author'])
                                            {
                                                //header("location:tf-forum.php");
												?>
                                                	<script type="text/javascript">
														window.location.href="tf-forum.php";
													</script>
                                                <?php
                                            }
                                         ?>
                                         <table class="" width="100%" cellpadding="2" cellspacing="2">
                                        	<form action="tf-forum-edit-backend.php" method="post">
                                            <tr><td width="<?php echo $widthval; ?>"><?php echo $head2; ?></td><td><input class="form-items" style="width: 400px; color: #000000" type="text" name="subject" maxlength="256" value="<?php echo $result_row['subject']; ?>"></td></tr>
                                            <tr><td width="<?php echo $widthval; ?>" valign="top"><?php echo $head3; ?></td><td><textarea class="form-items-textarea" style="width: 400px; color: #000000" name="content" rows="10"><?php echo $result_row['content']; ?></textarea></td>
                                            <tr><td width="<?php echo $widthval; ?>">&nbsp;</td><td><input class="form-items-submit" type="submit" name="submit" value="Done"><input type="hidden" name="from" value="<?php echo strtolower($head1); ?>"><input type="hidden" name="threadid" value="<?php echo $threadid; ?>"><input type="hidden" name="treeid" value="<?php echo $treeid; ?>"></td>
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
