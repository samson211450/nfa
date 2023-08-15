<?php include('../includes/cardHeader.php')?>
<div class="card-body">
	<h5 class="card-title text-center">ONLINE REGISTRATION</h5>
	<form method="post" action="?page=verify" class="row g-3">
		<div class="col-lg-12 form-floating">
			<input type="text" id="lname" name="lname" class="form-control" placeholder="Surname" pattern="[a-zA-Z'-'\s]*" required autocomplete="off">
			<label for="lname">Surname</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="text" id="fname" name="fname" class="form-control" placeholder="First Name" pattern="[a-zA-Z'-'\s]*" required autocomplete="off">
			<label for="fname">First Name</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="text" id="mname" name="mname" class="form-control" placeholder="Middle Name" pattern="[a-zA-Z'-'\s]*" autocomplete="off">
			<label for="mname">Middle Name</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="tel" id="cp" name="cp" class="form-control" placeholder="Cellphone Number" pattern="[0-9]{11}" required autocomplete="off">
			<label for="cp">Cellphone Number</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="email" id="email" name="email" class="form-control" placeholder="Email Address (optional)" autocomplete="off">
			<label for="email">Email Address (optional)</label>
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary btn-block">REGISTER</button>
		</div>
	</form>
</div>
<div class="card-footer">
	<p class="form-text">Already registered? <a href="?page=login">Click here to login</a></p>
</div>