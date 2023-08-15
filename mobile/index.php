<?php require_once('../config/connect.php')?>
<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../img/icon.png" rel="shortcut icon">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="../css/bootstrap-icons.css" rel="stylesheet" type="text/css">
		<link href="css/mob.css" rel="stylesheet" type="text/css">
		<title>Home - Mobile</title>
	</head>

	<body>
		<div class="container col-lg-3 mx-auto" style="margin: 70px auto">
			<ul class="nav nav-fill fixed-top border-bottom border-5 border-danger justify-content-center" style="background-color: #2d3180; height: 70px;">
				<li class="nav-item">
					<a class="nav-link" href="?page=status">
						<i class="bi bi-house-fill" style="font-size: 2rem; color: white;"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=apply">
						<i class="bi bi-plus-square-fill" style="font-size: 2rem; color: white;"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">
						<i class="bi bi-person-badge" style="font-size: 2rem; color: white;"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=login">
						<i class="bi bi-box-arrow-in-left" style="font-size: 2rem; color: white;"></i>
					</a>
				</li>
			</ul>
			<div class="card p-4">
				<?php include('page.php')?>
			</div>
			<nav class="navbar fixed-bottom border-top border-5 border-danger" style="background-color: #2d3180; height: 50px;">
				
			</nav>
		</div>
		<!--<button type="button" class="btn btn-light"><i class="bi bi-globe"></i></button>-->
		<script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
	</body>
</html>
<?php require_once('../config/close.php')?>