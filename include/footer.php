<footer>
    <div class="footer">
        <div class="col-1">
            <h2>USEFUL LINKS</h2>
            <br>
            <a href="./index.php">Home</a>
            <a href="./about.php">About Us</a>
            <a href="./contact.php">Contact Us</a>
        </div>
        <div class="col-2">
            <h2>PROJECT</h2>
            <br>
            <p> Web-Based Project</p>
            <br>
            <a href="https://www.iau.edu.sa/ar/colleges/college-of-computer-science-and-information-technology" target="_blank">CCSIT IAU</a>
        </div>
        <div class="col-3">
            <h2>CONTACT</h2>
            <br>
            <p>Follow Us</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="https://instagram.com/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://youtube.com/" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>
            Copyright &#169; 2022. PC Parts. All Rights Reserved.
        </p>
    </div>

</footer>
<!--scripts-->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="./js/script.js"></script>
<script src="https://kit.fontawesome.com/d53e2c7b86.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
    $(document).ready(function() {
        function FetchCartInfo() {
            $.ajax({
                url: "controller/CartInfo.php",
                data: {
                    action: "getCartInfo",
                },
                type: "POST",
                success: function(data) {
                    data = JSON.parse(data);
                    document.getElementById("totalCartAmount").innerHTML = data.totalAmount.toFixed(2);
                    document.getElementById("totalProduct").innerHTML = data.totalItem;
                },
            });
            return false;
        }
        FetchCartInfo()
    })
</script>