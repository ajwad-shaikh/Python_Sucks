<?php

$request = "https://api.codechef.com/users/".$_GET["CCid"];
$header2 = "Authorization: Bearer ".$_GET["access_Token"];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");


$headers = array();
$headers[] = "Accept: application/json";
$headers[] = $header2;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$data = json_decode($result, true);
print_r($data);

echo '<form action="result.php" method="GET">
	<input type="type" name="CCid"/>
	<input type="hidden" name="access_Token" value="'.$_GET["access_Token"].'"/>
	<input type="submit" value="Get Access!"/>
	
</form>'
?>