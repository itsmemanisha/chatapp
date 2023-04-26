<?php
session_start();
if(isset($_SESSION['uniqueId'])) {

include_once "config.php";

$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoingId']);
$incoming_id = mysqli_real_escape_string($conn, $_POST['incomingId']);
$output = "";

$sql = "SELECT * FROM messages 
LEFT JOIN users on users.uniqueId = messages.incomingMessageId

 WHERE (outgoingMessageId = {$outgoing_id} AND incomingMessageId = {$incoming_id})
OR (outgoingMessageId = {$incoming_id} AND incomingMessageId = {$outgoing_id}) ORDER BY messageId ASC";

$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        if ($row['outgoingMessageId'] === $outgoing_id ) { //If this is equal then it is the sender
            $output .= '<div class="chats">
            <div class = outgoing-chat-wrapper>
            <div class="chat-outgoing">
              <p>'.$row['message'].'</p>
            </div>
            </div>
        </div>';
        }
        else { // otherwise it is the receiver
         $output .= '
         <div class="chats">

         <div class = incoming-chat-wrapper>

         <div class="chat-friend-picture chat-image" >
             <img src="./php/avatars/'.$row['avatar'].'" alt="">
             </div>

             <div class="chat-incoming">
                 <div class="chat-incoming-container">
                    
                     <p>'.$row['message'].'</p>
                 </div>
             </div>
             </div>

         </div>';
        }
    }

    echo $output;
}


}else {
    header("../signin.php");
}

?>