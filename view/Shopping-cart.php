<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head from shopp-->
<?php include 'include/head.php' ?>
<link rel="stylesheet" href="../css/Shopping-cart.css">
<script src="../js/Shopping-cart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/header.php' ?>
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
                        <th>Available Stock</th>
                        <th>Quantity</th>
                        <th>Action</th>
                        <th>Image</th>
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
                                echo $prod->Price; ?>
                            </td>
                            <td>
                                <?php echo $prod->Stock; ?>
                            </td>
                            <td>
                                <?php echo $prod->quantity ?>
                            </td>
                            <td class="product-buttons">
                                <button onclick='DecreaseCpu(<?php echo $prod->cpuId ?>)'>-</button>
                                <button onclick='IncreaseCpu(<?php echo $prod->cpuId ?>)'>+</button>
                            </td>
                            <td class="td-image-container"><img src="/Web-Based-Project-Fi/images/download-cpu.jpg"
                                    alt="product image"></td>
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
                        <th>Available Stock</th>
                        <th>Quantity</th>
                        <th>Action</th>
                        <th>Image</th>
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
                                    <?php echo $prod->RamName; ?>
                                </td>
                                <td>
                                    <?php echo $prod->RamSpeed; ?>
                                </td>
                                <td>
                                    <?php echo $prod->RamType; ?>
                                </td>
                                <td>
                                    <?php
                                    $ramTotalPrice += (float)$prod->Price * (int)$prod->quantity; 
                                    echo $prod->Price; ?>
                                </td>
                                <td>
                                    <?php echo $prod->Stock; ?>
                                </td>
                                <td>
                                    <?php echo $prod->quantity ?>
                                </td>
                                <td class="product-buttons">
                                    <button onclick='DecreaseRam(<?php echo $prod->RamID ?>)'>-</button>
                                    <button onclick='IncreaseRam(<?php echo $prod->RamID ?>)'>+</button>
                                </td>
                                <td class="td-image-container"><img src="/Web-Based-Project-Fi/images/download-cpu.jpg"
                                        alt="product image"></td>
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
                        <th>Available Stock</th>
                        <th>Quantity</th>
                        <th>Action</th>
                        <th>Image</th>
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
                                    <?php echo $prod->GPU_Name; ?>
                                </td>
                                <td>
                                    <?php echo $prod->Graphics_RamSize; ?>
                                </td>
                                <td>
                                    <?php echo $prod->GPU_ClockSpeed; ?>
                                </td>
                                <td>
                                    <?php echo $prod->GPU_VideoOutput; ?>
                                </td>
                                <td>
                                    <?php echo $prod->Graphics_RamType; ?>
                                </td>
                                <td>
                                    <?php
                                    $gpuTotalPrice += (float)$prod->Price * (int)$prod->quantity;  
                                    echo $prod->Price; ?>
                                </td>
                                <td>
                                    <?php echo $prod->Stock; ?>
                                </td>
                                <td>
                                    <?php
                                    // $gpuTotalPrice = $gpuTotalPrice + $prod->Price * $prod->quantity;
                                    echo $prod->quantity ?>
                                </td>
                                <td class="product-buttons">
                                    <button onclick='DecreaseGpu(<?php echo $prod->GPU_Id ?>)'>-</button>
                                    <button onclick='IncreaseGpu(<?php echo $prod->GPU_Id ?>)'>+</button>
                                </td>
                                <td class="td-image-container"><img src="/Web-Based-Project-Fi/images/download-cpu.jpg"
                                        alt="product image"></td>
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
        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Total Price:</th>
                        <th><?php echo $totalPrice ?></th>
                        <td><a href="../control/CheckOutAction.php"><button class="product-buttons">Check Out</button></a>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    <?php }
    ?>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>