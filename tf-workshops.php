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
    <title>Workshops</title>
    <script type="text/javascript" language="javascript">
		
		function showDetails(eventid)
		{
			document.getElementById(eventid).style.display='block';
			document.getElementById(eventid).style.opacity=0;
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.1'",25);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.2'",50);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.3'",75);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.4'",100);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.5'",125);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.7'",150);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.8'",175);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='0.9'",200);
			setTimeout("document.getElementById('"+eventid+"').style.opacity='1'",225);
			setTimeout("document.getElementById('"+eventid+"').style.display='block'",210);
		}
	</script>
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
                            	<tr><td><span  class="content-placer">home | workshops</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Workshops</span><br /><br /></td></tr>
                                <tr><td>
                                	<table width="100%" border="0" cellpadding="2" cellspacing="2">
                                    	<tr>
                                        	<td valign="top" align="center" style="height: 64px; width: 64px"><img src="eventimg/hacking.jpg" width="64" height="64" /></td>
                                            <td align="left">
                                            	<span class="span-wkshp-sections">
                                                	<strong style="color: #900b09">ETHICAL HACKING</strong> <em>(by Innobuzz)</em><br />
                                                    <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-hacking-details'); this.style.display='none';">more...</span>
                                                    <div id="div-wkshp-hacking-details" style="display: none; text-align: justify">
                                                    	This workshop discusses about the ethics and techniques of network, email, Google hacking and other techniques including
                                                        session hijacking, PHP/SQL Injection, Cryptography, sniffing and lot more.<br />
                                                        Fees: INR 1100<br />
                                                        <em>Anik (+91-9800797211)<br />
                                                        Ayan (+91-9614327447)</em><br />
                                                        <a target="_blank" href="http://www.technophilia.co.in/workshop_reg_confirm.aspx?workshop_id=381" class="text-body-link">Click here to register</a>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr style="height: 10px"><td></td></tr>
                                        <tr>
                                        	<td align="center" valign="top" style="height: 64px; width: 64px"><img src="eventimg/robotics-wkshp.jpg" width="64" height="64" /></td>
                                            <td align="left">
                                            	<span class="span-wkshp-sections">
                                                	<strong style="color: #900b09">ROBOTICS</strong> <em>(by Technophilia)</em><br />
                                                    <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-robotics-details'); this.style.display='none';">more...</span>
                                                    <div id="div-wkshp-robotics-details" style="display: none">
                                                    	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                            <tr>
                                                                <td align="center" style="height: 64px; width: 64px"><img src="eventimg/robotics-1-wkshp.jpg" width="64" height="64" /></td>
                                                                <td align="left">
                                                                	<span class="span-wkshp-sections">
                                                                    	<strong style="color: #900b09">MOBITRONIX</strong><br />
                                                                        <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-robotics-1-details'); this.style.display='none';">more...</span>
                                                                        <div id="div-wkshp-robotics-1-details"  style="display: none; text-align: justify">
                                                                            This workshop aims to provide a technical platform for the young technical minds so as to smoothen
                                                                            their technical journey in the field of robotics. It basically consists of basic fundamentals and
                                                                            practical concepts of basic electronics, robotics and its various applications.<br />
                                                                            Fees: INR 1500<br />
                                                                            <em>Arnab (+91-9232239883)<br />
                                                        					Neelab (+91-9432113241)</em><br />
                                                        					<a target="_blank" href="http://www.technophilia.co.in/workshop_reg_confirm.aspx?workshop_id=372" class="text-body-link">Click here to register</a>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center" style="height: 64px; width: 64px"><img src="eventimg/robotics-2-wkshp.jpg" width="64" height="64" /></td>
                                                                <td align="left">
                                                                	<span class="span-wkshp-sections">
                                                                    	<strong style="color: #900b09">AUTOBOTZ ON AVR</strong><br />
                                                                        <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-robotics-2-details'); this.style.display='none';">more...</span>
                                                                        <div id="div-wkshp-robotics-2-details" style="display: none; text-align: justify">
                                                                            AutoBotz is a microcontroller based introductory autonomous robotics workshop by Technophilia,
                                                                            where you learn the art of making autonomous robots. This workshop teaches you the fundamentals
                                                                            of designing and building autonomous robots by integration with a microcontroller. It also focuses
                                                                            on conceptualization and designing of complex systems and will help clear concepts related to
                                                                            embedded systems, artificial intelligence and automation. <a target="_blank" href="autobotzonavr.pdf" class="text-body-link">More details...</a><br />
                                                                            Fees: INR 1500<br />
                                                                            <em>Satish (+91-7679484664)<br />
                                                                            Gobinda (+91-9874953378)</em><br />
                                                                            <a target="_blank" href="http://www.technophilia.co.in/workshop_reg_confirm.aspx?workshop_id=371" class="text-body-link">Click here to register</a>
                                                                        </div>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr style="height: 10px"><td></td></tr>
                                        <tr>
                                        	<td valign="top" align="center" style="height: 64px; width: 64px"><img src="eventimg/animation.jpg" width="64" height="64" /></td>
                                            <td align="left">
                                            	<span class="span-wkshp-sections">
                                                	<strong style="color: #900b09">ANIMATION</strong> <em>(by Robosapiens India)</em><br />
                                                    <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-animation-details'); this.style.display='none';">more...</span>
                                                    <div id="div-wkshp-animation-details" style="display: none; text-align: justify">
                                                    	Learn animation fundas in Maya from scratch to advanced rendering through modelling, texturing, camera & animation, rigging and much more.<br />
                                                        Fees: INR 850<br />
                                                        <em>Sayahnya (+91-9749036798)<br />
                                                        <a target="_blank" href="http://robosapiensindia.com/stu_regform.php?id=8038da89e49ac5eabb489cfc6cea9fc1" class="text-body-link">Click here to register</a>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr style="height: 10px"><td></td></tr>
                                        <tr>
                                        	<td valign="top" align="center" style="height: 64px; width: 64px"><img src="eventimg/auto-wkshp.jpg" width="64" height="64" /></td>
                                            <td align="left">
                                            	<span class="span-wkshp-sections">
                                                	<strong style="color: #900b09">AUTONEX</strong> <em>(by Emanagineer India)</em><br />
                                                    <span style="cursor: pointer; color: #617f10" onclick="javascript: showDetails('div-wkshp-autonex-details'); this.style.display='none';">more...</span>
                                                    <div id="div-wkshp-autonex-details" style="display: none; text-align: justify">
                                                    	AutoNex is a workshop based on Automobile Mechanics and IC Engine Design conceptualized by Emanagineer India . The idea behind the workshop is to develop an interest among the upcoming engineers by giving them knowledge of all the automotive systems and introducing them to the needs of the current automobile designing sector. 
														In this workshop the participants will be told about all the latest technologies that are coming up in the Automotive Industry. Apart from all these the team will share the experiences of various Car Team Projects i.e. Formula 1, Mini Bajaj, Super Mileage Vehicle, Hybrid Car, Solar Car etc. 
														<br />
                                                        Fees: INR 800<br />
                                                        <a target="_blank" href="http://www.emanagineer.com/workshopregistration.htm" class="text-body-link">Click here to register</a>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                    </table>
                                    <br /><br />
                                    For further information, please contact:<br /><br />
                                    <b>Arnab Sarkar</b><br />
                                    arnab@sristi.org.in<br />
                                    +91-9475246010<br /><br />
                                    <b>Rupam Debnath</b><br />
                                    rupam@sristi.org.in<br />
                                    +91-9804058593<br /><br />
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
