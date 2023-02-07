<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include 'include/head.php' ?>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->
    <div class="cards">
        <div class="flip-card">
            <a href="./gpu.php">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/gpu.png" />
                    </div>
                    <div class="flip-card-back">
                        <img src="./images/gpu.png" style="margin: 50px" />
                        <h1>GPU</h1>
                        <P>Graphic Processing Unit</P>
                    </div>
                </div>
            </a>
        </div>
        <div class="flip-card">
            <a href="./cpu.php">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/cpu.png" />
                    </div>
                    <div class="flip-card-back">
                        <img src="./images/cpu.png" style="margin: 50px" />
                        <h1>CPU</h1>
                        <p>Control Processing Unit</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="flip-card">
            <a href="./ram.php">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="./images/ram.png" />
                    </div>
                    <div class="flip-card-back">
                        <img src="./images/ram.png" style="margin: 50px" />
                        <h1>RAM</h1>
                        <P>Random access memory</P>
                    </div>
                </div>
            </a>
        </div>
    </div>

    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->
</body>

</html>