<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О нас</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>почему надо выбрать нас?</h3>
         <p>Мы являемся одним из лидеров в продаже органических продуктов в РФ.</p>
         <a href="contact.php" class="btn">связаться с нами</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>что мы предлагаем?</h3>
         <p> Мы предлагаем всегда свежие продукты, в том числе они все оргнически чистые.</p>
         <a href="shop.php" class="btn">наш магазин</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Отзывы клиентов</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Удобная доставка, все свежое. Спасибо.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Максим</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Все хорошо. Быстрая доставка, продукты наисвежайщие!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Алена</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Продукты высокого качества, упаковка на уровне. Минус из-за скорости доставки, долговато.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Стас</h3>
      </div>

      

      

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>