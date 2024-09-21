<?php
session_start();

if(isset($_SESSION['auth']))
{
  $_SESSION['message']="You are already logged in";
  header("Location: ../index.php");
  exit();
}
require "index1.php"; 

?>

<div class="py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
            <div class="card">
                <div class="card-header">
                <h4>Registration Form</h4>
                </div>
                <div class="card-body">
                <form action="functions/authcode.php" method="POST">
   <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Enter your email address" name="email">
  </div>
  
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="number" class="form-control" placeholder="Enter your phone number" name="phone">
  </div>
 
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Create password" name="password">

  </div>
  <div class="mb-3">
    <label  class="form-label">Confirm Password</label>
    <input type="password" class="form-control" placeholder="Confirm your Password"
    name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary" name="register_btn">Submit</button>

</form> 
                </div>
            </div>

         
        </div>
    </div>
</div>

</div>
