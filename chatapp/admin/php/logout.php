<?php
    if(isset($_COOKIE['admin_id']))
    {
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)) // If logout_id exists
        {
            $status = "Offline now";
        }
        $sql = mysqli_query($conn, "UPDATE admins SET status = '{$status}' WHERE admin_id = {$logout_id}");
        if($sql)
        {
            setcookie('admin_id', "", time() - 3600, "/");
            header("location: ../index.php");
        }
        else
        {
            header("location: ../users.php");
        }
    }
    else
    {
        header("location: ../index.php");
    }
?>