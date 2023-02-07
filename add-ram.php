<?php
if (!isset($_SESSION)) {
    session_start();
}

if (empty($_SESSION["username"])) {
    header("location:login.php");
}
include 'controller/AddRamAction.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include 'include/head.php';
?>
<link rel="stylesheet" href="./css/addForm.css">
<!-- head End -->

<body>
    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <!-- partial:index.partial.html -->
    <div class="main-div">
        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="ramName">RAM Name</label>
                    <input type="text" id="ramName" name="ramName" placeholder="RAM Name">
                    <span id='ramNameErr'>
                        <?php echo $ramNameErr; ?>
                    </span>
                </div>

                <div class="form-group">
                    <label for="ramSpeed">RAM Speed</label>
                    <input type="text" id="ramSpeed" name="ramSpeed" placeholder="RAM Speed">
                    <span id='ramSpeedErr'>
                        <?php echo $ramSpeedErr; ?>
                    </span>
                </div>

                <div class="form-group">
                    <label for="ramType">RAM Type</label>
                    <input type="text" id="ramType" name="ramType" placeholder="RAM Type">
                    <span id='ramTypeErr'>
                        <?php echo $ramTypeErr; ?>
                    </span>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" placeholder="Price">
                    <span id='priceErr'>
                        <?php echo $priceErr; ?>
                    </span>
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" placeholder="Stock">
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

                <input type="submit" value="+ Add RAM">


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