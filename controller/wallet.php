<?php
session_start();

include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $wallet = $_POST['wallet'];

    if (!$wallet) {

        $_SESSION['reset_alert'] = '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Failed!</h5>
        Please enter a wallet address.
      </div>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

    } else {

        $sql = "UPDATE `admin` SET `wallet`= '$wallet'  WHERE `email` = 'support@empiretradingpro.com'";

        $run_sql = $connect->query($sql);

        if ($run_sql == TRUE) {

            $_SESSION['reset_alert'] = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Successful!</h5>
        Your password has been reset.
      </div>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['reset_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Database could not be updated.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }

        
    }

} else {

    $_SESSION['reset_alert'] = '<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i> Failed!</h5>
    Error in system, please try again.
  </div>';
    echo"<script>
            window.history.back();
        </script>"; 
        return;
    
}
?>
