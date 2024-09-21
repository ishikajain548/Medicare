<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="icon" type="image/png" href="images/logo3.PNG"  size="64x64" />
    <!-- <link rel="stylesheet" href="css/cart.css"> -->
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    
    <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .order-message-container {
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width:80%;
    max-width: 400px;
}

.message-container {
    text-align: center;
}

.order-detail {
    margin-bottom: 10px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>


<?php
session_start();
if(isset($_GET['value'])) {
    $receivedValue = $_GET['value'];
    // Use $receivedValue as needed    
    $_SESSION['total_value'] = $receivedValue;
  
}
$total_value = isset($_SESSION['total_value']) ? $_SESSION['total_value'] : 'N/A';
// Check if the URL parameter 'order' is set
if(isset($_GET['order']) && $_GET['order'] === 'true') {
    // Check if order details are stored in session
    if(isset($_SESSION['order_details'])) {
        $order_details = $_SESSION['order_details'];

        // Display order details
        echo "<div class='order-message-container'>
                <div class='message-container'>
                    <h3>Thank you for shopping!</h3>
                    <div class='order-detail'>        
                        Grand Total: ".$order_details['total_value']."
                    </div>
                    <div class='order-detail'>        
                        Name: ".$order_details['name']."
                    </div>
                    <div class='order-detail'>        
                        Number: ".$order_details['number']."
                    </div>
                    <div class='order-detail'>        
                        Email: ".$order_details['email']."
                    </div>
                    <div class='order-detail'>        
                        Method: ".$order_details['method']."
                    </div>
                    <div class='order-detail'>        
                        Flat: ".$order_details['flat']."
                    </div>
                    <div class='order-detail'>        
                        Street: ".$order_details['street']."
                    </div>
                    <div class='order-detail'>        
                        City: ".$order_details['city']."
                    </div>
                    <div class='order-detail'>        
                        State: ".$order_details['state']."
                    </div>
                    <div class='order-detail'>        
                        Pin Code: ".$order_details['pin_code']."
                    </div>
                    <a href='index.php' class='btn btn-center' style='text-align:center;justify-content:center;'>Continue Shopping!</a>
                </div>
            </div>";
    } else {
        echo "Order details not found.";
    }
} else {
    echo "Invalid request.";
}
?>

    

    
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
