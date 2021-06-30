<?php
     include_once ('../../connect.php');
     $password = ($_POST['password']);
     $password = md5($password);
    // insert thành viên vào bảng member
    $query1 = "INSERT INTO member (`id`,`fullname`,`password`,`phone`,email)
     VALUES (null, '".$_POST['full_name']."', '".$password."', '".$_POST['phone']."', '".$_POST['email']."');";
        // lấy thâng tin thành viên vừa thêm
      $sql1 = mysqli_query($connect,$query1);
        $sqlSelect = "select * from  member where email='".$_POST['email']."' and password = '".$password."'";
        $querySelect = mysqli_query($connect ,$sqlSelect);
        while($mb= mysqli_fetch_assoc($querySelect)){
          $queryCreateProfile ="INSERT INTO profile (id,user_id,image, bankCard, address,profile_email,profile_phone) values (null,'".$mb['id']."','user.png','null','null','".$mb['email']."','".$mb['phone']."')";
          mysqli_query($connect,$queryCreateProfile);  
       
        }
        
        // insert thành viên vào bảg profile
      
     include_once('./checkUser.php');

?>