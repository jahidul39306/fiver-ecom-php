<?php
if (!isset($_SESSION)) {
    session_start();
}
include "../model/DBconnect.php";


if (!empty($_POST["action"])) {
    if ($_POST["action"] == "delete-cpu") {
        $cpuId = $_POST["productId"];
        deleteCpuByID($cpuId);
    }
}
if (!empty($_POST["action"])) {
    if ($_POST["action"] == "delete-gpu") {
        $gpuId = $_POST["productId"];
        deleteGpuByID($gpuId);
    }
}
if (!empty($_POST["action"])) {
    if ($_POST["action"] == "delete-ram") {
        $gpuId = $_POST["productId"];
        deleteRamByID($gpuId);
    }
}