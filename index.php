<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel-maroc</title>
    <!-- swiper -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link-css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- header -->
<section class="header">
    <a href="index.php" class="logo">Travel.</a>
    <nav class="navbar">
        <a href="index.php" class="active-hover">Homme</a>
        <a href="about.php">About</a>
        <a href="packages.php">Packages</a>
        <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- homme -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(img/sahara.jpg) no-repeat">
                <div class="content">
                    <span>explore , discover , travel</span>
                    <h3>travel around the world</h3>
                    <a href="packages.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(img/beach.jpg) no-repeat;">
                <div class="content">
                    <span>explore , discover , travel</span>
                    <h3>travel around the </h3>
                    <a href="packages.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide"style="background:url(img/jame3.jpg) no-repeat">
                <div class="content" >
                    <span>explore , discover , travel</span>
                    <h3>travel around </h3>
                    <a href="packages.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>




<!-- service -->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="img/adv.png" alt="">
            <h3>adventur</h3>
        </div>
        <div class="box">
            <img src="img/guide.png" alt="">
            <h3>tour guide</h3>
        </div>
        <div class="box">
            <img src="img/trekking.png" alt="">
            <h3>trekking</h3>
        </div>
        <div class="box">
            <img src="img/fire.png" alt="">
            <h3>camp fire</h3>
        </div>
        <div class="box">
            <img src="img/off rouad.png" alt="">
            <h3>off road</h3>
        </div>
        <div class="box">
            <img src="img/camping.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>


<!-- home-about -->
<section class="home-about">
    <div class="image">
        <img src="img/about.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quaerat quisquam saepe a corporis. Deleniti aspernatur facere totam hic aperiam!</p>
        <a href="about.php" class="btn">read more</a>
     </div>
    
</section>
    

<!--home Packages -->
<section class="home-packages">
    <h1 class="heading-title">Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="img/pack1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aliquid libero non incidunt explicabo consequuntur molestias quae voluptatibus aperiam nam.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/beach.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventur</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aliquid libero non incidunt explicabo consequuntur molestias quae voluptatibus aperiam nam.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/jame3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventur</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta aliquid libero non incidunt explicabo consequuntur molestias quae voluptatibus aperiam nam.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
</section>


<!-- home-offer -->
<section class="home-offer">
    <div class="content">
        <h3>upto 60% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima voluptatibus doloribus consequuntur quis suscipit.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>


<!--footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i>Homme</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="packages.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>
        <div class="box">
            <h3>Extra links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i>ask question</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About us</a>
            <a href="packages.php"><i class="fas fa-angle-right"></i>Privacy policy</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>term of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="index.php"><i class="fas fa-phone"></i>+212 611559339</a>
            <a id="textt" href="#"><i class="fas fa-envelope"></i>zakaria.beddari20@gmail.com</a>
            <a href="packages.php"><i class="fas fa-map"></i>Maroc , El jadida</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            <a href="index.php"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="about.php"><i class="fab fa-instagram"></i>instagram</a>
            <a href="packages.php"><i class="fab fa-x"></i>twitter</a>
            <a href="book.php"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>
    <div class="credit">created by <span>Zakaria Beddari</span>｜all ritgh reserved &copy;</div>
</section>




    <!-- swiper-css -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- link-js -->
    <script src="js/script.js"></script>
</body>
</html>