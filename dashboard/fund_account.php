<?php
  session_start();

  if (!isset($_SESSION['account_id'])) {
    header('location: ../access/login.php');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbaord | Fund Account</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <link rel="stylesheet" type="text/css" href="../icofont/icofont.css">

  <link rel="stylesheet" type="text/css" href="../icofont/icofont.min.css">

  <style type="text/css">
    .form-control {
      font-weight: bold
    }

    input {
      border: none !important
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
   <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="" class="brand-link" style="background-color: #010010">
      <img src="images/bitcoin.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;">
      <span class="brand-text font-weight-light" style="color: gold"><b>Empiretrading Pro</b></span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar" style="background: url(images/background.jpg);
    background-size: cover;">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a>
              <p align="center">
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <i class="nav-icon fas icofont-wallet"></i>
                  <p>Acount Overview</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="packages.php" class="nav-link">
             <i class="nav-icon fas icofont-money"></i>
              <p>
                Investment Plans
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="fund_account.php" class="nav-link active">
              <i class="nav-icon fas icofont-pay"></i>
              <p>
                Fund Account
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="trade_history.php" class="nav-link">
              <i class="nav-icon fas icofont-history"></i>
              <p>
                Trade History
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="transaction_history.php" class="nav-link">
              <i class="nav-icon fas icofont-history"></i>
              <p>
                Transaction History
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="withdrawal.php" class="nav-link">
              <i class="nav-icon fas icofont-credit-card"></i>
              <p>
                Withdraw
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas icofont-user-alt-7"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="../controller/logout.php" class="nav-link">
              <i class="nav-icon fas icofont-ui-power"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fund Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Fund Account</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        
        <div class="card card-primary card-outline">
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true"><b style="color: green">Instructions</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false"><b>Fund Account</b></a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent" style="margin-top: 20px">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab" style="text-align: justify">
                                              <p style="font-size: 18px !important; text-align: justify !important;">
                                                <p style="color: red;"><i class="icofont-warning"></i> Please follow the steps below to fund your account;</p>
                                                  <span>STEP 1:</span> Enter amount in the deposit form below and click "Deposit".<br>
                                                  <span>STEP 2:</span> Copy the wallet address provided in '<span style="color: #007bff;">Fund Account</span>'<br>
                                                  <span>STEP 3:</span> Make payment from your Bitcoin wallet. (Send the equivalent bitcoin amount of the amount you wish to invest).<br>
                                                  <span>STEP 4:</span> Provide your transaction hash ID. This can be gotten from your wallet after payment.<br>
                                                  <span>STEP 5:</span> Click on Submit.
                                                </p>
                                                <div class="row">

<div class="col-lg-12">
<div class="card-header">
  <h3 class="card-title"><i class="nav-icon fas icofont-arrow-down"></i><b>Deposit Form</b></h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form class="form-horizontal" action="../controller/deposits.php" method="post">
  <div class="card-body">
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">From</label>
      <div class="col-sm-4">
        <input type="text" name="name" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['name'] ?>" readonly>
      </div>

      <div class="col-sm-3">
        <input type="text" name="email" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['email'] ?>" readonly>
      </div>

      <div class="col-sm-3">
        <input type="text" name="phone" class="form-control" id="inputPassword3" value="<?php if($_SESSION['phone']) { echo $_SESSION['phone']; } else { echo"N/A"; } ?>" readonly>
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Account ID</label>
      <div class="col-sm-10">
        <input type="text" name="account_id" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['account_id'] ?>" readonly>
      </div>
    </div>

      <p style="color: #17a2b8">Please enter the amount of deposit</p>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Amount (USD)</label>
      <div class="col-sm-10">
        <input type="number" name="amount" class="form-control" id="inputEmail3" placeholder="Enter Amount" required>
      </div>
    </div>
    
  </div>
  <!-- /.card-body -->
  <?php
        if (isset($_SESSION['deposit_alert'])) {
          echo $_SESSION['deposit_alert'];
          unset ($_SESSION['deposit_alert']);
        }
    ?>
  <div class="card-footer" align="center">
    <button type="submit" class="btn btn-info" style="width: 150px">Deposit</button>
  </div>
  <!-- /.card-footer -->

  <?php

                  include("../controller/connection.php");

                  $sql = 'SELECT `wallet`FROM `admin`';
                  $run_sql = $connect->query($sql);

                  if ($run_sql == TRUE) {

                    $detail = $run_sql->fetch_assoc();
                    $wallet = $detail['wallet'];

                    echo '<div align="center" style="margin-top: 25px">
                    <h3 style="color: #0361be">Fund Account</h3>
                    <p class="col-lg-10" style="font-size: 15px;">BELOW IS THE COMPANY BITCOIN WALLET ADDRESS. COPY AND MAKE DEPOSIT THROUGH YOUR BITCOIN WALLET.</p>
                    <i class="icofont-long-arrow-down"></i>
                    <div class="col-lg-6 m-b-30">
                       <input style="text-align: center; font-weight: bold" type="text" class="form-control" id="myWallet" value="'.$wallet.'" readonly="" style="font-size: 15px">
                    <div style="margin-top: 12px">
                    <button style="width: 100px" type="button" class="btn btn-block btn-outline-success btn-sm"  onclick="myFunction()">Copy <i class="fa fa-clipboard" aria-hidden="true"></i></button>
                    </div>
                    </div>                       
                </div>';
                  }

               
                ?>
</form>
<p><br>
      Your account will be credited once your transaction has been validated.<br><br>
      <span style="color: red">NOTE: If you have problems finding your Transaction Hash ID, Use the last 10 digits of your wallet address as the Transaction Hash ID.</span><br><br>
      If you encounter any issue while funding your account, please contact <b>support@iqoptionsforex.com</b> for assistance.
    </p>
</div>
</div>
              </div>

              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                <?php

                  $sql = 'SELECT `wallet`FROM `admin`';
                  $run_sql = $connect->query($sql);

                  if ($run_sql == TRUE) {

                    $detail = $run_sql->fetch_assoc();
                    $wallet = $detail['wallet'];

                    echo '<div align="center" style="margin-top: 25px">
                    <h3 style="color: #0361be">Fund Account</h3>
                    <p class="col-lg-10" style="font-size: 15px;">BELOW IS THE COMPANY BITCOIN WALLET ADDRESS. COPY AND MAKE DEPOSIT THROUGH YOUR BITCOIN WALLET.</p>
                    <i class="icofont-long-arrow-down"></i>
                    <div class="col-lg-6 m-b-30">
                       <input style="text-align: center; font-weight: bold" type="text" class="form-control" id="myWallet" value="'.$wallet.'" readonly="" style="font-size: 15px">
                    <div style="margin-top: 12px">
                    <button style="width: 100px" type="button" class="btn btn-block btn-outline-success btn-sm"  onclick="myFunction()">Copy <i class="fa fa-clipboard" aria-hidden="true"></i></button>
                    </div>
                    </div>                       
                </div>';
                  }

               
                ?>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
  
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script type="text/javascript">
    
        function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myWallet");

  /* Select the text field */
  copyText.select("");
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
