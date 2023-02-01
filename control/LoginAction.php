<?php
    $usernameErr = $passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST["username"])){
            $usernameErr = "Please enter a username";
        }
        if(empty($_POST["password"])){
            $passwordErr = "Please enter a password";
        }
    }
?>