<?php

function sendSMS($mobile,$text,$email,$name)
{

		
	$message = urlencode($text);
	$api_url = "http://india.jaipurbulksms.com/api/mt/SendSMS?user=sankalp2020&password=zapak123&senderid=SOLVBE&channel=Trans&DCS=0&flashsms=0&number=".$mobile."&text=".$message."&route=3";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);  
    
    // $email1 = "techsoftjaipur@gmail.com";
    // $msg_email = "Dear ".$name."\n\n".$text;
    // $to = $email;
    // $subject = "OTP";
    // $headers = "From: " .$email1 . "\r\n";
    // mail($to,$subject,$msg_email,$headers);    

}

	
?>