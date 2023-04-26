<?php
session_start();
if(isset($_SESSION['uniqueId'])) {

include_once "config.php";

$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoingId']);
$incoming_id = mysqli_real_escape_string($conn, $_POST['incomingId']);
$message = mysqli_real_escape_string($conn, $_POST['message']);


if(!empty($message)) {
    $sql = mysqli_query($conn, "INSERT INTO messages (incomingMessageId, outgoingMessageId, message) 
    VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')
    ");

}


}else {
    header("../signin.php");
}

?>