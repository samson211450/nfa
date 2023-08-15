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
		<div class="card p-4 col-md-6 mx-auto d-flex align-content-center flex-wrap">
			<?php include('../includes/cardHeader.php')?>
			<form method="post" action="">
				<div class="card-body">
					<div class="row g-3">
						<div class="col-md-12">
							<label class="col-form-label">NAME:</label>
						</div>	
						<div class="col-md-4">
							<input type="text" id="surname" name="surname" class="form-control" placeholder="Surname" pattern="[a-zA-Z ]+" required>
						</div>
						<div class="col-md-4">
							<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" pattern="[a-zA-Z ]+" required>
						</div>
						<div class="col-md-4">
							<input type="text" id="middlename" name="middlename" class="form-control" placeholder="Middle Name" pattern="[a-zA-Z ]+">
						</div>
						<div class="col-md-12">
							<label class="col-form-label">ADDRESS:</label>
						</div>
						<div class="col-md-4">
							<select id="municipality" name="municipality" class="form-select" required>
								<option selected disabled>Municipality</option>
							</select>
						</div>
						<div class="col-md-4">
							<select id="barangay" name="barangay" class="form-select" required>
								<option selected disabled>Barangay</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="text" id="address" name="address" class="form-control" placeholder="Address">
						</div>
						<div class="col-md-6">
							<label class="form-label">BIRTHDATE:</label>
							<input type="date" id="birthdate" name="birthdate" class="form-control">
						</div>
						<div class="col-md-6">
							<label class="form-label">BIRTHPLACE:</label>
							<div class="row g-3">
								<div class="col-md-6">
									<select id="province" name="province" class="form-select">
										<option selected disabled>Province</option>
									</select>
								</div>
								<div class="col-md-6">
										<select id="municipality" name="municipality" class="form-select">
											<option selected disabled>Municipality</option>
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<label class="form-label">CIVIL STATUS:</label>
							<div class="row g-3">
								<div class="col-md-3">
								<script src="../js/checkCivil.js"></script>
								<select id="civilstatus" name="civilstatus" class="form-select" onChange="checkCivil()">
									<option selected disabled>Civil Status</option>
									<option value="1">Single</option>
									<option value="2">Married</option>
								</select>
								</div>
								<div class="col-md-4">
									<input type="text" id="spouse" name="spouse" class="form-control" placeholder="Spouse" disabled>
								</div>
								<div class="col-md-5">
									<input type="number" id="household" name="household" class="form-control" placeholder="No. of Household Members/Dependents">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="d-grid gap-2">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
<?php require_once('../config/close.php'); ?>