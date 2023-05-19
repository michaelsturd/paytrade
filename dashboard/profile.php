<?php
  session_start();

  if (!isset($_SESSION['account_id'])) {
    header('location: ../access/login.php');
    die();
  }

  include("../controller/update.php");
                           
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbaord | <?php echo $_SESSION['name'] ?></title>

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
            <a href="profile.php" class="nav-link active">
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
            <h1>My Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        
        <div class="col-12 col-lg-12">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"><i class="icofont-ui-user"></i> Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false"><i class="icofont-ui-settings"></i> Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="true"><i class="icofont-contact-add"></i> Update Details</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                     <div class="row">
                        <div class="col-lg-6">

                          <!-- Profile Image -->
                          <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                              <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="images/user.png" alt="User profile picture">
                              </div>

                              <h3 class="profile-username text-center"><?php echo $_SESSION['name'] ?></h3>

                              <p class="text-muted text-center"><b><?php echo $_SESSION['account_id'] ?></b></p>

                              <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                  <b>Available Balance (USD)</b> <a class="float-right">$ <?php echo $_SESSION['balance'] ?>.00</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Total Profits (USD)</b> <a class="float-right">$ <?php echo $_SESSION['profit'] ?>.00</a>
                                </li>
                                <li class="list-group-item">
                                  <b>Capital Amount (USD)</b> <a class="float-right">$ <?php echo $_SESSION['bonus'] ?>.00</a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>

                        <div class="col-lg-6">
                          <!-- About Me Box -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <strong><i class="far icofont-money"></i> Investment Plan</strong>

                              <p class="text-muted">
                              <?php 
                                if ($detail['plan']) {
                                  echo $detail['plan'];
                                } else {
                                  echo "N/A";
                                }
                               ?>
                               </p>

                              <hr>

                              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                              <p class="text-muted">
                              <?php
                                if ($_SESSION['country']) {
                                  echo $_SESSION['country'];
                                } else {
                                  echo "N/A";
                                }
                              ?>
                              </p>

                              <hr>

                              <strong><i class="fas icofont-phone"></i> Phone</strong>

                              <p class="text-muted">
                              <?php
                                if ($detail['phone']) {
                                  echo $detail['phone'];
                                } else {
                                  echo "N/A";
                                }
                              ?>
                              </p>

                              <hr>

                              <strong><i class="fas fa-envelope"></i> Email</strong>

                              <p class="text-muted">
                              <?php 
                              if ($_SESSION['email']) {
                                  echo $_SESSION['email'];
                                } else {
                                  echo "N/A";
                                }
                                ?>
                              </p>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade active show" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                  <?php 
		                      if (isset($_SESSION['db_alert'])){
		                        echo ($_SESSION['db_alert']);
		                        unset($_SESSION['db_alert']);
		                    } 
		                ?>
                  <form action="../controller/account_update.php" method="post">   
                  <div class="card-body">
                    <p style="color: red"><b>NOTICE:</b> All fields here are very important, please fill appropriately.</p>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="exampleInputEmail1">Fullname</label><span style="color: red">*</span>
                        <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" placeholder="Enter fullname" required>
                      </div>

                      <div class="col-sm-6">
                        <label for="exampleInputPassword1">Phone</label><span style="color: red">*</span>
                        <input type="number" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-4">
                        <label for="exampleInputPassword1">Account Name</label><span style="color: red">*</span>
                        <input type="text" name="account_name" class="form-control" id="exampleInputPassword1" placeholder="Account" required>
                      </div>

                      <div class="col-sm-4">
                        <label for="exampleInputPassword1">Bank Name</label><span style="color: red">*</span>
                        <input type="text" name="bank" class="form-control" id="exampleInputPassword1" placeholder="Bank" required>
                      </div>

                      <div class="col-sm-4">
                        <label for="exampleInputPassword1">Account Number</label><span style="color: red">*</span>
                        <input type="number" name="account_number" class="form-control" id="exampleInputPassword1" placeholder="Account Number" required>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" value="form" class="btn btn-primary">Update Now</button>
                    </div>
                  </div>
                </form> 
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <?php 
		                      if (isset($_SESSION['reset_alert'])){
		                        echo ($_SESSION['reset_alert']);
		                        unset($_SESSION['reset_alert']);
		                    } 
		                ?>
                     <div class="card-body">
                  <p style="color: #17a2b8">Reset your password</p>
                  <div class="row">
                  <div class="col-lg-6">
                  <form action="../controller/reset_password.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">New Password</label>
                    <input type="text" name="new_password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm password">
                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" style="width: 100%">Reset</button>
                  </div>
                  </form>
                </div>
                </div>
              </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        
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
