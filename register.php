<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './controller/RegisterAction.php';
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
        <h1 class="login-header">Register</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login-form" onsubmit="return isValid();">
            <div>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <span id='usernameErr'><?php echo $usernameErr; ?></span>
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Password">
                <span id='passwordErr'><?php echo $passwordErr; ?></span>
            </div>
            <div>
                <input type="text" id="firstname" name="firstname" placeholder="First Name" required>
                <span id='firstnameErr'><?php echo $firstnameErr; ?></span>
            </div>
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <span id='emailErr'><?php echo $emailErr; ?></span>
            </div>
            <div>
                <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                <span id='phoneErr'><?php echo $phoneErr; ?></span>
            </div>
            <div>
                <button type="submit" id="login">REGISTER </button>
            </div>
        </form>
        <div id="create-account-wrap">
            <p>Already have account? <a href="./login.php">Login</a>
            <p>
        </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->
    <script src="./js/loginValidation.js"></script>

</body>

</html>