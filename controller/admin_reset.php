<?php
session_start();
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_password = $connect->real_escape_string($_POST['new_password']);
    $confirm_password = $connect->real_escape_string($_POST['cpassword']);
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    if ($new_password !== $confirm_password) {

        $_SESSION['reset_alert'] = '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Failed!</h5>
        Passwords do not match.
      </div>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

    } else {

        $sql = "UPDATE `admin` SET `password`= '$hashed_password'  WHERE `email` = 'support@empiretradingpro.com'";

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