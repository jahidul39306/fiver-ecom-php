<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include 'include/head.php' ?>
<!-- head End -->

<body>

    <!-- Header -->
    <?php include 'include/navbar.php' ?>
    <!-- Header End -->

    <div class="container about">
        <h1 class="text-center">Contact Us</h1>
        <div class="left">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=26.3702885,50.1872145&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdf">Pdf</a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 400px;
                    }

                    .gmap_iframe {
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>
        <div class="right">
            <form action="">
                <label for="fname">Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name">

                <label for="lname">Email</label>
                <input type="text" id="lname" name="lastname" placeholder="Your Email">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>

                <div class="text-center"><input type="submit" value="Submit"></div>

            </form>
        </div>

    </div>

    <!--footer-->
    <?php include 'include/footer.php' ?>
    <!-- footer end -->

</body>

</html>