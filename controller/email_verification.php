<?php
session_start();

include("connection.php");

if (isset($_GET['token'])) {

    $token = $_GET['token'];

    $sql = "SELECT * FROM members WHERE token='$token' LIMIT 1";

    $result = $connect->query($sql);

    if ($result and $result->num_rows > 0) {

        $user = $result->fetch_assoc();

        $query = "UPDATE members SET status='1' WHERE token='$token'";

        if ($connect->query($query) === TRUE) {

            $sql = "UPDATE members SET token='' WHERE email= '".$_SESSION['reg_email']."'";
            $query = $connect->query($sql);

            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            $_SESSION['alertMsg'] = "<p style='color: green; font-size: 14.5px; text-transform: none'>Your email address has been verified successfully</p>";
            
            header('location: ../access/login.php');
            exit(0);
        }
    } else {
        echo "User not found!";
    }
} else {
    echo "No token provided!";
}