<?php
session_start();
if(!isset($_SESSION['uniqueId'])) { //This variable will be true if user is logged in and session variable is set else user will be redirected to login page
 
    header("location: signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/users.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Chat App</title>
</head>
<body>
    
    <div class="user-list">

    <?php
    include_once "php/config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE uniqueId = '{$_SESSION['uniqueId']}'"); //Searching the user 

        if(mysqli_num_rows($sql)> 0) { 
            $row = mysqli_fetch_assoc($sql);

        }

    ?>

        <div class="user-list-container">
            <div class="user-left">

                <div class="user-info">
                    <div class="user-image">
                        <img src="php/avatars/<?php echo $row['avatar'];?>" alt="User Image">
                    </div>
                    <div class="user-name">
                        <h4><?php echo $row['username']; ?></h4>
                        <p> 
                            <?php 
                           if($row['status'] == 'Online') {
                            echo $row['status']. "<i class='bx bxs-circle Online'></i>";
                           }

                           else {
                            echo $row['status'] . "<i class='bx bxs-circle'></i>";
                           }
                            ?>

                        </p>
                    </div>
                </div>

                <header>
                 <div class="search-bar">
                    <input type="search" placeholder="Search your friend...">
                    <button><i class='bx bx-search'></i></button>
                 </div>
            </header>

            <div class="user-controlls">
                    <div class="user-controll">
                        <a href="php/signout.php?signout_id=<?php echo $row['uniqueId'];?>">Sign Out</a>
                    </div>
                </div>
            </div>

        <div class="user-right">
        </div>
        </div>
    </div>

<script src="js/users.js"></script>
</body>
</html>