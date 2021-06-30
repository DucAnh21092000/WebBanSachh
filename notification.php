<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags to make it mobile responsive-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
<div class="row">
<div class="col-sm-6">
<h3>Add New Notification:</h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table class="table borderless">
<tr>
<td>Message</td>
<td><textarea name="msg" cols="50" rows="4" class="form-control" required></textarea></td>
</tr>
<tr>
<td>Broadcast time</td>
<td><select name="time" class="form-control"><option>Now</option></select> </td>
</tr>
<tr>
<td>Loop (time)</td>
<td><select name="loops" class="form-control">
<?php
for ($i=1; $i<=5 ; $i++) { ?>
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php } ?>
</select></td>
</tr>
<tr>
<td>Loop Every (Minute)</td>
<td><select name="loop_every" class="form-control">
<?php
for ($i=1; $i<=60 ; $i++) { ?>
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php } ?>
</select> </td>
</tr>
<tr>
<td>For</td>
<td><select name="user" class="form-control">
<?php
$user = $push->listUsers();
foreach ($user as $key) {
?>
<option value="<?php echo $key['username'] ?>"><?php echo $key['username'] ?></option>
<?php } ?>
</select></td>
</tr>
<tr>
<td colspan=1></td>
<td colspan=1></td>
</tr>
<tr>
<td colspan=1></td>
<td><button name="submit" type="submit" class="btn btn-info">Add Message</button></td>
</tr>
</table>
</form>
</div>
</div>
    <!-- Optional JavaScript but it is better to add it-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>