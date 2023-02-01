<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head -->
<?php
include 'include/head.php';
include '../model/DBconnect.php';
$allCpu = searchAllCpu();
?>
<link rel="stylesheet" href="../css/Computer-comp.css">
<script src="../js/Computer-comp.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/header.php' ?>
    <!-- Header End -->

    <div class="all-product-container">
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
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $cpu['Price'] ?>
                </div>
                <div class="product-ratings">
                    <?php echo $cpu['cpuSocket'] ?>
                </div>
                <div class="product-buttons">
                    <button onclick='AddToCart(<?php echo json_encode($cpu) ?>)'>Add to Cart</button>
                </div>
            </div>
        <?php } ?>
    </div>



    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>