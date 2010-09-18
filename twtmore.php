<?php
	class twtmore
	{
		function tweet($username, $content)
		{
			include 'config.php';
			$Curl_Session = curl_init('http://api.twtmore.com/shorten/' . $apikey);
			curl_setopt($Curl_Session, CURLOPT_POST, 1);
			curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, "user=".$username."&tweet=".$content."&staging=true"."&return=url"); /// . ""//
			curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, true);
			echo curl_exec($Curl_Session);
			curl_close($Curl_Session);
			
		}
		function get($code)
		{
			echo file_get_contents('http://twtm.in/'.$code.'/content/');
		}
	}
?>