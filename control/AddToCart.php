<?php
$product = $_REQUEST['product'];
session_start();
$_SESSION['product'] = $product;
?>