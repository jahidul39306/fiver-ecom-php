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

                <label for="ramName">RAM Name</label>
                <input type="text" id="ramName" name="ramName" placeholder="RAM Name">

                <label for="ramSpeed">RAM Speed</label>
                <input type="text" id="ramSpeed" name="ramSpeed" placeholder="RAM Speed">

                <label for="ramType">RAM Type</label>
                <input type="text" id="ramType" name="ramType" placeholder="RAM Type">

                <label for="price">Price</label>
                <input type="text" id="price" name="price" placeholder="Price">

                <label for="stock">Stock</label>
                <input type="text" id="stock" name="stock" placeholder="Stock">

                <label for="image">Image</label>
                <input type="text" id="image" name="image" placeholder="Image">

                <input type="submit" value="+ Add RAM">

            </form>
        </div>
    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>