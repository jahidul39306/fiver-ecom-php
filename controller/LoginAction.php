<?php
include "model/DBconnect.php";

$usernameErr = $passwordErr = $validateLogin = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Please enter a username";
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Please enter a password";
    }
    $admin = checkAdminCredentials($_POST["username"], $_POST["password"]);
    if ($admin->num_rows > 0) {
        $row = $admin->fetch_assoc();
        $_SESSION["username"] = $row['UserName'];
        $_SESSION["name"] = $row['FirstName'];
        $_SESSION['loggedIn'] = True;
        $_SESSION['userType'] = 'admin';
        header('location:admin.php');
    }
    $customer = checkCustomerCredentials($_POST["username"], $_POST["password"]);
    if ($customer->num_rows > 0) {
        $row = $customer->fetch_assoc();
        $_SESSION["username"] = $row['UserName'];
        $_SESSION["name"] = $row['FirstName'];
        $_SESSION['loggedIn'] = True;
        $_SESSION['userType'] = 'customer';
        header('location:index.php');
    }
    else {
        $validateLogin = "Username or Password is invalid";
    }
    // echo "<script>console.log(" . json_encode($result) . ");</script>";
}