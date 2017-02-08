<?php
$access_token = 'CnUq/mrv+nYwhmzX3PVoV1BU83n7StSvH0tN2YJqEc7bOIKigg5bTUqoQHeF7Btp6/1Ga9cm8c7in90FrdkxtC/aWTqI7uHe7bStyTozfyF4pV6xyuYp2EL3hTNR6cYE3t5TR1OoDwdkaLmUe55RQwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
