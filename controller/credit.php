<?php
session_start();
include("connection.php");

function transaction_ref($length) {
	//$character holds the alphanumeric values for the random users' id
	$characters = '0123456789';
		//$reference_num_length holds the string lenghth of $character
		$reference_num_length = strlen($characters);
			// initialize $random_id to empty value
			$reference_num = '';

			for ($i=0; $i < $length; $i++) { 
				$y = rand(0, $reference_num_length-1);
				$random_letters = $characters[$y];
				$reference_num .= $random_letters;
			}
			//returns the generated users' id
			return $reference_num;
} 

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $client_id = $_POST['client_id'];
    $client_balance = $_POST['client_balance'];
    $client_profit = $_POST['client_profit'];
    $client_bonus = $_POST['client_bonus'];
    $status = $_POST['status'];
    date_default_timezone_set("Africa/Lagos");
    $date = date("Y-m-d h:i:sa");
    $reference = transaction_ref(12);

    if (!isset($client_id) || empty($client_id) || strlen($client_id) < 6) {
        $_SESSION['withdrawal_alert'] = "<p style='color: red; margin-left: 8px'>Please enter a valid Account ID</p>";
        echo"<script>
                window.history.back();
            </script>";
        exit(0);
    }

    if (!isset($client_balance) || empty($client_balance)) {
        $_SESSION['withdrawal_alert'] = "<p style='color: red; margin-left: 8px'>Please enter balance amount.</p>";
        echo"<script>
                window.history.back();
            </script>";
        exit(0);
    }

    if (!isset($client_profit) || empty($client_profit)) {
        $_SESSION['withdrawal_alert'] = "<p style='color: red; margin-left: 8px'>Please enter profit.</p>";
        echo"<script>
                window.history.back();
            </script>";
        exit(0);
    }

    if (!isset($client_bonus) || empty($client_bonus)) {
        $_SESSION['withdrawal_alert'] = "<p style='color: red; margin-left: 8px'>Please enter bonus.</p>";
        echo"<script>
                window.history.back();
            </script>";
        exit(0);
    }
     

    $sql = "INSERT INTO `trades`(`date`, `transact_id`, `client_id`, `status`, `balance`, `profit`, `bonus`) VALUES ('$date', '$reference', '$client_id', 
    '$status', '$client_balance', '$client_profit', '$client_bonus')";

    
$update = "UPDATE members SET available_balance = '$client_balance' WHERE account_id = '$client_id'";
$run_update = mysqli_query($connect, $update);

    $run_sql = $connect->query($sql);

    if ($run_sql == TRUE) {

        $_SESSION['withdrawal_alert'] = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Successful!</h5>
        Your client account has been credited.
      </div>';
        echo"<script>
                window.history.back();
            </script>";
        exit(0);

    } else {

        $_SESSION['withdrawal_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Please try again.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

    }

} else {

    $_SESSION['withdrawal_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Transaction could not be completed. Please try again.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

}
?>