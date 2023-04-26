<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){ 
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'"); //Searching the user in the database
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password); // Encrypting password
            $enc_pass = $row['password']; // Matching encrypted password
            if($user_pass === $enc_pass){
                $status = "Online";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE uniqueId = {$row['uniqueId']}");
                if($sql2){
                    $_SESSION['uniqueId'] = $row['uniqueId']; //Setting session variable
                    echo "success";

                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "This email does not exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>