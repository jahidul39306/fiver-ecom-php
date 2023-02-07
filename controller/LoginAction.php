<?php
include "model/DBconnect.php";
    
$usernameErr = $passwordErr = $validateLogin = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST["username"])){
            $usernameErr = "Please enter a username";
        }
        if(empty($_POST["password"])){
            $passwordErr = "Please enter a password";
        }
        $result = checkAdminCredentials($_POST["username"],$_POST["password"]);
        if ($result->num_rows> 0) {
            $row = $result->fetch_assoc();
            $_SESSION["username"] = $row['UserName'];
            $_SESSION["name"] = $row['FirstName'];
            header('location:admin.php');
        } else {
            $validateLogin = "Username or Password is invalid";
        }
        // echo "<script>console.log(" . json_encode($result) . ");</script>";
    }
