function initContentDisplay()
{
	tf_event_changeTo(document.getElementById("lastDisplayedContent").value);
}
function tf_event_changeTo(eventid)
{
	var LDV = document.getElementById("lastDisplayedContent").value;
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.9'",25);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.8'",50);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.7'",75);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.6'",100);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.5'",125);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.4'",150);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.3'",175);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.2'",200);
	setTimeout("document.getElementById('"+LDV+"').style.opacity='0.1'",225);
	setTimeout("document.getElementById('"+LDV+"').style.display='none'",250);
	setTimeout("document.getElementById('"+eventid+"').style.display='block'",275);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.1'",300);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.2'",325);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.3'",350);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.4'",375);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.5'",400);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.7'",425);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.8'",450);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='0.9'",475);
	setTimeout("document.getElementById('"+eventid+"').style.opacity='1'",500);
	document.getElementById("lastDisplayedContent").value=eventid;
}
