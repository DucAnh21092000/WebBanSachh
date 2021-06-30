<?php
include  ('../../connect.php');
if(isset($_POST['submit'])){
$message = addslashes($_POST['msg']);
$user = addslashes($_POST['user']);

if($message  && $user) {
$format = "%H : %M :%S  %d-%B-%Y";
$time = time();
    $sql = "insert into notification ( id,notification_time, username, notification_message) VALUE (null ,'".strftime($format , $time)."' , '".$user."','".$message."')";
$query = mysqli_query($connect,$sql);
if($query){
    echo "them thanh cong";
}
}
}
?>