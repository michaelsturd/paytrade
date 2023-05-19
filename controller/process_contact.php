<?php
session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		
		//validating name
		if (!preg_match("/^[a-z A-Z]*$/", $name) || is_numeric($name) || strlen($name) < 3 || $name == "" || empty($name) || !isset($name)){

			$_SESSION['contactMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Name requires at least 3 letters.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;
		}


		//validating email address
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$_SESSION['contactMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Please enter a valid email address.</p>";
			echo"<script>
					window.history.back();
				</script>"; 
				return;			
		}

				require_once "../PHPMailer/PHPMailerAutoload.php";

				//PHPMailer Object
				$mail = new PHPMailer;

				

				//From email address and name
				$mail->From = $email;
				$mail->FromName = $name;

				//To address and name
			  	$mail->addAddress("info@empiretradingpro.com", "Empiretrading Pro");
				// $mail->addAddress($email); //Recipient name is optional

				$mail->addCC('support@empiretradingpro.com', 'Empiretrading Pro');

				//Address to which recipient will reply
				$mail->addReplyTo($email, $name);

				// $mail->addAttachment("../assets/img/FEM logo tryB.png");

				//Send HTML or Plain Text email
				$mail->isHTML(true);

				$mail->Subject = $subject;
				$mail->Body = $message;

				if($mail->send()){

					$_SESSION['contactMsg'] = "<p style='color: green; font-size: 14.5px; text-transform: none'>Your message has been recieved, you'll get a response from us shortly. Thank you!</p>";
    				echo"<script>
                    window.history.back();
                </script>"; 
                return;
}else{
    $_SESSION['contactMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Message not sent! Please try again.</p>";
    		echo"<script>
                    window.history.back();
                </script>"; 
                return;		
}


}

  ?>