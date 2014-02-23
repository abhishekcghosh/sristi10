 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang=en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="keywords" content="sristi,PRASENJIT,SRISTI SMS SERVICE,text messaging,free SMS fr,Free SMS in india FROM SRISTI,JGEC,PRASENJIT GHOSHAL,TECHFEST, Free SMS website in india, Free SMS service, SMS greetings, Group SMS, Free Group SMS, Joke SMS, SMS Quotes, SMS Jokes, Instant SMS, web to mobile Free SMS, Free SMS from net, Free SMS from Web, Free SMS Text, Free SMS message, free SMS from Mobile, Online SMS, Free text message, unlimited free sms, send max sms, 160 char sms, full sms, full on sms, fullonsms, 160 character sms, complete sms, mobile sms, free texting, free text msg">
		
		<!-- <title>WELCOME TO SRISTI SMS MESSAGE SERVICE</title> -->
		<title>SRISTI.ORG.IN</title>

		
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" type="text/css" href="http://www.fullonsms.com/Scripts/Modal/subModal.css" />

		<script type="text/javascript" src="js/floatingtopbox.js"></script>
		<link rel="shortcut icon" href="http://www.fullonsms.com/images/favicon.ico">
		<link rel="icon" href="http://www.fullonsms.com/images/favicon.ico" type="image/ico">
</head>
<body>
<!--Floating Top Box-->

				<div class="box_floating_heading" >
				THIS PAGE IS DEVELOPED ONLY FOR SRISTI TEAM.
				</div>
				<div style=" clear:both; height:5px;">
				</div>
				<ul class="box_floating_content">
					<li>
					* PLZ RESISTER SRISTI TEAM MEMBERS FOR SENDING SMS TO THE USERS  </li>

					<li>
					* Unlimited SMS - PER SMS LIMITATION IS 160 CHARACTERS </li>
                                        
                                        <li>
                                        *TRY TO SEND PER SMS MORE THAN 150 CHARACTER </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	initShowHideDivs();
	showHideContent(false,1);	// Automatically expand first item
</script>

<!--Floating Top Box-->
<!--Main Box-->
	<!--Box Hompage Content Text-->
	<ul class="box_hompage_content_text">
		<li>
		DON'T FORGET TO ATTACH (SRISTI TEAM) AT THE BEGINNING OF THE MESSAGE OR SMS </li>
		<li>
		DEVELOPED BY PRASENJIT GHOSHAL </li>
		<li>

		Add contacts & create groups &ndash; connect with everyone in one go! </li>
	</ul>
	<!--End Box Hompage Content Text-->
<div class="clearboth" style="height:20px;"></div>
<!--Error Message-->
<div class="error bold">
	<span class='txtColor'><font color='#dd0000'></font></span></div>
<!--End Error Message-->
<div class="clearboth" style="height:5px;"></div>

	<!--End Box Home Page container-->
	<div class="box_homepage_container">
		<!--Box Registration Panel-->
		<div class="box_homepage_registrationpanel">
			<div class="box_homepage_registrationpanel_heading">
			</div>
			<div class="clearboth">
			</div>

			<!--Form Registration-->
			<div class="form_homepage_registration">
				<script language="javascript" type="text/javascript">
				function CheckForm()
				{
					//var ErrMsg	=	"";

					if(document.RegistrationForm.MobileNumber.value == "" || document.RegistrationForm.MobileNumber.value == "Mobile No.")
					{
						alert("Please enter a mobile number.");
						document.RegistrationForm.MobileNumber.focus();
						return false;
						//ErrMsg	+=	"\nPlease enter a mobile number.";
					}
					else if(!checkMobile(document.RegistrationForm.MobileNumber.value))
					{
						//alert("Please enter a valid 10 digit mobile number starting with 8 or 9");
						alert("Invalid number");
						document.RegistrationForm.MobileNumber.focus();
						return false;
						//ErrMsg	+=	"\nInvalid number.";
					}

					if(document.RegistrationForm.Email.value == "" || document.RegistrationForm.Email.value == "E-mail")
					{
						alert("Please enter an email.");
						document.RegistrationForm.Email.focus();
						return false;
						//ErrMsg	+=	"\nPlease enter an email.";
					}
					else if(!checkEmail(document.RegistrationForm.Email.value))
					{
						//alert("Please enter a valid email address");

						alert("E-mail looks incorrect, please check again");

						document.RegistrationForm.Email.focus();
						return false;
						//ErrMsg	+=	"\nE-mail looks incorrect, please check again.";
                                         }


					//if(document.RegistrationForm.FullName.value == "" || document.RegistrationForm.FullName.value == "Full Name")
					if(document.RegistrationForm.FName.value == "" || document.RegistrationForm.FName.value == "First Name")
					{
						alert("Need your name");
						document.RegistrationForm.FName.focus();
						return false;
					}

					if(document.RegistrationForm.LName.value == "" || document.RegistrationForm.LName.value == "Last Name")
					{
						alert("Please enter your last name.");
						document.RegistrationForm.LName.focus();
						return false;
					}

					
					
					}

					if(document.RegistrationForm.Captcha.value == "")
					{
						alert("Please enter the displayed code.");
						document.RegistrationForm.Captcha.focus();
						return false;
					}
					else if(document.RegistrationForm.Captcha.value != document.RegistrationForm.HiddenCaptchaField.value)
					{
						//alert("The code entered doesn't match with the one being displayed.");
						alert("Characters entered by you in the box do not match, pls enter carefully.");
						document.RegistrationForm.Captcha.focus();
						return false;
					}

					if(document.RegistrationForm.TAndC.checked == false)
					{
						alert("Please accept Terms & Conditions.");
						document.RegistrationForm.TAndC.focus();
						return false;
					}

					return true;

				}
				</script>
				<form name="RegistrationForm" method="post" action="/login.php" onsubmit="javascript:return CheckForm();">
					<div class="form_homepage_registration_leftside">
						<div class="form_homepage_registration_row">
							<div class="form_homepage_registration_row_fieldname">
								 Enter your 10 digit Mobile Number
							</div>

							<div class="form_homepage_registration_row_field box_tooltip_homepage box_tooltip_homepage">
								<!--Tool Tip-->
								<div class="box_tooltip_homepage_div">
								Your account password will be sent via SMS on this number.
								</div>
								<!--End Tool Tip-->
								<input style="margin-top:5px;"  name="MobileNumber" id="MobileNumber" type="text" class="textbox_homepage_registration" value="Mobile No." 
								onblur="javascript:FillValueOnBlur('MobileNumber','Mobile No.','http://www.fullonsms.com/ChkCrdAjax.php?MobileNo='+this.value,'AjxMobile');" onfocus="javascript:FillValueOnFocus('MobileNumber','Mobile No.');" maxlength ="10"
								/>
								<div class="form_homepage_registration_row_field_ajax" id="AjxMobile"></div>
								
							</div>

							<div class="form_homepage_registration_row_aboutfield">
								ex: 9810xxxx60
							</div>
						</div>
						<div class="form_homepage_registration_row">
							<div class="form_homepage_registration_row_fieldname">
								 &nbsp;
							</div>
							<div class="form_homepage_registration_row_field box_tooltip_homepage">

								<!--Tool Tip-->
								<div class="box_tooltip_homepage_div">
								 Enter your active email id, (Need for send password if you forgot).
								</div>
								<!--End Tool Tip-->
								<input name="Email" id="Email" type="text" class="textbox_homepage_registration" value="E-mail" onblur="javascript:FillValueOnBlur('Email','E-mail');" onfocus="javascript:FillValueOnFocus('Email','E-mail');" maxlength="50"/>
							</div>
							<div class="form_homepage_registration_row_aboutfield">
								&nbsp;

							</div>
						</div>
						
					<div class="form_homepage_registration_rightside">
						<div class="form_homepage_registration_row">
							<div class="form_homepage_registration_row_fieldname">

								 &nbsp;
							</div>
							<div class="form_homepage_registration_row_field box_tooltip_homepage">
								<select name="Gender" class="textbox_homepage_registration" style="width:55px; display:inline;">
								<option value="M">Mr.</option>
								<option value="F">Ms.</option>
								</select>
								<input name="FName" id="FName" type="text" class="textbox_homepage_registration" style="width:75px; display:inline;" value="First Name" onblur="javascript:FillValueOnBlur('FName','First Name');" onfocus="javascript:FillValueOnFocus('FName','First Name');" maxlength = "15"/>

								<input name="LName" id="LName" type="text" class="textbox_homepage_registration" style="width:75px; display:inline;" value="Last Name" onblur="javascript:FillValueOnBlur('LName','Last Name');" onfocus="javascript:FillValueOnFocus('LName','Last Name');" maxlength = "15" />

								<div class="clearboth"></div>
								<!--Tool Tip-->
								<div class="box_tooltip_homepage_div">
								Use your real name ? Recommended. 
								</div>
								<!--End Tool Tip-->
								</div>

						</div>
						
						
						<div class="form_homepage_registration_row">
							<div class="form_homepage_registration_row_fieldname">
								<h2>
									UKK5Q								</h2>
							</div>

							<div class="form_homepage_registration_row_field">
								<input  class="textbox_homepage_registration" type="text" name="Captcha" id="Captcha" maxlength="10"/>
								<input type="hidden" name="HiddenCaptchaField" value="UKK5Q">							</div>
							<div class="form_homepage_registration_row_aboutfield">
								 Enter characters as shown in the image<br />
								 Letters are case-sensitive)
							</div>
						</div>

					</div>
					<div class="clearboth">
					</div>
					<div class="form_homepage_registration_tnc ">
						<script language="javascript" type="text/javascript">
							function ShowInsuranceTr()
							{
								var Id	=	document.getElementById("InsuranceBox");

								var TC	=	document.getElementById("TAndC");

								//alert("gp = "+Gp+",checked = "+Gp.checked);

								if(TC.checked == true)
								{
									Id.style.display = "";
								}
								else
								{
									Id.style.display = "none";
								}
							}
						</script>
						<input type="checkbox" name="TAndC" id="TAndC" value="1"  onclick="javascript:ShowInsuranceTr();"/>&nbsp;I have read & accept Terms & Conditions.</a>

						<div class="clearboth" style="height:10px;">
						</div>
						<span id="InsuranceBox" style="display:none;">
							<input type="checkbox" name="GPRS" id="GPRS" value="2"  />
							Check this box if you are the member of SRISTI
							<div class="clearboth" style="height:5px;"></div>
							<!--Tool Tip-->

							<div class="box_tooltip_homepage_a">
							</div>
							<!--End Tool Tip-->
							</a>
						 </span>
						 
					</div>
					<div class="clearboth">
					</div>

					<div class="form_homepage_registration_functions">
						<div class="form_homepage_registration_function">
						
						</div>
					</div>
				</form>
			</div>
			<!--End Form Registration-->
			<div class="clearboth">

			</div>
			<div class="box_aboutmandatory">
				 * All fields are mandatory
			</div>
			<div class="clearboth" style="height:10px;">
			</div>
		</div>
		<!--End Box Registration Panel-->
		<!--Box Login panel-->

		<div class="box_homepage_loginpanel">
			<div class="box_homepage_loginpanel_heading">
				 Login
			</div>
			<script language="javascript" type="text/javascript">
				function CheckLoginForm()
				{
					if(document.LoginForm.MobileNoLogin.value == "")
					{
						//alert("Please enter your mobile number.");
						alert("Please enter mobile number");
						document.LoginForm.MobileNoLogin.focus();
						return false;
					}

					if(document.LoginForm.LoginPassword.value == "")
					{
						//alert("Please enter your password.");
						alert("Please enter password");
						document.LoginForm.LoginPassword.focus();
						return false;
					}

					return true;
				}
			</script>
			<!--Form login-->
			<form name="LoginForm" method="post" action="/login.php" onsubmit="javascript:return CheckLoginForm();">
				<div class="form_homepage_login">
					<div class="form_homepage_login_row">

						<div class="form_homepage_login_row_fieldname">
							 User Name/Mobile Number (10 Digit)
						</div>
						<div class="form_homepage_login_row_field">
							<input name="MobileNoLogin" type="text" class="textbox_homepage_login" id="MobileNoLogin" value="" size="25" maxlength="10"/>
						</div>
						<div class="form_homepage_login_row_aboutfield">
							ex: 9810xxxx60
						</div>
					</div>

					<div class="form_homepage_login_row">
						<div class="form_homepage_login_row_fieldname">
							 Enter your Password
						</div>
						<div class="form_homepage_login_row_field">
							<input name="LoginPassword" type="password" class="textbox_homepage_login" id="LoginPassword" value="" size="25" maxlength="20"/>
						</div>
					</div>
					<div class="clearboth">

					</div>
					<div class="form_homepage_login_tnc">
						<input type="checkbox" name="RememberMe" id="RememberMe" value="1" />
						Remember Me!
					</div>
					<div class="clearboth">
					</div>
					<div class="form_homepage_login_functions">
						<div class="form_homepage_login_function">

							<input type="image" src="http://www.fullonsms.com/images/b_homepage_login.gif" />
						</div>
					</div>
					<div class="clearboth">
					</div>
					<div align="right">
						<!-- <a href="javascript:void(0);" onclick="showPopWin('ForgotPassword.php', 800, 175, null);">
							<img src="http://www.fullonsms.com/images/b_forgotpassword.gif" width="107" height="16" border="0"/>
						</a> -->
						<a href="http://www.fullonsms.com/ForgotPassword.php" target="_NEW">
							<img src="http://www.fullonsms.com/images/b_forgotpassword.gif" width="107" height="16" border="0"/>

						</a>
					</div>
				</div>
			</form>
			<!--End Form login-->
		</div>
		<!--End Box Login panel-->
	</div>
	<!--End Box Home Page container-->

	<div class="clearboth">
	</div>
	<!--Box Footer-->
	


		<div class="box_footer">
			<div class="box_footer_relatedlinks">
				<div class="footer_heading">
					Related Links
				</div>
				<a href="http://www.sristi.org.in" target="_blank">SRISTI HOME PAGE</a>

				<br />
				<a href="http://www.jgec.org" target="_blank">JALPAIGURI GOVT ENGG COLLEGE</a>
				<br />
				<a href="http://www.sristi.blog.org.in" target="_blank">SRISTI BLOG</a>
			</div>
			<div class="box_footer_links">
				<div class="footer_heading">
					Site Links
				</div>

				<a>SRISTI TEAM </a>
				<br />
				<a>MAIL ME AT prasenjit_ghoshal@sristi.org.in</a>
			</div>
			<div class="clearboth" style="height:5px;">
			</div>
		</div>
		<div class="box_copyright">
			 &copy; Copyright 2010 <a href="http://www.sristi.org.in" target="_blank">www.sristi.org.in</a>

		</div>

	<!--End Box Footer-->
	<div class="clearboth">
	</div>
</div>
<!--End Main Box-->
<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-16086835-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>

