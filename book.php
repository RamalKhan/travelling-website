<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book</title>

<!-- Swiper css link -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- Fontawesome cdn link-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!--Custom css file link-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section start-->
 <section class="header">

  <a href="index.php" class="logo">TripTrek!</a>

  <nav class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

 </section>
<!--header section ends-->  

<div class="heading" style="background:url('images/book-img.jpg')">
  <h1>book</h1>
</div>

<!--booking section start-->

<section class="booking">
<h1 class="heading-title">book your trip</h1>

<form action="book-form.php" method="post" class="book-form">

<div class="flex">

<div class="inputBox">
  <span>name :</span>
  <input type="text" placeholder="enter your name" name="name">
</div>

<div class="inputBox">
  <span>name :</span>
  <input type="text" placeholder="enter your email" name="email">
</div>

<div class="inputBox">
  <span>phone :</span>
  <input type="number" placeholder="enter your number" name="phone">
</div>

<div class="inputBox">
  <span>Address :</span>
  <input type="text" placeholder="enter your address" name="address">
</div>

<div class="inputBox">
  <span>where to :</span>
  <input type="text" placeholder="place you want to visit" name="location">
</div>

<div class="inputBox">
  <span>how many :</span>
  <input type="number" placeholder="how many guests" name="guests">
</div>

<div class="inputBox">
  <span>arrivals :</span>
  <input type="date" name="arrivals">
</div>

<div class="inputBox">
  <span>leaving :</span>
  <input type="date" name="leaving">
</div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</form>



</section>




<!--booking section ends-->











<!--Footer section start-->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>quick links</h3>
      <a href="index.php"><i class="fas fa-angle-right"></i>Home</a>
      <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
      <a href="pakage.php"> <i class="fas fa-angle-right"></i>Pakage</a>
      <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
    </div>

    <div class="box">
      <h3>Extra links</h3>
      <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
      <a href="#"><i class="fas fa-angle-right"></i>about us</a>
      <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
      <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>
    <div class="box">
      <h3>contact info</h3>
      <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
      <a href="#"><i class="fas fa-phone"></i>+111-222-3330</a>
      <a href="#"><i class="fas fa-envelope"></i>rammalkhan251@gmail.com</a>
      <a href="#"><i class="fas fa-map"></i>Rawalpindi,pakistan- 4067</a>
    </div>
    <div class="box">
    <h3>Follow Us</h3>
    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
    <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
  </div>
  </div>
<div class="credit">
  <p>&copy; 2025, Triptrek</p>
</div> 
</section>
<!--Footer section end-->







<!-- Swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Custom script file link-->
 <script src="js/script.js"></script>

</body>
</html>