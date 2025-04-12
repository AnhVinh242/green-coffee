<?php
    include 'components/connection.php';
?>
<style type="text/css">
    <?php 
        include 'style.css';
    ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Green Coffee - about us page</title>
</head>
<body>
    <?php 
        include 'components/header.php';
    ?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="img/3.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/about.png" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/2.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon Teaname</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="img/1.webp" alt="">
                <div class="detail">
                    <span>coffee</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="img/download.png" alt="" class="logo">
                <h1>why choose us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, nemo.</p>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/icon2.png" alt="">
                    <div class="detail">
                        <h3>great savings</h3>
                        <p>save big avery order</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon1.png" alt="">
                    <div class="detail">
                        <h3>24*7 support</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon0.png" alt="">
                    <div class="detail">
                        <h3>gift voucher</h3>
                        <p>voucher on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon.png" alt="">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                        <p>dropship worldwide</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="img/3.png" alt="">
                </div>
                <div class="detail">
                    <h1>visit our beaifull showroom</h1>
                    <p>Lorem ipsum duptatem beatae, ratione aperiam.
                    Aliquid, nihil. Sequi fugiat tiae nesciunt dolores? Velit tenetur amet, cumque et praesentium ipsa quam.
                    Pariatur maiores, labore iususantium? Officia, quis.
                    Facere ad aspernatur u nequlpa odit dignissimos doloribus veritatis dolorem! Vero totam excepturi itaque architecto!
                    </p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="img/download.png" alt="" class="logo">
                <h1>what people say about us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non laborum hic reiciendis quasi ab? 
                    Doloribus, possimus? Maxime magnam a reiciendis.
                </p>
            </div>
                <div class="container">
                    <div class="testimonial-item ">
                        <img src="img/01.jpg" alt="">
                        <h1>sara shee</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odio 
                            labore optio? Nesciunt itaque perspiciatis cum eum aliquam porro saepe.
                        </p>
                    </div>
                    <div class="testimonial-item active">
                        <img src="img/02.jpg" alt="">
                        <h1>john shee</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odio 
                            labore optio? Nesciunt itaque perspiciatis cum eum aliquam porro saepe.
                        </p>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/03.jpg" alt="">
                        <h1>selena shee</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum odio 
                            labore optio? Nesciunt itaque perspiciatis cum eum aliquam porro saepe.
                        </p>
                    </div>
                    <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                    <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
        </div>
        <?php include 'components/footer.php';?>
    </div>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    </script>
    <script src="script.js"></script>
    <?php include 'components/alert.php';?>
</body>
</html>