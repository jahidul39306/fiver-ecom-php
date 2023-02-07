<?php
include "model/DBconnect.php";
$cpuNameErr = $cpuModelErr = $cpuSpeedErr = $cpuSocketErr = $priceErr = $stockErr = $imageErr = "";
$hasErr = false;

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

        $cpuName = $_POST["cpuName"];
        $cpuModel = $_POST["cpuModel"];
        $cpuSpeed = $_POST["cpuSpeed"];
        $cpuSocket = $_POST["cpuSocket"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $image = $_POST["image"];
        addCpu($cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image);
        header("Location: ./admin.php");
    } else {
        $prod["cpuName"] = $_POST["cpuName"];
        $prod["cpuModel"] = $_POST["cpuModel"];
        $prod["cpuSpeed"] = $_POST["cpuSpeed"];
        $prod["cpuSocket"] = $_POST["cpuSocket"];
        $prod["Price"] = $_POST["price"];
        $prod["Stock"] = $_POST["stock"];
    }
}
