<!DOCTYPE html>
<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">

  <script type="text/javascript" src="home.js"></script>

  <meta charset="utf-8">
  <head>

    <title>Main Menu</title>

  </head>
  <body>

    <div class="topnav">
      <a class="active" href="home.php">Home</a>
      <a href="#contact">Contact</a>
      <a href="login.php">User login</a>
      <a href="register.php">New Account</a>
      <a href="#about">About</a>
    </div>


    <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">Forager</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
</div>


  </body>
</html>
