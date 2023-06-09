<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>

<!-- header section start -->

<section class="header">
    
    <a href="home.php" class="logo">IMdc.</a>

    
    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search">
            <a href="#"></a>
        </label>
    </form>
    
    <nav class="navbar">
        <a href="watchlist.php"><i class="far fa-plus-square"></i> Watchlist</a>
        <a href="signin.php"><i class="far fa-user-circle"></i> Sign in</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section end -->


<!-- home section starts -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(image/1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="movie.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(image/2.jpeg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="movie.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(image/3.jpeg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel arround the world</h3>
                    <a href="movie.php" class="btn">discover more</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        

    </div>

</section>

<!-- home section ends -->










<!-- footer section start -->

<section class="footer">

    <div class="box-container">
        
        <div class="box">
            <h3>quick links</h3>
            <a href="watchlist.php"> <i class="fas fa-angle-right"></i> Watchlist</a>
            <a href="signin.php"> <i class="fas fa-angle-right"></i> Sign in</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> team9@ntnu.edu.tw</a>
            <a href="#"> <i class="fas fa-map"></i> taipei, NTNU </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>

    <div class="credit"> created by <span>team 9</span> | all rights reserved! </div>

</section>

<!-- footer section end -->

<!-- swiper link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>