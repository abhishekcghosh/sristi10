<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
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
                        	<table border="0" cellpadding="2" cellpadding="2" width="100%" style="text-align: justify; font-size: 10pt; font-family: 'Trebuchet MS', Verdana, Arial, Helvetica, sans-serif;">
                            	<tr><td><span  class="content-placer">home</span><br /><br /></td></tr>
                                <tr><td><span class="content-header" style="color: #000000">Sristi 2010 is officially over!</span></td></tr>
                                <!--<tr>
                                	<td>
                                    	<table class="table-home-highlights" border="0" width="100%" cellpadding="0" cellspacing="0">
                                        	<tr><td>Highlights</td></tr>
                                            <tr>
                                            	<td>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr style="height: 30px"><td></td></tr>
                                -->
                                <tr><td>
                                	
                                </td></tr>
                                 <tr><td>
                                 	<br />
                                 	<span style="color: #617f10; font-weight: 700">Highlights:</span><br />
                                	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                    	<tr>
                                            <td colspan="2" valign="top" align="justify">
                                                <span style="color: #900b09;">Guest Lecture by <strong>Ankit Fadia</strong></span><br />
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="right" valign="top" width="60px">
                                            	<img border="thin solid #617f10" src="eventimg/ankitfadia.jpg" height="71" width="60" />
                                            </td>
                                            <td align="justify" valign="top">
                                            	Ankit Fadia, is an independent Computer Security and Digital Intelligence Consultant and has definitive experience in the field of computers. 
                                                He has authored several best-selling books on Computer Security, which have been appreciated by both professionals and industry leaders, the world over. 
                                                His books have sold a record 80,000 copies across the globe. Fadia is also a widely recognized Cyber terrorism expert.
                                            </td>
                                        </tr>    
                                    </table>
                                    <br />
                                    <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                    	<tr>
                                            <td colspan="2" valign="top" align="justify">
                                                <span style="color: #900b09;"><strong>Workshops</strong></span><br />
                                            </td>
                                        </tr>
                                        <tr>
                                        	<td align="right" valign="top" width="350px">
                                            	<img style="border: thin solid #617f10" src="eventimg/hacking.jpg" width="64" height="64" />
                                                <img style="border: thin solid #617f10" src="eventimg/robotics-1-wkshp.jpg" width="64" height="64" />
                                                <img style="border: thin solid #617f10" src="eventimg/animation.jpg" width="64" height="64" />
                                                <img style="border: thin solid #617f10" src="eventimg/robotics-2-wkshp.jpg" width="64" height="64" />
                                                <img style="border: thin solid #617f10" src="eventimg/auto-wkshp.jpg" width="64" height="64" />
                                            </td>
                                            <td align="justify" valign="top">
                                            	A series of 5 workshops on <b>Ethical Hacking</b>, <b>Robotics</b>, <b>Animation</b> and <b>Automobile Mechanics</b> will be conducted by various proclaimed names in the business, namely Innobuzz, Technophilia, Robosapiens India and Emanagineer India.
                                            </td>
                                        </tr>    
                                    </table>
                                </td></tr>
                                <tr style="height: 20px"><td></td></tr>
                                 <tr><td>
                                	<span style="color: #617f10; font-weight: 700"></span><br /><br />
                                </td></tr>
                                <tr><td><br /><br /></td></tr>
                                	<?php
										require_once('tf-sql-connect.php');
										//GET MESSAGES
										$tbl_name=__SQL_TABLE_PREFIX__ . "general";
										$sql_query="SELECT attribvalue FROM $tbl_name WHERE attribname='hitcounterhome'";
										$query_result=mysql_query($sql_query);
										$result_row=mysql_fetch_array($query_result);
										$hits=$result_row['attribvalue']+1;
										$sql_query="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='hitcounterhome'";
										$query_result=mysql_query($sql_query);
									?>
                                <tr><td><span class="span-hit-counter" id="span_hit_counter"><?php echo $hits; ?> reads</span></td></tr>
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
