<?php
    if(isset($_COOKIE['unique_id'])) //If user is logged in
    {
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Chat App</header>
                <form action = "users.php" enctype="multipart/form-data" id="regform">
                    <div class="error-txt"></div>
                    <div class="field input">
                        <label>Username</label>
                        <input type = "text" name="username" placeholder = "Enter your username" required>
                    </div>
                        <div class="field input">
                            <label>Email Adress</label>
                            <input type = "text" name="email" placeholder = "Enter your email" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type = "password" name="password" placeholder = "Enter new password" required>
                        </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" id="regbutton">
                    </div>
                </form>
                <div class="link">Already signed up? <a href="login.php">Login now</a></div>
                <div class="link">Continue as <a href="guest.php">Guest</a></div>
            </section>
        </div>
        <script src="javascript/signup.js"></script>
    </body>
</html>