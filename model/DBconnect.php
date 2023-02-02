<?php
function connect()
{
    $conn = new mysqli("localhost", "root", "", "webbase");
    if ($conn->connect_errno) {
        die("Database connection failed......" . $conn->connect_error);
    }
    return $conn;
}
function searchAllCpu()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM cpu");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function searchAllGpu()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM gpu");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function searchAllRam()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM ram");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function addCpu($cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO cpu (cpuName, cpuModel, cpuSpeed, cpuSocket,
                                price, stock, picture) VALUES(?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssssdis", $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image);
    return $sql->execute();
}
function updateCpu($cpuId, $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("UPDATE cpu SET cpuName = ?, cpuModel = ?, cpuSpeed = ?, cpuSocket = ?, Price = ?,
                                Stock = ?, picture = ? WHERE cpuId  = ?");
    $sql->bind_param("ssssdisi", $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image, $cpuId);
    return $sql->execute();
}
function searchCpuId($cpuId)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM cpu WHERE cpuId = ?");
    $sql->bind_param("i", $cpuId);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function delCpu($cpuId)
{
    $cpuId = (int) $cpuId;
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM cpu WHERE cpuId = ?");
    $sql->bind_param("i", $cpuId);
    return $sql->execute();
}
?>