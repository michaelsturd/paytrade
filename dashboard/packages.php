<?php
  session_start();

  // if (!isset($_SESSION['account_id'])) {
  //   header('location: ../access/login.php');
  //   die();
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Investment Plans</title>

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

  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <style type="text/css">
    .pricing_lists {
    text-align: center;
}
.pricing_box {
    background-color: #fafafa;
    padding: 40px 0px;
    border: 1px solid #ddd;
    border-radius: 2px;
    transition: all 0.2s ease-in-out;
}
.pricing_box:hover {
    box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.15);
    transition: all 0.2s ease-in-out;
}
.pricing_top {
    margin-bottom: -35px;
}
.pricing_top i {
    background-color: #f9b707;
    height: 80px;
    width: 80px;
    line-height: 64px;
    font-size: 50px;
    border-radius: 50%;
    text-align: center;
    color: #fff;
    border: 8px solid #ffca3f;
}
.pricing_head h3 {
    text-transform: uppercase;
    font-size: 14px;
    color: #555;
}
.pricing_head h2 {
    background-color: rgba(249,183,7,.9);
    color: #fff;
    display: inline-block;
    padding: 10px;
    font-size: 17px;
    font-weight: 100;
    border-radius: 2px;
    width: 100%;
    text-align: center;
}
.pricing_head h2 span {
    font-size: 14px;
}
.pricing_box ul li {
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 10px;
    list-style: none;
}

.button_1 {
    width: 100%;
    background: radial-gradient(gold, gold);
    color: #fff;
    line-height: 45px;
    display: inline-block;
    padding: 0 25px;
    border-radius: 3px;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 12px;
}

.pricing_mid {
  padding: 10px 0px 0px 0px
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
            <a href="packages.php" class="nav-link active">
             <i class="nav-icon fas icofont-money"></i>
              <p>
                Investment Plans
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="fund_account.php" class="nav-link">
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
            <h1>Investment Plans</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Packages</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Choose a plan</h3>
              </div>
                <p style="color: green; font-weight: bold; margin: 8px 10px">NOTE: Please click the radio button to choose any of the plans and click "Add".</p>
              <form action="../controller/select_plan.php" method="get">
              <?php
                      if (isset($_SESSION['plan_alert'])) {
                        echo $_SESSION['plan_alert'];
                        unset ($_SESSION['plan_alert']);
                      }
                  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mt-4">
<div class="col-lg-3 col-sm-6 sm-padding">
<div class="pricing_wrapper" style="text-align: center">
<div class="pricing_top">
<i style="border: solid 8px #007bff; background: radial-gradient(#007bff, transparent);" class="fa fa-bitcoin"></i>
</div>
<div class="pricing_box">
<div class="pricing_head">
<h3>Mini Package Plan</h3>
<h2 style="background: radial-gradient(#007bff, #007bff);"><b>$500 — $3,000</b></h2>
</div>
<ul class="pricing_mid">
<li><b>33% ROI</b></li><!-- 
<li><b>Deposit: Back after 7 Days</b></li>
<li><b>Duration: Daily for 7 Days</b></li> -->
</ul>
<div class="pricing_footer">
  <input type="radio" class="custom-control-input" id="last" name="plan" value="Mini Plan"> 
<label class="custom-control-label invest_now" for="last"><b>Choose Package</b></label>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 sm-padding">
<div class="pricing_wrapper" style="text-align: center">
<div class="pricing_top">
<i style="border: solid 8px silver; background: radial-gradient(silver, transparent);"  class="fa fa-bitcoin"></i>
</div>
<div class="pricing_box">
<div class="pricing_head">
<h3>Silva Package Plan</h3>
<h2 style="background: radial-gradient(silver, silver)"><b>$3, 200 — $7,000</b></h2>
</div>
<ul class="pricing_mid">
<li><b>44% ROI</b></li><!-- 
<li><b>Deposit: Back after 7 Days</b></li>
<li><b>Duration: Daily for 7 Days</b></li> -->
</ul>
<div class="pricing_footer">
  <input type="radio" class="custom-control-input" id="last2" name="plan" value="Silva Plan"> 
<label class="custom-control-label invest_now2" for="last2"><b>Choose Package</b></label>
</div>
</div>
</div>
</div>


<div class="col-lg-3 col-sm-6 sm-padding">
<div class="pricing_wrapper" style="text-align: center">
<div class="pricing_top">
<i style="background: radial-gradient(gold, transparent); border: solid 8px gold" class="fa fa-bitcoin"></i>
 </div>
<div class="pricing_box">
<div class="pricing_head">
<h3>Gold Package Plan</h3>
<h2 style="background: radial-gradient(gold, gold);"><b>$7,200 - $20,000</b></h2>
</div>
<ul class="pricing_mid">
<li><b>66% ROI</b></li><!-- 
<li><b>Deposit: Back after 7 Days</b></li>
<li><b>Duration: Daily for 7 Days</b></li> -->
</ul>
<div class="pricing_footer">
 <input type="radio" class="custom-control-input" id="last3" name="plan" value="Gold Plan"> 
<label class="custom-control-label invest_now3" for="last3"><b>Choose Package</b></label>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 sm-padding">
<div class="pricing_wrapper" style="text-align: center">
<div class="pricing_top">
<i style="background: radial-gradient(#5ad65a, transparent); border: solid 8px #5ad65a" class="fa fa-bitcoin"></i>
</div>
<div class="pricing_box">
<div class="pricing_head">
<h3>Platinum Package plan</h3>
<h2 style="background: radial-gradient(#5ad65a, #5ad65a)"><b>$20,200 - $100,000</b></h2>
</div>
<ul class="pricing_mid">
<li><b>88% ROI</b></li>
</ul>
<div class="pricing_footer">
  <input type="radio" class="custom-control-input" id="last4" name="plan" value="Platinum Plan"> 
<label class="custom-control-label invest_now4" for="last4"><b>Choose Package</b></label>
</div>
</div>
</div>
</div>
                  <div class="card-footer" align="center">
                       <button type="submit" class="btn btn-info" style="width: 150px">Add</button>
                  </div>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <footer class="footer_section">
        <div class="container" align="center" style="padding-bottom: 12px; font-size: 10px">
        <div class="copyright" style="text-transform: inherit;">All rights reserved © 2017 <span style="color: gold">Em</span>piretrading Pro</div>
        </div>
    </footer>

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
