<?php
/*
* using curl
*/
function mostrarTweets($user){
	$key = 'fn0UlCH65zataX9f8Kf4WxakP'; //YOUR_KEY_HERE
	$secret = '3bkTTeZXCw9irUopXtYkbt5GZYH6TEqo4o7B9M2XOrqZQ94phs'; //YOUR_SECRET_HERE
	$api_endpoint = 'https://api.twitter.com/1.1/users/show.json?screen_name='.$user.'&count=2'; // endpoint must support "Application-only authentication"

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
		//echo "Todo bien tu gustavo (y)";
		//return $data;
		//echo $data;
		$info = json_decode($data);
		$tweet = $info->status->text;
		echo "<div id='tweets'>
				  <section id='logo'>
					<img src=''>
				  </section>
				  <section id='contenido'>
					<p id='cuenta'> <span id='usuario'></span></p>
					<p id='tweet'>".$tweet ."</p>
				  </section>
			</div>
			<br />";
		//echo $data;
	}
}
?>