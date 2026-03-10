<?php
    //$page = basename($_SERVER['PHP_SELF']);
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1) ;
?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Khmer Shop</a>
    <img src="assets/images/logo.jpg" class="navbar-brand-img" width="50" height="50" alt="Khmer-Shop Logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link <?= $page == "index.php"?'active':'' ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $page == "categories.php"?'active':'' ?>" href="categories.php">Collections</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $page == "cart.php"?'active':'' ?>" href="cart.php">Cart</a>
            </li>
        <?php
            if(isset($_SESSION['auth']))
            {
               ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['auth_user']['name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="my-orders.php">My Orders</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
               <?php 
            }
            else
            {
                ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == "register.php"?'active':'' ?>" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == "login.php"?'active':'' ?>" href="login.php">Login</a>
                    </li>
                <?php
            }
        ?>
        </ul>
    </div>
  </div>
</nav>

