<?php include('../includes/cardHeader.php')?>
<div class="card-body">
	<h5 class="card-title text-center">CREATE PASSWORD</h5>
	<form method="post" action="" class="row g-3">
		<div class="col-lg-12 form-floating">
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" pattern="[a-zA-Z0-9_!@#$%^&*()-=]+">
			<label for="password">Password</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="password" id="confirmPwd" name="confirmPwd" class="form-control" placeholder="Confirm Password" autocomplete="off"pattern="[a-zA-Z0-9_!@#$%^&*()-=]+">
			<label for="confirmPwd">Confirm Password</label>
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary btn-block">CREATE PASSWORD</button>
		</div>
	</form>
</div>