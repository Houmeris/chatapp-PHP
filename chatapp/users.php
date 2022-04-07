<?php
    if(!isset($_COOKIE['unique_id'])) // If user is not logged in
    {
        header("location: login.php");
    }
?>
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="users">
                <header>
                    <?php
                        include_once "php/config.php";
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_COOKIE['unique_id']}");
                        if(mysqli_num_rows($sql) > 0)
                        {
                            $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
                    <div class="content">
                        <div class="details">
                            <span><?php echo $row['username']; ?></span>
                            <p>Active now</p>
                        </div>
                    </div>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                </header>
                <div class="users-list">
                </div>
            </section>
        </div>
        <script src="javascript/users.js"></script>
        <script src="javascript/checkstatus.js"></script>
    </body>
</html>