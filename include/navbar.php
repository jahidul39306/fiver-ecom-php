<header>
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="./index.php"><img class="icon1" src="./images/computer-case.png"> Pc Parts</a></div>
                <ul class="links">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <?php
                    if (isset($_SESSION['username']) and ($_SESSION['userType']) == 'admin') {
                        echo '<li><a href="./admin.php">Admin</a></li>';
                    }
                    if (isset($_SESSION['username'])) {
                        echo '<li><a href="./login.php?logout=true">Logout</a></li>';
                    } else {
                        echo '<li><a href="./login.php">Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="cart-cont">
                <div>
                    <div>My Cart</div>
                    <b>$<span id="totalCartAmount">0</span></b>
                </div>
                <a href="./cart.php">
                    <i class="bi bi-cart-fill"></i>
                    <span class="count" id="totalProduct">0</span>
                </a>
            </div>
        </nav>
    </div>
</header>