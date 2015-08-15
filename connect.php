<?php
	require "app_config.php";

	$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)
	or
	die("Cannot connect to database!<br>"); 

?>