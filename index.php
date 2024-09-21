<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">  
    
        <!-- favicon icon -->
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
    padding-top: 50px;
    padding-bottom: 50px;
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
    height: 900px;
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
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo3.PNG" alt="logo" class="logo3">
        </a>
        <nav class="navbar">
            
            <a href="#home" style="text-decoration: none";>Home</a>
            <a href="#services" style="text-decoration: none";>Services</a>
            <a href="#categories" style="text-decoration: none";>Categories</a>
            <a href="#products" style="text-decoration: none";>Products</a>
            <a href="#partner" style="text-decoration: none";>Partners</a>
        <?php
            if(isset($_SESSION['auth']))
            {
         ?>
            <ul>
            <li class="dropdown mt-3" style="text-decoration: none;list-style-type: none"; >    
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarDropdown">
               <?= $_SESSION['auth_user']['name'];  ?>
            </a>
               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="backend/logout.php">Logout</a></li>
               </ul>
            </li>
           
            </ul>
            <?php
            }
            else
            {
            ?>
                <a href="backend/register.php" style="text-decoration: none";>Register</a>
                <a href="backend/login.php" style="text-decoration: none";>Login</a>
            <?php
            }
            ?>
            
            
        </nav>
        <?php 
            if(isset($_SESSION['message'])){
                 
            ?>
            <!-- alert message code -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= $_SESSION['message'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
           }
        ?>

    <div class="icons">
        <div class="fa fa-search" id="search-btn"></div>
        <!-- <a href="backend/register.php">
        <div class="fa fa-user" id="login-btn"></div></a> -->
    
    <!-- <div id="cart" style="margin-right:85px;"> 
        <i class="fa fa-shopping-cart" onclick="toggleCart()" id="cart-btn"></i>
        <div class="cart-content" id="cartContent">
            <ul id="cartItems"></ul>
            <p style="font-size: medium; padding:5px;">Total: &#8377<span id="cartTotal">0.00</span></p>
        </div>
    </div>   -->
    <a href="cart.php" name="buy_now">
        <div class="fa fa-shopping-cart" id="cart-btn"></div></a>
    </div> 

    <form action="#" class="search-form">
        <input type="search" id="search-box" placeholder="Search Here..">
        <label for="search-box" class=" fa fa-search"></label>
    </form>
    </header>
   
   <section class="home" id="home">
    <div class="content">
     <h2>GENUINE MEDICINES</h2>
     <P>Only Sold through Licensed Pharmacies.. </P>
     <a href="#products" class="btn" name="buy_now">Order Now</a>
    </div>
   </section>
   <section class="services" id="services">
    <h1 class="heading">
        Our<span>Services</span>
    </h1>
    <div class="box-container">
        <div class="box">
         <img src="images/delivery.jpg" id="delivery"><br>
         <h3>Free Delivery</h3>
         <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="box">
         <img src="images/lab.png" id="lab"><br>
         <h3>Lab Test</h3>
         <a href="#" class="btn">Book Now</a>
        </div>
        <div class="box">
            <img src="images/payment.webp" id="payment"><br>
            <h3>Easy Payments</h3>
            <a href="#" class="btn">Pay Now</a>
           </div>
    </div>
   </section>
   <!-- purana products -->
  
  
   <!-- Categories -->
 <section class="categories" id="categories">
    <h1 class="heading">
        <span>Categories</span>
    </h1> 
<!-- <div class="box-container">
    <div class="box">
        <img src="images/drop.avif" alt="drop" class="med">
        <h3>Drop</h3>
        <p>Upto 30% off</p>
        <a href="#" class="btn">Buy Now</a>
    </div>

    <div class="box">
        <img src="images/liquid.jpg" alt="liquid" class="med">
        <h3>Liquid</h3>
        <p>Upto 25% off</p>
        <a href="#" class="btn">Buy Now</a>
    </div>

    <div class="box">
        <img src="images/capsule.jpg" alt="capsule" class="med">
        <h3>Capsule</h3>
        <p>Upto 35% off</p>
        <a href="#" class="btn">Buy Now</a>
    </div>

    <div class="box">
        <img src="images/inhaler.webp" alt="inhaler" class="med">
        <h3>Inhaler</h3>
        <p>Upto 45% off</p>
        <a href="#" class="btn">Buy Now</a>
    </div>
</div> -->
<div class="container">
    <div class="row">
      <div class="col">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide category">
              <img src="photo/cap.png" alt="Product 1">
              <div class="card-body">
                <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Capsule</h5>
                <a href="product.php?category=capsule" class="btn btn-center" style="text-align:center; justify-content:center;" 
                >View Products</a>
                 
              </div>
            </div>
            <div class="swiper-slide category">
              <img src="photo/cream.png" alt="Product 2">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Cream</h5>
                <a href="product.php?category=cream" class="btn btn-center"
                >View Products</a>
              </div>
            </div>
    
            <div class="swiper-slide category">
              <img src="photo/injection.jpg" alt="Product 4">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Injection</h5>
                <a href="product.php?category=injection" class="btn">View Products</a>
              </div>
            </div>
            <div class="swiper-slide category">
              <img src="photo/lotion.png" alt="Product 5">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Lotion</h5>
                <a href="product.php?category=lotion" class="btn">View Products</a>
              </div>
            </div>
            <div class="swiper-slide category">
              <img src="photo/syrunj.png" alt="Product 6">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Syringe</h5>
                <a href="product.php?category=syringe" class="btn">View Products</a>
              </div>
            </div>
            <div class="swiper-slide category">
              <img src="photo/syrup.png" alt="Product 7">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Syrup</h5>
                <a href="product.php?category=syrup" class="btn">View Products</a>
              </div>
            </div>
            <div class="swiper-slide category">
              <img src="photo/tablet.png" alt="Product 8">
              <div class="card-body">
              <h5 class="card-title display-6" style="color:rgb(5, 118, 163); text-align:center;">Tablets</h5>
                <a href="product.php?category=tablets" class="btn">View Products</a>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <!-- <div class="swiper-pagination"></div> -->
          <!-- Add Navigation -->
          
        </div>
      </div>
    </div>
  </div>
 </section>
  
 <!-- products  -->
 <section class="products" id="products">
    <h1 class="heading">
        Our<span> Products</span>
    </h1>
    <div class="swiper product-slider product">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="images/multivitamin.jpeg" alt="Multivitamin" class="med">
                <h3>Multivitamin Capsules</h3>
                <div class="price">&#8377 316.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <!-- <button  onclick="addToCart('Shelcal', 116.82)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/evion.webp" alt="evion" class="med">
                <h3>Evion 400 mg</h3>
                <div class="price">&#8377 36.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- <button  onclick="addToCart('Evion', 36.00)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now" >Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/zedex.webp" alt="Zedex" class="med">
                <h3>Zedex Cough Syrup</h3>
                <div class="price">&#8377 148.11</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- <button  onclick="addToCart('Crocin', 17.00)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/moov2.jpeg" alt="Moov" class="med">
                <h3>Moov</h3>
                <div class="price">&#8377 167.40</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <!-- <button  onclick="addToCart('Sinarest', 67.08)" class="btn">Add to Cart</button>            -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now">Buy Now</a>
             </div>


        </div>
    </div>


    <div class="swiper product-slider product">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="images/disprin.jpg" alt="disprin" class="med">
                <h3>Disprin</h3>
                <div class="price">&#8377 11.20</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <!-- <button  onclick="addToCart('Disprin', 11.20)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/cipladine.webp" alt="cipladine" class="med">
                <h3>Cipladine</h3>
                <div class="price">&#8377 14.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- <button  class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                 name="buy_now">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/panderm.webp" alt="Panderm" class="med">
                <h3>Panderm 15gm</h3>
                <div class="price">&#8377 112.00</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <!-- <button  onclick="addToCart('Saridon', 41.90)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                name="buy_now">Buy Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="images/monocef.webp" alt="Monocef" class="med">
                <h3>Monocef 1GM Injection</h3>
                <div class="price">&#8377 75.70</div>
                <div class="stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <!-- <button  onclick="addToCart('Aspirin', 75.70)" class="btn">Add to Cart</button> -->
                <a href="cart.php" class="btn btn-center" style="text-align:center; justify-content:center;" 
                name="buy_now">Buy Now</a>
            </div>            
        </div>
    </div>
   </section> 



 <!-- partner -->
<section class="partner" id="partner">
    <h1 class="heading">
        Our<span>Partners</span>
    </h1> 
    <marquee behavior="sliding" direction="left" scrollamount="15">
        <div class="company">
        <img src="images/cipla.png" alt="cipla" class="med2">
        <img src="images/piramal.png" alt="piramal" class="med2">
        <img src="images/dabur.png" alt="dabur" class="med2">
        <img src="images/sym.png" alt="symbiotec" class="med2">
        <img src="images/mylan.png" alt="MyLan" class="med2">
        <img src="images/gm.png" alt="GlenMark" class="med2">
        </div>
    </marquee>
</section>

<!-- footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <img src="images/logo3.PNG" alt="logo" class="logo3">
            <p>Feel free to follow us on our social media handlers.All the links are given below.</p>
            <div class="share">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links"><i class="fa fa-phone"></i> +91 6264291274</a>   
            <a href="#" class="links"><i class="fa fa-phone"></i> +91 8103699427</a>   
            <a href="#" class="links"><i class="fa fa-envelope"></i>medicare410@gmail.com </a>   
            <a href="#" class="links"><i class="fa fa-map-marker"></i> Indore,India-452012</a>   
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#" class="links"><i class="fa fa-arrow-right"></i> Home</a>   
            <a href="#" class="links"><i class="fa fa-arrow-right"></i> Services</a>   
            <a href="#" class="links"><i class="fa fa-arrow-right"></i> Products</a>   
            <a href="#" class="links"><i class="fa fa-arrow-right"></i> Categories</a>   
            <a href="#" class="links"><i class="fa fa-arrow-right"></i> Partners</a>   
            
        </div>
        <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe for latest Updates</p>
            <input type="email" placeholder="Your email" class="email"><br>
            <input type="submit" value="Subscribe" class="btn2"><br>
            <img src="images/pay.jpg" alt="payment" class="pay"> 
        </div>
    </div>
<div class="credit">Created by <span>Aarti Patel & Ishika Jain </span>| All Rights Reserved</div>

</section>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script src="js/cart.js"></script> -->

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

//   document.addEventListener('DOMContentLoaded', function() {
//     document.querySelector('a[name="buy_now"]').addEventListener('click', function(event) {
//         // Check if user is logged in
//         <?php if(!isset($_SESSION['auth_user'])) : ?>
//             // Redirect user to login page if not logged in
//             alert("Please login to go to the cart.");
//             // Delay the redirection by 1 second
//             window.setTimeout(function() {
//                 window.location.href = 'backend/login.php';
//             }, 1000);
            
//             event.preventDefault(); // Prevent default anchor tag redirection
//         <?php endif; ?>
//     });
// });

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
</body>
</html>