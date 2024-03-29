<?php
    if(isset($_COOKIE['unique_id'])) // If user is logged in
    {
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Chat App</header>
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
                <div class="link">Not yet signed up? <a href="index.php">Sing up now</a></div>
                <div class="link">Continue as <a href="guest.php">Guest</a></div>
            </section>
        </div>
        <script src="javascript/login.js"></script>
    </body>
</html>