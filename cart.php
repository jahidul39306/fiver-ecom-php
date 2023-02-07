<!DOCTYPE html>
<html lang="en">

<!-- Head from shopp-->
<?php include 'include/head.php' ?>
<link rel="stylesheet" href="./css/cart.css">
<script src="./js/Shopping-cart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <?php

    $totalPrice = 0;
    $cpuTotalPrice = 0;
    $gpuTotalPrice = 0;
    $ramTotalPrice = 0;
    if (!empty($_SESSION['cart-cpu'])) { ?>
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
                    $products = $_SESSION['cart-cpu'];
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
                                <div class="cart-plus-minus">
                                    <button onclick='DecreaseCpu(<?php echo $prod->id ?>)'>-</button>
                                    <span><?php echo $prod->quantity ?></span>
                                    <button onclick='IncreaseCpu(<?php echo $prod->id ?>)'>+</button>
                                </div>
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
    <?php if (!empty($_SESSION['cart-ram'])) { ?>
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
                    if (!empty($_SESSION['cart-ram'])) {
                        $products = $_SESSION['cart-ram'];
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
                                    <div class="cart-plus-minus">
                                        <button onclick='DecreaseRam(<?php echo $prod->id ?>)'>-</button>
                                        <span><?php echo $prod->quantity ?></span>
                                        <button onclick='IncreaseRam(<?php echo $prod->id ?>)'>+</button>
                                    </div>
                                </td>
                                <td>
                                    <?php echo (float)$prod->price * (int)$prod->quantity; ?>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <?php if (!empty($_SESSION['cart-gpu'])) { ?>
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
                    if (!empty($_SESSION['cart-gpu'])) {
                        $products = $_SESSION['cart-gpu'];
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
                                    <div class="cart-plus-minus">
                                        <button onclick='DecreaseGpu(<?php echo $prod->id ?>)'>-</button>
                                        <span><?php echo $prod->quantity ?></span>
                                        <button onclick='IncreaseGpu(<?php echo $prod->id ?>)'>+</button>
                                    </div>
                                </td>
                                <td>
                                    <?php echo (float)$prod->price * (int)$prod->quantity; ?>
                                </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php
    }

    if (empty($_SESSION['cart-cpu']) and empty($_SESSION['cart-ram']) and empty($_SESSION['cart-gpu'])) {
    ?>
        <div class="soon">
            <h1>Cart is empty</h1>
        </div>
    <?php
    } else {
        $totalPrice = $cpuTotalPrice + $gpuTotalPrice + $ramTotalPrice;
    ?>
        <div class="cart-total">
            <div>
                <th>Total Price:</th>
                <th><b><?php echo $totalPrice ?></b></th>
            </div>
            <div class="checkout-btn">
                <?php
                    if(isset($_SESSION['username'])){ ?>
                        <a href="./controller/CheckOutAction.php">Check Out</a>
                    <?php } else{ ?>
                        <a href="login.php">Check Out</a>
                    <?php }
                ?>
                
            </div>

        </div>
    <?php }
    ?>
    <br/>
    <br/>
    <div class="text-center"><a href="./history.php"><b>Check History</b></a></div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>