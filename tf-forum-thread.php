<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if(isset($_GET['threadid']))
	{
		$threadid=addslashes(strip_tags($_GET['threadid']));
	}
	else
	{
		header("location: tf-forum.php");
	}
	$feedback_msg='';
	if(isset($_GET['ref']))
	{
		switch (strtolower(addslashes(strip_tags($_GET['ref']))))
		{
			case 'forumdeletesqlerror':
				$feedback_msg='A problem occured while deleting the post. Sorry for the inconvinience. Please try again later.';
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
    <script language="javascript" type="text/javascript" src="scripts/tf-forum-tree.js"></script>
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
                            	<tr><td><span  class="content-placer">home | forum | view thread</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Sristi 2010 Forum</span><br /><br /></td></tr>
                                <tr><td align="right"><a class="text-body-link" href="tf-forum.php">&laquo;&nbsp;Back to Available Threads</a><br /><br /></td></tr>
                                <tr><td align="right"><span style="color: #900b09"><?php echo $feedback_msg; ?></span></td></tr>
                                <tr>
                                	<td>
                                		<?php
											require_once('tf-date-func.php');
											require_once('tf-sql-connect.php');
											require_once('tf-color-array.php');
											$flag_sqlfail=0;
											//GET MESSAGES
											$tbl_name=__SQL_TABLE_PREFIX__ . "forum";
											$sql_query="SELECT * FROM $tbl_name WHERE threadid='$threadid' ORDER BY treeid ASC";
											$query_result=mysql_query($sql_query);
											if(!$query_result)
											{
												$flag_sqlfail=1;
												$err_occured=1;
											}
											$printed=0;
											$lastlevel=-1;
											$lasttreeid='NEGATIVE';
											while($row=mysql_fetch_array($query_result))
											{
												if($row['level']>$lastlevel)
												{
													echo "<table border='0' width='100%' cellpadding='0' cellspacing='0' id='" . $lasttreeid . "_C'><tr><td>";
												}
												else
												{
													for($ic=1;$ic<=($lastlevel-$row['level']);$ic++)
													{
														echo "</td></tr></table>";
													}
												}
												echo "<a name='" . $row['treeid'] . "'>";
												echo "<table width='100%' border='0' cellpadding='1' cellspacing='1'>";
												echo "<tr><td width='" . min((10+10*$row['level']),270) . "'></td><td>";
												if($row['level']==0)
												{
													echo "<table style='border: thin solid #808080' border='0' width='100%' cellpadding='2' cellspacing='2' id='postTable' summary='" . $row['treeid'] . "'>";
													$fromtype="thread";
												}
												else
												{
													echo "<table style='border: thin solid #c0c0c0' border='0' width='100%' cellpadding='2' cellspacing='2' id='postTable' summary='" . $row['treeid'] . "'>";
													$fromtype="post";
												}
												echo "<tr><td cvalign='top' style='color: #808080'>" . date_ip_to_op($row['dateofentry']) . "</td><td width='15' rowspan='7' bgcolor='#" . $colorarray[$row['level']] . "' class='forum-tab-tack' summary='EXPANDED' title='Collapse Replies' style='cursor: pointer' id='" . $row['treeid'] . "' onclick='javascript: if(this.summary!=\"COLLAPSED\") { this.summary=\"COLLAPSED\"; this.title=\"Expand Replies\"; tf_tree_fadeout(this.id+\"_C\"); } else { this.summary=\"EXPANDED\"; this.title=\"Collapse Replies\"; tf_tree_fadein(this.id+\"_C\"); }' onmouseover='javascript: document.getElementById(this.id+\"_C\").style.opacity=0.8;' onmouseout='javascript: document.getElementById(this.id+\"_C\").style.opacity=1;'></td></tr>";
												echo "<tr><td valign='top'><em><a href='tf-user-profile.php?eid=" . $row['author'] . "' class='text-body-link'>" . $row['author'] . "</a></em></td></tr>";
												if($row['level']!=0){ echo "<tr><td valign='top'>Reply to:&nbsp;<span style='color: #808080; font-weight: 700'>" . $row['replyto'] . "<span>&nbsp;<span style='color: #" . $colorarray[$row['level']-1] . "'>&bull;&bull;&bull;</span>" . "</td></tr>"; }
												echo "<tr><td valign='top'><strong>" . $row['subject'] . "</strong></td></tr>";
												echo "<tr><td valign='top'>" . $row['content'] . "</td></tr>";
												$reply_sub=$row['replies'];
												$reply_del=$row['repliesdeleted'];
												$reply_pre=$reply_sub-$reply_del;
												if($reply_pre==0) { $reply_str="No posts"; }
												else if($reply_pre==1) {$reply_str="1 Post"; }
												else {$reply_str=$reply_pre . " Post"; }
												$reply_str=$reply_str . " (" . $reply_sub . " submitted, " . $reply_del . " deleted)";										
												echo "<tr><td style='color: #808080'>" . $reply_str . "</td></tr>";
												echo "<tr><td>";
													if($li_privilege=='ADMIN' || $li_privilege=='GENERAL')
													{	
														echo "<a href='tf-forum-reply.php?threadid=" . $row['threadid'] . "&treeid=" . $row['treeid'] . "' class='text-body-link' >Post</a>";
													}
													if($li_privilege=='ADMIN' || ($li_user==$row['author'] && $li_privilege=='GENERAL'))
													{	
														echo " | <a href='tf-forum-edit.php?from=" . $fromtype . "&threadid=" . $row['threadid'] . "&treeid=" . $row['treeid'] . "' class='text-body-link'>Edit</a>";
													}
													if($li_privilege=='ADMIN')
													{
														$thread_id=$row['threadid'];
														$tree_id=$row['treeid'];
														echo " | <span class='text-body-link' onclick='tf_ask(\"Are you sure you want to delete this post?\",\"tf-forum-delete.php?threadid=" . $row['threadid'] . "&treeid=" . $row['treeid'] . "\",\"\")' style='cursor: pointer'>Delete</span>";
													}
												echo "</td></tr>";						
												echo "</table>";
												echo "</td></tr>";
												echo "</table>";
												echo "</a>";
												$lastlevel=$row['level'];
												$lasttreeid=$row['treeid'];
												$printed=1;
												echo "<table border='0' width='100%' cellpadding='0' cellspacing='0' id='" . $lasttreeid . "_C'><tr><td></td></tr></table>"; //Just to prevent MSIE object-not-found error
											}
											for($ic=0;$ic<=$lastlevel;$ic++)
											{
												echo '</td></tr></table>';
											}
											//echo "</td></tr></table>";
											if($printed!=1)
											{
											?>	
												<script type="text/javascript">
												window.location.href='tf-forum.php';
												</script>
											<?php	
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