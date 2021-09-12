<?php
$url = 'http://api.coinlayer.com/api/2018-04-30?access_key=0e6b094b09f91900dcd6c99efaf8faf9&symbols=BTC,ETH';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURL_URL, $url);

$responce = curl_exec($ch);
$data = json_decode($responce, true);
curl_close($ch);

echo "<pre>";
print_r($data);
echo "</pre>";
