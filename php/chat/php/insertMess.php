<?php
include ("../../../connect.php");
      $user_id = $_POST['user_id']; 
      $mess    = $_POST['mess'];
      $product_id = $_POST['product_id']; 
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $format = "%H:%M:%S %d-%B-%Y";
      $timestamp = time();
      $time= strftime($format,$timestamp);
      $sql = "insert into chat_user (id,id_user,id_product,user_content,user_time) values (null,'".$user_id."','".$product_id."','".$mess."','".$time."') ";
      $query= mysqli_query($connect,$sql);
      if($query){
            echo 1;
      }
      else{
                  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
            
      }
?>