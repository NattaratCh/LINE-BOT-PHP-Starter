<?php
$access_token = 'F+LPghxw/Y16W00YEnPdW6p9KGPpd6jtVi2VTDwYWGbvI1B0AA2t1YN1blYTXsiYvmvmtlJMJCwNS+dobd/vsm4Mv7BEhfG1SkoCvhWrCR8rED1NnoDQHLMtNEJ5Lr2dvKUjKMPZWcvzQydA3TwRPAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
