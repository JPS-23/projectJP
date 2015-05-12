<?php
//Configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//Make Constant using define.
define('clientID', '414846d826e14290813cabdb852809fb');
define('clientSecret', 'dcbb59f487c6411d91a3810ae057a80f');
define('redirectURI', 'http://localhost/projectJP/index.php');
define('ImageDirectory', 'pics/');

if isset(($_GET['code'])){
	$code = ($_GET['code']);
	$url = 'https://api.instagram.com/oauth/access_token';
	$access_token_settings = array('client_id' => clientID,
									'client_secret' => clientSecret,
									'grant_type' => 'authorization_code',
									'redirect_uri' => redirectURI,
									'code' => $code//this code is equal to the one in line 14
									);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Untitled</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="author" href="humans.txt">
	</head>
	<body>
		<!-- create a login for people to go to Instagram API -->
		<!-- creating a link to Instagram through oauth/authorizing the account -->
		<!-- After setting client_id to blank in the beggining, along with redirect_uri then you have to echo it out from the constants -->
		<a href="https:api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">Login</a>
		<script src="js/main.js"></script>
	</body>
</html>