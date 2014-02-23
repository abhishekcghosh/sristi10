<?php
	require_once('tf-config.php'); 
	require_once('tf-sql-connect.php'); 
	//Variables assigned
	$contentid=0;
	$dateofentry=date(__DATE_FORMAT_IP__);
	$update=addslashes(strip_tags(trim($_POST['update'])));
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_sqlfail=0;
	//check incomplete
	if($update=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if($err_occured!=1)
	{
		//Put CONTENT
		$tbl_name=__SQL_TABLE_PREFIX__ . "updates";
		$sql_query="INSERT INTO $tbl_name(udatetime,utext) VALUES('$dateofentry','$update')";
		$query_result=mysql_query($sql_query);
		if(!$query_result)
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
	}
	mysql_close($con);
	
	//sanitizer routine
	function sanitizeURLEncoding($srcText)
	{
		//self-manipulation
		$srcText=str_replace('%','%25',$srcText);
		//really unsafe
		$srcText=str_replace('$','%24',$srcText);
		$srcText=str_replace('&','%26',$srcText);
		$srcText=str_replace('+','%2B',$srcText);
		$srcText=str_replace(',','%2C',$srcText);
		$srcText=str_replace('/','%2F',$srcText);
		$srcText=str_replace(':','%3A',$srcText);
		$srcText=str_replace(';','%3B',$srcText);
		$srcText=str_replace('=','%3D',$srcText);
		$srcText=str_replace('?','%3F',$srcText);
		$srcText=str_replace('@','%40',$srcText);
		//possibly unsafe
		$srcText=str_replace(' ','%20',$srcText);
		$srcText=str_replace('"','%22',$srcText);
		$srcText=str_replace('<','%3C',$srcText);
		$srcText=str_replace('>','%3E',$srcText);
		$srcText=str_replace('#','%23',$srcText);
		$srcText=str_replace('{','%7B',$srcText);
		$srcText=str_replace('}','%7D',$srcText);
		$srcText=str_replace('|','%7C',$srcText);
		$srcText=str_replace('\\','%5C',$srcText);
		$srcText=str_replace('^','%5E',$srcText);
		$srcText=str_replace('~','%7E',$srcText);
		$srcText=str_replace('[','%5B',$srcText);
		$srcText=str_replace(']','%5D',$srcText);
		$srcText=str_replace('`','%60',$srcText);
		return $srcText;
	}
	
	/*
	//twitter update routine
	$sanitizedUpdateForTwitter=sanitizeURLEncoding($update);
	$urlText='/statuses/update.xml?status=' . $sanitizedUpdateForTwitter;
	$twitter_username = __TWITTER_USERNAME__;
	$twitter_password = __TWITTER_PASSWORD__;
	$errno = 0;
	$errstr = '';
	$response = '';
	function httpRequest($host, $path = '/', $method = 'GET') {
	  global $errno, $errstr, $response;
	  global $twitter_username, $twitter_password;
	
	  $header  = "$method $path HTTP/1.1\r\n";
	  $header .= "Host: $host\r\n";
	  $header .= "Accept-Encoding: none\r\n";
	  $header .= "Authorization: Basic " .
		base64_encode("{$twitter_username}:{$twitter_password}") . "\r\n";
	  $header .= "Connection: Close\r\n\r\n";
	
	  $sock = fsockopen($host, 80, $errno, $errstr, 30);
	  if (!$sock) {
		  die("<strong>fsockopen() error:</strong>$errstr ($errno)");
	  } else {
		  fwrite($sock, $header);
		  while (!feof($sock)) {
		  $response .= fgets($sock, 128);
		  }
		  fclose($sock);
	
		  $response = trim(str_replace(array('&lt;', '&gt;'),
			array('&lt;', '&gt;'), $response));
		  return true;
	  }
	
	}
	httpRequest('twitter.com', $urlText, 'POST');
	
	*/
	//feedback to user	
	if($err_occured==1)
	{
		$err_string='location:tf-updates.php?ref=';
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string=$err_string . 'updatesqlerror';
		}
		else if($flag_incomplete==1)
		{
			$err_string=$err_string . 'updateincomplete';
		}
	}
	else
	{
		$err_string='location:tf-updates.php';
	}
	header($err_string);
?>
