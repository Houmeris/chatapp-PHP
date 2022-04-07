<?php
    include_once "config.php";
    $servtime = time();
    $status = "Active now";
    $sql = mysqli_query($conn, "UPDATE admins SET last_connected = {$servtime} WHERE admin_id = {$_COOKIE['admin_id']}");
    $sql2 = mysqli_query($conn, "UPDATE admins SET status = '{$status}' WHERE admin_id = {$_COOKIE['admin_id']}");
?>