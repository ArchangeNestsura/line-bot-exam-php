<?php
$access_token = 'PaAaljM+gjnfkcQZGnFHNWP+uyu+EKVeUM2vWkQtayveJGEou8SsYU/6xjLRljDnSrlNJ0gLu86JivBLyNbxHHlYeAHXeXzxobtV6Yg5bzb/GmFRhie07ow2bW3tX+y4cmternEDwDZPnaH6vhc2eAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
