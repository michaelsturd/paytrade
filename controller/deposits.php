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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $account_id = $_POST['account_id'];
    $amount = $_POST['amount'];
    $type = "Deposit";
    date_default_timezone_set("Africa/Lagos");
    $date = date("Y-m-d h:i:sa");
    $reference = transaction_ref(12);
     

    $sql = "INSERT INTO `withrawals`(`name`, `email`, `phone`, `bank`, `account`, `number`, `account_id`, `amount`, `type`, `date`, `transact_id`, `status`) VALUES ('$name', '$email', '$phone', '', '', '', '$account_id', '$amount', '$type', '$date', '$reference', 'sent')";

    $run_sql = $connect->query($sql);

    if ($run_sql == TRUE) {

        $_SESSION['deposit_alert'] = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Successful!</h5>
        Please copy the wallet address and complete your deposit. Your account will be credited shortly after confirmation.
      </div>';
        echo"<script>
                window.history.back();
            </script>";
        exit(0);

    } else {

        $_SESSION['deposit_alert'] = '<div class="alert alert-danger alert-dismissible">
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

    $_SESSION['deposit_alert'] = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i> Failed!</h5>
            Request could not be executed.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

}
?>