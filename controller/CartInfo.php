<?php
if (!isset($_SESSION)) {
    session_start();
}
if ($_POST["action"] == 'getCartInfo') {
    $totalCpu = 0;
    $totalCpuQ = 0;
    if (isset($_SESSION['cart-cpu'])) {
        $cpuCart = $_SESSION['cart-cpu'];
        foreach ($cpuCart as $t) {
            $totalCpu += $t->Price * $t->quantity;
            $totalCpuQ += $t->quantity;
        }
    }
    $totalGpu = 0;
    $totalGpuQ = 0;
    if (isset($_SESSION['cart-gpu'])) {
        $gpuCart = $_SESSION['cart-gpu'];
        foreach ($gpuCart as $t) {
            $totalGpu += $t->price * $t->quantity;
            $totalGpuQ += $t->quantity;
        }
    }
    $totalRam = 0;
    $totalRamQ = 0;
    if (isset($_SESSION['cart-ram'])) {
        $ramCart = $_SESSION['cart-ram'];
        foreach ($ramCart as $t) {
            $totalRam += $t->price * $t->quantity;
            $totalRamQ += $t->quantity;
        }
    }
    $totalCartAmount = $totalCpu + $totalGpu + $totalRam;
    $totalCartItem = $totalCpuQ + $totalGpuQ + $totalRamQ;
    $array = array("totalAmount" => $totalCartAmount, "totalItem" => $totalCartItem);
    echo json_encode($array);
}
