<?php
    if(isset($_COOKIE['unique_id']))
    {
        setcookie('unique_id', "", time() - 3600, "/");
        header("location: ../login.php");
    }
    else
    {
        header("location: ../login.php");
    }
?>