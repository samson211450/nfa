<style>
	.card {
		margin-top: 50px;
	}
</style>
<div class="card-body">
	<h5 class="card-title text-center">ENTER OTP</h5>
	<form method="post" action="" class="row g-3">
		<div class="col-lg-12 form-floating">
			<input type="number" id="otp" name="otp" class="form-control" placeholder="One-Time Pin" pattern="[0-9]{4}" min="1000" max="9999" required autocomplete="off">
			<label for="otp">One-Time Pin</label>
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary btn-block">VERIFY</button>
		</div>
	</form>
</div>
<div class="card-footer">
	<p class="form-text">Did not received OTP? <a href="?page=register">Click here to resend</a></p>
</div>