<table class="table-login" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td class="table-login-gray-cell" colspan="3" height="4px"></td>
        <td class="table-login-green-cell" colspan="3" height="4px"></td>
    </tr>
    <tr>
	    <td class="table-login-gray-cell" width="8px"></td>
        <td class="table-login-gray-cell">
            <a href="http://blog.sristi.org.in/" class="login-link" style="color: #ffffff" target="_blank">Visit Site Blog | </a>
            <a href="tf-chat.php" class="login-link" style="color: #900b09" target="_blank">Enter Chat Room</a> | 
            <a href="tf-updates.php" class="login-link" style="color: #ffffff" target="_blank"><span id="span_recent_updates">View Recent Updates</span></a>
        </td>
    	<td class="table-login-gray-cell" width="8px"></td>
        <td class="table-login-green-cell" width="8px"></td>
        <?php 
			if($li_privilege=='ADMIN' || $li_privilege=='GENERAL')
			{
		?>
        <td class="table-login-green-cell"><?php echo $li_user; ?> | <a class="login-link" href="tf-logout.php">Logout</a></td>
        <?php
			}
			else
			{
		?>
        <td class="table-login-green-cell"><a class="login-link" href="tf-login.php">Login</a> | New User <a class="login-link" href="tf-register.php">Registration</a></td>
        <?php
			}
		?>
        <td class="table-login-green-cell" width="8px"></td>
    </tr>
    <tr>
        <td align="right" valign="top"><img src="style/table-login-lb-arc.png" height="8" width="8" /></td>
        <td height="8px" colspan="2" class="table-login-gray-cell"></td>
        <td height="8px" colspan="2" class="table-login-green-cell"></td>
        <td align="left" valign="top"><img src="style/table-login-rb-arc.png" height="8" width="8" /></td>
    </tr>
</table>
<script type="text/javascript" language="javascript">
	function blinkRecentUpdates()
	{
		if(document.getElementById("span_recent_updates").style.visibility=="hidden")
		{
			document.getElementById("span_recent_updates").style.visibility="visible";
		}
		else
		{
			document.getElementById("span_recent_updates").style.visibility="hidden";
		}
		setTimeout("blinkRecentUpdates()",100);
	}
	//blinkRecentUpdates();
</script>
