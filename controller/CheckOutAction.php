<!DOCTYPE html>
<html lang="en">

<!-- Head from Add to cart-->
<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['cart-cpu'])) {
    // Get the current value of the cookie
    if (empty($_COOKIE["order-cpu"]) || !isset($_COOKIE["order-cpu"])) {
        setcookie("order-cpu", json_encode($_SESSION['cart-cpu']), time() + (60 * 60 * 24 * 7), "/");
    } else {
        $currentValue = json_decode($_COOKIE["order-cpu"], true);
        $newValue = $_SESSION['cart-cpu'];
        $mergedArray = array_merge($currentValue, $newValue);
        setcookie("order-cpu", json_encode($mergedArray), time() + (60 * 60 * 24 * 7), "/");
    }

    unset($_SESSION['cart-cpu']);
}

if (isset($_SESSION['cart-gpu'])) {
    if (empty($_COOKIE["order-gpu"]) || !isset($_COOKIE["order-gpu"])) {
        setcookie("order-gpu", json_encode($_SESSION['cart-gpu']), time() + (60 * 60 * 24 * 7), "/");
    } else {
        $currentValue = json_decode($_COOKIE["order-gpu"], true);
        $newValue = $_SESSION['cart-gpu'];
        $mergedArray = array_merge($currentValue, $newValue);
        setcookie("order-gpu", json_encode($mergedArray), time() + (60 * 60 * 24 * 7), "/");
    }
    unset($_SESSION['cart-gpu']);
}

if (isset($_SESSION['cart-ram'])) {
    if (empty($_COOKIE["order-ram"]) || !isset($_COOKIE["order-ram"])) {
        setcookie("order-ram", json_encode($_SESSION['cart-ram']), time() + (60 * 60 * 24 * 7), "/");
    } else {
        $currentValue = json_decode($_COOKIE["order-ram"], true);
        $newValue = $_SESSION['cart-ram'];
        $mergedArray = array_merge($currentValue, $newValue);
        setcookie("order-ram", json_encode($mergedArray), time() + (60 * 60 * 24 * 7), "/");
    }

    unset($_SESSION['cart-ram']);
}
header("Location: ../order-success.php");
?>
<!-- head End -->