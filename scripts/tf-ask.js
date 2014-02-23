function tf_ask(ques,ylink,nlink)
{
	if(confirm(ques))
	{
		window.location=ylink;
	}
	else if(nlink!="")
	{
		window.location=nlink;
	}
}
