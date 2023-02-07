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

    <h1 class="text-center succes-msg"><i class="bi bi-check-circle-fill"></i><span>Order Success</span></h1>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>
<script>
    $(window).load(function() {
        window.setTimeout(function() {
            window.location.href = "./history.php";
        }, 3000)
    });
</script>

</html>