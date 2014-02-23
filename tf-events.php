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
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_pcknplc');">Loco Motion</span></a>
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
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_cs');">Counter Strike 1.6</span></a>
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
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_fifa');">FIFA 08</span></a>
                                                                    	<ul>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_fifa_rulesnreg');">Rules and Regulations</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_fifa_prizemoney');">Prize Money</span></a></li>
                                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_fifa_coordinators');">Co-ordinators</span></a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>		
                                                            </li>
                                                            <li><a href="#"><span onclick="tf_event_changeTo('content_innovation');">Innovation</span></a>
                                                                <ul>
                                                                    <li><a href="#"><span onclick="tf_event_changeTo('content_inno');">Excogitation</span></a>
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
                                                                    <tr>
                                                                    	<td>
                                                                        	 <b>Sristi 2010</b> brings out an array of events for you to tempt your foray. 
                                                                             The following events are the ones that will make you compete, bringing it down to the wire and taking the bull by its horns.
                                                                             <br /><br />The event registration charge (one time, for all the events) is INR 100. 
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
                                                                            <img style="border: thin solid #617f10" src="eventimg/inno4.jpg" width="169" height="195" />
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
                                                            				    <span style="color: #900b09; font-style: italic;"><b>"Our role is to develop techniques that allow us to provide emergency life-saving procedures to injured DROWNING MEN in an extreme, remote environment without the presence of a physician."</b> - Chris Hadfield</span><br /><br />
	                                                                            Maritime is different than land incidents. The rule of thumb in law enforcement and commercial sectors of the Maritime is that if you can reach an area and help, you go...regardless of agency or jurisdiction.
																				Nassau and Suffolks choppers are not specifically designed for this type of operation so it's even more of a reason to go and help out our brothers. 
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
                                                                            The task is to build a manually controlled robot which can navigate on water and retrieve people (in our case, balls) from flood affected areas and bring them to safety (Victory zone).<br /><br />
                                                                            <b>TASK:</b><br />
                                                                            In the preliminary round, the robot has to traverse in the arena(predefined, available in the picture) and collect the balls and rescue them to the victory zone
                                                                            In the second round, there will be two ring to hold the balls as shown in the picture. only two balls(for two rings) will be kept.<br /><br />
                                                                            In the third round icebergs(treated as large ball) will be kept in the arena. it may float anywhere. deduction will be done for touching the bot.Other rules are same as 1st and 2nd round.                                                                        </td>
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
                                                                            	<li>Dimension of the arena will be <b>(2.4m*1.3m)</b></li><br />
                                                                                <li>The starting and vitory zones are the rectanguler shaped area(shown in the picture). Zones will exist in the both side of the arena. One may start from any side of the arena. The diagonally opposite side will be regarded as victory zone.<br /></li><br />
                                                                                <li>A maximum of 5 members are allowed per team. Members from different colleges can form a team.</li><br />
                                                                                <li>The robot shall start from any of the predefined starting zone.</li><br />
                                                                                <li>Maximum time allowed for 1st round is <b>4 minutes.</b></li><br />
                                                                                <li>Maximum time allowed for 2nd and 3rd round is <b>7 minutes.</b></li><br />
                                                                                <li>A maximum of <b>2</b> restarts for three round will be allowed.</li><br />
                                                                                <li>Damaging the arena will lead to disqualification.</li><br />
                                                                                <li>The robot should be wireless or manually controlled and should be capable of retriving balls.</li><br />
                                                                                <li>Before the start of the run, the robot should fit inside a box of dimensions <b>25cm x 25cm x 25cm</b> on the inside completely.</li><br />
                                                                                <li>The dimensions can however exceed after the event commences.</li><br />
                                                                                <li>The robot can either be powered by external batteries (which the participant must provide) or by a <b>220 V</b> external power supply (provided by the <b>Sristi team</b>). The 220 V power supply must be stepped down using an adapter; a maximum of <b>24 V</b> can be used to power a robot. No 220 V AC powered robot will be allowed inside water for safety reasons.</li><br />
                                                                                <li>Use of Lego kits and readymade bases is strictly prohibited and will lead to immediate disqualification of the team.</li><br />
                                                                                <li>In case of radio controlled robots, the <b>Sristi Team</b> will not be responsible for any interference. Participants have to tune in to the suitable frequency on their own.</li><br />
                                                                                <li>Wires (if any) connecting the robot to the control system should remain slack throughout the run. Any violation, even unintentional, will lead to disqualification. The wire connecting the robot to the dc power supply should be at least <b>5m</b> long.</li><br />
                                                                                <li>Air bubbles will be taken for violating the motion of the bot.</li><br />
                                                                                <li>Dimension of the balls will be as same as table tennis balls.</li><br />
                                                                                <li>Readymade gear boxes may be used.</li><br />
                                                                                <li>Maximum of <b>5 minutes</b> will be given for every restart.</li><br />
                                                                                <li>After every restart, the robot will have to start again from the initial point.</li><br />
                                                                                <li>Penalty for restarts will be as given in the scoring rules for preliminary 2nd & 3rd round.</li><br />
                                                                                <li>The decision of the <b>Sristi team</b> will be final and binding.</li><br />
                                                                            </ol>
                                                                            <b>Scoring:</b><br />
                                                                            <ul>
                                                                            	<li>Blue balls contains 25 points, orange balls contains 50 and red contains 75.</li><br />
                                                                                <li>In the 2nd and 3rd round balls must be rescued serially, failing which a penalty of <b>10 points</b> will be charged. Moreover, the ball must be returned if that is wished to be collected later, which however can't be collected within <b>10 seconds</b> of returning it. Order of collecting balls: 1st - <span style="color: #0000FF">Blue</span>, 2nd - <span style="color: #CC6600">Orange</span>, 3rd - <span style="color:#990000">Red</span>.</li><br />
                                                                                <li>One can collect balls randomly but no points will be given for that. For getting point you must remove balls and thereafter collect serially.</li><br />
                                                                                <li>Point deduction procedure: per two touch (not within 15 seconds) to the iceberg. For iceberg 25 marks.</li><br />
                                                                                <li>Holding ring size will slidely smaller than the diameter of table tennis ball.</li><br />
                                                                                <li>Penalty for per restart: 75 points.</li><br />
                                                                                <li><b>TIME BONUS: Extra time point(seconds left) will be given if one can collect and rescue all the balls.</b></li><br />
                                                                            </ul>
                                                                            <br />
                                                                            <b>The dimensions are shown in the following pictorial:</b><br /><br />
                                                                            <img style="border: none" src="eventimg/saveaquadimensions.png" width="718" height="477"/>
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
                                                                        	INR 23,000 to be won.
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
                                                                        	<b>Prasenjit Ghoshal</b><br />
                                                                            prasenjit_ghoshal@sristi.org.in<br />
                                                                            +91-9614328595<br /><br />
                                                                            <b>Abhra Ghosh</b><br />
                                                                            abhra@sristi.org.in<br />
                                                                            +91-9433736731<br /><br />
                                                                            <b>Sourav Pal</b><br />
                                                                            souravpal@sristi.org.in<br />
                                                                            +91-9733377344<br /><br/>
                                                                            <b>Ananya Dasgupta</b><br />
                                                                             ananya@sristi.org.in<br />
                                                                             +91-8906313107<br /><br />                                                                                                                                                                                                                              
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
                                                                            	<li>There will be two half and every half will be of <b>2.5 minutes.</b> Only the final match half will be of <b>4 minutes</b> each.</li><br />
																				<li>All the preliminary games will be knock-out Based.</li><br />
																				<li>Every team can take a time out (once) for <b>1 minute.</b></li><br />
																				<li>Decision of Volunteers and Event co-ordinators shall be treated as final and binding on all and Cannot be contested.</li><br />
                                                                                <li>There will be  maximum <b>5 members</b> in a team. Students from different colleges can form a team.</li><br />
                                                                                <li>There must be one captain of the team who will be the team representative.</b></li><br />
                                                                                <li>There will be <b>2 bots</b> of each team which are free to move during the game play. The Bot Specifications are given below.</li><br />
                                                                                <li>At a time both the bots are <b>not</b> allowed to stand stationary in front of the goal post. And at all times, at least <b>15%</b> of the goal area must be clear and unblocked.</li><br />
                                                                                <li>Human interference during the game play (eg. touching the bot) will not be allowed without the permission of the co-ordinators.</li><br />
                                                                                <li>A Goal will be only considered if the whole of the ball is inside the the goal.</li><br />
                                                                                <li>"Own Goal" will be treated as a goal for the opponents.</li><br />
                                                                            </ol>
                                                                            <br />
                                                                            <b>Bot Specifications:</b><br />
                                                                            <ol>
                                                                            	<li>All the 2 Bots must be of (25cm*25cm*25cm) which consecutively represents the Length, Breadth and Height of the bot.</li><br />
                                                                                <li>The Robot can be wired or wireless-controlled by a remote control, which is not included in the size constraint.</li><br />
                                                                                <li>Before the game commences, the size of the bots will be measured and if there be found which doesn't satisfy the size constraints, the bot will be disqualified. Changes at that point of time or afterward will not be allowed. There is no weight specifications for the bots in this competition.</li><br />
                                                                                <li>The most important thing is that there should <b>not</b> be any mechanism which can <b>flip</b> the ball or there should not be any hidden mechanism in the bot. Before starting of the game the participating bots will be checked and team members have to show what mechanisms they have included in the bots. There may be some mechanism like opening doors but it should be within the measurement scale. If it doesn't satisfy then that corresponding bot can't use that mechanism within the game.</li><br />
                                                                                <li>If a bot uses some mechanism during the game without showing it at the checking time then the team will be immediately disqualified.</li><br />
                                                                                <li>Bots should be made in such a way that it can't harm bots of the opponents or the Arena. If it is found that is harmful for the opponent bots or the Arena then that bot will be disqualified.</li><br />
                                                                                <li>A bot with any type of Gearbox as a machine part or base of toy car will be disqualified.</li><br />
                                                                                <li>Power supply will be there in the arena with extension cords. A maximum of <b>24 V DC</b> is allowed to be used to power the bot. Participants are requested to carry any type of instruments(eg. Screw driver) for their own use and also the DC power supply adapter.</li>
                                                                            </ol>
                                                                            <br />
                                                                            <b>Scoring:</b><br />
                                                                            <ol>
                                                                            	<li>If a Goal is scored then for each Goal Scored there will be <b>200 points.</b></li><br />
                                                                                <li>For each foul scored there will be Negative points. There are several types of foul and for the negative marks see foul section.</li><br />
                                                                            </ol>
                                                                            <br />
                                                                            <b>Foul Specifications:</b><br />
                                                                            <ol>
                                                                            	<li>If a bot holds ball for more than 5 sec then for every second after 5 seconds the negative marks will be as followed: <b>Negative marks=(balls hold for no. of second-5)*20</b></li><br />
                                                                                <li>It is possible that opponent team's bot is not giving the other bot to leave the ball then there will be the rule as per the above but for the opponent bot.</li><br />
                                                                                <li>If some bot found trying to harm the other team's bot/Arena intentionally then that particular bot will be disqualified.</li><br />
                                                                                <li>In case if some bot goes outside of the arena during the game then play will be stopped and will again start from the starting position.</li><br />
                                                                           </ol>
                                                                            <br />
                                                                            <b>Arena Pictorials:</b> (dimensions in cm)<br /><br />
                                                                            <img src="eventimg/robosoccer1.jpg" width="500" height="316" /><br /><br />
                                                                            <img src="eventimg/robosoccer2.jpg" width="500" height="312" /><br /><br />
                                                                            <img src="eventimg/robosoccer3.jpg" width="500" height="346" /><br /><br />
                                                                            
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
                                                                        	INR 23,000 to be won.
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
                                                                        	<b>Ranjan Biswas</b><br />
                                                                            ranjan@sristi.org.in<br />
                                                                            +91-9475259041<br /><br />
                                                                            <b>Mousam Mondal</b><br />
                                                                            mousam@sristi.org.in<br />
                                                                             +91-9614328489<br /><br />
                                                                            <b>Gourav Kundu</b><br />
                                                                            gourav@sristi.org.in<br />
                                                                             +91-90025828240<br /><br />
                                                                             <b>Priyanka Santoria</b><br />
                                                                             priyanka@sristi.org.in<br />
                                                                             +91-9378392458<br /><br />
                                                                             <b>Anamika Das</b><br />
                                                                             anamika@sristi.org.in<br />
                                                                             +91-9475235937<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- PCKNPLC-->
                                                        <div class="div-event-content" id="content_pcknplc">
                                                            <span class="div-event-header">Loco Motion</span><br /><br />
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
                                                            <span class="div-event-header">Loco Motion</span>&nbsp;<span class="div-event-header-light">Problem Statement</span><br /><br />
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
                                                            <span class="div-event-header">Loco Motion</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team can consist maximum of 5 members. Students from different colleges can form a team together.</li><br />
																				<li>The robot should have to fit within <b>25cm X 25cm X 25cm</b> but the robot can expand.</li><br />
                                                                                <li>Each team will be provided with <b>220 V AC</b> supply. A maximum of <b>24 V DC</b> is allowed to be used to power the bot.</li><br />
                                                                                <li>A maximum of <b>5 minutes</b> will be provided to each team to complete the task.</li><br />
                                                                                <li>
                                                                                	The arena will be divided into <b>3 parts:</b><br /><br />
                                                                                    <ul>
                                                                                    	<li><b>Starting Zone:</b> Here you will get 3 alternative paths. In the first path you have to cross an automatic gate. This path will be the shortest and will contain <b>50 points.</b> In the second path,the path will be full of sand and stonechips. This contains <b>35 points.</b> The other path will have a obstructer of thin paper. This path contains <b>25 points.</b></li><br />
                                                                                        <li><b>Picking Zone:</b> At the picking zone you will have to pick wooden piece of <b>1.5in X 1.5in X 1.5in.</b> Each piece will have a small metal hanger/hook. You will get <b>40 points</b> for picking a single piece. You can pick only a single piece at a time.</li><br />
                                                                                        <li><b>Dropping Zone:</b> The dropping zone will be three concentric squares. The outer part <b>(15in X 15in)</b> contains <b>30 points</b>, the middle part <strong>(10in X 10in)</strong> contains <b>50 points</b> and the inner part <strong>(2.5in X 2.5in)</strong> contains <b>100 points.</b></li><br />
                                                                                        <li>You will also get an additional bridge at 30 degrees in between of the dropping zone and the starting zone, which you have to cross if you want to start the task for the next time. You will get <b>10 points</b> for crossing the bridge.</li>
                                                                                    </ul>
                                                                                </li><br />
                                                                                <li>If the robot touches the sensitive areas then <b>5 points</b> will be deducted per touch.</li><br />
                                                                                <li>Switching mechanism will enable the doors to open. The switch of the automatic door will be at a height of <b>30 cm</b> from the ground.</li><br />
                                                                                <li>Usage of magnets is strictly prohibited.</li><br />
                                                                                <li>Decision of the co-ordinators will be final and teams will have to agree with it.</li><br />
                                                                            </ol>
                                                                            <br /><br />
                                                                            <b>The following pictorial shows the Arena:</b><br />
                                                                            <img src="eventimg/locomotion.jpg" width="354" height="500" />
                                                                            <br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_prizemoney">
                                                            <span class="div-event-header">Loco Motion</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	INR 23,000 to be won.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_pcknplc_coordinators">
                                                            <span class="div-event-header">Loco Motion</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Sourav Mondal</b><br />
                                                                            souravmondal@sristi.org.in<br />
                                                                            +91-9832618581<br /><br />
                                                                            <b>Dibakar Koley</b><br />
                                                                            dibakar@sristi.org.in<br />
                                                                             +91-9735277539<br /><br />
                                                                            <b>Aniruddha Hazra</b><br />
                                                                            aniruddha@sristi.org.in<br />
                                                                             +91-9635333504<br /><br /><br />
                                                                             <b>Mohana Deb</b><br />
                                                                             mohana@sristi.org.in<br />
                                                                             +91-9475200545<br /><br />
                                                                             <b>Chandrima Sengupta</b><br />
                                                                             chandrima@sristi.org.in<br />
                                                                             +91-9432157131<br /><br />                                                                             
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
                                                                            	<li>A team should comprise maximum of <b>3 members.</b> Participants from different colleges can form a team.</li><br />
                                                                                <li>Teams are requested to mail their abstract to <b>bplan@sristi.org.in</b> at most by <b>25th September 2010.</b></li><br />
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
                                                                                <li>There is no restriction on the number of teams from an institute.</li><br />
                                                                                <li>The organizers hold the right to disqualify a team if the idea is already implemented in the market.</li><br />
                                                                                <li>The judges, mentors and the organizers will take the utmost care in handling the entries, and will guarantee the utmost confidence. The decision of the judges is final.</li><br />
                                                                                <li>The organizers reserve unconditional right to disqualify an entry or cancel the participation of a team for any reason including presentation of inaccurate/incomplete information, plagiarism, late submission, violation of any intellectual property rights, or any other reason.</li><br />
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
                                                                        	INR 10,000 to be won.
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
                                                                            pema@sristi.org.in<br />
                                                                            +91-9733222378<br /><br />
                                                                            <b>Shneha Budia</b><br />
                                                                            shneha@sristi.org.in<br /><br />
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
                                                                        	It's a challenging open-for-all competition where challengers would be given to debug code with errors which they need to convert into executable code.<br /><br />
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
                                                                                <li>There will be two rounds:<br /><br />
                                                                                	<ol>
                                                                                    	<li><b>Prelims:</b> A set of MCQ questions will be given to solve.
                                                                                        	<ul>
                                                                                            	<li>Total number of questions: 30 (Aptitude Test)</li>
                                                                                                <li>Total Time: 30+5 Minutes. Extra 5 minutes will be provided to fill up their information like their team name and other info.</li>
                                                                                                <li>Marking scheme: +3 for every correct response, -1 for every incorrect response and 0 for unattempted questions.</li>
                                                                                                <li>To break the tie there will be 5 star mark questions.</li>
                                                                                                <li>Total number of teams to be qualified after first round: 9</li>
                                                                                            </ul>
                                                                                        </li><br />
                                                                                        <li><b>Mains:</b> 10 codes with errors will be given to debug.
                                                                                        	<ul>
                                                                                            	<li>Total number of questions: 8 (Programming Capability)</li>
                                                                                                <li>Total Time: 2 Hrs.</li>
                                                                                                <li>Marking scheme: 6/Question (Marking scheme covers all the prospects of the program. If someone does only a small part of the program he will be awarded the marks accordingly).</li>
                                                                                                <li>To break the tie there will be 4 star mark questions.</li>
                                                                                                <li>Total number of teams to be qualified after second round: 3</li>
                                                                                            </ul>
                                                                                        </li>
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
                                                                        	INR 10,000 to be won.
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
                                                                            <b>Avijit Bagg</b><br />
                                                                            avijit@sristi.org.in<br /><br />
                                                                            <b>Ashim Malgope</b><br />
                                                                            ashim@sristi.org.in<br/><br />                                                                            
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                         <!-- INNOVATION -->
                                                        <div class="div-event-content" id="content_inno">
                                                            <span class="div-event-header">Excogitation</span><br /><br />
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
                                                            <span class="div-event-header">Excogitation</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                			<ol>
                                                                            	<li>A team can comprise a maximum of 4 members.</li><br />
																				<li>Members of the team can be from different colleges or schools.</li><br />
                                                                                <li>Team has to show their project's feasibility in practical field.</li><br />
                                                                                <li>The teams must exhibit a working model of their project at the event.</li><br />
                                                                                <li>Teams must register themselves and submit a soft copy of their project report to <b>innovation@sristi.org.in</b> before <b>30 September 2010</b>. </li><br />
                                                                                <li>However, at the event, the presentation must be on paper. Teams can use banners and posters but computer presentation is not allowed here.</li><br />
                                                                                <li>Judgement would be made by eminent panel which includes lecturers and professors. And it will be based on the following criteria:
                                                                                	<ol>
                                                                                    	<li>Presentation/Explanation of the project.</li>
                                                                                        <li>Feasibility in practical field.</li>
                                                                                        <li>Cost of project implementation.</li>
                                                                                        <li>Eco-friendliness (the project should not affect our nature).</li>
                                                                                    </ol>
                                                                                </li><br />
                                                                                <li>However, please note that this event is subject to cancellation following the unfortunate circumstance of inadequate number of submissions of a minimum of 10.</li>
                                                                            </ol>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_inno_prizemoney">
                                                            <span class="div-event-header">Excogitation</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	INR 5,000 to be won.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_inno_coordinators">
                                                            <span class="div-event-header">Excogitation</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Arnab Khan</b><br />
                                                                            arnab0910@gmail.com<br />
                                                                            +91-9232239883<br /><br />
                                                                            <b>Anindita Majumder</b><br />
                                                                             anindita@sristi.org.in<br />
                                                                             +91-9432113011<br /><br />
                                                                             <b>Ishita Pal</b><br />
                                                                             ishita@sristi.org.in<br />
                                                                             +91-9563014776<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    	<td>
                                                                        	<span style="font-style: italic; color: #808080">(Please note that this event is subject to cancellation following the unfortunate circumstance of inadequate number of submissions of a minimum of 10.)</span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <!-- COUNTER STRIKE-->
                                                        <div class="div-event-content" id="content_cs">
                                                            <span class="div-event-header">Counter-Strike 1.6</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"Fire in the hole!"</b></span><br /><br />
                                                                            Eagle eyes....nerves of steel....lightning reflexes....sleek senses....and a strategically inclined mind to match. If this describes you, then this one is for you. Race through mazes and be the first to pounce on your prey...or the prey might turn predator. And look after your team, for there is always safety in numbers. Join us in this game of life and death.....where you must kill or be killed. So load your guns soldiers.......and let the bullets rain!
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
                                                            <span class="div-event-header">Counter-Strike 1.6</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        <ol>
                                                                        	<li>A team must comprie of 5 members.</li><br />
                                                                            <li>Shotguns, Bullpop, Krieg 552 commando, Automatic Sniper, Tactical Shield not allowed.</li><br />
                                                                            <li>In case of use of the above mentioned guns, the player will be suspended for one match and the opponent will be given the advantage.</li><br />
                                                                            <li>Each team will start with $800 as their initial balance.</li><br />
                                                                            <li>Map for the prelims (for all) is fy_snow.</li><br />
                                                                            <li>In the prelims, there will be a total of 10 matches (5 Terrorists, 5 CT). This will be selected by a toss. In case of a draw, there will be 5 more matches, and the result will be final.</li><br />
                                                                            <li>In the mains, the team can choose a chit containing de_dust2, the_inferno, the_train, nuke, piranesi maps. </li><br />
                                                                            <li>In the mains, there will be a total of 20 matches (10 Terrorists, 10 CT). In case of a draw, there will be 5 more matches, and the result will be the final.</li><br />
                                                                            <li>Silent C4 installation is considered bug play. Such an offense may result in a warning or loss of all remaining TR rounds at the sole discretion of the board of referees.</li><br />
                                                                            <li>After death, the players are not allowed to pass any commands to their teammates. In case they are found doing so, the team will be penalised a single match.</li><br />
                                                                            <li>Friendly Fire will be switched on in the match.</li><br />
                                                                            <li>Match Timing will be 1:25.</li><br />
                                                                            <li>Participants must bring their personal headphones. Keyboard and Mouse will be provided but they can bring their personal too.</li><br />
                                                                            <li>Server master can and will check for the use of any unfair practice or script, even those not listed above, during each match.</li><br />
                                                                        
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_cs_prizemoney">
                                                            <span class="div-event-header">Counter-Strike 1.6</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	INR 20,000 to be won.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_cs_coordinators">
                                                            <span class="div-event-header">Counter-Strike 1.6</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                            <b>Subhojit Das</b><br />
                                                                            subhojit@sristi.org.in<br />
                                                                            +91-9432822997<br /><br />                                                                            
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
                                                                            The smell of burning rubber fills the air, adrenaline pumps through racing hearts as nitrous hits the engine, all the world is a blur, gears crank up another notch, the wind rushes past the aerodynamics-and yes my man you are Street-Racing. So if you're one who suffers from an acute Need For Speed, then here is your drive to fame.
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
                                                                        <p align="justify">
                                                                        	It will be a total six rounds game. From the outsiders 32 players will be selected in the 1st round.
                                                                        </p>
                                                                        <p align="justify">
                                                                        	From our college also 32 players will be selected in the 1st round. In the 4th round, best 8 players
                                                                            from our college and best 8 from the outsiders will be mixed.
                                                                        </p>
                                                                        <b>Procedure of the game</b>
                                                                        <ol>
                                                                        	<li>1st round: Circuit map Omega &amp; Industries will be there. You can use only Lamborghini Gallardo for this round. The game will be of 3 laps. 32 players will be selected.</li><br />
                                                                            <li>2nd round: Sprint map NFS World Loop will be there. You can use only Mitsubishi Lancer Evolution there. 16 players will be selected.</li><br />
                                                                            <li>For the next 3 rounds any of the circuit maps will be there. You can use any car except Porsche and Mitsubishi.</li><br />
                                                                            <li>For the final round, you can use your best car. There will be any circuit map.</li><br />
                                                                        </ol>
                                                                        <b>Rules</b>
                                                                        <ol>
                                                                        	<li>N2O will be On.</li><br />
                                                                            <li>Collision detection will be Off.</li><br />
                                                                            <li>Performance Matching and Catch Up will be On.</li><br />
                                                                            <li>You can use any view of your car.</li><br />
                                                                            <li>Junkman upgrades not allowed.</li><br />
                                                                            <li>You have to use your own headphone. Keyboard will be provided. No sound system will be available.</li><br />
                                                                        </ol>
                                                                        
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
                                                                        	INR 8,000 to be won.<br />
                                                                            <ul>
                                                                            	<li>1st prize - Rs 5000</li>
                                                                                <li>2nd prize - Rs 2000</li>
                                                                                <li>3rd prize - Rs 1000</li>
                                                                            </ul>
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
                                                                            <b>Saptarshi Sannigrahi</b><br />
                                                                            saptarshi@sristi.org.in<br /><br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                     <!-- FIFA 08-->
                                                        <div class="div-event-content" id="content_fifa">
                                                            <span class="div-event-header">FIFA 08</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<span style="color: #900b09; font-style: italic;"><b>"Some people think football is a matter of life and death. I assure you, it's much more serious than that."</b> -  Bill Shankly</span><br /><br />
                                                                            All football fanatics report. It's time to show your skills with the ball. Jump into the shoes of your favourite stars and teams and lead them (and yourself of-course!) to victory. So don't wait another moment and join the line-up for you just might win the gold!
                                                                        </td>
                                                                        <td align="left" valign="top" width="240px">
                                                                            <img style="border: thin solid #617f10" src="eventimg/fifa.jpg" width="200" height="131"/>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                            </span>
                                                        </div>                                                       
                                                        <div class="div-event-content" id="content_fifa_rulesnreg">
                                                            <span class="div-event-header">FIFA 08</span>&nbsp;<span class="div-event-header-light">Rules and Regulations</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        <b>General</b>
                                                                        <ol>
                                                                        	<li>Competition Method: 1 vs. 1</li><br />
                                                                            <li>Game Mode: International</li><br />
                                                                            <li>The qualifying procedure may vary from country to country based on the number of players trying to qualify for the Grand Final.</li><br />
                                                                            <li>Host/client will be announced before the match or decided by coin toss.</li><br />
                                                                            <li>Player changes and strategy changes are limited to 3 times throughout the game. (The changes before the start of first and second half are not included in this count.)</li><br />
                                                                            <li>At the end of each match, players must maintain the final screens and receive the score confirmation from a referee.</li><br />
                                                                            <li>TEAM SRISTI may install third party programs and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data.</li><br />
                                                                            <li>The "FIFA 08" tournament shall consist of two parts: 1) a first phase: KNOCK-OUT system (1 match against eachopponent); 2) a second phase: Finals</li><br />
                                                                            <li></li><br />
                                                                        </ol>
                                                                        <b>Stadium Settings</b>
                                                                        <ol>
                                                                        	<li>Stadium: Bay Arena</li><br />
                                                                            <li>Weather: Sunny Day</li><br />
                                                                        </ol>
                                                                        
                                                                        <b>Game Settings</b>
                                                                        <ol>
                                                                        	<li>Difficulty Level = World Class</li><br />
                                                                            <li>Keeper Level = World Class</li><br />
                                                                            <li>Half Length = 6 minutes</li><br />
                                                                            <li>Injuries = ON</li><br />
                                                                            <li>Offside = ON</li><br />
                                                                            <li>Bookings = ON</li><br />
                                                                            <li>Radar = ON</li><br />
                                                                            <li>Camera = Any</li><br />
                                                                            <li>Time/Score Display = ON</li><br />
                                                                            <li>Game Speed = Fast</li><br />
                                                                            <li>Adidas Live Season = OFF</li><br />
                                                                            <li># of subs = 5</li><br />
                                                                            <li>Player auto switching = slider all to the left if possible</li><br />
                                                                            <li>Manual Cross = ON</li><br />
                                                                            <li>Manual Through-ball = ON</li><br />
                                                                        </ol>
                                                                        <b>Forbidden moves</b>
                                                                        <ol>
                                                                        	<li>Players must kick-off with a backward pass at the beginning of each half and after every goal is scored.</li><br />
                                                                            <!--
                                                                            <li>It is not allowed to score a goal from one's own half of the field.</li><br />
                                                                            <li>It is forbidden to make a throw in directly into the opponent's penalty area. Should a player throw the ball directly into the opponent's penalty area he shall be warned. Should he persist, he shall be disqualified from the tournament. Any goals resulting from a throw in into the opponent's penalty area shall be disallowed.</li><br />
                                                                            -->
                                                                            <li>If a player changes his tactics, formation or line-up he has to kick the ball out of bounds after the changes so that his opponent is able to react.</li><br />
                                                                            <li>Prior to any changes in one's team, the player that wants to change must be in possession of the ball and be in his own half before they pause the game.</li><br />
                                                                            <!--
                                                                            <li>Longballs (Q+A, Q+W, etc…) are allowed in specific cases.<br />To understand when a longball is allowed or not, have a look at the following image:<br />
                                                                            	<img src="eventimg/fifarule.jpg" height="375" width="500" /><br />
                                                                                Longballs are allowed when done from inside a green area or when you are in your own half of the field. Longballs are forbidden when taken from your yellow/blue area and are directed into your opponent's yellow/blue area. In order to allow the referees to make the appropriate call, a patch will be used to detect forbidden longballs.
                                                                            </li><br />
                                                                            -->
                                                                            <li>In any case, a goal scored due to the use of a 'forbidden move' shall be disallowed.</li><br />
                                                                            <li>Should a player persist in playing with forbidden moves, he may be disqualified from the tournament.</li><br />
                                                                            <li>All complaints shall be dealt with after the match has been completed.</li><br />
                                                                        </ol>
                                                                        <b>Disconnections</b>
                                                                        <ol>
                                                                            <li>A referee will confirm the exact score to that point (even if the ball is about to cross the goal line, the goal shall not count), and restart the match.</li><br />
                                                                            <li>A referee will inform the players on exactly how many minutes must still be played in order to complete the match.</li><br />
                                                                            <!--<li>If the disconnection occurs after a corner kick was awarded to a player, the match will resume with a corner kick for that same player.</li><br />
                                                                            -->
                                                                            <li>Intentional disconnection: Upon judgment by the referee, any offending player will be charged with a loss and a possible disqualification from the tournament.</li><br />
                                                                        </ol>
                                                                        <b>Unfair Play</b>
                                                                        <ol>
                                                                        	<li>Use of any cheat program.</li><br />
                                                                            <li>Intentional disconnection</li><br />
                                                                            <li>Use of any settings exceeding the standard and permitted settings</li><br />
                                                                            <li>Any unnecessary chatting during the match.</li><br />
                                                                            <li>If a referee decides that external conditions (Press, Team Leader, Player, Spectator, etc) are giving or have given an unfair advantage to a player, the player may be given a warning or lose by default at the referee's sole discretion.</li><br />
                                                                            <li>Upon discovery of any player committing any violations regarded as unfair play, that player will be disqualified from the tournament.</li><br />
                                                                            <li>During the course of any match, the operations staff and/or referee may determine other actions to embody unfair play at any time.</li><br />
                                                                        </ol>
                                                                        <b>These rules are for the SRISTI 2010 Grand Final and are subject to modification in the following aspects</b>
                                                                        <ol>
                                                                        	<li>Use of the most recent patch/version release of each official game is within the SRISTI committee's own discretion.</li><br />
                                                                            <li>Changes to in-game settings and options necessitated by the use of most recent patch version/release.</li><br />
                                                                            <li>Cheat Protection Program release and/or cheat protection functions.</li><br />
                                                                            <li>Game settings and/or operations guidelines dictated by differences between online and offline tournaments.</li><br />
                                                                        </ol>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_fifa_prizemoney">
                                                            <span class="div-event-header">FIFA 08</span>&nbsp;<span class="div-event-header-light">Prize Money</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	INR 8,000 to be won.
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </span>
                                                        </div>
                                                        <div class="div-event-content" id="content_fifa_coordinators">
                                                            <span class="div-event-header">FIFA 08</span>&nbsp;<span class="div-event-header-light">Co-ordinators</span><br /><br />
                                                            <span class="div-event-details">
                                                            	<table border="0" cellpadding="2" cellspacing="2" width="100%">
                                                                	<tr>
                                                                    	<td align="justify" valign="top">
                                                                        	<b>Subhra Sankha Sardar</b><br />
                                                                            subhra@sristi.org.in<br />
                                                                            +91-9609709680<br />
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
