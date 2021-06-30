<?php
     if(isset($_POST['upload-product'])){
         $file= $_FILES['upload-product'];
         $name = $file['name'];
         $target = "../image/".$name;
         move_uploaded_file($file['tmp_name'],$target);

     }
  
?>