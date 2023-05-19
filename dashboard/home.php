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
  <title>Welcome | <?php echo $_SESSION['name'] ?></title>

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

  <style>
    .small-box h3 {
      font-size: 1.2rem !important;
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
   <!--  <a href="" class="brand-link" style="background-color: #010010">
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
                <a href="home.php" class="nav-link active">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Account Overview</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account Overview</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
        include('../controller/connection.php');

        $sql = "SELECT * FROM `trades` WHERE `client_id` = '".$_SESSION['account_id']."' ORDER BY date DESC ";

        $run_sql = $connect->query($sql);

        if (mysqli_num_rows($run_sql) > 0) {
          $response = "True";
          $detail = $run_sql->fetch_assoc();
          // $row = mysqli_fetch_assoc($run_sql);
          $balance =  $detail['balance'];
          $profit =  $detail['profit'];
          $bonus =  $detail['bonus'];
          $_SESSION['balance'] = $balance;
          $_SESSION['profit'] = $detail['profit'];
          $_SESSION['bonus'] = $detail['bonus'];

          $_SESSION['balance'] = number_format($_SESSION['balance']);
          $_SESSION['profit'] = number_format($_SESSION['profit']);

        }
        else{
          $response = "false";
        }




        
        $sql = "SELECT * FROM `members` WHERE `account_id` = '".$_SESSION['account_id']."' ORDER BY date DESC ";

        $run_sql = $connect->query($sql);

        if (mysqli_num_rows($run_sql) > 0) {
          $response = "True";
          $detail = $run_sql->fetch_assoc();
          // $row = mysqli_fetch_assoc($run_sql);
          $balance =  $detail['available_balance'];
          $_SESSION['name'] = $detail['name'];
          $_SESSION['bank'] = $detail['bank'];
          $_SESSION['email'] = $detail['email'];
          $_SESSION['phone'] = $detail['phone'];
          $_SESSION['available_balance'] = $balance;
          $_SESSION['available_balance'] = number_format($_SESSION['available_balance']);
          

        }
        else{
          $response = "false";
        }
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">
          <div class="col-lg-4 col-12">
            <!-- small card -->
            <div class="small-box bg-info" style="background: url(images/background.jpg);">
              <div class="inner">
                <h3>$ <?php echo $_SESSION['available_balance']; ?>.00</h3>

                <p>Balance</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar"></i>
              </div>
              <a href="fund_account.php" class="small-box-footer">
                Top Up <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-success" style="background: url(images/background2.jpg);">
              <div class="inner" style="color: #4d4d4d">
                <h3>$ <?php echo $_SESSION['profit']; ?>.00</h3>

                <p><b>Profits Earned</b></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">
               <i class="fas"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-warning" style="background: url(images/Payment-of-Bonus-Act.png);">
              <div class="inner">
                <h3>$ <?php echo $_SESSION['bonus']; ?>.00</h3>

                <p><b>Referral Bonus</b></p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="#" class="small-box-footer">
                <i class="fas"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Live Trade Chart - <?php echo $_SESSION['account_id']. " ".$response;?></h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="padding: 0.5rem">
                <div class="row">
                        <div class="card-body" style="height: 500px; padding: 0px">
                            <iframe id="tradingview_e00af" src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_e00af&amp;symbol=FX%3AEURUSD&amp;interval=1&amp;range=ytd&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;details=1&amp;studies=CCI%40tv-basicstudies&amp;theme=Dark&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;locale=en&amp;utm_source=circlelivetrade.com&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;" frameborder="0" allowtransparency="true" scrolling="no" allowfullscreen=""></iframe>
                    </div>            

                  </div>

              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Live Market Prices</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="padding: 0.5rem">
                <div class="row">
                        <div class="card-body" style="height: 500px; padding: 0px">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/market-quotes/?locale=en#%7B%22width%22%3A770%2C%22height%22%3A450%2C%22symbolsGroups%22%3A%5B%7B%22originalName%22%3A%22Indices%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22COINBASE%3ABTCUSD%22%7D%2C%7B%22name%22%3A%22BITFINEX%3ABTCEUR%22%7D%2C%7B%22name%22%3A%22BITFINEX%3AAUCUSD%22%7D%2C%7B%22name%22%3A%22BITFINEX%3ABTCJPY%22%7D%2C%7B%22name%22%3A%22BITMEX%3AXBT%22%7D%2C%7B%22name%22%3A%22KRAKEN%3ALTCUSD%22%7D%2C%7B%22name%22%3A%22COINBASE%3ALTCEUR%22%7D%2C%7B%22name%22%3A%22COINBASE%3ALTCBTC%22%7D%5D%2C%22name%22%3A%22CryptoCurrencies%22%7D%2C%7B%22originalName%22%3A%22Commodities%22%2C%22symbols%22%3A%5B%7B%22displayName%22%3A%22E-Mini%20S%26P%22%2C%22name%22%3A%22CME_MINI%3AES1!%22%7D%2C%7B%22displayName%22%3A%22Euro%22%2C%22name%22%3A%22CME%3AE61!%22%7D%2C%7B%22displayName%22%3A%22Gold%22%2C%22name%22%3A%22COMEX%3AGC1!%22%7D%2C%7B%22displayName%22%3A%22Crude%20Oil%22%2C%22name%22%3A%22NYMEX%3ACL1!%22%7D%2C%7B%22displayName%22%3A%22Natural%20Gas%22%2C%22name%22%3A%22NYMEX%3ANG1!%22%7D%2C%7B%22displayName%22%3A%22Corn%22%2C%22name%22%3A%22CBOT%3AZC1!%22%7D%5D%2C%22name%22%3A%22Commodities%22%7D%2C%7B%22originalName%22%3A%22Bonds%22%2C%22symbols%22%3A%5B%7B%22displayName%22%3A%22Eurodollar%22%2C%22name%22%3A%22CME%3AGE1!%22%7D%2C%7B%22displayName%22%3A%22T-Bond%22%2C%22name%22%3A%22CBOT%3AZB1!%22%7D%2C%7B%22displayName%22%3A%22Ultra%20T-Bond%22%2C%22name%22%3A%22CBOT%3AUD1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20Bund%22%2C%22name%22%3A%22EUREX%3AGG1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20BTP%22%2C%22name%22%3A%22EUREX%3AII1!%22%7D%2C%7B%22displayName%22%3A%22Euro%20BOBL%22%2C%22name%22%3A%22EUREX%3AHR1!%22%7D%5D%2C%22name%22%3A%22Bonds%22%7D%2C%7B%22originalName%22%3A%22Forex%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22name%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22name%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22name%22%3A%22FX%3AUSDCAD%22%7D%5D%2C%22name%22%3A%22Forex%22%7D%2C%7B%22name%22%3A%22Stocks%22%2C%22symbols%22%3A%5B%7B%22name%22%3A%22NASDAQ%3AAAPL%22%7D%2C%7B%22name%22%3A%22NASDAQ%3AFB%22%7D%2C%7B%22name%22%3A%22NSE%3AONGC%22%7D%2C%7B%22name%22%3A%22NYSE%3ABABA%22%7D%2C%7B%22name%22%3A%22XETR%3AAMZ%22%7D%5D%7D%5D%2C%22utm_source%22%3A%2224onlinecryptotrade.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-quotes%22%7D" style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;"></iframe>
                    </div>            

                  </div>

              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
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
