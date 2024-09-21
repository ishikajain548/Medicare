<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">  
    <!-- <link rel="stylesheet" href="css/cart.css" type="text/css">   -->

        <!-- favicon icon -->
        <!-- <link rel="icon" type="image/png" size="16x16" href="images/logo3.PNG"> -->
        <link rel="icon" type="image/png" href="images/logo3.PNG"  size="64x64" />

    <!-- For sliding -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
     
    <!-- Bootstrap CSS -->
    <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    


    <!-- swiper slider for categories -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
.swiper-container {
    width: 100%;
    padding-top: 30px;
    padding-bottom: 60px;
  }
  .swiper-slide-group {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
  }
  .swiper-slide {
    width: calc(33.33% - 35px); /* Adjust width of each group (3 products) */
    margin-right: 15px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    transition: box-shadow 0.3s ease-in-out;
    outline: 0.2rem solid rgba(0, 0, 0.1); /* Add outline on hover */
      outline-offset:-0.3rem; 
  }
  .swiper-slide:hover{
    box-shadow: 1px 1px 10px 4px rgb(5, 118, 163);
  }
  
  .swiper-slide .card {
    height: 400px;
    display: flex;
    flex-direction: column;
    outline: 0.2rem solid rgba(0, 0, 0.1); /* Add outline on hover */
      outline-offset:-1rem; 
  }
  .swiper-slide img {
    width: 100%;
    height: 300px;
    object-fit: contain;
    border-radius: 10px 10px 0 0;
  }
  .swiper-slide .card-body {
    padding: 15px;
    flex-grow: 1;
    height: 200px;
    display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
     
  }
  .swiper-button-prev .swiper-button-next {
    display: none; /* Hide the default navigation arrows */
  }
 

    </style>
</head>
<body>

<?php
    // Get the category from the URL parameter
    $category = $_GET['category'] ?? '';
    
    switch($category){
        case 'capsule':
           ?>  

             <section class="categories" id="categories">
             <h1 class="heading">
            <span>Capsule</span>
            </h1> 

               <div class="container">
               <div class="row">
                 <div class="col">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                     <div class="swiper-slide">
                       <img src="images/multivitamin.jpeg" alt="Multivitamin">
                      <div class="card-body">
                     <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Multivitamin</h5>
                     <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.316</h4>
                     <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                       name="buy_now">Buy Now</a>
                      <!-- <button   class="btn btn-center" style="text-align:center; justify-content:center;" href="index.php">Add to Cart</button> -->
                 
                    </div>
                 </div>
                     <div class="swiper-slide">
              <img src="images/omega3.jpg" alt="Omega3 Fish oil capsules">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Omega-3 Fish Oil</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.329</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
    
            <div class="swiper-slide">
              <img src="images/vitamind3.jpg" alt="VitaminD3">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Vitamin D3 Softgels</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.370</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                     name="buy_now" >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/melatonin.webp" alt="Melatonin Sleep Aid Capsule">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Melatonin Sleep Aid Capsule</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.291</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/advil.jpg" alt="advil Liqui gels">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Advil Liqui gels</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.200</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/probiotic.webp" alt="Pro Biotic Capsules">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Pro Biotic Capsules</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.212</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  
    break;
    ?>

    <?php
    case 'cream':

      ?>
      <section class="categories" id="categories">
    <h1 class="heading">
        <span>Creams</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/panderm.webp" alt="Panderm">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Panderm</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.112.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/moov2.jpeg" alt="Moov">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Moov</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.167.40</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                     name="buy_now" >Buy Now</a>
              </div>
            </div>
    
            <div class="swiper-slide">
              <img src="images/burnheal.webp" alt="BurnHeal">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Burn Heal</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.54.40</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/cipladine.webp" alt="Cipladine">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Cipladin </h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.14.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php
 break;
    
?>
 <?php
    case 'syrup':

      ?>

<!-- Syrup category -->
<section class="categories" id="categories">
    <h1 class="heading">
        <span>Syrups</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/zedex.webp" alt="Zedex">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Zedex</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.148.11</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/zandu_ayurvedic.webp" alt="Zandu ayurvedic cough syrup">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Zandu Ayurvedic Cough Syrup</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.243.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
    
            <div class="swiper-slide">
              <img src="images/bzedex.webp" alt="Bro-Zedex">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Bro - Zedex</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.134.81</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/promethazine.jpg" alt="Promethazine oral solution">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Promethazine Oral Solution</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.300</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                     name="buy_name" >Buy Now</a>
              </div>
            </div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php
 break;
    
?>

<!-- Creams -->

<?php
    case 'lotion':

      ?>
<!-- Lotions -->
<section class="categories" id="categories">
    <h1 class="heading">
        <span>Lotions</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/cataphil.webp" alt="Cetaphil Moisturising lotion">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Cetaphil Moisturising Lotion 500 ml</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.1503.08</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/nivea.webp" alt="Nivea Cocoa Nourish Body Lotion">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Nivea Cocoa Nourish Body Lotion</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.489.50</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
    
            <div class="swiper-slide">
              <img src="images/lacto.webp" alt="Lacto Calamine Oil Balance Daily lotion">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Lacto Calamine Oil Balance Daily Lotion 30 ml</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.73.60</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/biotique.webp" alt="Biotique Bio white orchid skin  ">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Biotique Bio white orchid skin brightening Body Lotion 180 ml</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.177.21</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                     name="buy_now" >Buy Now</a>
              </div>
            </div>
            
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php
   break;
?>
<?php
    case 'syringe':

      ?>
<!-- Syringes -->
<section class="categories" id="categories">
    <h1 class="heading">
        <span>Syringe</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/dispovan.webp" alt="Dispovan Insulin syringe">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Dispovan Insulin Syringe(Pack of 10)</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.95</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/discarditt.webp" alt="BD discardit li syringe">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Bd Discardit Li Syringe 21gm 10ml</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.28.50</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
            </div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
   break;
?>
<!-- Injections -->
<?php
    case 'injection':

      ?>
<section class="categories" id="categories">
    <h1 class="heading">
        <span>Injections</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/monocef.webp" alt="Monocef 1 gm ">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Monocef 1 gm Injection</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.60.09</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                     name="buy_now" >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/lupisulin.webp" alt="Lupisulin">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Lupisulin M30 30/70 100iu Cartridge of 3ML Injection </h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.339.28</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  break;
    
?>
<?php
   case 'tablets':
?>
<section class="categories" id="categories">
    <h1 class="heading">
        <span>Tablets</span>
    </h1> 

    <div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/crocin.webp" alt="Crocin">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Crocin</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.17.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
                 
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/sinarest.jpg" alt="Sinarest">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Sinarest</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.67.08</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/shelcal.webp" alt="Shelcal">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Shelcal 500</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.116.82</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                       name="buy_now">Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/evion.webp" alt="Evion">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Evion 400mg</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.36.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/sd.webp" alt="Saridon">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Saridon</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.41.90</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/at.webp" alt="Aspirin">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Aspirin</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.75.40</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/disprin.jpg" alt="Disprin">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Disprin</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.11.20</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
<div class="swiper-slide">
              <img src="images/ct.jpg" alt="Cetrizine">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Cetrizine</h5>
                <h4 class="card-title mt-2 display-6" style="color:rgb(5, 118, 163); text-align:center;">Rs.17.00</h4>
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                    name="buy_now"  >Buy Now</a>
              </div>
</div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination mt-70"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  break;
    }
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/cart.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="backend/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="backend/assets/js/bootstrap.bundle.min.js" ></script>

     <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  document.addEventListener('DOMContentLoaded', function() {
    var buyNowButtons = document.querySelectorAll('a[name="buy_now"]');
    buyNowButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            // Check if user is logged in
            <?php if(!isset($_SESSION['auth_user'])) : ?>
                // Display a message if user is not logged in
                alert("Please login to go to the cart.");
                // Delay the redirection by 1 second
                window.setTimeout(function() {
                    window.location.href = 'backend/login.php';
                }, 1000);
                event.preventDefault(); // Prevent default anchor tag redirection
            <?php endif; ?>
        });
    });
});
 


</script>
<!-- <script src="js/cart.js"> -->
  <!-- </script> -->
</body>
</html>