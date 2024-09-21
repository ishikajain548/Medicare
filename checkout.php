<?php
session_start();
require "backend/config/dbcon.php";

if(isset($_GET['value'])) {
    $receivedValue = $_GET['value'];
    // Use $receivedValue as needed    
    $_SESSION['total_value'] = $receivedValue;
  
}
if(isset($_POST['order_btn']) && $_POST['order_btn'] === 'order now')
{
  $total_value = isset($_SESSION['total_value']) ? $_SESSION['total_value'] : 'N/A';

    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $method=$_POST['method'];
    $street=$_POST['street'];
    $flat=$_POST['flat'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin_code=$_POST['pin_code'];
    

    $insert_query= mysqli_query($con,"INSERT INTO `order` (name,number,email,method,flat,street,city,state,pin_code) VALUES ('$name','$number','$email','$method','$flat','$street','$city','$state','$pin_code')");
    
   

  //   if($insert_query)
  //   {
      
  //        echo "
        
  //       <div class='order-message-container'>
  //       <div class='message-container'>
  //        <h3>Thank you for shopping!</h3>
  //        <div class='order-detail'>        
  //              Grand Total : $total_value
  //        </div>
  //        <div class='invoice-button'>
  //        <a href='invoice.php' class='btn btn-primary' name='generate_invoice'>Generate Invoice</a>
  //        </div>
  //        <a href='index.php' class='btn btn-center' style='text-align:center;justify-content:center;' 
  //          >Continue Shopping!</a>
  //       </div>
  //       </div>   
  //       ";
    
  // }
  if($insert_query)
{
    // Store order details in session variables
    $_SESSION['order_details'] = array(
        'name' => $name,
        'number' => $number,
        'email' => $email,
        'method' => $method,
        'flat' => $flat,
        'street' => $street,
        'city' => $city,
        'state' => $state,
        'pin_code' => $pin_code,
        'total_value' => $total_value
    );

    // Redirect to invoice.php with order details as URL parameters
    header("Location: invoice.php?order=true");
    exit;
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="icon" type="image/png" href="images/logo3.PNG"  size="64x64" />
    <!-- <link rel="stylesheet" href="css/cart.css"> -->
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    
    <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Centering the form */
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .order-message-container{
        position: fixed;
        top:50%;
        left:50%;
        background-color: rgb(5, 118, 163);
        transform:translate(-50%,-50%);
        padding:30px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
        z-index: 1100;
        width: 400px;
    }
    /* .order-message-container::-webkit-scrollbar{
        width:1rem;
    }
    .order-message-container::-webkit-scrollbar-track{
        background-color: #130f40;
    }
    .order-message-container::-webkit-scrollbar-thumb{
        background-color: #130f40;
    } */

    .order-message-container .message-container{
        background-color: #fffdff;
        border-radius:10px;
        padding:30px;
        text-align:center;
    }
    .order-message-container .message-container h3{
      font-size: 1.5 rem;
      color:#130f40;
      margin-bottom: 20px;
    }
    .order-message-container .message-container .order-detail{
      background-color: aliceblue;
      border-radius:10 px;
      padding: 20px;
      margin-bottom: 20px;
      color: black;
    }
    .order-message-container .message-container .order-detail span.total{
      display: block;
      background-color: maroon;
      color:wheat;
    }
    .invoice-button {
        display: block;
        margin-top: 20px;
        text-align: center;
    }
    .invoice-button button {
        padding: 10px 20px;
        font-size: 1rem;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .invoice-button button:hover {
        background-color: #45a049;
    }

  </style>
</head>
<body>


<div class="container" id="background-form">
  <div class="row center">
    <div class="col-md-6" style= "border: 1px solid;">
        <h4 style="text-align:center;">Complete Your Order</h4>
      <form method="POST" action="checkout.php">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required name="name">
        </div>
        <div class="mb-3">
          <label for="number" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="number" placeholder="Enter your phone number" required name="number">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email" >
        </div>
        <label class="form-label"> Grand Total:<?= $_SESSION['total_value'] ?> </label> <br> 
        <div class="mb-3">
        <label for="method" class="form-label"> Payment Method</label>
          <select class="form-select" id="method" name="method" required>
            <option selected>Select a method</option>
            <option value="credit">Credit Card</option>
            <option value="debit">Debit Card</option>
            <option value="paypal">PayPal</option>
            <option value="cash">Cash on Delivery</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="street" class="form-label">Street</label>
          <input type="text" class="form-control" id="street" placeholder="Enter your street address" name="street" required>
        </div>
        <div class="mb-3">
          <label for="flat" class="form-label">Flat</label>
          <input type="text" class="form-control" id="flat" placeholder="Enter your flat number" name="flat" required>
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
        </div>
        <div class="mb-3">
          <label for="state" class="form-label">State</label>
          <input type="text" class="form-control" id="state" placeholder="Enter your state" name="state" required>
        </div>
        <div class="mb-3">
          <label for="pin" class="form-label">Pin Code</label>
          <input type="text" class="form-control" id="pin" placeholder="Enter your pin code" name="pin_code" required>
        </div>
      
        <button type="submit" class="btn btn-primary" name="order_btn" value="order now">Place Order</button>
      </form>
    </div>
  </div>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script src="js/cart.js"></script> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="backend/assets/js/jquery-3.7.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="backend/assets/js/bootstrap.bundle.min.js" ></script>

     <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  