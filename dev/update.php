<?php
	require_once('../config/connect.php');
	echo "Connected successfully";
	$id = $_REQUEST['id'];
	$farmers = $conn->query("SELECT farmers.id, farmers.surname, farmers.firstname, farmers.middlename, municipalities.municipality, barangays.barangay, farmers.birthdate FROM farmer_address INNER JOIN farmers ON farmers.id=farmer_address.farmer_id INNER JOIN municipalities ON municipalities.id=farmer_address.municipality_id INNER JOIN barangays ON barangays.id=farmer_address.farmer_id WHERE farmer_address.id='$id'");
	$municipalities = $conn->query("SELECT * FROM municipalities");
	$barangays = $conn->query("SELECT * FROM barangays");

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$surname = $conn->escape_string($_POST['surname']);
		$firstname = $conn->escape_string($_POST['firstname']);
		$middlename = $conn->escape_string($_POST['middlename']);
		$municipality = $_POST['municipality'];
		$barangay = $_POST['barangay'];
		$birthdate = $_POST['birthdate'];
		
		$farmer = $farmers->fetch_assoc();
		$farmerID = $farmer['id'];
		
		$addFarmer = $conn->query("UPDATE farmers SET surname = '$surname', firstname = '$firstname', middlename = '$middlename', birthdate = '$birthdate' WHERE farmers.id='$farmerID'");
		
		$farmerAddress = $conn->query("UPDATE farmer_address SET municipality_id='$municipality', barangay_id='$barangay' WHERE id='$id'");
		
		
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
		<?php $farmer = $farmers->fetch_assoc()?>
		<input type="text" name="surname" placeholder="Surname" value="<?=$farmer['surname']?>">
		<input type="text" name="firstname" placeholder="First Name" value="<?=$farmer['firstname']?>">
		<input type="text" name="middlename" placeholder="Middle Name" value="<?=$farmer['middlename']?>">
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
		<input type="date" name="birthdate" placeholder="Enter birthdate" value="<?php $farmer['birthdate']?>">
		<input type="submit" value="SUBMIT">
	</form>
</body>
</html>
<?php require_once('../config/close.php'); ?>