<?php
$access_token = 'v1QdHHfcTX/97XwLSaFXlpkpE15MUsqOwAoHgwbwrajpe5/6iJgErDyhUXZmKr5r2YBh6PH6zpRfXS2mKBCB+oNFE+DJYb7prN6bRonAolGviNTLBSr1znpSXLGwpmHUmbtcC7DELEzp3kwiRn4QEgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;




 ?>
