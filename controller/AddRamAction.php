<?php
include "model/DBconnect.php";
$ramNameErr = $ramSpeedErr = $ramTypeErr = $priceErr = $stockErr = $imageErr = "";
$hasErr = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["ramName"])) {
        $ramNameErr = "Please enter RAM Name";
        $hasErr = true;
    }
    if (empty($_POST["ramSpeed"])) {
        $ramSpeedErr = "Please enter RAM Speed";
        $hasErr = true;
    }
    if (empty($_POST["ramType"])) {
        $ramTypeErr = "Please enter RAM type";
        $hasErr = true;
    }
    if (empty($_POST["price"])) {
        $priceErr = "Please enter RAM price";
        $hasErr = true;
    }
    if (empty($_POST["stock"])) {
        $stockErr = "Please enter RAM Stock";
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

        $ramName = $_POST["ramName"];
        $ramSpeed = $_POST["ramSpeed"];
        $ramType = $_POST["ramType"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $image = $_POST["image"];
        addRam($ramName, $ramSpeed, $ramType, $price, $stock, $image);
        header("Location: ./admin.php");
    } else {
        $prod["ramName"] = $_POST["ramName"];
        $prod["ramSpeed"] = $_POST["ramSpeed"];
        $prod["ramType"] = $_POST["ramType"];
        $prod["Price"] = $_POST["price"];
        $prod["Stock"] = $_POST["stock"];
    }
}
