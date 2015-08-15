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
					$doc_name = $_POST['doc_name'];
					$doc_username = $_POST['doc_username'];
					$doc_pass = $_POST['doc_pass'];
					$doc_email = $_POST['doc_email'];

					$query = "INSERT INTO doctors (doc_name, doc_username, doc_password, doc_email) VALUES ('$doc_name', '$doc_username', '$doc_pass', '$doc_email')";
					$result = mysqli_query($con, $query);
					if($result > 0)
					{
						echo "<p> Acccount Created Successfully </p>";
						echo "<p> Download the MedInfo App from Play Store</p>";
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