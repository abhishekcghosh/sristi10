<?php 
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="ISO-8859-1" ?>';
	require_once('tf-config.php');
 	require_once('tf-sql-connect.php');
	$flag_sqlfail=0;
	$tbl_name=__SQL_TABLE_PREFIX__ . "updates";
	$sql_query="SELECT * FROM $tbl_name ORDER BY udatetime DESC LIMIT 0,30";
	$query_result=mysql_query($sql_query);
	if(!$query_result)
	{
		$flag_sqlfail=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		echo '<rss version="2.0">';
		echo '<channel>';
			echo '<title>Sristi 2010</title>';
			echo '<description>Recent Updates on Sristi 2010, October 2nd-3rd, Annual Techno-Management Fest, Jalpaiguri Government Engineering College website</description>';
			echo '<link>' . __SITE_WEBADDRESS__ . 'tf-home.php</link>';
			echo '<category>Sristi 2010: Updates</category>';
			echo '<copyright>' . date("Y") . '. Sristi 2010, October 2nd-3rd, Annual Techno-Management Fest, Jalpaiguri Government Engineering College. All Rights Reserved.</copyright>';
			echo '<language>en-us</language>';
			echo '<webMaster>' . __SITE_ADMINEMAIL__ . '</webMaster>';
			while($row=mysql_fetch_array($query_result))
			{
				echo '<item>';
					echo '<guid>' . __SITE_WEBADDRESS__ . 'tf-updates.php#' . $row['uid'] . '</guid>';
					echo '<author>Sristi 2010</author>';
					echo '<category>Sristi 2010: Updates</category>';
					echo '<pubDate>' . $row['udatetime'] . '</pubDate>';
					if(strlen($row['utext'])>30) { $subject=substr($row['utext'],0,30) . '...'; } else { $subject=$row['utext']; }
					echo '<title>Sristi Update: '  . $subject . '</title>';
					echo '<description>' . $row['utext'] . '</description>';
					echo '<link>' . __SITE_WEBADDRESS__ . 'tf-updates.php</link>';
				echo '</item>';
			}
		echo '</channel>';
		echo '</rss>';
	}
?>