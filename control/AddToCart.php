<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head from Add to cart-->
<?php include '../view/include/head.php' ?>
<!-- head End -->

<?php
if ($_POST["product"] == "cpu") {
    $obj = json_decode($_POST["myData"]);
    if (empty($_SESSION['cart-cpu'])) {
        $obj->quantity = 1;
        $_SESSION['cart-cpu'] = array($obj);
    } else {
        $found = false;
        $temp = $_SESSION['cart-cpu'];
        foreach ($temp as $t) {
            if ($t->cpuId == $obj->cpuId) {
                $t->quantity += 1;
                $found = true;
                break;
            }
        }
        if ($found) {
            $_SESSION['cart-cpu'] = $temp;
        } else {
            $obj->quantity = 1;
            array_push($temp, $obj);
            $_SESSION['cart-cpu'] = $temp;
        }
    }
}

if ($_POST["product"] == "gpu") {
    $obj = json_decode($_POST["myData"]);
    if (empty($_SESSION['cart-gpu'])) {
        $obj->quantity = 1;
        $_SESSION['cart-gpu'] = array($obj);
    } else {
        $found = false;
        $temp = $_SESSION['cart-gpu'];
        foreach ($temp as $t) {
            if ($t->GPU_Id == $obj->GPU_Id) {
                $t->quantity += 1;
                $found = true;
                break;
            }
        }
        if ($found) {
            $_SESSION['cart-gpu'] = $temp;
        } else {
            $obj->quantity = 1;
            array_push($temp, $obj);
            $_SESSION['cart-gpu'] = $temp;
        }
    }
}
if ($_POST["product"] == "ram") {
    $obj = json_decode($_POST["myData"]);
    if (empty($_SESSION['cart-ram'])) {
        $obj->quantity = 1;
        $_SESSION['cart-ram'] = array($obj);
    } else {
        $found = false;
        $temp = $_SESSION['cart-ram'];
        foreach ($temp as $t) {
            if ($t->RamID == $obj->RamID) {
                $t->quantity += 1;
                $found = true;
                break;
            }
        }
        if ($found) {
            $_SESSION['cart-ram'] = $temp;
        } else {
            $obj->quantity = 1;
            array_push($temp, $obj);
            $_SESSION['cart-ram'] = $temp;
        }
    }
}


if (!empty($_POST["action"])) {
    if ($_POST["action"] == 'Increase-Cpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-cpu'];
        foreach ($temp as $t) {
            if ($t->cpuId == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-cpu'] = $temp;
    }
    if ($_POST["action"] == 'Decrease-Cpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-cpu'];
        for ($x = 0; $x < count($temp); $x++){
            if ($temp[$x]->cpuId == $pId) {
                $temp[$x]->quantity -= 1;
                if($temp[$x]->quantity == 0){
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-cpu'] = $temp;
    }

    if ($_POST["action"] == 'Increase-Ram') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-ram'];
        foreach ($temp as $t) {
            if ($t->RamID == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-ram'] = $temp;
    }
    if ($_POST["action"] == 'Decrease-Ram') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-ram'];
        for ($x = 0; $x < count($temp); $x++){
            if ($temp[$x]->RamID == $pId) {
                $temp[$x]->quantity -= 1;
                if($temp[$x]->quantity == 0){
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-ram'] = $temp;
    }

    if ($_POST["action"] == 'Increase-Gpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-gpu'];
        foreach ($temp as $t) {
            if ($t->GPU_Id == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-gpu'] = $temp;
    }
    if ($_POST["action"] == 'Decrease-Gpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-gpu'];
        for ($x = 0; $x < count($temp); $x++){
            if ($temp[$x]->GPU_Id == $pId) {
                $temp[$x]->quantity -= 1;
                if($temp[$x]->quantity == 0){
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-gpu'] = $temp;
    }
}

?>