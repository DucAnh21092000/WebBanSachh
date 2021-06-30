<!DOCTYPE html>
<html lang="en">
<?php
    include_once ('../getData/connect.php');
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<h3>Notifications List:</h3>
<table class="table">
<thead>
<tr>
<th>No</th>
<th>Next Schedule</th>
<th>Message</th>
<th>Remains</th>
<th>User</th>
</tr>
</thead>
<tbody>
<?php $a =1;
$sql = "SELECT * FROM web_ban_sach.notification";
$query = mysqli_query($connect,$sql);
while($notif = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?php echo $a ?></td>
<td><?php echo $notif['notification_time'] ?></td>
<td><?php echo $notif['notification_message'] ?></td>
<td><?php echo $notif['notification_loop']; ?></td>
<td><?php echo $notif['username'] ?></td>
</tr>
<?php $a++; } ?>
</tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>