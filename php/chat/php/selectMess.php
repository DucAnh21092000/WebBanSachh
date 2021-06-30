<?php
     include ("../../../connect.php");
     $user_id = $_POST['user_id']; 
     $product_id = $_POST['product_id'];
     $sql = "Select * from chat_user , chat_admin where 
             chat_user.id_user = '".$user_id."' and  chat_user.id_product = '".$product_id."' 
             and  chat_admin.id_user = '".$user_id."' and  chat_admin.id_product = '".$product_id."'
             ORDER BY chat_user.user_time , chat_admin.admin_time
             ";
     $query = mysqli_query($connect,$sql);
     if($query){
          $arrMess = array();
          while($chat = mysqli_fetch_assoc($query)){
          $arrMesss = array("id"             => $chat['id'],
                            "id_user"        => $chat['id_user'],
                            "id_product"     => $chat['id_product'],
                            "user_content"   => $chat['user_content'],
                            "admin_content"  => $chat['admin_content'] ,
                            "time_user"      => $chat['user_time'],
                            "time_admin"     => $chat['admin_time']  
                           );
              array_push($arrMess,$arrMesss);
          }
       $arr= json_encode($arrMess);
       echo $arr;  
     }

?>