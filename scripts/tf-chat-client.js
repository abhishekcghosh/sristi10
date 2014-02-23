var xmlhttp=GetXmlHttpObject();
function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
    {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  return new XMLHttpRequest();
	}
	if (window.ActiveXObject)
	{
	  // code for IE6, IE5
	  return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}
function stateChanged()
{
if (xmlhttp.readyState==4)
  {
	  var maxId=document.getElementById("hdnscrollid").value;
	  xmlDoc=xmlhttp.responseXML;
	  msgLength=xmlDoc.getElementsByTagName("message").length;
	  for(i=0;i<msgLength;i++)
	  {
		  chatLine="("+xmlDoc.getElementsByTagName("time")[i].childNodes[0].nodeValue+") ";
		  chatLine=chatLine+xmlDoc.getElementsByTagName("user")[i].childNodes[0].nodeValue+": ";
		  chatLine=chatLine+xmlDoc.getElementsByTagName("text")[i].childNodes[0].nodeValue+"\n";  
		  chatLineId=xmlDoc.getElementsByTagName("id")[i].childNodes[0].nodeValue;
		  if (eval(maxId)<eval(chatLineId)) { maxId=chatLineId; }
		  document.getElementById("txtchatscroll").innerHTML+=chatLine;
		  document.getElementById("txtchatscroll").scrollTop=document.getElementById("txtchatscroll").scrollHeight;
	  }
	  document.getElementById("hdnscrollid").value=maxId;
  }
}
function initChat()
{
	requestMessages();
}
function requestMessages()
{
	if(xmlhttp!=null && (xmlhttp.readyState==0 || xmlhttp.readyState==4)) {	seeChat(); }
	setTimeout("requestMessages()",2000)
}
function seeChat()
{
	if(xmlhttp==null) { return; }
	var scrollId=document.getElementById("hdnscrollid").value;
	var url="tf-chat-backend-get.php";
	url+="?s="+scrollId;
	url+="&r="+Math.random();
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
}
function doChat()
{
	ctext=document.getElementById("txtchatenter").value;
	cuser=document.getElementById("hdncuser").value;
	if (ctext.length==0) { return; }
	if (xmlhttp==null) { return; }
	var url="tf-chat-backend-put.php";
	url+="?t="+ctext;
	url+="&u="+cuser;
	url+="&r="+Math.random();
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
	document.getElementById("txtchatenter").value="";
	if(xmlhttp!=null && (xmlhttp.readyState==0 || xmlhttp.readyState==4)) {	seeChat(); }
}
