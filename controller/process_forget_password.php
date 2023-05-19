<?php
session_start();


 
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
	
		$email_account = $connect->real_escape_string($_POST['email']);
		$token_generated = new_token(15)

		//validating email address
		if (!filter_var($email_account, FILTER_VALIDATE_EMAIL)) {

			$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Please enter a valid email address.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;			
		}


		$sql = "SELECT * FROM `members` WHERE email='$email_account'";

			$run_sql = $connect->query($sql);

              $row = mysqli_num_rows($run_sql);

              if ($row > 0) {

              	$result = $run_sql->fetch_assoc();

                    $recovered_email = $result['email'];
                    $recovered_name = $result['name'];
                    $_SESSION['name'] = $recovered_name;
                    $_SESSION['email'] = $recovered_email;
                    $_SESSION['token'] = $token_generated;

                $sql = "UPDATE members SET token='$reference_number' WHERE email='$email_account'";
            	$query = $connect->query($sql);

            	if ($query === TRUE) {
            		
                require_once "../PHPMailer/PHPMailerAutoload.php";

				//PHPMailer Object
				$mail = new PHPMailer;

				//Enable SMTP debugging. 
				$mail->SMTPDebug = 0;                               
				//Set PHPMailer to use SMTP.
				$mail->isSMTP();            
				//Set SMTP host name                          
				$mail->Host = "empiretradingpro.com";
				//Set this to true if SMTP host requires authentication to send email
				$mail->SMTPAuth = true;                          
				//Provide username and password     
				$mail->Username = "noreply@empiretradingpro.com";                 
				$mail->Password = "empiretradingpro@@$$";                           
				//If SMTP requires TLS encryption then set it
				$mail->SMTPSecure = "ssl";                           
				//Set TCP port to connect to 
				$mail->Port = 465;                                   

				$mail->From = "noreply@empiretradingpro.com";
				$mail->FromName = "Empiretrading Pro";

				//To address and name
          		$mail->addAddress($email_account, $_SESSION['name']);

				$mail->isHTML(true);

				$mail->Subject = "Password Recovery Request";

				ob_start();
				// Include a file here or insert the code that generate the HTML
				// Example
				include('../reset_email.php');

				$body = ob_get_contents();
				ob_end_clean();

				$mail->Body = $body;

				if($mail->send()){

    				header("location: ../success_recovery.php");
				return;
}else{
    echo 'Verification link could not be sent to your email.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
            	} else {
            		$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Could not update token!.</p>";

				echo"<script>
					window.history.back();
				</script>"; 
				return;
            	}

              } else {

              	$_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Invalid email account.</p>";

				echo"<script>
					window.history.back();
				</script>"; 
				return;
              } 
} else {

        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Error in sql query!</p>";
}

}




  ?>