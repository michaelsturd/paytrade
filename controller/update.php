<?php
include('../controller/connection.php');

$sql = "SELECT * FROM `members` WHERE `id` = '".$_SESSION['id']."'";

$run_sql = $connect->query($sql);

if ($run_sql->num_rows > 0) {

  $detail = $run_sql->fetch_assoc();
  
  $plan = $detail['plan'];
  $_SESSION['phone'] = $detail['phone'];
  $_SESSION['name'] = $detail['name'];
  $_SESSION['ac_name'] = $detail['account_name'];
  $_SESSION['ac_number'] = $detail['account_number'];
  $_SESSION['ac_bank'] = $detail['bank'];

} 
?>