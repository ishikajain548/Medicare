<?php
session_start();
require "../config/dbcon.php";


if (isset($_POST['register_btn']))
{
   $name = mysqli_real_escape_string($con,$_POST['name']); 
   $email = mysqli_real_escape_string($con,$_POST['email']);
   $phone = mysqli_real_escape_string($con,$_POST['phone']);
   $password = mysqli_real_escape_string($con,$_POST['password']);
   $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

   //checking if email is already registered
   $check_email_query="SELECT email FROM userdata WHERE email='$email'";
   $check_email_query_run=mysqli_query($con,$check_email_query);
   if(mysqli_num_rows($check_email_query_run) > 0)
   {
    $_SESSION['message']="Email is already registered.";
    header("Location: ../register.php");
   }
   else{

   
   if($password == $cpassword)

   {
    //    $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        $insert_query= "INSERT INTO userdata (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
        $insert_query_run=mysqli_query($con,$insert_query);
        if($insert_query_run)
        {
            $_SESSION['message']="Registered Successfully";
            header("Location: ../login.php");
        }
        else
        {
            $_SESSION['message']="Something went wrong.";
            header("Location: ../register.php");
        }
   }
   else
   {
       $_SESSION['message']="Password do not match";
       header("Location: ../register.php");
   }
    }
}
else if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM userdata WHERE email='$email' AND password='$password' ";
    $login_query_run = mysqli_query($con,$login_query);
    echo $login_query;

    if(mysqli_num_rows($login_query_run)>0)
    {
        $_SESSION['auth'] = true;
        $userinfo = mysqli_fetch_array($login_query_run);
        $username=$userinfo['name'];
        $useremail=$userinfo['email'];
        $role_as=$userinfo['role_as'];

        $_SESSION['auth_user'] =[
            'name' => $username,
            'email' => $email
        ];

      $_SESSION['role_as']= $role_as;
      if($role_as == 1)
      {
          
          header("Location: ../../pharmacy/index.php");
      }
      else{
        
       $_SESSION['message'] = "Logged In Successfully";
       header("Location: ../../index.php");   

      }

  }
    else
    {
       $_SESSION['message']= "Invalid Credentials";
       header('Location: ../login.php');
    }
}

?>