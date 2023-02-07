<!DOCTYPE html>
<html lang="en">

<!-- Head from shopp-->
<?php
include 'include/head.php'; 
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<link rel="stylesheet" href="./css/cart.css">
<script src="./js/Shopping-cart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <div class="container about">
        <h1 class="text-center">Order History</h1>
    </div>
    <?php

    $totalPrice = 0;
    $cpuTotalPrice = 0;
    $gpuTotalPrice = 0;
    $ramTotalPrice = 0;

    if (!empty($_COOKIE["order-cpu"]) || isset($_COOKIE["order-cpu"])) { ?>
        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>CPU Name</th>
                        <th>CPU Model</th>
                        <th>CPU Speed</th>
                        <th>CPU Socket</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $products = json_decode($_COOKIE['order-cpu']);
                    foreach ($products as $prod) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $prod->cpuName; ?>
                            </td>
                            <td>
                                <?php echo $prod->cpuModel; ?>
                            </td>
                            <td>
                                <?php echo $prod->cpuSpeed; ?>
                            </td>
                            <td>
                                <?php echo $prod->cpuSocket; ?>
                            </td>
                            <td>
                                <?php
                                $cpuTotalPrice += (float)$prod->Price * (int)$prod->quantity;
                                echo $prod->Price;
                                ?>
                            </td>
                            <td>
                                <span><?php echo $prod->quantity ?></span>
                            </td>
                            <td>
                                <?php echo (float)$prod->Price * (int)$prod->quantity; ?>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <?php if (!empty($_COOKIE["order-ram"]) || isset($_COOKIE["order-ram"])) { ?>
        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>RAM Name</th>
                        <th>RAM Speed</th>
                        <th>RAM Type</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $products = json_decode($_COOKIE['order-ram']);
                    foreach ($products as $prod) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $prod->ramName; ?>
                            </td>
                            <td>
                                <?php echo $prod->ramSpeed; ?>
                            </td>
                            <td>
                                <?php echo $prod->ramType; ?>
                            </td>
                            <td>
                                <?php
                                $ramTotalPrice += (float)$prod->price * (int)$prod->quantity;
                                echo $prod->price; ?>
                            </td>
                            <td>
                                <span><?php echo $prod->quantity ?></span>
                            </td>
                            <td>
                                <?php echo (float)$prod->price * (int)$prod->quantity; ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <?php if (!empty($_COOKIE["order-gpu"]) || isset($_COOKIE["order-gpu"])) { ?>
        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>GPU Name</th>
                        <th>GPU RAM Size</th>
                        <th>GPU Speed</th>
                        <th>GPU Video Output</th>
                        <th>GPU RAM Type</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $products = json_decode($_COOKIE['order-gpu']);
                    foreach ($products as $prod) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $prod->gpuName; ?>
                            </td>
                            <td>
                                <?php echo $prod->gpuRamSize; ?>
                            </td>
                            <td>
                                <?php echo $prod->gpuClockSpeed; ?>
                            </td>
                            <td>
                                <?php echo $prod->gpuVideoOutput; ?>
                            </td>
                            <td>
                                <?php echo $prod->gpuRamType; ?>
                            </td>
                            <td>
                                <?php
                                $gpuTotalPrice += (float)$prod->price * (int)$prod->quantity;
                                echo $prod->price; ?>
                            </td>
                            <td>
                                <span><?php echo $prod->quantity ?></span>
                            </td>
                            <td>
                                <?php echo (float)$prod->price * (int)$prod->quantity; ?>
                            </td>
                        </tr>

                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }

    ?>
    <?php
    if (!isset($_COOKIE["order-gpu"]) and !isset($_COOKIE["order-cpu"]) and !isset($_COOKIE["order-ram"])) {
    ?>
            <h1 class="text-center">No History</h1>
    <?php
    }
    ?>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>