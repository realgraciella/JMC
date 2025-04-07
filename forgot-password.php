<?php
	include_once("includes/system_header.php");
?>

	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<img class="img-fluid logo-dark mb-2" src="assets/img/logo_0.png" alt="Logo">
				<div class="loginbox">
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Forgot Password?</h1>
							<p class="account-subtitle">Enter your email to get a password reset link</p>

							<form action="login.php">
								<div class="form-group">
									<label class="form-control-label">Email Address</label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group mb-0">
									<button class="btn btn-lg btn-block btn-primary" type="submit">Reset Password</button>
								</div>
							</form>

							<div class="text-center dont-have">Remember your password? <a href="login.php">Login</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/feather.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

</html>