<?php require_once('config/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFA - Albay</title>
    <link href="img/icon.png" rel="shortcut icon">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/jquery-3.6.4.js"></script>
</head>
<body>
    <div class="container-fluid">
		<?php include('includes/navbar.php') ?>
		<?php include('pages/register.php') ?>
		<?php include('includes/footer.php') ?>
    </div>
</body>
</html>
<?php require_once('config/close.php'); ?>