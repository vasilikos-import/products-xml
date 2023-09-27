<?php

$Username = "Username";
$Password = "Password";

$url = "https://www.vasilikos-import.gr/wp-content/uploads/xml/download-xml.php";
$post = "Username=".$Username."&Password=".$Password;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
$xml = curl_exec($ch);
curl_close($ch);


if($fp = fopen("vasilikos.xml", 'w')){
  fwrite($fp, $xml);
  fclose($fp);
}
