<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Player spray genrator</title>
		<link rel="stylesheet" href="vtf.css" />
		<?php
		define("sprayDefineProtect", true);
		require 'steamauth/steamauth.php';

		?>
	</head>
	<body>
		<h4>Memerland's Custom Player Sprays</h4>
		<br />
		<?php
			if(!isset($_SESSION['steamid'])) {
			    loginbutton("rectangle"); //login button
			}  else {
				logoutbutton();
			    include ('steamauth/userInfo.php'); //To access the $steamprofile array
			    if(!file_exists('sprays/'.$_SESSION['steamid'].'.vtf')){
			    	include ('scripts/vtf.php');
			    }else{
			    	echo "<h1>You already have a spray :D</h1>";
			    }
			}
		?>
	</body>
</html>