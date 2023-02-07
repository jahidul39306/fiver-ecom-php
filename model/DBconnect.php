<?php
function connect()
{
    $conn = new mysqli("localhost", "root", "", "newshop");
    if ($conn->connect_errno) {
        die("Database connection failed......" . $conn->connect_error);
    }
    return $conn;
}

// Registration Query
function addAdmin($UserName, $Pass, $FirstName, $Email, $PhoneNum)
{
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO admin (UserName, Pass,FirstName, Email, PhoneNum) VALUES(?, ?, ?, ?, ?)");

    $sql->bind_param("sssss", $UserName, $Pass, $FirstName, $Email, $PhoneNum);
    return $sql->execute();
}
function addCustomer($UserName, $Pass, $FirstName, $Email, $PhoneNum)
{
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO customer (UserName, Pass, FirstName, Email, PhoneNum) VALUES(?, ?, ?, ?, ?)");

    $sql->bind_param("sssss", $UserName, $Pass, $FirstName, $Email, $PhoneNum);
    return $sql->execute();
}
// Search Query
function getAllCpu()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM cpu");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function getAllGpu()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM gpu");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function getAllRam()
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
                                price, stock, image) VALUES(?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssssdis", $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image);
    return $sql->execute();
}
function updateCpu($id, $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("UPDATE cpu SET cpuName = ?, cpuModel = ?, cpuSpeed = ?, cpuSocket = ?, Price = ?,
                                Stock = ?, image = ? WHERE id  = ?");
    $sql->bind_param("ssssdisi", $cpuName, $cpuModel, $cpuSpeed, $cpuSocket, $price, $stock, $image, $id);
    return $sql->execute();
}
function searchCpuId($id)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM cpu WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function deleteCpuByID($id)
{
    $id = (int) $id;
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM cpu WHERE id = ?");
    $sql->bind_param("i", $id);
    return $sql->execute();
}



// GPU CRUD
function addGpu($gpuName, $gpuRamSize, $gpuClockSpeed, $gpuVideoOutput, $gpuRamType, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO gpu (gpuName, gpuRamSize, gpuClockSpeed, gpuVideoOutput,
                                gpuRamType,price, stock, image) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("sssssdis", $gpuName, $gpuRamSize, $gpuClockSpeed, $gpuVideoOutput, $gpuRamType, $price, $stock, $image);
    return $sql->execute();
}
function searchGpuId($id)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM gpu WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function updateGpu($id, $gpuName, $gpuRamSize, $gpuClockSpeed, $gpuVideoOutput, $gpuRamType, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("UPDATE gpu SET gpuName = ?, gpuRamSize = ?, gpuClockSpeed = ?, gpuVideoOutput = ?, gpuRamType = ?, price = ?,
                                stock = ?, image = ? WHERE id  = ?");
    $sql->bind_param("sssssdisi", $gpuName, $gpuRamSize, $gpuClockSpeed, $gpuVideoOutput, $gpuRamType, $price, $stock, $image, $id);
    return $sql->execute();
}
function deleteGpuByID($id)
{
    $id = (int) $id;
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM gpu WHERE id = ?");
    $sql->bind_param("i", $id);
    return $sql->execute();
}


// RAM CRUD
function addRam($ramName, $ramSpeed, $ramType, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO ram (ramName, ramSpeed, ramType,price, stock, image) VALUES(?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssdis", $ramName, $ramSpeed, $ramType, $price, $stock, $image);
    return $sql->execute();
}
function searchRamId($id)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM ram WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function updateRam($id, $ramName, $ramSpeed, $ramType, $price, $stock, $image)
{
    $price = (float) $price;
    $stock = (int) $stock;
    $conn = connect();
    $sql = $conn->prepare("UPDATE ram SET ramName = ?, ramSpeed = ?, ramType = ?, price = ?,
                                stock = ?, image = ? WHERE id  = ?");
    $sql->bind_param("sssdisi", $ramName, $ramSpeed, $ramType, $price, $stock, $image, $id);
    return $sql->execute();
}
function deleteRamByID($id)
{
    $id = (int) $id;
    $conn = connect();
    $sql = $conn->prepare("DELETE FROM ram WHERE id = ?");
    $sql->bind_param("i", $id);
    return $sql->execute();
}



// Check Credentials
function checkAdminCredentials($UserName, $Password)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM admin WHERE UserName = ? AND Pass = ?");
    $sql->bind_param("ss", $UserName, $Password);
    $sql->execute();
    $res = $sql->get_result();
    return $res;
}
function checkCustomerCredentials($UserName, $Password)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM customer WHERE UserName = ? AND Pass = ?");
    $sql->bind_param("ss", $UserName, $Password);
    $sql->execute();
    $res = $sql->get_result();
    return $res;
}


