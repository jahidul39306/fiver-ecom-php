<?php
if (!isset($_SESSION)) {
    session_start();
}

if (empty($_SESSION["username"]) or $_SESSION['userType'] != 'admin') {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './model/DBconnect.php';
$allCpu = getAllCpu();
$allGpu = getAllGpu();
$allRam = getAllRam();
?>
<link rel="stylesheet" href="./css/AdminPage.css">
<script src="./js/AdminPage.js"></script>

<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <div class="add-buttons">
        <a href="./add-cpu.php"><button class="button-5" role="button">+ Add CPU</button></a>
        <a href="./add-gpu.php"><button class="button-5" role="button">+ Add GPU</button></a>
        <a href="./add-ram.php"><button class="button-5" role="button">+ Add RAM</button></a>
    </div>
    <div class="all-cat-cont">
        <h1><span>All CPU</span></h1>
        <div class="all-product-container">
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
                        <a href="edit-cpu.php?id=<?php echo $cpu['id'] ?>">Update</a>
                        <button id="delete-btn" onclick="DeleteCPU(<?php echo $cpu['id'] ?>)">Delete</button>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h1><span>All GPU</span></h1>
        <div class="all-product-container">
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
                        <?php echo $gpu['gpuVideoOutput'] ?>
                    </div>
                    <div class="product-quantity">
                        <?php echo $gpu['gpuRamType'] ?>
                    </div>
                    <div class="product-price">
                        <span>৳</span>
                        <?php echo $gpu['price'] ?>
                    </div>
                    <div class="product-buttons">
                        <a href="edit-gpu.php?id=<?php echo $gpu['id'] ?>">Update</a>
                        <button id="delete-btn" onclick="DeleteGPU(<?php echo $gpu['id'] ?>)">Delete</button>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h1><span>All RAM</span></h1>
        <div class="all-product-container">
            <?php foreach ($allRam as $ram) {
            ?>
                <div class="product-container">
                    <div class="product-image-container">
                    <?php if ($ram['image']) { ?>
                            <a href="./images/<?php echo $ram['image'] ?>">
                                <img src="./images/<?php echo $ram['image'] ?>" alt="product image">
                            </a>
                        <?php } else { ?>
                            <a href="./images/ram.png">
                                <img src="./images/ram.png" alt="product image">
                            </a>
                        <?php } ?>
                    </div>
                    <div class="product-name">
                        <?php echo $ram['ramName'] ?>
                    </div>
                    <div class="product-quantity">
                        <?php echo $ram['ramSpeed'] ?>
                    </div>
                    <div class="product-quantity">
                        <?php echo $ram['ramType'] ?>
                    </div>
                    <div class="product-price">
                        <span>৳</span>
                        <?php echo $ram['price'] ?>
                    </div>
                    <div class="product-buttons">
                        <a href="edit-ram.php?id=<?php echo $ram['id'] ?>">Update</a>
                        <button id="delete-btn" onclick="DeleteRam(<?php echo $ram['id'] ?>)">Delete</button>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>