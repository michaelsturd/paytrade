<?php  
session_start();

include("connection.php");

// LOGIN
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $connect->real_escape_string($_POST['email']);
    $password = $connect->real_escape_string($_POST['password']);

    if (empty($_POST['email'])) {

        $_SESSION['alertMsg'] = "<p style='color: orange; font-size: 14.5px; text-transform: none'>Please enter email.</p>";
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
    }

    if (empty($_POST['password'])) {
        $_SESSION['alertMsg'] = "<p style='color: orange; font-size: 14.5px; text-transform: none'>Please enter password.</p>";
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
    }

    $sql ="SELECT * FROM `admin` WHERE `email` = '$email'";
    
    $userdb=$connect->query($sql);//run the sql

 if($userdb and $userdb->num_rows > 0) {
    $user = $userdb->fetch_assoc();//fetch the data from the sql reply (it's an object)
 
    if (password_verify($password, $user['password'])){

        $_SESSION['id'] = $user['id'];
        $_SESSION['admin'] = $user['email'];
        $_SESSION['admin_username'] = $user['admin_username'];
         
    
        header("location: ../dashboard/admin_dashboard.php");
    } else{
                $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Invalid Email / Password.</p>";
            echo"<script>
                    window.history.back();
                </script>"; 
                return; 
    
    }   

 } else {

        $query = "SELECT * FROM `members` WHERE `email`= '$email'";
        $result = $connect->query($query);


        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) { // if password matches

                $status = '1';

                if ($user['status'] !== $status) {

                    $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Sorry! Your email has not been verified. Please click the link sent to your email for verification.</p>";
                echo"<script>
                    window.history.back();
                </script>"; 
                return; 

                } else {

                $_SESSION['id'] = $user['id'];
                $_SESSION['account_id'] = $user['account_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['plan'] = $user['plan'];
                $_SESSION['country'] = $user['country'];
                $_SESSION['bank'] = $user['bank'];
                $_SESSION['account_name'] = $user['account_name'];
                $_SESSION['account_number'] = $user['account_number'];
                $_SESSION['ssn'] = $user['ssn'];
                $_SESSION['pobox'] = $user['pobox'];

                header("location: ../dashboard/home.php");
                exit();

    
            } 
            } else {
                $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Invalid Email / Password.</p>";
            echo"<script>
                    window.history.back();
                </script>"; 
                return; 
            }
        } else {
           $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Invalid User detail</p>";
             echo"<script>
                    window.history.back();
                </script>"; 
                return; 
        }
    }
} else {
        $_SESSION['alertMsg'] = "<p style='color: red; font-size: 14.5px; text-transform: none'>Error in from submission.</p>";
            echo"<script>
                    window.history.back();
                </script>"; 
                return; 
}




?>