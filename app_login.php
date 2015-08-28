<?php
	header("Access-Control-Allow-Origin:*");
	require "connect.php";
	$response = array();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM doctors WHERE doc_username = '$username' AND doc_password = '$password'";
	$result = mysqli_query($con, $query);
	if($result) {	

		$response["success"] = "success";
		$response["patients"] = array();

		$patient = array();

		$row = mysqli_fetch_assoc($result);
		$doc_id = $row['doc_id'];
		$query = "SELECT * FROM patients WHERE doc_id = '$doc_id'";
		$result = mysqli_query($con, $query);

		if($result) {
			while($row = mysqli_fetch_assoc($result)) {
				$patient = array();
				$patient["pat_id"] = $row["pat_id"];
				$patient["name"] = $row["name"];
				$patient["age"] = $row["age"];
				$patient["sex"] = $row["sex"];
				$patient["hospital"] = $row["hospital"];
				$patient["phone"] = $row["phone"];
				
				array_push($response["patients"], $patient);
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