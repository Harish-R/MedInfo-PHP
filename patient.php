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
					<h1>HeartBeats<small>Remote Medical Information</small></h1>			
				</div>
			</div>

			<div class="container-fluid">
				<h3>Patients Entry</h3>
			</div>

			<div class="container" id="main-body">
				<div class="row">
					<div class="col-md-3"></div>

					<div class="col-md-6" id="select-patient">
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
					</div>	

					<div class="col-md-3"></div>
				</div>
			</div>


		</div>
	</body>
</html>