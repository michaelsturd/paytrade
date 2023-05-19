<?php
session_start();
session_destroy();
header("location: ../access/login.php");
exit(0);
?>