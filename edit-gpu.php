<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
if (!isset($_SESSION)) {
    session_start();
}

if (empty($_SESSION["username"])) {
    header("location:login.php");
}
include './controller/EditGpuAction.php';
include 'include/head.php';
?>
<link rel="stylesheet" href="./css/addForm.css">
<!-- head End -->

<body>
    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <div class="main-div">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="gpuName">GPU Name</label>
                    <input type="text" id="gpuName" name="gpuName" placeholder="GPU Name" value="<?php echo $prod["gpuName"] ?? '' ?>">
                    <span id='gpuNameErr'>
                        <?php echo $gpuNameErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="gpuRamSize">GPU Ram Size</label>
                    <input type="text" id="gpuRamSize" name="gpuRamSize" placeholder="GPU Ram Size" value="<?php echo $prod["gpuRamSize"] ?? '' ?>">
                    <span id='gpuRamSizeErr'>
                        <?php echo $gpuRamSizeErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="gpuClockSpeed">GPU Clock Speed</label>
                    <input type="text" id="gpuClockSpeed" name="gpuClockSpeed" placeholder="GPU Clock Speed" value="<?php echo $prod["gpuClockSpeed"] ?? '' ?>">
                    <span id='gpuClockSpeedErr'>
                        <?php echo $gpuClockSpeedErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="gpuVideoOutput">GPU Video Output</label>
                    <input type="text" id="gpuVideoOutput" name="gpuVideoOutput" placeholder="GPU Video Output" value="<?php echo $prod["gpuVideoOutput"] ?? '' ?>">
                    <span id='gpuVideoOutputErr'>
                        <?php echo $gpuVideoOutputErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="gpuRamType">GPU Ram Type</label>
                    <input type="text" id="gpuRamType" name="gpuRamType" placeholder="GPU Ram Type" value="<?php echo $prod["gpuRamType"] ?? '' ?>">
                    <span id='gpuRamTypeErr'>
                        <?php echo $gpuRamTypeErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Price" value="<?php echo $prod["price"] ?? '' ?>">
                    <span id='priceErr'>
                        <?php echo $priceErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" placeholder="Stock" value="<?php echo $prod["stock"] ?? '' ?>">
                    <span id='stockErr'>
                        <?php echo $stockErr; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" accept="image/*" id="image" name="image" onchange="handleUploadImage(this);" />
                    <input type="hidden" id="checkImgUpload" name="checkImgUpload" value="10" />
                    <span id='imageErr'>
                        <?php echo $imageErr; ?>
                    </span>
                </div>
                <input type="hidden" name="id" value="<?php echo $prod["id"] ?>">
                <input type="submit" value="Update">

            </form>
        </div>
    </div>

    <script>
        function handleUploadImage(input) {
            var myhidden = document.getElementById("checkImgUpload");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    myhidden.value = 20;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>