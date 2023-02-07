<?php
include "model/DBconnect.php";
$gpuNameErr = $gpuRamSizeErr = $gpuClockSpeedErr = $gpuVideoOutputErr = $gpuRamTypeErr = $priceErr = $stockErr = $imageErr = "";
$hasErr = false;

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $prod = searchGpuId($_GET["id"])[0];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["gpuName"])) {
        $gpuNameErr = "Please enter GPU Name";
        $hasErr = true;
    }
    if (empty($_POST["gpuRamSize"])) {
        $gpuRamSizeErr = "Please enter GPU Ram size";
        $hasErr = true;
    }
    if (empty($_POST["gpuClockSpeed"])) {
        $gpuClockSpeedErr = "Please enter GPU Speed";
        $hasErr = true;
    }
    if (empty($_POST["gpuVideoOutput"])) {
        $gpuVideoOutputErr = "Please enter GPU video output";
        $hasErr = true;
    }
    if (empty($_POST["gpuRamType"])) {
        $gpuRamTypeErr = "Please enter GPU ram type";
        $hasErr = true;
    }
    if (empty($_POST["price"])) {
        $priceErr = "Please enter GPU price";
        $hasErr = true;
    }
    if (empty($_POST["stock"])) {
        $stockErr = "Please enter GPU Stock";
        $hasErr = true;
    }
    if ($_POST["checkImgUpload"] == 10) {
        $imageErr = "Please Choose an Image";
        $hasErr = true;
    }
    if (!$hasErr) {

        //Image upload handle
        $file = $_FILES["image"];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $image_new_name = uniqid('', true) . '.' . $image_ext;
        move_uploaded_file($image_tmp, "./images/$image_new_name");
        $_POST["image"] =  $image_new_name;

        $id = $_POST["id"];
        $gpuName = $_POST["gpuName"];
        $gpuRamSize = $_POST["gpuRamSize"];
        $gpuClockSpeed = $_POST["gpuClockSpeed"];
        $gpuVideoOutput = $_POST["gpuVideoOutput"];
        $gpuRamType = $_POST["gpuRamType"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $image = $_POST["image"];
        updateGpu($id, $gpuName, $gpuRamSize, $gpuClockSpeed, $gpuVideoOutput,$gpuRamType, $price, $stock, $image);
        header("Location: ./admin.php");
    } else {
        $prod["id"] = $_POST["id"];
        $prod["gpuName"] = $_POST["gpuName"];
        $prod["gpuRamSize"] = $_POST["gpuRamSize"];
        $prod["gpuClockSpeed"] = $_POST["gpuClockSpeed"];
        $prod["gpuVideoOutput"] = $_POST["gpuVideoOutput"];
        $prod["gpuRamType"] = $_POST["gpuRamType"];
        $prod["price"] = $_POST["price"];
        $prod["stock"] = $_POST["stock"];
    }
}
