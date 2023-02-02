<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head -->
<?php
include 'include/head.php';
include '../control/EditCpuAction.php';
?>
<link rel="stylesheet" href="../css/Add-comp.css">
<!-- head End -->

<body>
    <!-- Header -->
    <?php include 'include/header.php' ?>
    <!-- Header End -->
    <!-- partial:index.partial.html -->
    <div class="main-div">
        <div class="container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="cpuName">CPU Name</label>
                <input type="text" id="cpuName" name="cpuName" placeholder="CPU Name" value="<?php echo $prod["cpuName"] ?? '' ?>">
                <span id='cpuNameErr'><?php echo $cpuNameErr; ?></span>
                <br>
                <label for="cpuModel">CPU Model</label>
                <input type="text" id="cpuModel" name="cpuModel" placeholder="CPU Model" value="<?php echo $prod["cpuModel"] ?? ''  ?>">
                <span id='cpuModelErr'><?php echo $cpuModelErr; ?></span>
                <br>
                <label for="cpuSpeed">CPU Speed</label>
                <input type="text" id="cpuSpeed" name="cpuSpeed" placeholder="Your name.." value="<?php echo $prod["cpuSpeed"] ?? ''  ?>">
                <span id='cpuSpeedErr'><?php echo $cpuSpeedErr; ?></span>
                <br>
                <label for="cpuSocket">CPU Socket</label>
                <input type="text" id="cpuSocket" name="cpuSocket" placeholder="CPU Socket" value="<?php echo $prod["cpuSocket"] ?? ''  ?>">
                <span id='cpuSocketErr'><?php echo $cpuSocketErr; ?></span>
                <br>
                <label for="price">Price</label>
                <input type="number" step="0.01" id="price" name="price" placeholder="Price" value="<?php echo $prod["Price"] ?? ''  ?>">
                <span id='priceErr'><?php echo $priceErr; ?></span>
                <br>
                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock" placeholder="Stock" value="<?php echo $prod["Stock"] ?? ''  ?>">
                <span id='stockErr'><?php echo $stockErr; ?></span>
                <br>
                <label for="image">Image</label>
                <input type="text" id="image" name="image" placeholder="Image" value="<?php echo $prod["picture"] ?? ''  ?>">
                <span id='imageErr'><?php echo $imageErr; ?></span>
                <input type="hidden" name="cpuId" value="<?php echo $prod["cpuId"] ?>">
                <input type="submit" value="Edit CPU">

            </form>
        </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>