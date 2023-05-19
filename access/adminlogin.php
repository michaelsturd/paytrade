<?php
	session_start();
require'../controller/connection.php';
	//NEW LOGIN
if (isset($_POST['login_here'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND password = '$password'";
    $run_sql = $connect->query($sql);
	$user = mysqli_fetch_assoc($run_sql);
    if ($run_sql) {
		$_SESSION['id'] = $user['id'];
        $_SESSION['admin'] = $user['email'];
        $_SESSION['admin_username'] = $user['admin_username'];
        header("location: ../dashboard/admin_dashboard.php");
    }
    else {
        echo'Error logins.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../img/Empire Trade Logo2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.email_icon {
		position: relative;
	    float: right;
	    top: 34px;
	    right: 4px;
	    color: #999;
	}

	input {
		padding-right: 40px !important;
	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="#" method="post">
					<center>
						<img src="../img/logo.png" width="100">
					</center>

					<!-- Success / Error Message displays here -->
		            <div style="text-align: center; margin-bottom: 20px; background-color: #fff">
		                <?php 
		                      if (isset($_SESSION['alertMsg'])){
		                        echo ($_SESSION['alertMsg']);
		                        unset($_SESSION['alertMsg']);
		                    } 
		                ?>
		            </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<span class="email_icon">
							<i class="zmdi zmdi-email"></i>
						</span>
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div>
						<a class="txt2" href="register.php">
							Forget Password?
						</a>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn" style="border-radius: 14px">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login_here">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115" style="padding-top: 34px">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="register.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
		<footer class="footer_section">
        <div class="container" align="center" style="padding-bottom: 12px; font-size: 10px">
        <div class="copyright" style="text-transform: inherit;">All rights reserved © 2021 Iqoptionsforex</div>
        </div>
        </footer>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>