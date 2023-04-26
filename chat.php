<?php
session_start();
include_once "php/config.php";

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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/chat.css">
    <title>Chat App | Chat</title>
</head>
<body>
  
    <div class="chat">

    <?php
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE uniqueId = '{$user_id}'");
    if(mysqli_num_rows($sql)> 0) {
        $row = mysqli_fetch_assoc($sql);
    }

    ?>

        <div class="chat-container">

            <div class="chatting-friend">

                <div class="chatting-friend-info">

                    <div class="chat-back">
                        <a href="users.php"><i class='bx bx-arrow-back'></i></a>
                    </div>


                    <div class="chatting-friend-picture chat-image">
                        <img src="./php/avatars/<?php echo $row['avatar'] ?>" alt="">
                    </div>
                    <div class="chatting-friend-name">
                        <h4><?php echo $row['username'] ?></h4>
                    </div>
                </div>

            </div>

            <div class="chatting-area">

            </div>

            <div class="chatting-typing-area">

            <form  class = "chat-form"  action="#" method="post">

            <!-- This is for sending message sender id and message receiver id -->
            <!-- Message Sender Id -->
            <input hidden type="text" name = "outgoingId" value = "<?php echo $_SESSION['uniqueId'];?>"> 
            <!-- Message Receiver Id -->
            <input hidden type="text" name = "incomingId" value = "<?php echo $user_id;?>">
            

                <input class = "input-field" name = "message"  type="text" autocomplete = "off">
                <button class = "btn-send" ><i class='bx bxs-send'></i></button>
                </form>
            </div>


        </div>

    </div>

<script src="./js/chat.js"></script>

</body>
</html>