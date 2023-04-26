<?php


while ($row = mysqli_fetch_assoc($query)) {

    $sql2 = "SELECT * FROM messages WHERE (incomingMessageId = {$row['uniqueId']}
    OR outgoingMessageId = {$row['uniqueId']}) AND (outgoingMessageId = {$outgoing_id} 
    OR incomingMessageId = {$outgoing_id}) ORDER BY messageId DESC LIMIT 1";
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);

//Trimming messages if the words are more than 28

(mysqli_num_rows($query2) > 0) ? $result = $row2['message'] : $result ="No message available";
(strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
if(isset($row2['outgoingMessageId'])){
($outgoing_id == $row2['outgoingMessageId']) ? $you = "You: " : $you = "";
}else{
$you = "";
}


($row['status'] == "Offline") ? $offline = "Offline" : $offline = "";

($outgoing_id == $row['uniqueId']) ? $hid_me = "hide" : $hid_me = "";

    $output .='<a href="chat.php?user_id='.$row['uniqueId'].'">
    <div class="user-friend">
        <div class="user-friend-picture">
            <img src="php/avatars/'.$row['avatar'].'"alt="">
        </div>

        <div class="user-friend-username">
            <h4>'.$row['username'].'</h4>
            <p>'.$msg.'</p>
        </div>
        <div class = "active-dot"><i class="bx bxs-circle '.$row['status'].'"></i></div>
    </div>';
}

?>