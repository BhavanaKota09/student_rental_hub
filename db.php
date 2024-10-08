<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'rental';


	$dbconn = mysqli_connect($host, $user, $pass, $db);

	if(!$dbconn){
		die("please try again");
	}

?>