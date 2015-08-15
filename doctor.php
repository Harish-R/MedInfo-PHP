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
				<h3>Doctor Registration</h3>
			</div>

			<div class="container" id="main-body">
				<div class="row">
					<div class="col-md-3"></div>

					<div class="col-md-6" id="select-doctor">
						<!-- Form for doctor registration -->
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

					<div class="col-md-3"></div>
				</div>
			</div>


		</div>
	</body>
</html>