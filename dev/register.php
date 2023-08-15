<?php
	require_once('../config/connect.php');
	echo "Connected successfully";
	$municipalities = $conn->query("SELECT * FROM municipalities");
	$barangays = $conn->query("SELECT * FROM barangays");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$surname = $conn->escape_string($_POST['surname']);
		$firstname = $conn->escape_string($_POST['firstname']);
		$middlename = $conn->escape_string($_POST['middlename']);
		$municipality = $_POST['municipality'];
		$barangay = $_POST['barangay'];
		$birthdate = $_POST['birthdate'];
		
		$addFarmer = "INSERT INTO farmers (surname, firstname, middlename, birthdate) VALUES ('$surname','$firstname','$middlename','$birthdate')";
		
		if($conn->query($addFarmer) === TRUE){
			$farmerID = $conn->insert_id;
		}
		$farmerAddress = $conn->query("INSERT INTO farmer_address (farmer_id, municipality_id, barangay_id)VALUES ('$farmerID','$municipality','$barangay')");
		
		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
</head>

<body>
	<form method="post" action="">
		<input type="text" name="surname" placeholder="Surname">
		<input type="text" name="firstname" placeholder="First Name">
		<input type="text" name="middlename" placeholder="Middle Name">
		<select name="municipality">
			<option value="" selected disabled>Select municipality</option>
			<?php while($mun = $municipalities->fetch_assoc()){ ?>
			<option value="<?=$mun['id']?>"><?=$mun['municipality']?>
			<?php } ?>
		</select>
		<select name="barangay">
			<option value="" selected disabled>Select barangay</option>
			<?php while($brgy = $barangays->fetch_assoc()){ ?>
			<option value="<?=$brgy['id']?>"><?=$brgy['barangay']?>
			<?php } ?>
		</select>
		<input type="date" name="birthdate" placeholder="Enter birthdate">
		<input type="submit" value="SUBMIT">
	</form>
</body>
</html>
<?php require_once('../config/close.php'); ?>