<?php
require('includes/conn.php');
    $sql="select * from info";

    $res=mysqli_query($conn,$sql);
    $count= mysqli_num_rows($res);
        if($count> 0){
            $row=mysqli_fetch_assoc($res);
            header('location: dashboad.php');
        }
?>
