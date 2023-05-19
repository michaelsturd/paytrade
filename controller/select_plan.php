<?php
    session_start();

    include("connection.php");

    if ($_SERVER['REQUEST_METHOD'] == "GET") {

        $plan = $_GET['plan'];

        $sql = "UPDATE `members` SET `plan`= '$plan' WHERE `account_id` = '".$_SESSION['account_id']."'";
        $run_sql = $connect->query($sql);

        if ($run_sql == TRUE) {
           
            $_SESSION['plan_alert'] = '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Successful!</h5>
            Thanks for chosing '.$plan.'.
          </div>';
            echo"<script>
                    window.history.back();
                </script>";
            exit(0);


        } else {

            $_SESSION['plan_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Could not choose the plan, please try again.
          </div>';
            echo"<script>
                    window.history.back();
                </script>";
            exit(0);
        }
    } else {

        $_SESSION['plan_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Please try again.
          </div>';
            echo"<script>
                    window.history.back();
                </script>";
            exit(0);

    }
?>