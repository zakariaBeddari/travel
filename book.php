<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel-book</title>
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
        <a href="index.php" >Homme</a>
        <a href="about.php">About</a>
        <a href="packages.php">Packages</a>
        <a href="book.php"class="active-hover">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>


<div class="heading" style="background: url(img/footer.jpg) no-repeat">
    <h1>book now</h1>
</div>


<section class="booking">
    <h1 class="heading-title">book your trips</h1>
    <form action="form__boking.php" method="post" class="book-form">
        <div class="flex">
            <div class="input-box">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="input-box">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="input-box">
                <span>phone :</span>
                <input type="number" placeholder="enter your phone" name="phone">
            </div>
            <div class="input-box">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="input-box">
                <span>where to :</span>
                <input type="text" placeholder="palce you want to visit" name="location">
            </div>
            <div class="input-box">
                <span>how many :</span>
                <input type="text" placeholder="number guests" name="guests">
            </div>
            <div class="input-box">
                <span>arrivals :</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="input-box">
                <span>leavings :</span>
                <input type="date"  name="leavings">
            </div>
        </div>
        <input type="submit" value="submit" name="submit" class="btn">
    </form>
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