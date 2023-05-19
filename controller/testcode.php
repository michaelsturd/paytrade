

<?php
session_start();

function generate_account_id($length) {
	//$character holds the alphanumeric values for the random users' id
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		//$account_id_length holds the string lenghth of $character
		$account_id_length = strlen($characters);
			// initialize $random_id to empty value
			$account_id = '';

			for ($i=0; $i < $length; $i++) { 
				$y = rand(0, $account_id_length-1);
				$random_letters = $characters[$y];
				$account_id .= $random_letters;
			}
			//returns the generated users' id
			return $account_id;
} 


function new_token($tok) {
	//$character holds the alphanumeric values for the random users' id
	$character_code = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		//$account_id_length holds the string lenghth of $character
		$token_length = strlen($character_code);
			// initialize $random_id to empty value
			$token_generated = '';

			for ($i=0; $i < $tok; $i++) { 
				$y = rand(0, $token_length-1);
				$random_token = $character_code[$y];
				$token_generated .= $random_token;
			}
			//returns the generated users' id
			return $token_generated;	
} 


include("connection.php");


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$fullname = $connect->real_escape_string($_POST['name']);
        $email = $connect->real_escape_string($_POST['email']);
        $country = $connect->real_escape_string($_POST['country']);
		$password = $connect->real_escape_string($_POST['password']);
        $cpassword = $connect->real_escape_string($_POST['cpassword']);
        
        $plan = "";
        $phone = "";
        $bank = "";
        $account_name = "";
        $account_number = "";
        $ssn = "";
        $pobox = "";

		$client_id = generate_account_id(6);
		date_default_timezone_set("Africa/Lagos");
        $reg_date = date("Y-m-d h:i:sa");
        
        //validating passwords
		if (empty($password) || strlen($password) < 6 || $password == "" || !isset($password)) {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Please enter at least 6 characters.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;
		}

		if (empty($cpassword) || strlen($cpassword) < 6 || $cpassword == "" || !isset($cpassword)) {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Please enter at least 6 characters.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;
		}

		

		//validating firstname
		if (!preg_match("/^[a-z A-Z]*$/", $fullname) || is_numeric($fullname) || strlen($fullname) < 3 || $fullname == "" || empty($fullname) || !isset($fullname)){

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Name should be at least 3 letters.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;
		}


		//validating email address
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Please enter a valid email address.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;			
		}


		if ($password !== $cpassword) {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Passwords do not match!</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;	

		} else {

		$emailQuery = "SELECT * FROM `members` WHERE email= '$email'";

		$result = $connect->query($emailQuery);
		$userCount = $result->num_rows;

		if ($userCount > 0) {


				$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Email already exist!</p>";

				echo"<script>
					window.history.back();
				</script>"; 
				return;
			
		} else {

			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $token_generated = new_token(12);
			$status = 0;

            $sql = "INSERT INTO `members` (`account_id`, `name`, `email`, `phone`, `plan`, `country`, `bank`, `account_name`, `account_number`, `ssn`, `pobox`, `token`, `status`, `date`, `password`) 
            
            VALUES ('$client_id', '$fullname', '$email', '$phone', '$plan', '$country', '$bank', '$account_name', '$account_number', '$ssn', '$pobox', '$token_generated', '$status', '$reg_date', '$hashed_password')";
            
            $run_sql = $connect->query($sql);

			if ($run_sql == TRUE) {

				$_SESSION['reg_name'] = $fullname;
				$_SESSION['reg_email'] = $email;
                $_SESSION['reg_client_id'] = $client_id;
                
             $_SESSION['reg_token'] = "controller/email_verification.php?token=$token_generated";
			 echo "<script>alert('You registration was successful)</script>";
			 header('location: ../email.php');
				
				// require_once "../PHPMailer/PHPMailerAutoload.php";

				//PHPMailer Object
				// $mail = new PHPMailer;

				//Enable SMTP debugging. 
				// $mail->SMTPDebug = 0;                               
				//Set PHPMailer to use SMTP.
				// $mail->isSMTP();            
				//Set SMTP host name                          
				// $mail->Host = "iqoptionsforex.com";
				//Set this to true if SMTP host requires authentication to send email
				// $mail->SMTPAuth = true;                          
				//Provide username and password     
				// $mail->Username = "noreply@iqoptionsforex.com";                 
				// $mail->Password = "blessjah4life@@$$";                           
				//If SMTP requires TLS encryption then set it
				// $mail->SMTPSecure = "ssl";                           
				//Set TCP port to connect to 
				// $mail->Port = 465;                                   

				// $mail->From = "noreply@iqoptionsforex.com";
				// $mail->FromName = "Iqoption Forex";

				//To address and name
          		// $mail->addAddress($email,$fullname);

				// $mail->isHTML(true);

				// $mail->Subject = "Email Verification";

				// ob_start();
				// Include a file here or insert the code that generate the HTML
				// Example
				// include('../email.php');

				// $body = ob_get_contents();
				// ob_end_clean();

				// $mail->Body = $body;


				// if($mail->send()){

    				// header("location: ../successful_reg.php");
				// return;
// }else{
//     echo 'Verification link could not be sent to your email.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// }
				
			} else {
                $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Your registration failed! Please retry.</p>";
                echo"<script>
					window.history.back();
				</script>"; 
				return;
			}
		}
    }

} else {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Server Error!</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;

        }




  ?>