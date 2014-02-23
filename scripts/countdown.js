var festDay = new Date("October 2, 2010 00:00:00");
function countDown()
{
	var nowDay = new Date();
	var milliSecGap=festDay-nowDay;
	var dayGap=-1;
	if(milliSecGap>0)
	{
		var milliSec=milliSecGap%1000;
		var secGap=(milliSecGap-milliSec)/1000;
		var sec=secGap%86400;
		dayGap=(secGap-sec)/86400;
		var hourFrac=sec%3600;
		var hourGap=(sec-hourFrac)/3600;
		var minFrac=hourFrac%60;
		var minGap=(hourFrac-minFrac)/60;
		if(hourGap<10) { hourGap="0"+hourGap; }
		if(minGap<10) { minGap="0"+minGap; }
		if(minFrac<10) { minFrac="0"+minFrac; }
		var ds="";
		var hs="";
		var ms="";
		var ss="";
		if(dayGap!=1) { ds="s"; }
		if(hourGap!=1) { hs="s"; }
		if(minGap!=1) { ms="s"; }
		if(minFrac!=1) { ss="s"; }
		if(dayGap>0)
		{
			document.getElementById("span-timer").innerHTML=dayGap+"<span style='color: #e9d8b5'>Day"+ds+"</span> "+hourGap+"<span style='color: #e9d8b5'>hr"+hs+"</span> "+minGap+"<span style='color: #e9d8b5'>min"+ms+"</span> "+minFrac+"<span style='color: #e9d8b5'>sec"+ss+"</span>";
		}
		else
		{
			document.getElementById("span-timer").innerHTML=hourGap+"<span style='color: #e9d8b5'>hr"+hs+"</span> "+minGap+"<span style='color: #e9d8b5'>min"+ms+"</span> "+minFrac+"<span style='color: #e9d8b5'>sec"+ss+"</span>";
		}
		setTimeout("countDown()",1000);
	}
	else
	{
		if(milliSecGap>-2*86400000)
		{
			document.getElementById("span-timer").innerHTML="Sristi 2010 is going on!";
		}
		else
		{
			document.getElementById("span-timer").innerHTML="Sristi 2010 is over";
		}
	}
}
