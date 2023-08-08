<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">our pricing</h1>

   <div class="box-container">

      <div class="box">
         <h3>basic plan</h3>
         <div class="price">$250/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>premium plan</h3>
         <div class="price">$650/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>ultimate plan</h3>
         <div class="price">$1250/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <h3>sam</h3>
            <p>I got my wedding planned  by the perfect weddings were the best team to choose for planning all my wedding arrangements!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <h3>gipsy</h3>
            <p>I have attended a wedding where the decor was by The perfect wedding. The decor was amazing and the way had taken care of the minutest things in the wedding.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <h3>shubham</h3>
            <p>One of the best wedding planners I'v come across. Since the past few years we only book them for any occasion. Most trust worthy> The perfect weddings team is so humble and cater to your needs the best they can.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>rohini</h3>
            <p>I have recently attended my best friends wedding & it was by Thr Perfect Weddings I have already started discussing my own functions with them.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>vijay</h3>
            <p>Your team did an excellent job with decor for all my brothers wedding functions. Whether it was a simple, traditional decor for mehendi or the elegant, modern look for the wedding ceremony</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <h3>ashwini</h3>
            <p>Wedding marks as one of the most special occasions in ones life. I got an opportunity to attend a wedding planned and organized by the perfect wedding.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>