<?
//Uso de API twitter 
/*
* using curl
*/

$key = 'woHHCME4A1k3CayFLPnsWcaGT'; //YOUR_KEY_HERE
$secret = 'H8OW8esxt95wSmkOTRIExYuB1haYnlQ8fnW40Wq6VAlwK3Wn6t'; //YOUR_SECRET_HERE
$api_endpoint = 'https://api.twitter.com/1.1/users/show.json?screen_name=varop10_alvaro'; // endpoint must support "Application-only authentication"

// request token
$basic_credentials = base64_encode($key.':'.$secret);
$tk = curl_init('https://api.twitter.com/oauth2/token');
curl_setopt($tk, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$basic_credentials, 'Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
curl_setopt($tk, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
curl_setopt($tk, CURLOPT_RETURNTRANSFER, true);
$token = json_decode(curl_exec($tk));
curl_close($tk);

// use token
if (isset($token->token_type) && $token->token_type == 'bearer') {
	$br = curl_init($api_endpoint);
	curl_setopt($br, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token->access_token));
	curl_setopt($br, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($br);
	curl_close($br);
  
	// do_something_here_with($data);
	echo "Todo bien tu gustavo (y)";
	echo $data;
}