<?php
function getListUser(){
  include ('../getData/connect.php');
  $sql = "Select * from member ";
  $query = mysqli_query($connect,$sql);
  while($result = mysqli_fetch_assoc($query)){
    ?>
       <option value="<?=$result['fullname']?>"> <?=$result['fullname']?>(<?=$result['email']?>)</option>
 <?php
  }
}
getListUser();
?>