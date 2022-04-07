<?php
    if(isset($_COOKIE['unique_id'])) // If user is logged in
    {
        header("location: users.php");
    }

    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $encryptedpassw = md5($password);
    $guestemail = "mail@mail.com";

    if(!empty($email) && !empty($password))
    {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$encryptedpassw}' AND email != '{$guestemail}'");
        if(mysqli_num_rows($sql) > 0) // If it exists
        {
            $row = mysqli_fetch_assoc($sql);
            $status = time(); // Update status
            $sql2 = mysqli_query($conn, "UPDATE users SET status = {$status} WHERE unique_id = {$row['unique_id']}");
            if($sql2)
            {
                setcookie("unique_id", $row['unique_id'], time() + (86400 * 30), "/");
                echo "success";
            }
        }
        else
        {
            echo "Email or password is incorrect!";
        }
    }
    else
    {
        echo "All input fields are required!";
    }
?>