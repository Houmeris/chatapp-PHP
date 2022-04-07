<?php
    if(isset($_COOKIE['admin_id'])) // If admin is logged in
    {
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Chat App Admin</header>
                <form action = "#" id="regform">
                    <div class="error-txt"></div>
                        <div class="field input">
                            <label>Email Adress</label>
                            <input type = "text" name="email" placeholder = "Enter your email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type = "password" name="password" placeholder = "Enter your password">
                        </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat" id="loginbutton">
                    </div>
                </form>
            </section>
        </div>
        <script src="javascript/login.js"></script>
    </body>
</html>