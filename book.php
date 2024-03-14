
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http equiv="x-ua-compatible" content="ie=edge">
         <title>About</title>
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
<!--book  starts-->
<div class="heading3" >
<h1>Book now</h1>
</div>

<!--booking section starts--->
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
  <forme action="book_form.php" method="post" class="book-form">
     <div class="flex">
          <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
          </div>

          <div class="inputBox">
            <span>email :</span>
            <input type="text" placeholder="enter your email" name="email">
          </div>
          <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputBox">
            <span>address:</span>
            <input type="text" placeholder="enter your address" name="address">
            </div>
        
            <div class="inputBox">
            <span>where to:</span>
            <input type="text" placeholder="where in Africa?" name="location">
            </div>
        
            <div class="inputBox">
            <span>type of safari/package:</span>
            <input type="text" placeholder="enter your safari/package" name="safari/package">
            </div>
           
            <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="how many guests?" name="guest">
            </div>
            
            <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" placeholder="enter your arrivals" name="arrivals">
            </div>

            <div class="inputBox">
            <span>departure:</span>
            <input type="date" placeholder="leaving date" name="departure">
            </div>
     </div>

     <input type="submit" value="submit" class=" submit-btn" name="send">
</forme>

</section>




<!--booking section ends--->
 





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
<!--custom js-->
<script scr="book.js"></script>
</body>

</html>