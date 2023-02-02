<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Head -->
<?php
include 'include/head.php';
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
            <form action="action_page.php">

                <label for="gpuName">GPU Name</label>
                <input type="text" id="gpuName" name="gpuName" placeholder="GPU Name">

                <label for="gpuRamSize">GPU Ram Size</label>
                <input type="text" id="gpuRamSize" name="gpuRamSize" placeholder="GPU Ram Size">

                <label for="gpuClockSpeed">GPU Clock Speed</label>
                <input type="text" id="gpuClockSpeed" name="gpuClockSpeed" placeholder="GPU Clock Speed">

                <label for="gpuVideoOutput">GPU Video Output</label>
                <input type="text" id="gpuVideoOutput" name="gpuVideoOutput" placeholder="GPU Video Output">

                <label for="gpuRamType">GPU Ram Type</label>
                <input type="text" id="gpuRamType" name="gpuRamType" placeholder="GPU Ram Type">

                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price">

                <label for="stock">Stock</label>
                <input type="text" id="stock" name="stock" placeholder="Stock">

                <label for="image">Image</label>
                <input type="text" id="image" name="image" placeholder="Image">

                <input type="submit" value="+ Add GPU">

            </form>
        </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>