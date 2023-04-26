<?php

session_start();

if(isset($_SESSION['uniqueId'])) { //If user is logged in come to this page otherwise goes to login page

    include_once "config.php";
    $signout_id = mysqli_real_escape_string($conn, $_GET['signout_id']);

    if (isset($signout_id)) { // If signout is set 
        $status = "Offline";
        $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE uniqueId = {$signout_id}");
        echo "exexuted";

        if($sql) {
          
           
            session_destroy();
            session_unset();

            header("location: ../signin.php");
        }
        
   }

   else {
   header("location: ../users.php");

 }

} 

  else {
     echo "done";
      header("location: ../signin.php");
  }
?>