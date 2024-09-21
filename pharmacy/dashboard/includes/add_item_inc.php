<?php
session_start();
require "conn.php";
if(isset($_POST['submit'])){
	//echo "Was clicked";
	
	$item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $capacity = mysqli_real_escape_string($conn, $_POST['capacity']);
	
	
	
	
	// $sql = "INSERT INTO pharmacy_stock_items SET
	// item_name = '$item_name',
	// capacity = '$capacity',
	// price = '$price'";
	
	
		 
	// $sql = "INSERT INTO store_items SET
	// item_name = '$item_name',
	// capacity = '$capacity',
	// ";

	$sql = "INSERT INTO store_items (item_name, capacity) VALUES ('$item_name', '$capacity')";
	$res = mysqli_query($conn, $sql);
	if($res == true){
		
		

		$_SESSION['success'] = "<div class='alert alert-success'> Added Successfully</div>";
                        header ("Location: ../items_list.php");
						echo "<script>alert('Added successfully');</script>";
						exit();
	  } 
	}
	else{
		$_SESSION['failed'] = "<div class='alert alert-success'> Failed to Add</div>";
                        header ("Location: ../items_list.php");
						exit();
	}
	

