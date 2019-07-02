<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://noval7sihabibi.000webhostapp.com/api/QrcodeApi",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: noval7sihabibi.000webhostapp.com",
    "Postman-Token: 82bc0abe-9cfa-4ba9-ab28-74a283e21dd5,f717955a-d648-44f1-a211-c73c87c1b6a9",
    "User-Agent: PostmanRuntime/7.15.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}