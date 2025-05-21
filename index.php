<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

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
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="package.php">Pakage</a>
    <a href="book.php">Book</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

 </section>
<!--header section ends-->  


<!-- home section start -->
<section class="home">
  <div class="swiper home-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide" style="background:url('images/home-slide-1.jpg') no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>travel around the world</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url('images/home-slide-2.jpg') no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>discover the new places</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>

      <div class="swiper-slide slide" style="background:url('images/home-slide-3.jpg') no-repeat">
        <div class="content">
          <span>explore, discover, travel</span>
          <h3>Make your tour memorable</h3>
          <a href="package.php" class="btn">discover more</a>
        </div>
      </div>
    </div>

    <!-- Navigation buttons should be outside the swiper-wrapper but inside swiper -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>
<!-- home section end -->




<!--Services Section start-->
<section class="services">
  <h1 class="heading-title">Our services</h1>
  <div class="box-container">
    <div class="box">
      <img src="images/icon-1.png"alt="">
      <h3>Adventure</h3>
    </div>
    <div class="box">
      <img src="images/icon-2.png"alt="">
      <h3>tour guide</h3>
    </div>
    <div class="box">
      <img src="images/icon-3.png"alt="">
      <h3>treking</h3>
    </div>
    <div class="box">
      <img src="images/icon-4.png"alt="">
      <h3>camp fire</h3>
    </div>
    <div class="box">
      <img src="images/icon-5.png"alt="">
      <h3>off road</h3>
    </div>
    <div class="box">
      <img src="images/icon-6.png"alt="">
      <h3>Camping</h3>
    </div>
  </div>
</section>
<!--Services section end-->


<!--home about section start-->

<section class="home-about">

<div class="image">
<img src="images/about-img.jpg" alt="">
</div>
<div class="content">
  <h3>about us</h3>
  <p>At TripTrek, we’re passionate about helping you explore the world with ease and excitement. Whether you're planning a weekend getaway or a dream vacation, our platform offers expert travel guides, top destinations, and curated tips to make your journey unforgettable. With TripTrek, adventure is just a click away!
</p>
<a href="about.php"class="btn">read more</a>
</div>
</section>
<!--home about section end-->


<!--Home pakage section start-->

<section class="home-packages">

<h1 class="heading-title">our pakages</h1>

<div class="box-container">

<div class="box">
  <div class="image">
    <img src="images/img-1.jpg" alt="">
  </div>
  <div class="content">
    <h3>Karachi</h3>
    <p><strong>3-Day Tour</strong> – Discover the rich culture of Karachi with visits to historical mosques, beaches, and local markets.</p>
    <p><strong>Price:</strong> PKR 30,000 per person</p>
    <a href="book.php" class="btn">book now</a>
  </div>
</div>
<div class="box">
  <div class="image">
    <img src="images/img-2.jpg" alt="">
  </div>
  <div class="content">
   <h3>Peshawar</h3>
   <p><strong>2-Day Tour</strong> – Experience the historic streets of Peshawar, Qissa Khwani Bazaar, and traditional Pashtun cuisine.</p>
   <p><strong>Price:</strong> PKR 20,000 per person</p>
    <a href="book.php" class="btn">book now</a>
  </div>
</div>
<div class="box">
  <div class="image">
    <img src="images/img-3.jpg" alt="">
  </div>
  <div class="content">
    <h3>Swat</h3>
    <p><strong>4-Day Tour</strong> – Explore the "Switzerland of the East" with river views, lush valleys, and waterfalls.</p>
    <p><strong>Price:</strong> PKR 35,000 per person</p>
    <a href="book.php" class="btn">book now</a>
  </div>
</div>
</div>
<div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

<!--Home pakage section ends-->

<!--home offer section start-->

<section class="home-offer">

<div class="content">
  <h3>upto 50% off</h3>
  <p>Grab the best travel deals and limited-time discounts on your favorite destinations. Make your dream trip affordable with our exclusive offers!</p>
  <a href="book.php"class="btn">book now</a>
</div>

</section>







<!--home offer section end-->
















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