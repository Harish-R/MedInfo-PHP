<?php
	require "connect.php";

	$pid = $_GET['pid'];

	$query = "SELECt * FROM patients WHERE pat_id = '$pid'";
	$result = mysqli_query($con, $query);
	$patientinfo = array();	
	$patientinfo["patient"] = array();

	if($result) {

		$row = mysqli_fetch_assoc($result);
		
		$patient = array();
		$patient['pat_id'] = $row['pat_id'];
		$patient['name'] = $row['name'];
		$patient['age'] = $row['age'];
		$patient['sex'] = $row['sex'];
		$patient['hospital'] = $row['hospital'];
		$patient['phone'] = $row['phone'];
		$patient['doc_id'] = $row['doc_id'];

		array_push($patientinfo["patient"], $patient);

		echo json_encode($patientinfo);
	}

?>