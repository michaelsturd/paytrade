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
    $bank = $_POST['bank'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];
    $reference_num = $_POST['account_id'];
    $amount = $_POST['amount'];
    $type = "Withdrawal";
    date_default_timezone_set("Africa/Lagos");
    $date = date("Y-m-d h:i:sa");
    $reference = transaction_ref(12);
     

    $sql = "INSERT INTO `withrawals`(`name`, `email`, `phone`, `bank`, `account`, `number`, `account_id`, `amount`, `type`, `date`, `transact_id`, `status`) VALUES ('$name', '$email', '$phone', '$bank', '$account_name', '$account_number', '$reference_num', '$amount', '$type', '$date', '$reference', 'sent')";


    $run_sql = $connect->query($sql);

    if ($run_sql == TRUE) {

      $select = "SELECT * FROM members WHERE account_id = '".$_SESSION['account_id']."'";
      $runSeletct = mysqli_query($connect, $select);
      if ($runSeletct == TRUE) {

          $rw = mysqli_fetch_assoc($runSeletct);
          $available_balance = $rw['available_balance'];
          $new_balance = $available_balance - $amount;
          $update = "UPDATE members SET available_balance = '$new_balance' WHERE account_id = '".$_SESSION['account_id']."'";
          $run_update = mysqli_query($connect, $update);
          if ($run_update == TRUE) {
            $rep = "balance updated";
            $_SESSION['rep'] = $rep;
          }else{
            $rep = "balance not updated";
            $_SESSION['rep'] = $rep;
          }

      }
        $_SESSION['withdrawal_alert'] = '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Successful!</h5>
        Your withdrawal will be approved shortly.
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
            Request could not be executed.
          </div>';
            echo"<script>
                    window.history.back();
                </script>"; 
                exit(0);

}
?>