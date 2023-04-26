<?php
    session_start();
    include_once "config.php"; // Importing database connection

    $username = mysqli_real_escape_string($conn, $_POST['username']); // To escape special characters in a string
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($username) && !empty($email) && !empty($password)){ // Checking if user fields are not empty
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //Validating the email
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'"); //Checking if the email already exist
            if(mysqli_num_rows($sql) > 0){
                echo "This email already exist!";
            }else{
                if(isset($_FILES['avatar'])){ //Checking if user uploded a file
                    $img_name = $_FILES['avatar']['name'];
                    $img_type = $_FILES['avatar']['type'];
                    $tmp_name = $_FILES['avatar']['tmp_name']; //It will be used to save the file in a folder
                    
                    $img_explode = explode('.',$img_name); //Getting the extensions of the  file
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"]; // Application will only support files of this format

                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"]; 
                        if(in_array($img_type, $types) === true){ // If the file given is of right type
                            $time = time(); // This will be used to name the file
                            $new_img_name = $time.$img_name; // So that every file user uploads will be unique even if it is same image
                            if(move_uploaded_file($tmp_name,"avatars/".$new_img_name)){
                                $ran_id = rand(time(), 100000000); // Creating random user Id 
                                $status = "Online"; //When user signed up status will be online
                                $encrypt_pass = md5($password); //Encrypting the password cannot save plain password
                                $insert_query = mysqli_query($conn, "INSERT INTO users (uniqueId, username, email, password, avatar, status)
                                VALUES ({$ran_id}, '{$username}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')"); // Everything is okay inserting data
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'"); //Finding recently inserted data for creating session variable
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['uniqueId'] = $result['uniqueId'];
                                        echo "success";
                                    }else{
                                        echo "This email address not Exist!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "This is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>