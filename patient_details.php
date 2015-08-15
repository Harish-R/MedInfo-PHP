<!DOCTYPE html>
<?php require "connect.php"; ?>
<html lang="en">
	<head>
		<title>Doctor Registration</title>
	</head>
	<body>
		<div id="wrapper" class="container-fluid">
			<div class="container">
				<?php
					$name = $_POST['name'];
					$age = $_POST['age'];
					$gender = $_POST['gender'];
					$phone = $_POST['phone'];
					$hospital = $_POST['hospital'];
					$doctor = $_POST['doctor'];
					$doc_id = 0;
					$query = "SELECT * FROM doctors WHERE doc_username = '$doctor'";
					$result = mysqli_query($con, $query); 
					if($result)
					{
						$row = mysqli_fetch_assoc($result);
						$doc_id = $row['doc_id'];
						echo $doc_id . "<br>";
					} 
					else {
						echo "no doctor exist<br>";
					} 

					$query = "INSERT INTO patients (name, age, sex, phone, hospital, doc_id) VALUES ('$name', '$age', '$gender', '$phone', '$hospital', '$doc_id')";
					$result = mysqli_query($con, $query);
					if($result > 0)
					{
						echo "<p> Patient details Created Successfully </p>";
					}
					else
					{
						echo "<p>Error!<br></p>";
					}
				?>
			</div>
		</div>
	</body>
</html>