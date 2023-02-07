<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST['logout'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './controller/LoginAction.php';
?>
<!-- head End -->

<!-- CSS STYLE START -->
<link rel="stylesheet" href="./css/login.css">
<!-- CSS STYLE END -->

<body>
    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <div id="login-form-wrap">
        <h1 class="login-header">Login</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login-form" onsubmit="return isValid();">
            <div>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <span id='usernameErr'><?php echo $usernameErr; ?></span>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span id='passwordErr'><?php echo $passwordErr; ?></span>
            </div>

            <div>
                <div id='passwordErr'><?php echo $validateLogin; ?></div>
                <button type="submit" id="login">LOGIN </button>
            </div>
        </form>
        <div id="create-account-wrap">
            <p>No account? <a href="./register.php">Register</a>
            <p>
        </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->
    <script src="./js/loginValidation.js"></script>

</body>

</html>