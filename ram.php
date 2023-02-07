<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './model/DBconnect.php';
$allRam = getAllRam();
?>
<link rel="stylesheet" href="./css/products.css">
<script src="./js/addToCart.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->

    <div class="all-product-container">
        <!-- Ram Section -->
        <?php foreach ($allRam as $ram) {
        ?>
            <div class="product-container">
                <div class="product-image-container">
                    <a href="./images/ram.png">
                        <img src="./images/ram.png" alt="product image">
                    </a>
                </div>
                <div class="product-name">
                    <?php echo $ram['ramName'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $ram['ramType'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $ram['ramSpeed'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $ram['price'] ?>
                </div>
                <div class="product-buttons">
                    <button onclick='AddToCartRam(<?php echo json_encode($ram) ?>)'>Add to Cart</button>
                </div>
            </div>
        <?php } ?>
    </div>



    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>