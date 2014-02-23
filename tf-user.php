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
    <title>Sristi 2010</title>
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
                            	<tr><td><span  class="content-placer">home | user home</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">User Home</span><br /><br /></td></tr>
                                <tr><td>You have been registered with User ID <strong>#<?php echo $li_mid; ?>.</strong><br /><br /></td></tr>
                                <tr><td>Being a registered user, you can take part in the <strong>forum</strong> discussions that lets you provide suggestions, queries and other feedback that can be shared with all other members as well as the Sristi 2010 Team. To go to the forum, click <a href="tf-forum.php" class="text-body-link">here.</a><br /><br /></td></tr>
                                <tr><td>To check for updates<?php if($li_privilege=='ADMIN') { echo ' or put one'; } ?>, click to go to the <a href="tf-updates.php" class="text-body-link">updates page.</a><br /><br /></td></tr>
                                <tr><td>If you want, you can also <a href="tf-change-password.php" class="text-body-link">change your password.</a><br /><br /></td></tr>
                                <?php 
									if($li_privilege=='ADMIN') {
								?>
								<tr><td>To access your <strong>admin pages</strong>, click <a href="tf-user-list.php" class="text-body-link">here.</a><br /><br /></td></tr>
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
