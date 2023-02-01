<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head from Add to cart-->
<?php
include '../view/include/head.php'; 
unset($_SESSION['cart-cpu']);
unset($_SESSION['cart-gpu']);
unset($_SESSION['cart-ram']);
header("Location: ../view/Shopping-cart.php");
?>
<!-- head End -->
