<?php
if (!isset($_SESSION)) {
    session_start();
}



if (!empty($_POST["action"])) {
    if ($_POST["action"] == "addCartCpu") {
        $obj = json_decode($_POST["myData"]);
        if (empty($_SESSION['cart-cpu'])) {
            $obj->quantity = 1;
            $_SESSION['cart-cpu'] = array($obj);
            echo "Added to cart";
        } else {
            $found = false;
            $temp = $_SESSION['cart-cpu'];
            foreach ($temp as $t) {
                if ($t->id == $obj->id) {
                    $t->quantity += 1;
                    $found = true;
                    break;
                }
            }
            if ($found) {
                $_SESSION['cart-cpu'] = $temp;
                echo "Added to cart";
            } else {
                $obj->quantity = 1;
                array_push($temp, $obj);
                $_SESSION['cart-cpu'] = $temp;
                echo "Added to cart";
            }
        }
    }

    if ($_POST["action"] == "addCartGpu") {
        $obj = json_decode($_POST["myData"]);
        if (empty($_SESSION['cart-gpu'])) {
            $obj->quantity = 1;
            $_SESSION['cart-gpu'] = array($obj);
            echo "Added to cart";
        } else {
            $found = false;
            $temp = $_SESSION['cart-gpu'];
            foreach ($temp as $t) {
                if ($t->id == $obj->id) {
                    $t->quantity += 1;
                    $found = true;
                    break;
                }
            }
            if ($found) {
                $_SESSION['cart-gpu'] = $temp;
                echo "Added to cart";
            } else {
                $obj->quantity = 1;
                array_push($temp, $obj);
                $_SESSION['cart-gpu'] = $temp;
                echo "Added to cart";
            }
        }
    }
    if ($_POST["action"] == "addCartRam") {
        $obj = json_decode($_POST["myData"]);
        if (empty($_SESSION['cart-ram'])) {
            $obj->quantity = 1;
            $_SESSION['cart-ram'] = array($obj);
            echo "Added to cart";
        } else {
            $found = false;
            $temp = $_SESSION['cart-ram'];
            foreach ($temp as $t) {
                if ($t->id == $obj->id) {
                    $t->quantity += 1;
                    $found = true;
                    break;
                }
            }
            if ($found) {
                $_SESSION['cart-ram'] = $temp;
                echo "Added to cart";
            } else {
                $obj->quantity = 1;
                array_push($temp, $obj);
                $_SESSION['cart-ram'] = $temp;
                echo "Added to cart";
            }
        }
    }
    // Increase CPU Quantity
    if ($_POST["action"] == 'Increase-Cpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-cpu'];
        foreach ($temp as $t) {
            if ($t->id == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-cpu'] = $temp;
    }
    // Decrease CPU Quantity
    if ($_POST["action"] == 'Decrease-Cpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-cpu'];
        for ($x = 0; $x < count($temp); $x++) {
            if ($temp[$x]->id == $pId) {
                $temp[$x]->quantity -= 1;
                if ($temp[$x]->quantity == 0) {
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-cpu'] = $temp;
    }
    // Increase RAM Quantity
    if ($_POST["action"] == 'Increase-Ram') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-ram'];
        foreach ($temp as $t) {
            if ($t->id == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-ram'] = $temp;
    }
    // Decrease RAM Quantity
    if ($_POST["action"] == 'Decrease-Ram') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-ram'];
        for ($x = 0; $x < count($temp); $x++) {
            if ($temp[$x]->id == $pId) {
                $temp[$x]->quantity -= 1;
                if ($temp[$x]->quantity == 0) {
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-ram'] = $temp;
    }

    // Increase GPU Quantity
    if ($_POST["action"] == 'Increase-Gpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-gpu'];
        foreach ($temp as $t) {
            if ($t->id == $pId) {
                $t->quantity += 1;
                break;
            }
        }
        $_SESSION['cart-gpu'] = $temp;
    }
    // Decrease GPU Quantity
    if ($_POST["action"] == 'Decrease-Gpu') {
        $pId = $_POST['productId'];
        $temp = $_SESSION['cart-gpu'];
        for ($x = 0; $x < count($temp); $x++) {
            if ($temp[$x]->id == $pId) {
                $temp[$x]->quantity -= 1;
                if ($temp[$x]->quantity == 0) {
                    unset($temp[$x]);
                }
                break;
            }
        }
        $_SESSION['cart-gpu'] = $temp;
    }
}
