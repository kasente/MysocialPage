
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http equiv="x-ua-compatible" content="ie=edge">
         <title>Book Your Venture</title>

         <!--swiper css-->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!--link for font awesome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--link for css-->
         <link rel="stylesheet" href="social.css">

    </head>
<body>
<!--header section starts-->
<section class="header">

<a href="home.php" class="logo">Book Your Venture</a>

<nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
</nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--header section ends-->


<!--home section starts ---->
<section class="home">
  <div class="swiper home-slider">
    <div class=" swiper-wrapper">
        <div class=" swiper-slide slide" style="background:url(gira.jpg) no-repeat"> 
            <div class="content">
                <span>adventure, exploration, discoveries</span>
                <h3>discover the new safari's</h3>
                <a href="package.php" class="btn">discover more</a>

            </div>
          
        </div>

        <div class="swiper-slide slide" style="background:url(ima.jpg) no-repeat"> <!--am having a bug, the photo are not displayed on the browser-->
            <div class="content">
                <span>Adventure, Exploration, Discoveries</span>
                <h3>Travel Africa with us</h3>
                <a href="package.php" class="btn">discover more</a>

            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(watoto.jpg) no-repeat">
            <div class="content">
                <span>Adventure, Exploration, Discoveries</span>
                <h3>Get the full safari experience</h3>
                <a href="package.php" class="btn">discover more</a>

            </div>
        </div>

    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section> <!--stopped at 40:04-->





<!--home section ends-->


<!--service section starts-->
<section class="services">

<h1 class="heading-title">Our Services</h1>

<div class="box-container">

<div class="box">
    <img src="safari3.png" alt=""> <!--1-->
    <h3>Adventure Safari   </h3>
</div>

<div class="box">
    <img src="safari5.png" alt="">  <!--2-stoped here-->
    <h3>Tour guide </h3>
</div>


<div class="box">
    <img src="mont1.png" alt="">  
    <h3>Mount Kilimanjaro Safari's </h3>
</div>


<div class="box">
    <img src="mer.png" alt="">  
    <h3>Zanzibar Safari's </h3>
</div>

<div class="box">
    <img src="masai.png" alt="">  
    <h3>Cultural Safari's </h3>
</div>

<div class="box">
    <img src="fami.png" alt="">  
    <h3>Hosted by locals </h3>
</div>
</div>


</div>
</section>

<!--service section ends-->

<!--home about section starts-->
<section class="home-about">
<div class="image">
    <img src="ima.jpg" alt="">
</div>
<div class="content">
    <h3>about us</h3>
    <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
    <a href="about.php" class="btn">read more</a>
</div>

</section>

<!--home about section ends-->

<!--home package section starts-->
<section class="home-packages">

<h1 class="heading-title">Our Packages</h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="adv.jpg" alt="">
        </div>
        <div class="content">
            <h3>Adventure Safari</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>


    <div class="box">
        <div class="image">
            <img src="zanz.jpg" alt="">
        </div>
        <div class="content">
            <h3>Zanzibar Safari</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>


    <div class="box">
        <div class="image">
            <img src="kili.jpg" alt="">
        </div>
        <div class="content">
            <h3>Mnt Kilimanjaro Safari</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="loco.jpg" alt="">
        </div>
        <div class="content">
            <h3>Cultural Safari</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>


    <div class="box">
        <div class="image">
            <img src="hot.jpg" alt="">
        </div>
        <div class="content">
            <h3>Hosted by locals</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="dege.jpg" alt="">
        </div>
        <div class="content">
            <h3>Draft your own safari, we'll do the rest!</h3>
            <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </div>

</div>

<div class="load-more"><a href="package.php" class="btn" >load more</a></div>
</section>

<!--home package section ends-->

<!--home offer section starts-->
<section class="home-offer">
<div class="content">
    <h3>upto 50% off</h3>
    <p>Book Your Safari with us. We provide the best safari tours around  Africa.</p>
    <a href="book.php" class="btn">book now</a>

</div>

</section>


<!--home offer section ends-->








<!--footer section starts --->
<section class="footer">

<div class="box-container">

<div class="box">
    <h3>quick links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
    <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
    <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
    <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>

</div>


<div class="box">
    <h3>extra links</h3>
    <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
    <a href="#"><i class="fas fa-angle-right"></i> about us</a>
    <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>

</div>


<div class="box">
    <h3>contact info</h3>
    <a href="#"><i class="fas fa-phone"></i>+33 45 67 89 10</a>
    <a href="#"><i class="fas fa-phone"></i>+33 222222</a>
    <a href="#"><i class="fas fa-envelope"></i>kishacente@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Paris, FR</a>
</div>


<div class="box">
    <h3>follow us </h3>
    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>


    </div>
</div>

<div class="credit"> created by <span>imelda.K young web developper</span> | all rights reserved! </div>

</section>



<!--footer section ends--->







<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--custom js-->
<script scr="index.js"></script>
</body>

</html>