<?php
	if (!function_exists("host")) {
		function host()
		{
			return "http://10.11.14.99:3000";
			// return "http://10.11.14.15:2121";
		}
	}


	if(!function_exists("sendCurl")){
		function sendCurl($url,$data=null,$method="get",$header=null)
		{
			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL,$url);
			if($method!="get"){
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
			}
			if(!is_null($header)){
				curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			}

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close ($ch);

			if($response=="Unauthorized."){
				header("location:".base_url()."/logout");
			}
			return json_decode($response,true);
		}
	}
