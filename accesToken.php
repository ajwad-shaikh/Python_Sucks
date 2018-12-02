<?php

$clientId = "d74020c0568d69856f446551e8f3e9f4" ;
$clientSecret = "aa561377b17a7c82f8b14ebe2d2f013a" ;
$redirectUri = "http://localhost/Python_Sucks/success.php";

$data = array("grant_type" => "authorization_code", "code" => $_GET["code"], 
				"client_id" => $clientId , "client_secret" => $clientSecret,
				"redirect_uri" => $redirectUri);                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.codechef.com/oauth/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$data = json_decode($result, true);

echo '<h1> Hello! </h1>';
print_r($data);

$accessToken = $data['result']['data']['access_token'];
$refreshToken = $data['result']['data']['refresh_token'];

?>