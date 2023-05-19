<?php
    session_start();
    include('connection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $connect->real_escape_string($_POST['fullname']);
        $phone = $connect->real_escape_string($_POST['phone']);
        $account_name = $connect->real_escape_string($_POST['account_name']);
        $account_number = $connect->real_escape_string($_POST['account_number']);
        $bank = $connect->real_escape_string($_POST['bank']);

        $sql = "UPDATE `members`
                    SET `name`= '$name',
                        `phone`= '$phone',
                        `bank`= '$bank',
                        `account_name`= '$account_name',
                        `account_number`= '$account_number'
                    WHERE `account_id`= '".$_SESSION['account_id']."'";

        $run_sql = $connect->query($sql);

        if ($run_sql == TRUE) {

            $_SESSION['db_alert'] = '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Successful!</h5>
            Profile now updated.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;

        } else {

          $_SESSION['db_alert'] = '<div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Failed!</h5>
          Please try again.
        </div>';
          echo"<script>
                  window.history.back();
              </script>"; 
              return;
          
        }
    } else {

          $_SESSION['db_alert'] = '<div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-ban"></i> Failed!</h5>
          Error in database connection.
        </div>';
          echo"<script>
                  window.history.back();
              </script>"; 
              return;

    }
?>