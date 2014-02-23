function tf_tree_fadein(treeid)
{
	alert("fadein");
	setTimeout("document.getElementById('"+treeid+"').style.display=''",25);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.1'",50);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.2'",75);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.3'",100);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.4'",125);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.5'",150);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.7'",175);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.8'",200);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.9'",225);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='1'",250);
}
function tf_tree_fadeout(treeid)
{
	alert("fadeout");
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.7'",25);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.6'",50);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.5'",75);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.4'",100);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.3'",125);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.2'",150);
	setTimeout("document.getElementById('"+treeid+"').style.opacity='0.1'",175);
	setTimeout("document.getElementById('"+treeid+"').style.display='none'",200);
}
