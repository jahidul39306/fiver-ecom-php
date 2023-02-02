<?php
include "../model/DBconnect.php";
$cpuNameErr = $cpuModelErr = $cpuSpeedErr = $cpuSocketErr = $priceErr = $stockErr = $imageErr = "";
$hasErr = false;

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $prod = searchCpuId($_GET["cpuId"])[0];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["cpuName"])) {
        $cpuNameErr = "Please enter CPU Name";
        $hasErr = true;
    }
    if (empty($_POST["cpuModel"])) {
        $cpuModelErr = "Please enter CPU Model";
        $hasErr = true;
    }
    if (empty($_POST["cpuSpeed"])) {
        $cpuSpeedErr = "Please enter CPU Speed";
        $hasErr = true;
    }
    if (empty($_POST["cpuSocket"])) {
        $cpuSocketErr = "Please enter CPU Socket";
        $hasErr = true;
    }
    if (empty($_POST["price"])) {
        $priceErr = "Please enter CPU Price";
        $hasErr = true;
    }
    if (empty($_POST["stock"])) {
        $stockErr = "Please enter CPU Stock";
        $hasErr = true;
    }
    if (empty($_POST["image"])) {
        $imageErr = "Please enter CPU Image";
        $hasErr = true;
    }
    if (!$hasErr) {
        $cpuId = $_POST["cpuId"];
        $cpuName = $_POST["cpuName"];
        $cpuModel = $_POST["cpuModel"];
        $cpuSpeed = $_POST["cpuSpeed"];
        $cpuSocket = $_POST["cpuSocket"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $image = $_POST["image"];
        updateCpu($cpuId, $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image);
        header("Location: ../view/AdminPage.php");
    } else {
        $prod["cpuId"] = $_POST["cpuId"];
        $prod["cpuName"] = $_POST["cpuName"];
        $prod["cpuModel"] = $_POST["cpuModel"];
        $prod["cpuSpeed"] = $_POST["cpuSpeed"];
        $prod["cpuSocket"] = $_POST["cpuSocket"];
        $prod["Price"] = $_POST["price"];
        $prod["Stock"] = $_POST["stock"];
        $prod["picture"] = $_POST["image"];
    }
}
?>