<!DOCTYPE html>
<html lang="en">
<?php 
   include ('../../../connect.php');
   $sql_product= mysqli_query($connect,"Select * from `product` ");
   $sql_member =mysqli_query($connect,"Select * from `member`");
   $row = mysqli_num_rows($sql_product);
   $row_member = mysqli_num_rows($sql_member);
?>
<head>
    <!-- Required meta tags to make it mobile responsive-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Admin </title>
    <link rel="stylesheet" href="../css/admin.css" class="">
</head>

<body>

    <div class="top d-flex flex-row container-fluid">
        <div style="justify-content: space-around;" class="d-flex flex-row container-fluid">
            <p style="margin:0px 0px 0px -200px" class="d-flex align-items-center  text-left text-white ">Xin chào
                <b class="text-danger">&nbsp; &nbsp; Admin</b>
            </p>
            <div class="index ">
                <a href="/product.php ">Trang chủ</a>
                <a href="log-out.php ">Đăng Xuất</a>
            </div>
        </div>
    </div>
    <div class="container d-flex flex-column" >
    <div class="d-flex flex-row " style="flex-wrap: wrap;">
        <div class="col-lg-3">
            <table style="border: 1px rgba(124, 121, 121, 0.281) solid; border-radius: 10px;" class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Admin Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <a href="admin.php?action=member"> Quản lý thành viên</a> </td>
                    </tr>
                    <tr>
                        <td><a href="admin.php?action=product"> Sản phẩm</a> </td>
                    </tr>
                    <tr>
                        <td>Đơn hàng</td>
                    </tr>
                    <tr>
                        <td>
                            Tin tức
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
        <?php 
                         include('./XuLyMenuAdmin.php');
             ?>
    </div>
                        
    </div>                   
        <!-- Optional JavaScript but it is better to add it-->
        <!-- jQuery first,
        then Popper.js,
        then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
<script src="./product.js"></script>
    </body>

</html>
