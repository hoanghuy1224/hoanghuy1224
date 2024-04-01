<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>đăng kí </title>

	<!-- Meta -->
	<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
	<meta name="author" content="Bootstrap Gallery" />
	<link rel="canonical" href="https://www.bootstrap.gallery/">
	<meta property="og:url" content="https://www.bootstrap.gallery">
	<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
	<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
	<meta property="og:type" content="Website">
	<meta property="og:site_name" content="Bootstrap Gallery">
	<link rel="shortcut icon" href="../html/assets/images/favicon.svg" />

	
	<link rel="stylesheet" href="../html/assets/fonts/icomoon/style.css" />

	<link rel="stylesheet" href="../html/assets/css/main.min.css" />
</head>
<?php 
include '../connectdb/db.php';
if (isset($_POST['signup'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

	$result = mysqli_query($conn,$query);

	if ($result) {
        include 'login.php';
        exit();
    } else {
        $error = "Đã xảy ra lỗi khi tạo tài khoản.";
    }
}
?>
<body class="bg-one">
	<!-- Container start -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
				<form action="signup.php" method="post" class="my-5" >
					<div class="card p-md-4 p-sm-3">
						<div class="login-form">
							<a href="" class="mb-4 d-flex">
								<img src="../html/assets/images/logo-sm.svg" class="img-fluid login-logo" alt="Bootstrap Gallery" />
							</a>
							<h2 class="mt-4 mb-4">Signup</h2>
							<div class="mb-3">
								<label class="form-label">username</label>
								<input type="text" name="username" class="form-control" placeholder="enter your username" />
							</div>
							<div class="mb-3">
								<label class="form-label">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Enter your email" />
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<div class="input-group">
									<input type="password" name="password" class="form-control" placeholder="Enter password" />
									<a href="#" class="input-group-text">
										<i class="icon-eye"></i>
									</a>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<div class="form-check m-0">
									<input class="form-check-input" type="checkbox" value="" id="termsConditions" />
									<label class="form-check-label" for="termsConditions">tôi đồng ý với các điểu khoản và điều kiện</label>
								</div>
							</div>
							<div class="d-grid py-3 mt-3">
								<button type="submit" name="signup" class="btn btn-lg btn-success">
									SIGNUP
								</button>
							</div>
							<div class="text-center pt-4">
								<span>bạn có sẵn sàng để tạo một tài khoản ?</span>
								<a href="login.php" class="text-success text-decoration-underline">
									Login</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Container end -->
</body>

</html>