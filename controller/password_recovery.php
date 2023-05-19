<?php
session_start();

function generate_reference_number($length) {
	//$character holds the alphanumeric values for the random users' id
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		//$transaction_ref_length holds the string lenghth of $character
		$reference_number_length = strlen($characters);
			// initialize $random_id to empty value
			$reference_number = '';

			for ($i=0; $i < $length; $i++) { 
				$y = rand(0, $reference_number_length-1);
				$random_letters = $characters[$y];
				$reference_number .= $random_letters;
			}
			//returns the generated users' id
			return $reference_number;
}

include("connection.php");

if (isset($_GET['token'])) {

	$reference_number = generate_reference_number(8);

    $token = $_GET['token'];

    $sql = "SELECT * FROM members WHERE email='".$_SESSION['email']."'";

    $result = $connect->query($sql);

    if ($result and $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        $hashed_password = password_hash($reference_number, PASSWORD_DEFAULT);

        $query = "UPDATE members SET password='$hashed_password' WHERE token='$token'";

        if ($connect->query($query) === TRUE) {

        	$sql = "UPDATE members SET token='' WHERE token='$token'";

            $query = $connect->query($sql);

            $_SESSION['id'] = $user['id'];
            $_SESSION['fullname'] = $user['name'];
            $_SESSION['email'] = $user['email'];


            var_dump($user);
            return;

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
          		$mail->addAddress($_SESSION['email'], $user['name']);

				$mail->isHTML(true);

				$mail->Subject = "Reset Password";

				ob_start();
				// Include a file here or insert the code that generate the HTML
				// Example
				include('../recovery_email.php');

				$body = ob_get_contents();
				ob_end_clean();

				$mail->Body = $body;

				if($mail->send()){

				$_SESSION['alertMsg'] = "<p style='color: green; font-size: 15px'>Please login with the password sent to your email.</p>";

    				header("location: ../access/login.php");
				return;
}else{
    echo 'New password could not be sent to your email.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}     
    } else {
        echo "User not found!";
    }
} else {
    echo "No token provided!";
}
}

?>