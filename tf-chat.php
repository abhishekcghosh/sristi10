<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if($li_privilege!='GENERAL' && $li_privilege!='ADMIN') { header('location: tf-login.php'); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		require_once('tf-head-tag.php');
	?>
    <script language="javascript" type="text/javascript" src="scripts/tf-chat-client.js"></script>
    <title>Live Chat</title>
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
                            	<tr><td><span  class="content-placer">home | live chat</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Live Chat</span><br /><br /></td></tr>
                                <tr><td>
                                	<?php
										//initiate chat 
										require_once('tf-sql-connect.php');
										$flag_sqlfail=0;
										//GET MESSAGES
										$now_date=date(__DATE_FORMAT_IP__);
										$tbl_name=__SQL_TABLE_PREFIX__ . "chat";
										$sql_query="SELECT max(cid) AS scrollid FROM $tbl_name";
										$query_result=mysql_query($sql_query);
										$result_row=mysql_fetch_array($query_result);
										$init_scroll_id=$result_row['scrollid']; if($init_scroll_id=="") { $init_scroll_id=0; }
										$sql_query="INSERT into $tbl_name(cuser,cdatetime,ctext) VALUES('$li_user','$now_date','ENTERED THE CHAT ROOM')";
										$query_result=mysql_query($sql_query);
									?>
                                    <input type="hidden" name="hdnscrollid" id="hdnscrollid" value="<?php echo $init_scroll_id; ?>" />
                                    <input type="hidden" name="hdncuser" id="hdncuser" value="<?php echo $li_user; ?>" />
                                	<textarea readonly="readonly" name="txtchatscroll" id="txtchatscroll" class="form-items-textarea" style="width: 100%" rows="15"></textarea><br /><br />                                    
                                    <input name="txtchatenter" id="txtchatenter" class="form-items" value="Type here and press Enter..." style="width: 100%; font-style: italic; color: #c0c0c0" onfocus="javascript: if(this.value=='Type here and press Enter...') { this.value=''; this.style.fontStyle='normal'; this.style.color='#000000'; }" onblur="javascript: if(this.value=='') { this.value='Type here and press Enter...'; this.style.fontStyle='italic'; this.style.color='#c0c0c0'; }" onkeydown="javascript: if(event.keyCode==13) { doChat(); }">
                                    <script language="javascript" type="text/javascript">
										initChat();
									</script>																		
                                </td></tr>
                                <tr><td align="right"><span style="color: #c0c0c0">(Reloading the page will restart your chat session)</span></td></tr>
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
