<?php
include "model/DBconnect.php";

$usernameErr = $passwordErr = $firstnameErr = $emailErr = $phoneErr = $validateLogin = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Please enter a username";
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Please enter a password";
    }
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Please enter a name";
    }
    if (empty($_POST["email"])) {
        $emailErr = "Please enter a email";
    }
    if (empty($_POST["phone"])) {
        $phoneErr = "Please enter a phone";
    }
    $res = addCustomer($_POST["username"], $_POST["password"], $_POST["firstname"], $_POST["email"], $_POST["phone"]);
    if ($res == 1) {
        echo "<script>alert('Registration Succesfull!!');</script>";
        echo "<script>window.location.href='login.php';</script>";
    }
}
