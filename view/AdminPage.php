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
<link rel="stylesheet" href="../css/AdminPage.css">
<script src="../js/AdminPage.js"></script>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/header.php' ?>
    <!-- Header End -->
    <div class="add-buttons">
        <a href="AddCpu.php"><button class="button-5" role="button">+ Add CPU</button></a>
        <a href="AddGpu.php"><button class="button-5" role="button">+ Add GPU</button></a>
        <a href="AddRam.php"><button class="button-5" role="button">+ Add RAM</button></a>
    </div>

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
                <div class="product-ratings">
                    <?php echo $cpu['cpuSocket'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $cpu['Price'] ?>
                </div>
                <div class="product-buttons">
                    <a href="EditCpu.php?cpuId=<?php echo $cpu['cpuId'] ?>"><button>Update</button></a>
                    <button id="delete-btn" onclick='DelCpu(<?php echo $cpu["cpuId"] ?>)'>Delete</button>
                </div>
            </div>
        <?php } ?>

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
                    <?php echo $gpu['GPU_VideoOutput'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $gpu['Graphics_RamType'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $gpu['Price'] ?>
                </div>
                <div class="product-buttons">
                    <button>Update</button>
                    <button id="delete-btn">Delete</button>
                </div>
            </div>
        <?php } ?>


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
                    <?php echo $ram['RamSpeed'] ?>
                </div>
                <div class="product-quantity">
                    <?php echo $ram['RamType'] ?>
                </div>
                <div class="product-price">
                    <span>৳</span>
                    <?php echo $ram['Price'] ?>
                </div>
                <div class="product-buttons">
                    <button>Update</button>
                    <button id="delete-btn">Delete</button>
                </div>
            </div>
        <?php } ?>
    </div>



    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>