<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './model/DBconnect.php';
$allGpu = getAllGpu();
?>
<link rel="stylesheet" href="./css/products.css">
<script src="./js/addToCart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->

    <div class="all-product-container">

        <!-- Gpu Section -->
        <?php foreach ($allGpu as $gpu) {
            ?>
            <div class="product-container">
                <div class="product-image-container">
                <?php if ($gpu['image']) { ?>
                        <a href="./images/<?php echo $gpu['image'] ?>">
                            <img src="./images/<?php echo $gpu['image'] ?>" alt="product image">
                        </a>
                    <?php } else { ?>
                        <a href="./images/gpu.png">
                            <img src="./images/gpu.png" alt="product image">
                        </a>
                    <?php } ?>
                </div>
                <div class="product-name">
                    <?php echo $gpu['gpuName'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['gpuRamSize'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['gpuClockSpeed'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['gpuRamType'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $gpu['price'] ?>
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