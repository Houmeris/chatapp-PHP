<?php
    include_once "config.php";
    $outgoing_id = 1;
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (username LIKE '%{$searchTerm}%')");
    if(mysqli_num_rows($sql) > 0)
    {
        include "data.php";
    }
    else
    {
        $output .= "No users found related to your search term";
    }
    echo $output;
?>