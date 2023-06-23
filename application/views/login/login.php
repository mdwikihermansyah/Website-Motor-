<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url(); ?>assets/login-form/css/style.css">

	</head>
	<body>
	
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<h2 class="heading-section">LOGIN</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-10">
							<div class="wrap d-md-flex">
								<div class="img" style="background-image: url(<?= base_url(); ?>assets/img/login-harley.jpg);">
						</div>
								<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Join Member ?</h3>
								</div>
										<div class="w-100">
											<p class="social-media d-flex justify-content-end">
												<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
												<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
											</p>
										</div>
							</div>
							

							<form class="user" method="POST" action="<?= base_url('login/auth'); ?>">
							<div class="form-group position-relative has-icon-left mb-4">
								<input name="email" required type="email" class="form-control form-control-xl" placeholder="Email" />
								<div class="form-control-icon">
									<i class="bi bi-person"></i>
								</div>
							</div>
							<div class="form-group position-relative has-icon-left mb-4">
								<input name="password" required type="password" class="form-control form-control-xl" placeholder="Password" />
								<div class="form-control-icon">
									<i class="bi bi-shield-lock"></i>
								</div>
							</div>
							<div class="form-check form-check-lg d-flex align-items-end">
								<input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
								<label class="form-check-label text-gray-600" for="flexCheckDefault">
									Keep me logged in
								</label>
							</div>
							<button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
								Log in
							</button>
						</form>
						<p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
						</div>
					</div>
						</div>
					</div>
				</div>
			</section>

	<script src="<?= base_url(); ?>assets/login-form/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/login-form/js/popper.js"></script>
  <script src="<?= base_url(); ?>assets/login-form/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/login-form/js/main.js"></script>

	</body>
</html>

