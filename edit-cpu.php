<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
include './controller/EditCpuAction.php';
if (empty($_SESSION["username"]) or $_SESSION['userType'] != 'admin') {
    header("location:login.php");
}
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
                    <label for="cpuName">CPU Name</label>
                    <input type="text" id="cpuName" name="cpuName" placeholder="CPU Name" value="<?php echo $prod["cpuName"] ?? '' ?>">
                    <span id='cpuNameErr'><?php echo $cpuNameErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="cpuModel">CPU Model</label>
                    <input type="text" id="cpuModel" name="cpuModel" placeholder="CPU Model" value="<?php echo $prod["cpuModel"] ?? ''  ?>">
                    <span id='cpuModelErr'><?php echo $cpuModelErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="cpuSpeed">CPU Speed</label>
                    <input type="text" id="cpuSpeed" name="cpuSpeed" placeholder="Your name.." value="<?php echo $prod["cpuSpeed"] ?? ''  ?>">
                    <span id='cpuSpeedErr'><?php echo $cpuSpeedErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="cpuSocket">CPU Socket</label>
                    <input type="text" id="cpuSocket" name="cpuSocket" placeholder="CPU Socket" value="<?php echo $prod["cpuSocket"] ?? ''  ?>">
                    <span id='cpuSocketErr'><?php echo $cpuSocketErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" step="0.01" id="price" name="price" placeholder="Price" value="<?php echo $prod["Price"] ?? ''  ?>">
                    <span id='priceErr'><?php echo $priceErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" id="stock" name="stock" placeholder="Stock" value="<?php echo $prod["Stock"] ?? ''  ?>">
                    <span id='stockErr'><?php echo $stockErr; ?></span>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" accept="image/*" id="image" name="image" onchange="handleUploadImage(this);" />
                    <input type="hidden" id="checkImgUpload" name="checkImgUpload" value="10" />
                    <span id='imageErr'><?php echo $imageErr; ?></span>
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