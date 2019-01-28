<?php
// Simple Curl example for untyped json

$curl = curl_init();
// OAuth config
$params = array(
    "client_id" => "123456", // demo id
    "client_secret" => "abcdef", // demo secret
    "username" => "", // insert your merchant ID here
    "password" => "", // insert your secret token here
    "scope" => "read:order write:order read:product write:product", // what permissions to get
    "grant_type" => "password",
);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://my.ogoship.com/OAuth/Token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
//  echo $response;
}

$oauth = json_decode($response);

//print_r($oauth);

$token = $oauth->access_token;

// get latest changed orders
$curl = curl_init();

// filters
$params = array(
    //"reference" => "myref",
    "modifiedAfter" => new Datetime('2018-10-20T11:11:11+01:00'), 
    "limit" => 50, // mandatory, 1-250
    "page" => 1, //mandatory, 1-N
);

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ogoship.com/Api/v1/Orders?" . http_build_query($params),
  // return body as string
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array(
  // set json output type
    "accept: application/json",
  // use oauth token
    "Authorization: Bearer " . $token,
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
//  echo $response;
}

$orders = json_decode($response);
print_r($orders);

?>