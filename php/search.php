<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['uniqueId'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql =  $sql = "SELECT * FROM users WHERE NOT uniqueId = {$outgoing_id} AND (username LIKE '%{$searchTerm}%')";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found with that name';
    }
    echo $output;
?>