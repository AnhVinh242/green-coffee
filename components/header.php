
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="home.php" class="logo">
                <img src="./img/logo.jpg" alt="">
            </a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="view_product.php">products</a>
                <a href="order.php">orders</a>
                <a href="about.php">about us</a>
                <a href="contact.php">contact us</a> 
            </nav>

            <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup>0</sup></a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
            </div>

            <div class="user-box">
            <p>username : <span><?php //echo $_SESSION['user_name']; ?></span></p>
            <p>Email : <span><?php //echo $_SESSION['user_email']; ?></span></p>
            <a href="login.php" class="btn">login</a>
            <a href="register.php" class="btn">register</a>
            <form action="" method="post">
                <button type="submit" name="logout" class="logout-btn">log out</button>
            </form>
            </div>
        </div>
    </header>
</body>
</html>


<?php



?>