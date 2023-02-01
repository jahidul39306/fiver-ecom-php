<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head -->
<?php
    include 'include/head.php';
    include '../control/LoginAction.php';
?>
<link rel="stylesheet" href="../css/login.css">
<script src="../js/Login.js"></script>
<!-- head End -->

<body>
    <!-- Header -->
    <?php include 'include/header.php' ?>
    <!-- Header End -->
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">
    <h2 class="login-header">Login</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="login-form" onsubmit="return isValid();">
        <p>
        <input type="text" id="username" name="username" placeholder="Username" >
        <span id='usernameErr'><?php echo $usernameErr; ?></span>
        </p>
        <p>
        <input type="password" id="password" name="password" placeholder="Password" >
        <span id='passwordErr'><?php echo $passwordErr; ?></span>    
        </p>
        <p>
        <input type="submit" id="login" value="Login">
        </p>
    </form>
    <div id="create-account-wrap">
        <p>Not a member? <a href="#">Create Account</a><p>
    </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>
</html>