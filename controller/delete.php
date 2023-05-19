<?php  
session_start();

include("connection.php");

	if ($_POST['submit'] == "remove_member") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `members` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}

	if ($_POST['submit'] == "remove_history") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `withrawals` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}

	if ($_POST['submit'] == "remove") {
	
        $id = $_POST['id'];

            $sql = "DELETE FROM `trades` WHERE `id` = '$id'";
            
			$query = $connect->query($sql);
			
			echo'<script>
				window.history.back();
			</script>';

	}

	if ($_POST['submit'] == "approve") {
	
        $transact_id = $_POST['transaction'];

            $sql = "UPDATE `withrawals` SET `status`= 'Approved' WHERE `transact_id` = '$transact_id'";
            
			$query = $connect->query($sql);

       if ($query == TRUE) {

            $_SESSION['approval'] = '<p style="color: green; font-size: 20px">Transaction has been approved!</p>';
        echo"<script>
                window.history.back();
            </script>"; 
            return;

        } else {

            $_SESSION['approval'] = '<p style="color: red; font-size: 20px">Approval Failed!</p>';
            echo"<script>
                    window.history.back();
                </script>"; 
                return;
        }
  }

	?>