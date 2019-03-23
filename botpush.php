<?php



require "vendor/autoload.php";

$access_token = 'PaAaljM+gjnfkcQZGnFHNWP+uyu+EKVeUM2vWkQtayveJGEou8SsYU/6xjLRljDnSrlNJ0gLu86JivBLyNbxHHlYeAHXeXzxobtV6Yg5bzb/GmFRhie07ow2bW3tX+y4cmternEDwDZPnaH6vhc2eAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '084026b66119932e0cbe64035960618d';

$pushID = 'U0cf67ca653b79a242e1a3e250d99de11';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







