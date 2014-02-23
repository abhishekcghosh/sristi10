<?php
	//system
	require_once('tf-config.php');
	require_once('tf-session-info.php');
	if($li_privilege=='ADMIN' || $li_privilege=='GENERAl') { header("location: tf-user.php"); }
	$feedback_msg='';
	$feedback_success='';
	if(isset($_GET['ref']))
	{
		switch($_GET['ref'])
		{
			case 'registersqlerror':
				$feedback_msg='A problem occured during the registration. Sorry for the inconvinience. Please try again later.';
				break;
			case 'registerincomplete':
				$feedback_msg='It seems that you have <b>not</b> filled in all the necessary details. Please provide all the details asked for and then click on <b>Register</b> again.';
				break;
			case 'registerinvalidemailid':
				$feedback_msg='The Email ID you provided is <b>invalid.</b> Please provide a valid Email ID to register.';
				break;
			case 'registeremailidexists':
				$feedback_msg='A registered user with the same Email ID already <b>exists.</b> Please provide a unique Email ID to register.';
				break;
			case 'registersuccess':
					$feedback_msg='<b>You have been successfully registered for Sristi 2010.</b><br /><br />An email has been sent to you that contains your password.<br /><br />Kindly check <b>spam</b> in case you do not find the mail in your inbox.';
					$feedback_success='SUCCESS';
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
    <title>Register for Sristi 2010</title>
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
                            <?php
								if($feedback_success!='SUCCESS')
								{
							?>
                            <form name="form_register" method="post" action="tf-register-backend.php">
                            <table border="0" cellpadding="2" cellpadding="2" width="100%">
                            	<tr><td colspan="2"><span  class="content-placer">home | register</span><br /><br /></td></tr>
                                <tr><td colspan="2"><span class="content-header">Register for Sristi 2010</span><br /><br /></td></tr>
                                <tr><td width="80px">Email ID</td><td><input class="form-items" id="register_emailid" type="text" name="emailid" maxlength="256" value="" size="50" /></td></tr>
                                <tr><td>First Name</td><td><input class="form-items" id="register_firstname" type="text" name="firstname" maxlength="128" value="" size="50" /></td></tr>
                                <tr><td>Last Name</td><td><input class="form-items" id="register_lastname" type="text" name="lastname" maxlength="128" value="" size="50" /></td></tr>
                               <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>College</td><td>
                                					<select class="form-items" name="college" id="register_college" onchange="javascript: if(this.value=='other') { this.form.txtcollege.disabled=''; } else { this.form.txtcollege.disabled='disabled'; this.form.txtcollege.value=''; }">
                                                        <option>JALPAIGURI GOVT. ENGINEERING COLLEGE</option>
                                                        <option>JADAVPUR UNIVERSITY</option>
                                                        <option>BENGAL ENGG. AND SCIENCE UNIVERSITY, SHIBPUR</option>
                                                        <option>KALYANI GOVT. ENGINEERING COLLEGE</option>
                                                        <option>IIT KHARAGPUR</option>
                                                        <option>IIT GUWAHATI</option>
                                                        <option>NIT DURGAPUR</option>
                                                        <option>NIT SILCHAR</option>
                                                        <option>NIT AGARTALA</option>
                                                        <option>NIT PATNA</option>
                                                        <option>NIT ROURKELA</option>
                                                        <option>ISM DHANBAD</option>
                                                        <option>ABACUS INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>ABSS INSTITUTE OF HIGHER EDUCATION, HOWRAH</option>
                                                        <option>ADAMAS INSTITUTE OF TECHNOLOGY</option>
                                                        <option>ADVANCED INFORMATION & MANAGEMENT STUDIES, DURGAPUR</option>
                                                        <option>ADVANCED INSTITUTE OF MODERN MANAGEMENT & TECHNOLOGY, DT 24PGS(N)</option>
                                                        <option>APEX MANAGEMENT INSTITUTE, </option>
                                                        <option>ARMY INSTITUTE OF MANAGEMENT, KOLKATA, ALIPORE KOLKATA</option>
                                                        <option>ASANSOL ENGINEERING COLLEGE, ASANSOL BURDWAN</option>
                                                        <option>B.C.D.A. COLLEGE OF PHARMACY & TECHNOLOGY, KOLKATA</option>
                                                        <option>B.P. PODDAR INSTITUTE OF MANAGEMENT & TECHNOLOGY, KOLKATA</option>
                                                        <option>BANKURA UNNAYANI INSTITUTE OF ENGINEERING, PS&DT BANKURA</option>
                                                        <option>BENGAL COLLEGE OF ENGINEERING & TECH. FOR WOMEN</option>
                                                        <option>BENGAL COLLEGE OF ENGINEERING & TECHNOLOGY, DURGAPUR</option>
                                                        <option>BENGAL COLLEGE OF PHARMACEUTICAL SCIENCE & RESEARCH</option>
                                                        <option>BENGAL INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>BENGAL SCHOOL OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>BENGAL SCHOOL OF TECHNOLOGY, DISTT </option>
                                                        <option>BHARAT TECHNOLOGY, </option>109<option>DREAM INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>BHARTIYA VIDYA  BHAVAN (INSTITUTE OF MANAGEMENT), SALT LAKE CITY,KOLKATA</option>
                                                        <option>BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY, DT BIRBHUM</option>
                                                        <option>BIRLA SCHOOL OF MANAGEMENT</option>
                                                        <option>BUDGE BUDGE INSTITUTE OF TECHNOLOGY, </option>157<option>CAMELLIA INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>CALCUTTA INST. OF PHARMACEUTICAL TECH & ALLIED HEALTH SCIENCES, ULUBERIA HOWRAH</option>
                                                        <option>CAMELLIA INSTITUTE OF TECHNOLOGY</option>
                                                        <option>CAMELLIA SCHOOL OF BUSINESS MANAGEMENT</option>
                                                        <option>CAMELLIA SCHOOL OF ENGINEERING & TECHNOLOGY</option>
                                                        <option>CHINSURAH INSTITUTE OF MANAGEMENT & TECHNOLOGY, 2680-5802, 2631-7831</option>
                                                        <option>COLLEGE OF CERAMIC TECHNOLOGY, KOLKATA</option>
                                                        <option>COLLEGE OF ENGINEERING & MANAGEMENT, KOLAGHAT, DT MIDNAPORE,PS-MECHEDA</option>
                                                        <option>DINABANDHU ANDREWS INSTITUTE OF TECHNOLOGY & MANAGEMENT, KOLKATA</option>
                                                        <option>DOEACC SOCIETY</option>
                                                        <option>DOLPHIN SCHOOL OF HOTEL MANAGEMENT</option>
                                                        <option>DOOARS ACADEMY OF TECHNOLOGY AND MANAGEMENT, JALPAIGURI</option>
                                                        <option>DR. B. C. ROY COLLEGE OF PHARMACY & ALLIED HEALTH SCIENCES, DIST BURDWAN, W.B</option>
                                                        <option>DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR</option>
                                                        <option>DR. SUDHIR CHANDRA SUR DEGREE ENGINEERING COLLEGE AND SPORTS, WEST BENGAL</option>
                                                        <option>DSMS BUSINESS SCHOOL</option>
                                                        <option>DUMKAL INSTITUTE OF ENGINEERING & TECHNOLOGY, DT MURSHIDABAD</option>
                                                        <option>DURGAPUR INSTITUTE OF ADVANCED TECHNOLOGY & MANAGEMENT</option>
                                                        <option>DURGAPUR INSTITUTE OF MANAGEMENT & SCIENCE</option>
                                                        <option>DURGAPUR INSTITUTE OF MANAGEMENT AND SCIENCE, DURGAPUR</option>67<option>MANAGEMENT INSTITUTE OF DURGAPUR, DT BURDWAN</option>
                                                        <option>DURGAPUR INSTITUTE OF SCIENCE, TECHNOLOGY AND MANAGEMENT</option>
                                                        <option>DURGAPUR SOCIETY OF MANAGEMENT SCIENCE, DURGAPUR</option>63<option>BENGAL INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>EASTERN INSTITUTE FOR INTEGRATED LEARNING IN MANAGEMENT, KOLKATA</option>
                                                        <option>FUTURE BUSINESS SCHOOL</option>
                                                        <option>FUTURE INSTITUTE OF ENGINEERING AND MANAGEMENT, NO P/7/2098 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE (DEPARTMENT OF MANAGEMENT STUDIES), KOLKATA</option>73<option>KINGSTON SCHOOL OF MANAGEMENT AND SCIENCE, 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE OF MANAGEMENT AND SCIENCE, </option>65<option>CALCUTTA INSTITUTE OF ENGINEERING AND MANAGEMENT, KOLKATA</option>
                                                        <option>GEORGE COLLEGE OF SCIENCE & MANAGEMENT, (NEAR THAKUPUKUR) 24 PGS(S)</option>
                                                        <option>GEORGE COLLEGE, KOLKATA</option>
                                                        <option>GITARAM ENGINEERING COLLEGE, PO BERHAMPORE  DT MURSHIDABAD</option>
                                                        <option>GLOBAL INSTITUTE OF SCIENCE & TECHNOLOGY, HALDIA PURBA MEDNIPUR</option>
                                                        <option>GOLDEN REGENCY INSTITUTE OF HOSPITALITY MANAGEMENT, MIDNAPORE EAST</option>
                                                        <option>GOVERNMENT COLLEGE OF ENGINEERING & TEXTILE TECHNOLOGY, BERHAMPORE, MURSHIDABAD</option>
                                                        <option>GOVT. COLLEGE OF ENGINEERING & LEATHER TECHNOLOGY, SALT LAKE KOLKATA</option>
                                                        <option>GOVT. COLLEGE OF ENGINEERING & TEXTILE TECHNOLOGY, SERAMPORE, SERAMPORE,HOOGHLY</option>
                                                        <option>GREATER KOLKATA COLLEGE OF ENGG. & MANAGEMENT</option>
                                                        <option>GUPTA COLLEGE OF TECHNOLOGICAL SCIENCES, ASANSOL  W.B.</option>
                                                        <option>GURUKUL MANAGEMENT STUDIES, </option>
                                                        <option>GURUNANAK INSTITUTE OF HOTEL MANAGEMENT</option>
                                                        <option>GURUNANAK INSTITUTE OF PHARMACEUTICAL SCIENCE & TECHNOLOGY</option>
                                                        <option>GURUNANAK INSTITUTE OF TECHNOLOGY, DIST 24 PGS(N)</option>
                                                        <option>H. C. GARG INSTITUTE OF SCIENCE & TECHNOLOGY</option>
                                                        <option>HALDIA INSTITUTE OF TECHNOLOGY, </option>
                                                        <option>HERITAGE INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>HOOGHLY ENGINEERING & TECHNOLOGY COLLEGE, HOOGHLY</option>77<option>CALCUTTA INSTITUTE OF TECHNOLOGY, HOWRAH</option>
                                                        <option>HTE HERITAGE ACADEMY, </option>114<option>SEACOM MANAGEMENT COLLEGE</option>
                                                        <option>IBRAD SCHOOL OF MANAGEMENT AND SUSTAINABLE DEVELOPMENT</option>
                                                        <option>IERCEM INSTITUTE OF INFORMATION TECHNOLOGY</option>
                                                        <option>IMPS COLLEGE OF ENGINEERING & TECHNOLOGY, </option>71<option>ARYABHATTA INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>INDIAN ASSOCIATION FOR THE CULTIVATION OF SCIENCE</option>
                                                        <option>INDIAN INSTITUTE OF INFORMATION MANAGEMENT & BUSINESS STUDIES</option>
                                                        <option>INDIAN INSTITUTE OF SCIENCE & TECHNOLOGY, PASCHIM MEDINIPUR</option>
                                                        <option>INDIAN INSTITUTE OF SOFTWARE TECHNOLOGY, 2280 0397,2283-2752</option>
                                                        <option>INSTITUTE OF BUSINESS MANAGEMENT & RESEARCH, KOLKATA</option>
                                                        <option>INSTITUTE OF ENGG. & INDUSTRIAL TECHNOLOGY</option>
                                                        <option>INSTITUTE OF ENGINEERING & MANAGEMENT, KOLKATA</option>
                                                        <option>INSTITUTE OF GENETIC ENGINEERING, </option>
                                                        <option>INSTITUTE OF INTERNATIONAL TRADE</option>
                                                        <option>INSTITUTE OF JUTE TECHNOLOGY, KOLKATA</option>
                                                        <option>INSTITUTE OF MANAGEMENT STUDY</option>
                                                        <option>INSTITUTE OF MODERN MANAGEMENT, KOLKATA</option>
                                                        <option>INSTITUTE OF TECHNOLOGY AND MARINE ENGINEERING, HARBOUR ROAD 24 PGS(SOUTH) </option>
                                                        <option>INTERNATIONAL INSTITUTE OF MANAGEMENT SCIENCES, HOWRAH</option>79<option>INTERNATIONAL INSTITUTE OF MARITIME STUDIES & RESEARCH, PURBA MEDINIPUR</option>
                                                        <option>JIS COLLEGE OF ENGINEERING, KALYANI NADIA</option>
                                                        <option>KANAD IEM</option>
                                                        <option>KANKSA ACADEMY OF TECHNOLOGY & MANAGEMENT, PO-PANAGARH BAZAR, BURDWAN</option>
                                                        <option>KINGSTON ENGINEERING COLLEGE</option>
                                                        <option>KOTIBARSHA INSTITUTE OF TECHNOLOGY AND MANAGEMENT</option>
                                                        <option>M.R.C.C. COLLEGE OF TECHNICAL EDUCATION, </option>
                                                        <option>MALLABHUM INSTITUTE OF TECHNOLOGY, DIST BANKURA</option>
                                                        <option>MCKV INSTITUTE OF ENGINEERING, LILUAH      HOWRAH</option>
                                                        <option>MEGHNAD SAHA INSTITUTE OF TECHNOLOGY, WB</option>
                                                        <option>MURSHIDABAD COLLEGE OF ENGINEERING & TECHNOLOGY, DT MURSHIDABAD</option>
                                                        <option>NARULA INSTITUTE OF MANAGEMENT, KOLKATA</option>
                                                        <option>NARULA INSTITUTE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>NATIONAL INSTITUTE OF TECHNICAL TEACHERS' TRAINING AND RESEARCH, KOLKATA</option>
                                                        <option>NATIONAL POWER TRAINING INSTITUTE (E R), DURGAPUR 16</option>
                                                        <option>NATIONAL SCHOOL OF MANAGEMENT STUDIES, ZONAL MARKET,DURGAPUR</option>
                                                        <option>NETAJI SUBHASH CHANDRA BOSE INSTITUTE OF PHARMACY, DIST NADIA</option>75<option>HALDIA INSTITUTE OF MANAGEMENT, PO HATIBERIA</option>
                                                        <option>NETAJI SUBHASH ENGINEERING  COLLEGE, POLICE PARA,GARIA,KOLKATA</option>
                                                        <option>NEXGEN INSTITUTE OF BUSINESS & TECHNOLOGY</option>
                                                        <option>NIMAS, </option>116<option>ABS ACADEMY, </option>
                                                        <option>NIPCCO INSTITUTE OF BIOTECHNOLOGY</option>
                                                        <option>NIPS SCHOOL OF HOTEL MANAGEMENT, KOLKATA</option>
                                                        <option>NOPANY INSTITUTE OF MANAGEMENT STUDIES, KOLKATA</option>
                                                        <option>NOPANY INSTITUTE OF PROFESSIONAL STUDIES</option>
                                                        <option>NPC COLLEGE OF SCIENCE AND MANAGEMENT</option>
                                                        <option>NSHM-SCHOOL OF HOTEL MANAGEMENT, B ZONE, DURGAPUR</option>
                                                        <option>NSHM BUSINESS SCHOOL, DURGAPUR</option>
                                                        <option>NSHM BUSINESS SCHOOL</option>
                                                        <option>NSHM COLLEGE OF MANAGEMENT & TECHNOLOGY, DURGAPUR 12  </option>
                                                        <option>NSHM COLLEGE OF MANAGEMENT & TECHNOLOGY, KOLKATA</option>
                                                        <option>NSHM SCHOOL OF MEDIA & COMMUNICATION</option>
                                                        <option>PAILAN COLLEGE OF MANAGEMENT & TECHNOLOGY  , WEST BENGAL</option>
                                                        <option>PAILAN SCHOOL OF INTERNATIONAL STUDIES, KOLKATA</option>
                                                        <option>POST GRADUATE INSTITUTE OF HOSPITAL ADMINISTRATION</option>
                                                        <option>PRAJNANANANDA INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>RAMAKRISHNA MISSION SEVA PRATISHTHAN V.I.M.S</option>
                                                        <option>RCC INSTITUTE OF INFORMATION TECHNOLOGY, CANAL(S)ROAD,PATLADNGA,KOLKATA</option>
                                                        <option>REGENT EDUCATION & RESEARCH FOUNDATION GROUP OF INSTITUTIONS</option>
                                                        <option>RINPOCHE ACADEMY OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>RTG ANIMATE - ANIMATION ACADEMY</option>
                                                        <option>S. N. BOSE NATIONAL CENTRE FOR BASIC SCIENCES, SALT LAKE KOLKATA</option>
                                                        <option>SAROJ MOHAN INSTITUTE OF TECHNOLOGY, </option>69<option>ACADEMY OF TECHNOLOGY, </option>
                                                        <option>SCHOOL OF INFORMATION TECHNOLOGY, WBUT</option>
                                                        <option>SCHOOL OF MANAGEMENT, WBUT</option>
                                                        <option>SEACOM ENGINEERING COLLEGE, </option>
                                                        <option>SEACOM MARINE COLLEGE</option>
                                                        <option>SILIGURI INSTITUTE OF TECHNOLOGY, PO SUKHNA   DT DARJEELING</option>
                                                        <option>SOUTH-ASIAN MANAGEMENT TECHNOLOGIES</option>
                                                        <option>ST. THOMAS COLLEGE OF ENGINEERING & TECHNOLOGY, KOLKATA</option>
                                                        <option>SUPREME KNOWLEDGE FOUNDATION GROUP OF INSTITUTIONS, DIST.-HOOGHLY</option>
                                                        <option>SURENDRA INSTITUTE OF ENGINEERING & MANAGEMENT</option>
                                                        <option>SWAMI VIVEKANANDA COLLEGE FOR MANAGEMENT TECHNOLOGY</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF MANAGEMENT & COMPUTER SCIENCE</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF MODERN SCIENCE</option>
                                                        <option>SWAMI VIVEKANANDA INSTITUTE OF SCIENCE & TECHNOLOGY</option>
                                                        <option>SYAMAPRASAD INSTITUTE OF TECHNOLOGY & MANAGEMENT</option>
                                                        <option>TAMRALIPTA INSTITUTE OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>TECHNO GLOBAL BALURGHAT, </option>159<option>GLOBAL INSTITUTE OF MANAGEMENT AND TECHNOLOGY</option>
                                                        <option>TECHNO INDIA-HOOGHLY, HOOGHLY</option>
                                                        <option>TECHNO INDIA - KOLKATA</option>
                                                        <option>TECHNO INDIA COLLEGE OF TECHNOLOGY, KOLKATA</option>
                                                        <option>TECHNO INDIA INSTITUTE OF TECHNOLOGY,  GARIA, HATISUR NEAR SIEMENS KOLKATA</option>
                                                        <option>TECHNO INDIA INSTITUTE OF TECHNOLOGY, KOLKATA </option>
                                                        <option>TECHNO INDIA, HOOGHLY CAMPUS, HOOGHLY</option>
                                                        <option>TECHNO INDIA, SEC-V SALT LAKE</option>
                                                        <option>THE CALCUTTA ANGLO GUJARATI COLLEGE</option>
                                                        <option>THE INSTITUTE OF COMPUTER ENGINEERS(INDIA) DURGAPUR, CITY CENTRE DURGAPUR</option>
                                                        <option>THE INSTITUTE OF PARAMEDICAL SCIENCES AND TECHNOLOGY, NHAI COMPLEX,DURGAPUR</option>
                                                        <option>VIDYASAGAR COLLEGE OF OPTOMETRY & VISION SCIENCE </option>
                                                        <option>VIDYASAGAR INSTITUTE OF EDUCATION TECHNOLOGY AND RESEARCH</option>
                                                        <option>VIVEKANANDA MISSION ASRAM INSTITUTE OF OPTHALMIC TRAINING</option>
                                                        <option>WBUT</option>
                                                        <option>WEST BENGAL STATE COUNCIL FOR SCIENCE & TECHNOLOGY</option>
                                                        <option value="other">Other (will enter the name myself...)</option>
                                                    </select>
                                </td></tr>
                                <tr><td>&nbsp;</td><td><input disabled="disabled" class="form-items" id="register_college" type="text" name="txtcollege" maxlength="1024" value="" size="50" />&nbsp;<span style="font-style: italic; color: #c0c0c0">(No abbreviations please)</span></td></tr>
                                <tr><td>City</td><td><input class="form-items" id="register_city" type="text" name="city" maxlength="256" value="" size="50" /></td></tr>
                                <tr><td>Year</td><td>
                                					<select class="form-items" id="register_year" name="year">
                                                    	<option value="none">Please select your year...&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                                        <option value="school">School</option>
                                                        <option value="ug1">Undergraduate 1st year</option>
                                                        <option value="ug2">Undergraduate 2nd year</option>
                                                        <option value="ug3">Undergraduate 3rd year</option>
                                                        <option value="ug4">Undergraduate 4th year</option>
                                                        <option value="pg1">Postgraduate 1st year</option>
                                                        <option value="pg2">Postgraduate 2nd year</option>
                                                        <option value="pg3">Postgraduate 3rd year</option>
                                                        <option value="other">Other</option>
                                                	</select>
                                				</td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>Address</td><td><textarea class="form-items" id="register_address" name="address" rows="3" cols="40"></textarea></td></tr>
                                <tr><td>Phone</td><td><input class="form-items" id="register_phone" type="text" name="phone" maxlength="20" value="" size="20" /></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td valign="top">Interests</td><td>
                                						<input class="form-items" type="checkbox" name="chksaveaqua"/>&nbsp;Robotics: SaveAqua<br />
                                                        <input class="form-items" type="checkbox" name="chkrobosoccer" />&nbsp;Robotics: RoboSoccer<br />
                                                        <input class="form-items" type="checkbox" name="chkpcknplc" />&nbsp;Robotics: Loco Motion<br />
                                                        <input class="form-items" type="checkbox" name="chkcodndbug" />&nbsp;Programming: Coding and Debugging<br />
                                                        <input class="form-items" type="checkbox" name="chkbplan" />&nbsp;Management: Business Plan<br />
                                                        <input class="form-items" type="checkbox" name="chkgamingcs" />&nbsp;Gaming: Counter Strike 1.6<br />
                                                        <input class="form-items" type="checkbox" name="chkgamingmw"/>&nbsp;Gaming: NFS Most Wanted<br />
                                                        <input class="form-items" type="checkbox" name="chkgamingfifa"/>&nbsp;Gaming: FIFA 08<br />
                                                        <input class="form-items" type="checkbox" name="chkinnovation" />&nbsp;Innovation: Excogitation<br />
                                					</td></tr>
                                <tr><td>&nbsp;</td><td><br /><input class="form-items-submit" id="register_submit" type="submit" name="submit" value="Register" /></td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                                <tr><td>&nbsp;</td><td><span style="color: #900b09"><?php echo $feedback_msg; ?></span></td></tr>
                            </table>
                            </form>
                            <?php
								}
								else
								{
							?>
                             <table border="0" cellpadding="2" cellpadding="2" width="100%">
                             	<tr><td colspan="2"><span  class="content-placer">home | registration submitted</span><br /><br /></td></tr>
                            	<tr><td><span class="content-header">Registration Submitted</span><br /><br /></td></tr>
                                <tr><td><?php echo $feedback_msg; ?></td></tr>
                             </table>
                            <?php
								}
							?>		
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
