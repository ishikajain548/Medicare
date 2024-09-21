<?php 
require "conn.php";
session_start();
if(isset($_POST['submit'])){
	
	
	
	
	
	$id = $_POST['id'];
	$item_name = $_POST['item_name'];
	$capacity = $_POST['capacity'];
	// $existing_capacity= $POST['existing_capacity'];
	
	

	// $balance = $capacity + $existing_capacity ;


	// echo "$item_name";
	// echo "$existing_capacity";
	
	// $sql = "UPDATE  `store_items` SET
	// capacity = '$balance',
	// WHERE id = '$id'";

	$sql="UPDATE store_items SET capacity = `$capacity` WHERE id = '$id'";
	
	
	$res = mysqli_query($conn, $sql);

		if ($res == true){
			$_SESSION['updated_item'] = "<div class='alert alert-success'>Item Updated successifuly </div>";
			header ("Location: ../items_list.php");
	}else{
		$_SESSION['failed_item'] = "<div class='alert alert-danger'> Failed to Update Item </div>";
		header ("Location: ../items_list.php");
		}

}
	
?>

						
						