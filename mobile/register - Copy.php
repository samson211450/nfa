<?php require_once('../config/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>NFA - Albay</title>
		<link href="../img/icon.png" rel="shortcut icon">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<script src="../js/bootstrap.bundle.js"></script>
		<script src="../js/jquery-3.6.4.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="card mb-3 col-lg-8 mx-auto">
				<div class="card-header text-center">
					<div class="row row-cols-auto justify-content-center">
						<div class="col">
							<img src="../img/da-nfa.png" width="100" height="100">
						</div>
						<div class="col">
							REPUBLIC OF THE PHILIPPINES<br>National Food Authority<br>
							Albay Branch Office<br>Pier Site, Legazpi City
						</div>
					</div>
				</div>
				<div class="card-body">
					<h5 class="text-center">FARMER'S INFORMATION SHEET</h5>
					<form method="post" action="">
						<div class="row row-cols-auto">
							<div class="col-lg-2 mb-3">
								<label class="col-form-label">NAME:</label>
							</div>
							<div class="col-lg-3 mb-3">
								<input type="text" id="surname" name="surname" class="form-control" placeholder="Surname" required>
							</div>
							<div class="col-lg-4 mb-3">
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
							</div>
							<div class="col-lg-3 mb-3">
								<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="row row-cols-auto">
							<div class="col-lg-2 mb-3">
								<label class="col-form-label">ADDRESS:</label>
							</div>
							<div class="col-lg-3 mb-3">
								<select id="municipality" name="municipality" class="form-select" required>
									<option selected disabled>Municipality</option>
								</select>
							</div>
							<div class="col-lg-3 mb-3">
								<select id="barangay" name="barangay" class="form-select" required>
									<option selected disabled>Barangay</option>
								</select>
							</div>
							<div class="col-lg-4 mb-3">
								<input type="text" id="address" name="address" class="form-control" placeholder="Address">
							</div>
						</div>
						<div class="row row-cols-auto">
							<div class="col-lg-2 mb-3">
								<label class="col-form-label">BIRTHDATE:</label>
							</div>
							<div class="col-lg-3 mb-3">
								<input type="date" id="birthdate" name="birthdate" class="form-control">
							</div>
							<div class="col-lg-3 mb-3">
								<label class="col-form-label">BIRTHPLACE:</label>
							</div>
							<div class="col-lg-2 mb-3">
								<select id="province" name="province" class="form-select">
									<option selected disabled>Province</option>
								</select>
							</div>
							<div class="col-lg-2 mb-3">
								<select id="municipality" name="municipality" class="form-select">
									<option selected disabled>Municipality</option>
								</select>
							</div>
						</div>
						<div class="row row-cols-auto">
							<div class="col-lg-2 mb-3">
								<label class="col-form-label">CIVIL STATUS:</span>
							</div>
							<div class="col-lg-2 mb-3">
								<script src="../js/checkCivil.js"></script>
								<select id="civilstatus" name="civilstatus" class="form-select" onChange="checkCivil()">
									<option selected disabled>Civil Status</option>
									<option value="1">Single</option>
									<option value="2">Married</option>
								</select>
							</div>
							<div class="col-lg-4 mb-3">
								<input type="text" id="spouse" name="spouse" class="form-control" placeholder="Spouse" disabled>
							</div>
							<div class="col-lg-4 mb-3">
								<input type="number" id="household" name="household" class="form-control" placeholder="No. of Household Members/Dependents">
							</div>
						</div>
						<div class="row row-cols-auto">
							<div class="col-auto">
								<button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php require_once('../config/close.php'); ?>