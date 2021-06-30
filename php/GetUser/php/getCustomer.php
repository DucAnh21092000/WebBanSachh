<?php
     session_start();
     ob_start();
     $password = addslashes(($_POST['password']));
     $password =md5($password);
     include_once ('../../../connect.php');  
       $sql = "Select * from member where email ='".$_POST['email']."' and password ='".$password."' ";
       $result = mysqli_query($connect,$sql);   
            $row = mysqli_num_rows($result); 
            echo ($row);
            while($member = mysqli_fetch_assoc($result)){
               $_SESSION['fullname'] = $member['fullname'];
               $_SESSION['email']    =$member['email'];
               $_SESSION['phone']    =$member['phone'];
               $_SESSION['user_id']  =$member['id'];
            } 
            exit();          
?>