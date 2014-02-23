<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if($li_privilege=='GENERAL' || $li_privilege=='ADMIN') { header('location: tf-user.php'); }
	$feedback_msg='';
	if(isset($_GET['ref']))
	{
		switch($_GET['ref'])
		{
			case 'loginsqlerror':
				$feedback_msg='A problem occured during login. Sorry for the inconvinience. Please try again later.';
				break;
			case 'loginincomplete':
				$feedback_msg='It seems that you have <b>not</b> filled in all the necessary details. Please provide all the details asked for and then click on <b>Login</b> again.';
				break;
			case 'loginwrong':
				$feedback_msg='<b>Wrong</b> Email ID or Password. Please recheck and retry.';
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
    <title>Login</title>
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
                        	<form name="form_login" method="post" action="tf-login-backend.php">
                            <table border="0" cellpadding="2" cellpadding="2" width="100%">
                            	<tr><td colspan="2"><span  class="content-placer">home | login</span><br /><br /></td></tr>
                                <tr><td colspan="2"><span class="content-header">User Login</span><br /><br /></td></tr>
                                <tr><td width="80px">Email ID</td><td><input class="form-items" id="login_emailid" type="text" name="emailid" maxlength="256" value="" size="30" /></td></tr>
                                <tr><td width="80px">Password</td><td><input class="form-items" id="login_password" type="password" name="password" maxlength="32" value="" size="30" /></td></tr>
                                <tr><td>&nbsp;</td><td><br /><input class="form-items-submit" id="login_submit" type="submit" name="submit" value="Login" /></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>&nbsp;</td><td><span style="color: #900b09"><?php echo $feedback_msg; ?></span></td></tr>
                            </table>
                            </form>
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
