<?php
  include("../../../connect.php");

    $address = $_POST['address'];
    $id      = $_POST['id'];
   $sqlUpdate = "Update profile set address = '".$address."' where user_id= '".$id."' ";
   $query = mysqli_query($connect,$sqlUpdate);
   if($query){
       echo 1;
   }
   else{
       echo 0;
       }
?>