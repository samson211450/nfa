<style>
	.card {
		margin-top: 50px;
	}
</style>
<div class="card-body">
	<h5 class="card-title text-center">PLEASE LOGIN</h5>
	<form method="post" action="" class="row g-3">
		<div class="col-lg-12 form-floating">
			<input type="tel" id="cp" name="cp" class="form-control" placeholder="Cellphone Number" pattern="[0-9]{11}" required autocomplete="off">
			<label for="cp">Cellphone Number</label>
		</div>
		<div class="col-lg-12 form-floating">
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
			<label for="password">Password</label>
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary btn-block">LOGIN</button>
		</div>
	</form>
</div>
<div class="card-footer">
	<p class="form-text">Not yet registered? <a href="?page=register">Click here to register</a></p>
</div>