<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head -->
<?php
include 'include/head.php';
include '../model/DBconnect.php';
$allCpu = searchAllCpu();
$allGpu = searchAllGpu();
$allRam = searchAllRam();
?>
<link rel="stylesheet" href="../css/Computer-comp.css">
<script src="../js/Computer-comp.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/header.php' ?>
    <!-- Header End -->

    <div class="all-product-container">
        <!-- Cpu Section -->
        <?php foreach ($allCpu as $cpu) {
            ?>
            <div class="product-container">
                <div class="product-image-container">
                    <a href="Web-Based-Project-Fi/images/cpu.png">
                        <img src="/Web-Based-Project-Fi/images/cpu.png" alt="product image">
                    </a>
                </div>
                <div class="product-name">
                    <?php echo $cpu['cpuName'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $cpu['cpuModel'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $cpu['cpuSpeed'] ?>
                </div>
                <div class="product-ratings">
                    <?php echo $cpu['cpuSocket'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $cpu['Price'] ?>
                </div>
                <div class="product-buttons">
                    <button onclick='AddToCartCpu(<?php echo json_encode($cpu) ?>)'>Add to Cart</button>
                </div>
            </div>
        <?php } ?>
        <!-- Ram Section -->
        <?php foreach ($allRam as $ram) {
            ?>
            <div class="product-container">
                <div class="product-image-container">
                    <a href="Web-Based-Project-Fi/images/cpu.png">
                        <img src="/Web-Based-Project-Fi/images/ram.png" alt="product image">
                    </a>
                </div>
                <div class="product-name">
                    <?php echo $ram['RamName'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $ram['RamType'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $ram['RamSpeed'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $ram['Price'] ?>
                </div>
                <div class="product-buttons">
                    <button onclick='AddToCartRam(<?php echo json_encode($ram) ?>)'>Add to Cart</button>
                </div>
            </div>
        <?php } ?>
        <!-- Gpu Section -->
        <?php foreach ($allGpu as $gpu) {
            ?>
            <div class="product-container">
                <div class="product-image-container">
                    <a href="Web-Based-Project-Fi/images/cpu.png">
                        <img src="/Web-Based-Project-Fi/images/gpu.png" alt="product image">
                    </a>
                </div>
                <div class="product-name">
                    <?php echo $gpu['GPU_Name'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['Graphics_RamSize'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['GPU_ClockSpeed'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['Graphics_RamType'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $gpu['Price'] ?>
                </div>
                <div class="product-buttons">
                    <button onclick='AddToCartGpu(<?php echo json_encode($gpu) ?>)'>Add to Cart</button>
                </div>
            </div>
        <?php } ?>
    </div>



    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>