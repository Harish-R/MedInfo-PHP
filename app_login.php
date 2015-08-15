<?php
	require "connect.php";
	header("Access-Control-Allow-Origin:*");
	$response = array();

	$username = $_POST["username"];
	$password = $_POST["password"];

	$query = "SELECT * FROM doctors WHERE doc_username = '$username' AND doc_password = '$password'";
	$result = $mysqli_query($con, $query);
	if($result > 0) {	

		$response = "";
		$row = mysql_fetch_assoc($result);
		$doc_id = $row['doc_id'];
		$query = "SELECT * FROM patients WHERE doc_id = '$doc_id'";
		$result = mysqli_query($con, $query);

		if($result > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$response = $response . $row[name];
			}
		}

	}
	else {
		$response["success"] = "failure";
		$response["username"] = $username;
		$response["password"] = $password;
	}
	echo json_encode($response); 
?> 