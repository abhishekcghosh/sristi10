<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	$defaultcontent="content_default";
	if(isset($_GET['p']))
	{
		switch(strtolower($_GET['p']))
		{
			case 'saveaqua':
				$defaultcontent="content_saveaqua";
			break;
			case 'robosoccer':
				$defaultcontent="content_robosoccer";
			break;
			case 'pcknplc':
				$defaultcontent="content_pcknplc";
			break;
			case 'codndbug':
				$defaultcontent="codndbug";
			break;
			case 'gaming':
				$defaultcontent="content_gaming";
			break;
			case 'bplan':
				$defaultcontent="content_bplan";
			break;
			case 'innovation':
				$defaultcontent="content_inno";
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
    <script language="javascript" type="text/javascript" src="scripts/tf-events-menu.js"></script>
    <script language="javascript" type="text/javascript" src="scripts/tf-events-content.js"></script>
    <script language="javascript" type="text/javascript">
		var last_displayed_content="";
	</script>
    	<style type="text/css">
			.clear {
				clear:both;
			}
			#slidedown_menu{
				font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 8pt;
			}
			#slidedown_menu li{
				list-style-type:none;
				position:relative;
			}
			#slidedown_menu ul{
				margin:0px;
				padding:0px;
				position:relative;
			}
			#slidedown_menu div{
				margin:0px;
				padding:0px;
			}
			/* 	Layout CSS */
			#slidedown_menu{		
				visibility:hidden;
			}
			/* All A tags - i.e menu items. */
			#slidedown_menu a{
				color: #000;
				text-decoration:none;	
				display:block;
				clear:both;
				padding-left:2px;	
			}
			/*
			A tags 
			*/
			#slidedown_menu .slMenuItem_depth1{	/* Main menu items */
				font-weight:bold; font-size: 10pt;
				color: #900b09;
				margin: 2px;
			}	
			#slidedown_menu .slMenuItem_depth2{	/* Sub menu items */
				color: #617f10;
				font-weight: 700;
				margin: 2px;
			}	
			#slidedown_menu .slMenuItem_depth3{	/* Sub menu items */
				color: #bbbf21;
				margin: 2px;
			}	
			#slidedown_menu .slMenuItem_depth4{	/* Sub menu items */
			}	
			#slidedown_menu .slMenuItem_depth5{	/* Sub menu items */
			}
			/* UL tags, i.e group of menu utems. 
			It's important to add style to the UL if you're specifying margins. If not, assign the style directly
			to the parent DIV, i.e. 
			#slidedown_menu .slideMenuDiv1
			instead of 
			#slidedown_menu .slideMenuDiv1 ul
			*/
			#slidedown_menu .slideMenuDiv1 ul{
				padding:1px;
			}
			#slidedown_menu .slideMenuDiv2 ul{
				margin-left:5px;
				padding:1px;
			}
			#slidedown_menu .slideMenuDiv3 ul{
				margin-left:10px;
				padding:1px;
			}
			#slidedown_menu .slMenuItem_depth4 ul{
				margin-left:15px;
				padding:1px;
			}
			/* content styles*/
			.div-event-content {
				display: none;
				opacity: 0;
			}
			.div-event-header {
				font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: 700; color: #617f10;
			}
			.div-event-header-light {
				font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: 700; color: #bbbf21;
			}
			.div-event-header-brown {
				font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: 700; color: #900b09;
			}
			.div-event-details {
				font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif; font-size: 10pt; color: #000000;
			}
			
		</style>

    <title>Events</title>
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
                            	<tr><td><span  class="content-placer">home | events</span><br /><br /></td></tr>
                                <tr><td><span class="content-header">Events</span><br /><br /></td></tr>
                                <tr>
                                	<td>
                                		<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                        	<tr>
                                            	<td width="190px" valign="top" align="left">
                                                	<!-- MENU HOLDER -->
                                                    <div id="slidedown_menu">
                                                        <ul>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_robotics');">Robotics</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_saveaqua');">SaveAqua</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_saveaqua_probstat');">Problem Statement</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_saveaqua_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_saveaqua_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_saveaqua_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_robosoccer');">Robosoccer</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_robosoccer_probstat');">Problem Statement</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_robosoccer_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_robosoccer_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_robosoccer_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc');">Pick N Place</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc_probstat');">Problem Statement</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_programming');">Programming</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_codndbug');">Coding and Debugging</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_codndbug_probstat');">Problem Statement</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_codndbug_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_codndbug_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_codndbug_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>		
                                                            </li>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_businessplan');">Management</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_bplan');">Business Plan</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_bplan_probstat');">Procedure</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_bplan_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_bplan_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_bplan_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>		
                                                            </li>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_gaming');">Gaming</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_cs');">Counter Strike: Condition Zero</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_cs_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_cs_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_cs_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_nfsmw');">NFS Most Wanted</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_nfsmw_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_nfsmw_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_nfsmw_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>		
                                                            </li>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_innovation');">Innovation</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_inno');">The Event</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_inno_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_inno_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_inno_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>		
                                                            </li>
                                                        </ul>
                                                    </div>
                                           			<script language="javascript" type="text/javascript">
														initSlideDownMenu();
													</script>
                                                </td>
                                            	<td align="left" valign="top">
                                                <input type="hidden" id="lastDisplayedContent" value="<?php echo $defaultcontent; ?>" />
                                                	<!-- CONTENT DESC HOLDER -->
                                                    <div class="div-event-content" id="content_default">
                                                    	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr><td align="left"><span class="div-event-header-light">Robotics</span></td></tr>
                                                                    <tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/robotics1.jpg" width="220" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/robotics2.jpg" width="175" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/robotics3.jpg" width="141" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td align="right"><span class="div-event-header-light">Programming</span></td></tr>
                                                                    <tr>
                                                                    	<td align="right" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/programming2.jpg" width="171" height="120" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/programming1.jpg" width="190" height="120" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/programming3.jpg" width="160" height="120" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td align="left"><span class="div-event-header-light">Management</span></td></tr>
                                                                    <tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/mgmt1.jpg" width="167" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/mgmt2.jpg" width="218" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/mgmt3.jpg" width="181" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td align="right"><span class="div-event-header-light">Gaming</span></td></tr>
                                                                    <tr>
                                                                    	<td align="right" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/gaming1.jpg" width="266" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/gaming2.jpg" width="127" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/gaming3.jpg" width="148" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td align="left"><span class="div-event-header-light">Innovation</span></td></tr>
                                                                    <tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/inno1.jpg" width="228" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno2.jpg" width="204" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno3.jpg" width="228" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                    </div>
                                                    <!-- LEVEL 1: GROUPS -->
                                                    <div class="div-event-content" id="content_robotics">
                                                    	<span class="div-event-header-brown">Robotics</span><br /><br />
                                                        <span class="div-event-details">
                                                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/robotics1.jpg" width="220" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/robotics2.jpg" width="175" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/robotics3.jpg" width="141" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        </span>
                                                    </div>
                                                    <div class="div-event-content" id="content_programming">
                                                    	<span class="div-event-header-brown">Programming</span><br /><br />
                                                        <span class="div-event-details">
                                                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/programming2.jpg" width="171" height="120" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/programming1.jpg" width="190" height="120" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/programming3.jpg" width="160" height="120" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        </span>
                                                    </div>
                                                    <div class="div-event-content" id="content_businessplan">
                                                    	<span class="div-event-header-brown">Business Plan</span><br /><br />
                                                        <span class="div-event-details">
                                                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/mgmt1.jpg" width="167" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/mgmt2.jpg" width="218" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/mgmt3.jpg" width="181" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        </span>
                                                    </div>
                                                    <div class="div-event-content" id="content_gaming">
                                                    	<span class="div-event-header-brown">Gaming</span><br /><br />
                                                        <span class="div-event-details">
                                                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/gaming1.jpg" width="266" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/gaming2.jpg" width="127" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/gaming3.jpg" width="148" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        </span>
                                                    </div>
                                                    <div class="div-event-content" id="content_innovation">
                                                    	<span class="div-event-header-brown">Innovation</span><br /><br />
                                                        <span class="div-event-details">
                                                            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="left" valign="top">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/inno1.jpg" width="228" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno2.jpg" width="204" height="195" />
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno3.jpg" width="228" height="195" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        </span>
                                                    </div>
                                                    <!-- END OF LEVEL 1: GROUPS -->
                                                    <!-- LEVEL 2: EVENTS (WITH LEVEL3 INSIDE)-->
                                                        <!-- SAVEAQUA-->
                                                        <div class="div-event-content" id="content_saveaqua">
                                                            <span class="div-event-header">SaveAqua</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                            					The human race for long has had the zeal to conquer water and has oft done so. 
                                                               					Now it's the turn for the race of robots to do so. 
                                                                				Can <i>you</i> build a robot competent enough to conquer water?
                                                                        </td>
                                                                        <td align="left" valign="top" width="250px">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/saveaqua.jpg" height="200" width="250" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                
                                                               
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_saveaqua_probstat">
                                                            <span class="div-event-header">SaveAqua</span>&nbsp;<span class="div-event-header-light">Problem Statement</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			A watertank will be provided underground in a glass and wood circuit. 
                                                                            Participants need to make a boat which is capable of collecting and removing the ball from a holding ring. 
                                                                            There will be such obstacle which is shown in the Event diagram section. 
                                                                            In the tank there will be a starting zone and a victory zone at the two sides. 
                                                                            You have to start from the starting zone and after collecting the balls have to free them in the victory zone. 
                                                                            In the final round there will be more obstacles.        
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_saveaqua_rulesnreg">
                                                            <span class="div-event-header">SaveAqua</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>The balls must be collected serially (1st <span style="color: #000099">blue</span>, 2nd <span style="color: #CC6600">orange</span> and then <span style="color: #990000">red</span>). You can't collect balls randomly. No points will be awarded for random collection. Serially you can collect more than 1 ball.</li><br />
																				<li>The dimension of the arena will be <b>2.3m X 1m</b>. The maximum allowed dimension of the boat is <b>25cm X 25cm X 25 cm</b>. Diameter of the balls will be as that of a table-tennis ball.</li><br />
																				<li>In the prelims the total time given will be <b>4 minutes</b> and in the final round <b>7 minutes</b> will be given.</li><br />
																				<li>Per <b>2 touch</b> in the obstacles, <b>5 points</b> will be deducted from the total.</li><br />
                                                                            </ol>
                                                                            <b>Points:</b><br />
                                                                            <ul>
                                                                            	<li><span style="color: #000099">Blue</span> - <b>25</b> Points</li><br />
                                                                                <li><span style="color: #CC6600">Orange</span> - <b>50</b> Points</li><br />
                                                                                <li><span style="color: #990000">Red</span> - <b>75</b> Points</li><br />
                                                                            </ul>
                                                                            <br />
                                                                            <b>The dimensions are shown in the following pictorial:</b><br /><br />
                                                                            <img style="border: thin solid #617f10" src="eventimg/saveaquadimensions.png" width="346" height="475" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_saveaqua_prizemoney">
                                                            <span class="div-event-header">SaveAqua</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_saveaqua_coordinators">
                                                            <span class="div-event-header">SaveAqua</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Prasenjit Ghosal</b><br />
                                                                            (email id)<br />
                                                                            +91-9614328595<br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- ROBOSOCCER-->
                                                        <div class="div-event-content" id="content_robosoccer">
                                                            <span class="div-event-header">RoboSoccer</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"Pro football is like nuclear warfare. There are no winners, only survivors."</b> - Frank Gifford</span><br /><br />
                                                                            Football <i>is</i> religion, and the fever of FIFA World Cup 2010 is not yet over. <br /><br />
                                                                            <b>Sristi '10</b> presents robosoccer in the form of <b><i>"JoluKick"</i></b>, a play for life. 
                                                                            An event where you get a chance to fight with the best robots in the game of football. <br /><br />
                                                                            So guys boot up and get ready to defeat your opponent.
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/robosoccer.jpg" height="240" width="240" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_robosoccer_probstat">
                                                            <span class="div-event-header">RoboSoccer</span>&nbsp;<span class="div-event-header-light">Problem Statement</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	An arena similar to a football ground will be constructed with 2 goal post in opposite sides. 
                                                                            Two manual robots will be competing against each other.
                                                                            The team that scores highest number of goals in the allotted time span wins the competition.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_robosoccer_rulesnreg">
                                                            <span class="div-event-header">RoboSoccer</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team can consist maximum of 5 members. Students from different colleges can form a team together.</li><br />
																				<li>There will be <b>2 robots</b> from each team.</li><br />
																				<li>Teams must show the mechanism of their robots to the opponent before the start of a match. Any team found guilty of not disclosing the mechanism will be disqualified.</li><br />
																				<li>The use age of flick mechanism is barred.</li><br />
                                                                                <li>The robot must fit within a <b>25cm X 25cm X 25cm</b> box, but the robot can expand when it will run/play the match.</li><br />
                                                                                <li>Teams will be provided with <b>220 V AC supply.</b></li><br />
                                                                                <li>A robot can use a maximum of <b>24 V DC.</b></li><br />
                                                                                <li>Duration of a match will be <b>6 minutes.</b></li><br />
                                                                                <li>During the match each team can take a time out of <b>1 minute.</b></li><br />
                                                                                <li>If the two teams score same points, the winner will be decided by a penalty shootout comprising of <b>3 shots</b> per team.</li><br />
                                                                                <li>The size of the arena will be <b>3m X 1.75m.</b> The goal will be <b>60cm X 35cm</b> in dimension.</li><br />
                                                                                <li>Balls similar to table-tennis balls will be used in the event.</li><br />
                                                                            </ol>
                                                                            <b>Points:</b><br />
                                                                            <ol>
                                                                            	<li>For each goal the teams will be awarded <b>100 points.</b></li><br />
                                                                                <li>If the ball goes outside from the arena <b>20 points</b> will be deducted.</li><br />
                                                                                <li>If the robot intentionally crashes with the opponent <b>50 points</b> will be deducted. After <b>3 such fouls</b> the team will be disqualified.</li><br />
                                                                                <li>If the robot holds the ball more than <b>5 seconds</b>, <b>30 points</b> will be deducted.</li><br />
                                                                            </ol>
                                                                            <br />
                                                                            <b>The dimensions are shown in the following pictorial:</b><br /><br />
                                                                            (To be uploaded soon)
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_robosoccer_prizemoney">
                                                            <span class="div-event-header">RoboSoccer</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_robosoccer_coordinators">
                                                            <span class="div-event-header">RoboSoccer</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Mausam Mondal</b><br />
                                                                            (email id)<br />
                                                                            (+91-961432489)<br /><br />
                                                                            <b>Gourab Mondal</b><br />
                                                                            (email id)<br />
                                                                             +91-9002582824<br /><br />
                                                                            <b>Ranjan Biswas</b><br />
                                                                            (email id)<br />
                                                                             +91-9475259041<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- PCKNPLC-->
                                                        <div class="div-event-content" id="content_pcknplc">
                                                            <span class="div-event-header">Pick N Place</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"At bottom, robotics is about us. It is the discipline of emulating our lives, of wondering how we work."</b> - Rod Grupen, Discovery Magazine, June 2008</span><br /><br />
                                                                            Life is a difficult path, and you have to carry a huge load, travel through a tough path and only then can you achieve success in your life.<br /><br />
                                                                            <b>Sristi '10</b>  presents an interesting event which puts your path selection and carrying capacity to test.<br /><br />
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/pcknplc.jpg" height="238" width="250" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_probstat">
                                                            <span class="div-event-header">Pick N Place</span>&nbsp;<span class="div-event-header-light">Problem Statement</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	A robot will be has to be constructed which will have to travel through tough paths, follow signal and then pick up loads and place it at their destination.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_rulesnreg">
                                                            <span class="div-event-header">Pick N Place</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team can consist maximum of 5 members. Students from different colleges can form a team together.</li><br />
																				<li>The robot should have to fit within <b>25 cm X 25cm X 25cm</b> but the robot can expand.</li><br />
                                                                                <li>Each team will be provided with <b>220 V AC supply.</b></li><br />
                                                                                <li>A maximum of <b>5 minutes</b> will be provided to each team to complete the task.</li><br />
                                                                                <li>The arena will be divided into <b>3 parts.</b> The automatic door will contain <b>50 points</b>, obstructer path will contain <b>30 points</b> and the sand and stone path will contain <b>25 points.</b> And <b>10 points</b> will be awarded for crossing the bridge.</li><br />
                                                                                <li>The dropping zone of the arena contain <b>3 parts.</b> First, the inner part contains <b>100 points</b>, the second part contains <b>50 points</b> and the last part contains <b>30 points.</b></li><br />
                                                                                <li>If the robot touches the sensitive areas then <b>5 points</b> will br deducted per touch.</li><br />
                                                                                <li>Switching mechanism will enable the doors to open.</li><br />
                                                                            </ol>
                                                                            <b>Points:</b><br />
                                                                            <ol>
                                                                            	<li>For each goal the teams will be awarded <b>100 points.</b></li><br />
                                                                                <li>If the ball goes outside from the arena <b>20 points</b> will be deducted.</li><br />
                                                                                <li>If the robot intentionally crashes with the opponent <b>50 points</b> will be deducted. After <b>3 such fouls</b> the team will be disqualified.</li><br />
                                                                                <li>If the robot holds the ball more than <b>5 seconds</b>, <b>30 points</b> will be deducted.</li><br />
                                                                            </ol>
                                                                            <br />
                                                                            <b>The dimensions are shown in the following pictorial:</b><br /><br />
                                                                            (To be uploaded soon)
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_prizemoney">
                                                            <span class="div-event-header">Pick N Place</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_coordinators">
                                                            <span class="div-event-header">Pick N Place</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Sourav Mondal</b><br />
                                                                            (email id)<br />
                                                                            (+91-9832618581)<br /><br />
                                                                            <b>Dibakar Kohley</b><br />
                                                                            (email id)<br />
                                                                             +91-9735277539<br /><br />
                                                                            <b>Sayanhya Roy</b><br />
                                                                            (email id)<br />
                                                                             +91-9749036798<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- BPLAN -->
                                                        <div class="div-event-content" id="content_bplan">
                                                            <span class="div-event-header">Business Plan</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"If you can imagine it, you can achieve it; if you can dream it, you can become it."</b> - William Arthur Ward</span><br /><br />
                                                                            How to make money? Simple have a good business. <br /><br />
                                                                            But behind every successful business there is a strong plan which gives it a strong platform to execute. <br /><br />
                                                                            <b>Sristi '10</b> invites those inspirants to come and expose their plans. We want to extract out the Ambanis, Tatas and Birlas out of the Indians.
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/bplan.jpg" height="194" width="250" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_bplan_probstat">
                                                            <span class="div-event-header">Business Plan</span>&nbsp;<span class="div-event-header-light">Procedure</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<ol>
                                                                            	<li>A team should comprise maximum of <b>3 members.</b></li><br />
                                                                                <li>Teams are requested to mail their abstract to <b>bplan@sristi.org.in</b> at most by <b>15th September 2010.</b></li><br />
                                                                                <li>After selection of the abstract, teams will have to present their power-point presentation in front of the judjes.</li><br />
                                                                            </ol>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_bplan_rulesnreg">
                                                            <span class="div-event-header">Business Plan</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>Abstract should not be more than <b>1000 words</b> comprising of basic idea, financial and marketing strategy, working plan etc.</li><br />
																				<li>Abstract should be sent in <b>pdf</b> format with <b>Times New Roman</b> font having line spacing <b>1.5</b>.</li><br />
                                                                                <li>In the final round the time limit is <b>10 minutes.</b></li><br />
                                                                            </ol>
                                                                            The objective of the semi-final round of judging will be to provide feedback to participants and reduce the pool of contestants to a group of finalists. <br /><br />
                                                                            There will be a different set of judges for the semi-final and final rounds.<br /><br /><br />
                                                                            <b>The Judgement:</b><br /><br />
                                                                            Judges are asked to evaluate the plans based upon their potential to become the basis of a viable new venture and will focus on the idea, its potential for social value creation, and the likelihood of achieving that success based upon the team's plan and experience. 
                                                                            Judges will look at both the strength of the concept and areas related to execution of the plan, and will evaluate specifically:
                                                                            <ul>
                                                                            	<li><b>Idea/Concept:</b> The concept reflects an innovative approach. The team has a clear understanding of the issue it seeks to address, the economic and social drivers of the model, and the feasibility of the concept.</li><br />
                                                                                <li><b>Social Value Creation:</b> The business model is likely to make a substantial contribution toward the solution of the issue it seeks to address and can be sustained for a period of time consistent with achieving the desired social impact. (If growing the organization is not the preferred strategy, the program is transferable and replicable).</li><br />
                                                                                <li><b>People:</b> The team has (or can get) relevant skills, contacts, and experience. The team is persuasive in communicating the idea and its potential.</li><br />
                                                                                <li><b>Context:</b> The rules of the game (i.e., regulatory, tax, political) are favorable. Market need, size of opportunity, competitive landscape, and potential risks are identified and manageable.</li><br />
                                                                                <li><b>Resources:</b> The financing plan is sensible in terms of the capital required to launch and operate. Funding sources are identified and a plan for securing initial investment is articulated.</li><br />
                                                                                <li><b>Performance Measurement:</b> The plan takes a practicable approach to measuring organizational outcomes and provides a clear plan to deliver high performance.</li><br />
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_bplan_prizemoney">
                                                            <span class="div-event-header">Business Plan</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_bplan_coordinators">
                                                            <span class="div-event-header">Business Plan</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">                                                                        	
                                                                            <b>Pema Dolmo Yolmo</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- CODNDBUG -->
                                                        <div class="div-event-content" id="content_codndbug">
                                                            <span class="div-event-header">Coding and Debugging</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                            Computing is not a tiny tot's game. It is a cornerstone of the
                                                                            modernism that we boast of. So be it. Computing can come to grips with
                                                                            an approach to problem-solving, and a way of crafting solutions, that
                                                                            is unique, versatile and powerful. And, it has been rightly said:<br />                                                                             
                                                                            <blockquote><span style="font-style: italic; color: #900b09">"If you can debug your own program, it only means that
                                                                            you are half a competent programmer."</span></blockquote>                                                                             
                                                                            Hence, debugging a code is as good as coding it. Although it can be
                                                                            frustrating, debugging is one of the most intellectually rich,
                                                                            challenging, and interesting parts of programming. In some ways
                                                                            debugging is like detective work. You are confronted with clues and
                                                                            you have to infer the processes and events that lead to the results
                                                                            you see. Also, just like experimental science, if your hypothesis goes
                                                                            wrong, you have to come up with a new idea. Start afresh. But always
                                                                            remember:<br />
                                                                            <blockquote><span style="font-style: italic; color: #900b09">"When you have eliminated the impossible, whatever remains, however
                                                                            improbable, must be the truth."</span></blockquote>
                                                                            So, what is it that entices your mind, appealing to you like nothing
                                                                            else? A blinking cursor? A long-drawn-out Java code? Or clattering of
                                                                            the keyboard? If you somewhere down there feel- <i>'YES'</i>, come here and
                                                                            get going! Show us your computing prowess!
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                            <img style="border: thin solid #617f10" src="eventimg/programming1.jpg" width="190" height="120" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_codndbug_probstat">
                                                            <span class="div-event-header">Coding and Debugging</span>&nbsp;<span class="div-event-header-light">Problem Statement</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	It's a challenging competition where challengers would be given to debug code with errors which they need to convert into executable code.<br /><br />
                                                                            India has made its mark globally in the software field. It's not far when India would be ranked first in the field of Information Technology.<br /><br />
																			<b>Sristi 2010</b> invites the talented future programmers to challenge each other and prove to the world that they are ready to develop any kind of software.
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                        	<img style="border: thin solid #617f10" src="eventimg/programming2.jpg" width="171" height="120" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_codndbug_rulesnreg">
                                                            <span class="div-event-header">Coding and Debugging</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team must comprise of <b>3 members</b>.</li><br />
																				<li>Members of the team can be from different colleges.</li><br />
                                                                                <li>Programming will be done in <b>"C"</b> language.</b></li><br />
                                                                                <li>There will be two rounds:
                                                                                	<ol>
                                                                                    	<li><b>Prelims:</b> A set of MCQ questions will be given to solve.</li>
                                                                                        <li><b>Mains:</b> 10 codes with errors will be given to debug.</li>
                                                                                    </ol>
                                                                                </li><br />
                                                                                <li>The team that completes the task <b>fastest</b> would be awarded the prize.</li><br />
                                                                                <li>In case of a tie <b>best solution</b> would be awarded the prize</li><br />
                                                                                <li>Teams should register themselves before <b>30/9/2010</b>. Participants will not be entertained afterwards.</li><br />
                                                                            </ol>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_codndbug_prizemoney">
                                                            <span class="div-event-header">Coding and Debugging</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_codndbug_coordinators">
                                                            <span class="div-event-header">Coding and Debugging</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                            <b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                         <!-- INNOVATION -->
                                                        <div class="div-event-content" id="content_inno">
                                                            <span class="div-event-header">Innovation</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"The world leaders in innovation and creativity will also be world leaders in everything else."</b> - Harold R. McAlindon</span><br /><br />
                                                                            India is gifted with abundant natural resources; still the rural parts of our country are under-developed reason being minimum utilization of the available resources.
                                                                            Still there are many natural resources which are unused, if taken help they can generated many development in our nation.<br /><br />
																			<b>Sristi 2010</b> invites certain innovative projects for the rural development of our country with the application of science and technology. 
                                                                            The projects can be working model or a paper presentation of the idea. 
                                                                            The best project would be implemented in the practical field for its usage.
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno3.jpg" height="195" width="228" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>                                                       
                                                        <div class="div-event-content" id="content_inno_rulesnreg">
                                                            <span class="div-event-header">Innovation</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team can comprise a maximum of 4 members.</li><br />
																				<li>Members of the team can be from different colleges.</li><br />
                                                                                <li>Team has to show their project's feasibility in practical field.</li><br />
                                                                                <li>Presentation must be on paper. Teams can use banners and posters but computer presentation is not allowed.</li><br />
                                                                                <li>Teams would have to register themselves before <b>30/9/2010</b>.</li><br />
                                                                                <li>Judgement would be made by eminent panel which includes lecturers and professors. And it will be based on the following criteria:
                                                                                	<ol>
                                                                                    	<li>Presentation/Explanation of the project.</li>
                                                                                        <li>Feasibility in practical field.</li>
                                                                                        <li>Cost of project implementation.</li>
                                                                                        <li>Eco-friendliness (the project should not affect our nature).</li>
                                                                                    </ol>
                                                                                </li>
                                                                            </ol>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_inno_prizemoney">
                                                            <span class="div-event-header">Innovation</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_inno_coordinators">
                                                            <span class="div-event-header">Innovation</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                            <b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- COUNTER STRIKE-->
                                                        <div class="div-event-content" id="content_cs">
                                                            <span class="div-event-header">Counter-Strike: Condition Zero</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"Fire in the hole!"</b></span><br /><br />
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                            <img style="border: thin solid #617f10" src="eventimg/cscz.jpg" width="200" height="150"/>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>                                                       
                                                        <div class="div-event-content" id="content_cs_rulesnreg">
                                                            <span class="div-event-header">Counter-Strike: Condition Zero</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_cs_prizemoney">
                                                            <span class="div-event-header">Counter-Strike: Condition Zero</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_cs_coordinators">
                                                            <span class="div-event-header">Counter-Strike: Condition Zero</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                            <b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- NFSMW-->
                                                        <div class="div-event-content" id="content_nfsmw">
                                                            <span class="div-event-header">NFS Most Wanted</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"If everything seems under control, you're just not going fast enough."</b> - Mario Andretti</span><br /><br />
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                            <img style="border: thin solid #617f10" src="eventimg/nfsmw.jpg" width="234" height="150"/>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>                                                       
                                                        <div class="div-event-content" id="content_nfsmw_rulesnreg">
                                                            <span class="div-event-header">NFS Most Wanted</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_nfsmw_prizemoney">
                                                            <span class="div-event-header">NFS Most Wanted</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	The Prize Money has yet not been declared.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_nfsmw_coordinators">
                                                            <span class="div-event-header">NFS Most Wanted</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                            <b>(Name)</b><br />
                                                                            (email id)<br />
                                                                            (+91-Phone)<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                    <!-- END OF LEVEL 2: EVENTS -->
                                                    <script language="javascript" type="text/javascript">
														initContentDisplay();
													</script>
                                                </td>
                                            </tr>
                                        </table>	
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