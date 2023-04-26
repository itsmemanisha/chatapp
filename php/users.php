<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['uniqueId'];
$sql = "SELECT * FROM users WHERE NOT uniqueId = {$outgoing_id} ORDER BY userId DESC";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "No users are available to chat";
}elseif(mysqli_num_rows($query) > 0){
    include_once "data.php";
}
echo $output;

?>