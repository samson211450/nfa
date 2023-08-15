<?php include('../includes/cardHeader.php')?>
<div class="card-body">
	<h5 class="card-title text-center">Please enter One-Time PIN</h5>
	<form method="post" action="?page=status" class="row g-3">
		<div class="col-lg-3">
			<input type="number" id="otp1" name="otp1" class="form-control" min="0" max="9" required autocomplete="off">
		</div>
		<div class="col-lg-3">
			<input type="number" id="otp2" name="otp2" class="form-control" min="0" max="9" required autocomplete="off">
		</div>
		<div class="col-lg-3">
			<input type="number" id="otp3" name="otp3" class="form-control" min="0" max="9" required autocomplete="off">
		</div>
		<div class="col-lg-3">
			<input type="number" id="otp4" name="otp4" class="form-control" min="0" max="9" required autocomplete="off">
		</div>
		<div class="d-grid gap-2">
			<button type="submit" class="btn btn-primary btn-block">VERIFY</button>
		</div>
	</form>
</div>
<div class="card-footer">
	<p class="form-text">Did not received OTP? <a href="?page=register">Click here to resend</a></p>
</div>