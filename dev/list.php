<?php
	require_once('../config/connect.php');
	echo "Connected successfully";
	
	$lists = $conn->query("SELECT farmer_address.id, farmers.surname, municipalities.municipality, barangays.barangay FROM farmer_address INNER JOIN farmers ON farmer_address.farmer_id=farmers.id INNER JOIN municipalities ON municipalities.id=farmer_address.municipality_id INNER JOIN barangays ON barangays.id=farmer_address.barangay_id");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List</title>
</head>

<body>
	<table border="1">
		<?php while($list = $lists->fetch_assoc()) { ?>
		<tr>
			
			<td><?=$list['surname']?></td>
			<td><?=$list['municipality']?></td>
			<td><?=$list['barangay']?></td>
			<td><a href="update.php?id=<?=$list['id']?>">update</a></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<?php require_once('../config/close.php'); ?>