<?php
  include("../../../connect.php");
    $email = $_POST['email'];
    $id      = $_POST['id'];
   $sqlUpdate = "Update profile set profile_email = '".$email."' where user_id= '".$id."' ";
   $query = mysqli_query($connect,$sqlUpdate);
   if($query){
       echo 1;
   }
   else{
       echo 0;
       }
?>