<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome | <?php echo $_SESSION['reg_name']; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/bootstrap/css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" href="access/fonts/iconic/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" type="text/css" href="access/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="icofont/icofont.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="access/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="access/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="access/css/util.css">
  <link rel="stylesheet" type="text/css" href="access/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="border: 1px solid #999; background: #fff !important;">
        <form class="login100-form validate-form">

          <div align="center" style="margin-bottom: 34px;">
          </div>

              <div align="center" style="margin: 12% 0% 13% 0%">
                        <a href="index.php"><img src="img/mail.gif" alt="" class="img-fluid" width="170"></a>
                        <p>Welcome, <b><?php echo $_SESSION['reg_name']; ?></b></p>
                          <p>Your registration is successful!</p>
                        <div align="center">
                        <p>Please click the link sent to <br><span style="color: skyblue; font-size: 17px"><?php echo $_SESSION['reg_email']; ?></span> <br>to validate your account</p>
                        </div>
              </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="access/login.php" style="color: #4d4d4d">
              <i class="icofont-arrow-left"></i> Back
            </a>
          </div>
        </form>
      </div>
    </div>
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