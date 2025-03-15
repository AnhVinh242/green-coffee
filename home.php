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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Green Coffee - home page</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <section class="home-section">
            <div class="slider">
                <div class="slider__slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Lorem ipsum dolor sit amet</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                        <a href="view_products.php" class="btn">show now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- silde end -->
                <div class="slider__slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Wellcom to my shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                        <a href="view_products.php" class="btn">show now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- silde end -->
                <div class="slider__slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Wellcom to my shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                        <a href="view_products.php" class="btn">show now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- silde end -->
                <div class="slider__slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Wellcom to my shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                        <a href="view_products.php" class="btn">show now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <!-- silde end -->
                <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
                <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
            </div>
        </section>
        <!-- home slider end -->
        <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="img/thumb2.jpg" alt="">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                    <i class="bx bx-chevron-right"></i>

                </div>
                <div class="box">
                    <img src="img/thumb0.jpg" alt="">
                    <h3>lemon tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                    <i class="bx bx-chevron-right"></i>

                </div>
                <div class="box">
                    <img src="img/thumb1.jpg" alt="">
                    <h3>green coffee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                    <i class="bx bx-chevron-right"></i>

                </div>
                <div class="box">
                    <img src="img/thumb.jpg" alt="">
                    <h3>green tea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>
                    <i class="bx bx-chevron-right"></i>

                </div>
            </div>
        </section>
        <!-- container -->
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="img/about-us.jpg" alt="" class="img_about">
                </div>
                <div class="box">
                    <img src="img/download.png" alt="">
                    <span>heathy tea</span>
                    <h1>sale up to 50% off</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia est et voluptas vel tempore, </p>

                </div>
            </div>
        </section>

        <!-- shop -->
        <section class="shop">
            <div class="title">
                <img src="img/download.png" alt="">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="img/about.jpg" alt="" class="img_about">
                <div class="row-detail">
                    <img src="img/basil.jpg" alt="" class="img_basil">
                    <div class="top-footer">
                        <h1>a cup of green tea makes you heathy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="img/card.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
                <div class="box">
                    <img src="img/card0.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
                <div class="box">
                    <img src="img/card1.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
                <div class="box">
                    <img src="img/card2.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
                <div class="box">
                    <img src="img/10.jpg" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
                <div class="box">
                    <img src="img/6.webp" alt="">
                    <a href="view_products.php" class="btn">shop now</a>                   
                </div>
            </div>
        </section>
        <!-- category -->
        <section class="shop-category">
            <div class="box-container">
                <div class="box box1">
                    <img src="img/6.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box box2">
                    <img src="img/7.jpg" alt="">
                    <div class="detail">
                        <span>new in taste</span>
                        <h1>coffee house</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- services -->
        <section class="services">
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
                        <h3>gift vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="img/icon.png" alt="">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                        <p>dropship worldwide </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand -->
        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="img/brand1.jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand2.jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand3.jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand4.jpg" alt="">
                </div>
                <div class="box">
                    <img src="img/brand5.jpg" alt="">
                </div>
                
            </div>
        </section>

        
        <?php include 'components/footer.php'; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.15.10/sweetalert2.min.js"></script>

    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>