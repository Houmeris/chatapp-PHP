<?php
    if(isset($_COOKIE['admin_id'])) // If admin is logged in
    {
        header("location: users.php");
    }

    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $encryptedpassw = md5($password);

    if(!empty($email) && !empty($password))
    {
        $sql = mysqli_query($conn, "SELECT * FROM admins WHERE email = '{$email}' AND password = '{$encryptedpassw}'");
        if(mysqli_num_rows($sql) > 0) // If it exists
        {
            $row = mysqli_fetch_assoc($sql);
            $status = "Active now";
            $servtime = time();
            // Update status
            $sql2 = mysqli_query($conn, "UPDATE admins SET status = '{$status}' WHERE admin_id = {$row['admin_id']}");
            if($sql2)
            {
                $sql3 = mysqli_query($conn, "UPDATE admins SET last_connected = {$servtime} WHERE admin_id = {$row['admin_id']}");
                if($sql3)
                {
                    setcookie("admin_id", $row['admin_id'], time() + (86400 * 30), "/");
                    echo "success";
                }
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