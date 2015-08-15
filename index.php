<!DOCTYPE html> 
<html lang="en">
	
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/app.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" /> 
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</head>
	
	<body>
		
		<div class="container-fluid" id="wrapper">
			<div class="container-fluid" id="main-header">
				<div class="header">
					<h1>HeartBeats <small>Remote Medical Information</small></h1>
					
				</div>
			</div>

			<div class="container" id="main-body">
				<div class="row">
					<div class="col-md-4"></div>
					
					<div class="col-md-4">
						<br>

						<div class="btn-group btn-group-lg" role="group" aria-label="links">
							<a href="doctor.php">
								<button type="button" class="btn btn-primary">Doctor</button>
							</a>
							<a href="patient.php">
								<button type="button" class="btn btn-primary">Patient</button>
							</a>
						</div>
						
					</div>

					<div class="col-md-4"></div>
					<!-- <div class="col-md-4" id="select-doctor">
						<!-- Form for doctor registration 
						<form action="doctor_registeration.php" method="POST">
							<div class="form-group">
								<label for="doc_name">Name</label>
								<input type="text" id="doc_name" name="doc_name" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="doc_username">Username</label>
								<input class="form-control" type="text" id="doc_username" name="doc_username" required>
							</div>
							<div class="form-group">
								<label for="doc_pass">Password</label>
								<input type="password" id="doc_pass" name="doc_pass" class="form-control" required> 
							</div>
							<div class="form-group">
								<label for="doc_cpass">Confirm Password</label>
								<input type="password" id="doc_cpass" name="doc_cpass" class="form-control" required> 
							</div>
							<div class="form-group">
								<label for="doc_email">Email ID</label>
								<input type="text" id="doc_email" name="doc_email" class="form-control" required> 
							</div>
							<button type="submit" id="doc_form_submit" name="doc_form_submit" class="btn btn-default">Register</button>
						</form>
					</div>

					<div class="col-md-4" id="select-patient">
						<form action="patient_details.php" method="POST" class="form-horizonal">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" required class="form-control"/><br>
							</div>
							<div class="form-group">
								<label for="age">Age</label>
								<input type="number" id="age" name="age" required class="form-control"/><br>
							</div>
							<div class="form-group">
								<label for="gender">Gender</label>
								<select class="form-control" name="gender" required>
									<option>M</option>
									<option>F</option>
								</select>
							</div>
							<div class="form-group">
								<label for="phone">Phone Number</label>
								<input type="number" id="phone" name="phone" class="form-control" required maxlength="10" ><br>
							</div>
							<div class="form-group">
								<label for="hospital">Hospital</label>
								<input type="text" id="hospital" name="hospital" class="form-control" required><br>
							</div>
							<div class="form-group">
								<label for="doctor">Doctor (username)</label>
								<input type="text" id="doctor" name="doctor" class="form-control" required><br>
							</div>
							<button type="submit" class="btn btn-default" name="submit" id="submit">Add Details</button>
						</form>
					</div>	 -->
				</div>
			</div>

			<!-- <div>
				Form for doctor registration
				<form action="doctor_registeration.php" method="POST">
					<label for="doc_name">Name</label>
					<input type="text" id="doc_name" name="doc_name" required> <br>
					<label for="doc_username"></label>
					<input type="text" id="doc_username" name="doc_username" required>
					<label for="doc_pass">Password</label>
					<input type="password" id="doc_pass" name="doc_pass" > <br>
					<label for="doc_cpass">Confirm Password</label>
					<input type="password" id="doc_cpass" name="doc_cpass" > <br>
					<label for="doc_email">Email ID</label>
					<input type="text" id="doc_email" name="doc_email" > <br>
					<input type="submit" id="doc_form_submit" name="doc_form_submit" />
				</form>
			</div> -->

			<!-- <div>
			 	// Form for patient details
				<form action="patient_detail.php" method="POST">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" required/><br>
					<label for="age">Age</label>
					<input type="number" id="age" name="age" required/><br>
					<label for="gender">Gender</label>
					<input type="text" id="gender" name="gender" /><br>
					<label for="phone">Phone Number</label>
					<input type="number" id="phone" name="phone" /><br>
					<label for="hospital"></label>
					<input type="text" id="hospital" name="hospital" /><br>
					<label for="doctor"></label>
					<input type="text" id="doctor" name="doctor" /><br>
					<input type="submit" name="submit" id="submit" />
				</form>
			</div> -->

		</div>
	</body>
</html>