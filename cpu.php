<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './model/DBconnect.php';
$allCpu = getAllCpu();
?>
<link rel="stylesheet" href="./css/products.css">
<script src="./js/addToCart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->

    <div class="all-product-container">
        <!-- Cpu Section -->
        <?php foreach ($allCpu as $cpu) {
        ?>
            <div class="product-container">
                <div class="product-image-container">
                    <?php if ($cpu['image']) { ?>
                        <a href="./images/<?php echo $cpu['image'] ?>">
                            <img src="./images/<?php echo $cpu['image'] ?>" alt="product image">
                        </a>
                    <?php } else { ?>
                        <a href="./images/cpu.png">
                            <img src="./images/cpu.png" alt="product image">
                        </a>
                    <?php } ?>
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
                <div class="product-quantity">
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
    </div>



    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>