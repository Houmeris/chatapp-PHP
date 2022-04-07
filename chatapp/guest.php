<?php
    include_once "php/config.php";
    if(isset($_COOKIE['unique_id']))
    {
        header("location: users.php");
    }
    else
    {
        $status = time(); // Use time to tell when user was last connected
        $random_id = rand(time(), 10000000); // Create unique id
        $username = "Guest#" . strval($random_id); // The username is Guest#{unique_id}
        $encryptedpassw = md5("password_01234");
        $email = "mail@mail.com";

        $sql = mysqli_query($conn, "INSERT INTO users (unique_id, username, email, password, status)
                                                    VALUES ({$random_id}, '{$username}', '{$email}', '{$encryptedpassw}', {$status})");
        if($sql)
        {
            $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$random_id}");
            if(mysqli_num_rows($sql2) > 0)
            {
                $row = mysqli_fetch_assoc($sql2);
                setcookie("unique_id", $row['unique_id'], time() + (86400 * 30), "/");
                header("location: users.php");
            }
        }
        else
        {
            echo "Error";
        }
    }
?>