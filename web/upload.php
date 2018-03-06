<?php

	define("sprayDefineProtect", true);
	require 'steamauth/steamauth.php';
	if(isset($_FILES['data']) and !$_FILES['data']['error'] and isset($_SESSION['steamid'])){
   		$fname = $_SESSION['steamid'];
    	move_uploaded_file($_FILES['data']['tmp_name'], "./sprays/" . $fname.".vtf");
    	$vmt = fopen("./sprays/".$fname.".vmt", 'w');
    	$txt = file_get_contents("sprays/template.vmt");
    	$txt = str_replace('{STEAMAUTH}', $_SESSION['steamid'], $txt);
   		fwrite($vmt, $txt);
		fclose($vmt);
	}