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
                <h4>Login Form</h4>
                </div>
                <div class="card-body">
                <form action="functions/authcode.php" method="POST">
   
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="Enter your email address" name="email">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
  <a href="register.php" class="btn btn-center" style="text-align:center; justify-content:center;">Register Now</a>
</form> 
                </div>
            </div>

         
        </div>
    </div>
</div>

</div>
