<?php
include '../../../connect.php';
if (isset($_POST['upload'])) {
$file = $_FILES['image'];
$image= $file['name'];
$target = "../photo/".$image;
move_uploaded_file($file['tmp_name'],$target);
$sqlSelect = "select * from profile where user_id ='".$_GET['id']."'";
$query = mysqli_query($connect,$sqlSelect);
$row=mysqli_num_rows($query);
if($row<1){
    $sqlInsert = "Insert into profile (id,user_id,image) values (null,'".$_GET['id']."','".$image."')";
    $queryInsert = mysqli_query($connect,$sqlInsert);  

}
else{
    $sql = "update profile set image = '".$image."' where user_id= '".$_GET['id']."'";
    $queryUpdate= mysqli_query($connect, $sql);
}
echo "  <script>
window.location.replace('./profile.php?id=".$_GET['id']."')
  </script>
    ";

}

?>