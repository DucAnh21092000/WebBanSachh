<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags to make it mobile responsive-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Trang thanh toán</title>
    <link rel="stylesheet" href="./t2.css">
    <style>
        .header {
            background-image: url(./image/headerbg.png);
            color: rgba(14, 77, 33, 0.6);
            margin-bottom: -30px;
        }
        
        .header1 {
            height: 20px;
            background: rgba(216, 216, 216, 0.6);
            color: rgba(14, 77, 33, 0.6);
        }
        
        .header-menu__item {
            border-right: 1px black solid;
        }
        
        .header-menu .header-menu__item:nth-child(3) {
            border: none;
        }
        
        .header-menu:nth-child(2) .header-menu__item:nth-child(2) {
            border: none;
        }
        
        .header-logo {
            height: 100px;
            margin: 30px 0px;
            padding-bottom: 10px;
            margin-left: 125px;
        }
        
        .dropdown {
            list-style: none;
            float: left;
            padding: 8px;
            margin-right: 60px;
        }
        
        .dropdown:hover {
            background-color: rgb(5, 61, 27);
            color: white;
        }
        
        .background-ul {
            background-color: rgb(5, 61, 27);
            float: right;
            position: absolute;
            margin-left: 400px;
        }
        
        nav li ul {
            display: none;
        }
        
        nav li:hover ul {
            display: block;
            margin-top: 15px;
        }
        
        nav li:hover ul li ul {
            display: none;
        }
        
        nav li:hover ul li:hover>ul {
            display: block;
            margin: 0px;
            margin-left: 136px;
            margin-top: -28px;
        }
        
        nav ul li:hover ul li:hover {
            background-color: rgb(5, 61, 27);
        }
        
        nav ul li:hover ul li:hover ul li {
            color: white;
        }
        
        .menu {
            color: white;
            height: 40px;
            background-color: rgb(8, 99, 43);
            z-index: 8;
        }
        /* body */
        
        .body {
            background-image: url(./image/bg_pattern.jpg);
            height: max-content;
            z-index: 0;
        }
        
        .banner {
            margin: 10px;
            display: flex;
            justify-content: center;
        }
        
        .info {
            background-image: url(./image/lbcenter.png);
            background-repeat: no-repeat;
            background-position-x: 480px;
            height: 80px;
            background-position-y: 0px;
        }
        
        .product {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        
        .product-item {
            display: flex;
            justify-content: space-between;
            z-index: 33333;
            position: absolute;
          
        }
        
        .bookshelf {
            height: max-content;
            z-index: 1;
            margin-top: 25px;
        }
        
        .book {
            width: 160px;
            height: 250px;
            margin-right: 30px;
        }
        
        .product-item .dropdown-product :nth-child(2) {
            display: none;
        }
        
        .product-item .dropdown-product:hover :nth-child(2) {
            display: block;
        }
        
        .btn-buy {
            background-image: url(./image/book_button_bg.png);
            background-repeat: no-repeat;
            background-size: 360px;
            color: white;
            width: 200px;
            font-size: 14px;
          }
        
        .booktitle {
            background-image: url(./image/headerbg.png);
            margin: 10px;
        }
        /* Code FOOTER */
        
        .footer {
            background-image: url(./image/headerbg.png);
        }
        
        .image-footer {
            width: 20px;
            height: 25px;
        }
        
        .contact-item {
            border-bottom: 1px black solid;
            margin-right: 110px;
        }
        
        .text-footer {
            margin-left: 28px;
            margin-top: 12px;
            position: absolute;
        }
        
        .contact-list {
            margin: 30px 0px 20px 200px;
        }
        
        .copyright {
            background-image: url(./image/menubg.png);
            background-repeat: no-repeat;
            background-size: 100% 200px;
            color: white;
        }
        
        .text_info {
            margin-bottom: -5px;
        }
        .body-detail{
            background-image: url(./image/headerbg.png);
            margin : 10px 0px 20px 100px;
        }
        /* Code form Thanh toán */
        .form-pay{
            margin-top: 10px;
        }
        .payOnline{
            position: relative;
            display:none; 
            height: max-content;
                   }
    </style>
</head>

<body>
    <div class="header">
        <div class="header1 d-flex justify-content-lg-around text-center">
            <div class="header-menu col-lg-5 d-flex flex-row ">
                <div class="header-menu__item col-sm-4">
                    <strong>Giới thiệu</strong>
                </div>

                <div class="header-menu__item col-sm-4">
                    <strong>Lịch sử mua hàng</strong>
                </div>
                <div class="header-menu__item col-sm-4">
                    <strong> Kiểm tra đặt hàng</strong>
                </div>
            </div>
            <div class="header-menu col-lg-4 d-flex flex-row ">
                <div class="header-menu__item col-sm-4 ">
                    <strong>Đăng ký</strong>
                </div>
                <div class="header-menu__item col-sm-4 ">
                    <strong>Đăng nhập</strong>
                </div>
            </div>
        </div>
        <div class="header-logo container d-flex justify-content-between ">
            <div class="col-lg-6 d-flex flex-row">
                <img src="./image/bg-01.jpg" width="20%" alt="">
                <h2 class="d-flex align-items-end" style="margin-bottom: -6px;">From Thái Bình with love
                </h2>
            </div>
            <div class="col-md-4 d-flex flex-row align-items-end">
                <input type="text" style="height: 30px;" name="" id="input" class="form-control" value="" placeholder="Tìm kiếm..." required="required" title="">
                <input type="submit" value="Tìm kiếm">
            </div>
        </div>
    </div>
    <div class="menu d-flex justify-content-center">
        <nav>
            <ul class="dropdown">
                <li class="">
                    DANH MỤC SẢN PHẨM
                    <ul class="">
                        <li class="text-white dropdown-item">
                            Sách Giáo Khoa
                            <ul class="background-ul">
                                <li class="dropdown-item">Lớp 1</li>
                                <li class="dropdown-item"> Lớp 2</li>
                                <li class="dropdown-item">Lớp 3</li>
                                <li class="dropdown-item">Lớp 4</li>
                                <li class="dropdown-item">Lớp 5</li>
                                <li class="dropdown-item">Lớp 6</li>
                                <li class="dropdown-item">Lóp 7</li>
                                <li class="dropdown-item">Lớp 8</li>
                                <li class="dropdown-item">Lớp 9</li>
                                <li class="dropdown-item">Lớp 10</li>
                                <li class="dropdown-item">Lớp 11</li>
                                <li class="dropdown-item">Lớp 12</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            Sách lập trình
                            <ul class="background-ul">
                                <li class="dropdown-item">Java</li>
                                <li class="dropdown-item">Python</li>
                                <li class="dropdown-item">MySQL</li>
                                <li class="dropdown-item">C/C++</li>
                                <li class="dropdown-item">C#</li>
                                <li class="dropdown-item">JavaScript</li>
                                <li class="dropdown-item">Ruby</li>
                                <li class="dropdown-item">PHP</li>
                                <li class="dropdown-item">NodeJS</li>
                                <li class="dropdown-item">ReactJS</li>
                            </ul>
                        </li>
                        <li class=" text-white dropdown-item">
                            Sách .....
                        </li>
                        <li class=" text-white dropdown-item">
                            Sách Thiếu Nhi
                            <ul class="background-ul">
                                <li class="dropdown-item">Truyện Tranh</li>
                                <li class="dropdown-item">Truyện Cổ Tích</li>
                                <li class="dropdown-item">Truyện Cười</li>
                                <li class="dropdown-item">Sách đố vui thông minh</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            Truyện
                            <ul class="background-ul">
                                <li class="dropdown-item">Truyện Tranh</li>
                                <li class="dropdown-item">Truyện Cổ Tích</li>
                                <li class="dropdown-item">Truyện Ngôn Tình</li>
                                <li class="dropdown-item">Anime</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            Sách tham khảo
                        </li>
                    </ul>

                </li>
            </ul>
            <ul class="dropdown">
                <li>
                    SÁCH BÁN CHẠY
                </li>

            </ul>
            <ul class="dropdown">
                <li class=" text-uppercase">
                    chương trình khuyến mãi
                </li>
            </ul>
            <ul class="dropdown">
                <li class=" text-uppercase">
                    Giảm giá đặc biệt
                </li>
            </ul>
        </nav>
    </div>
    </div>
 
    <div class=" d-flex flex-column">
    <div class="cart container">
        <?php include('XuLyThanhToan.php');
        ?>
   </div>   
        <div class="pay-body d-flex flex-row">
            <div class="pay-body__header d-flex justify-content-center col-lg-9">
             
                <b class="text-center pay-body__header-text">
                        Nhập thông tin thanh toán
                </b>
               <div class="payOffline col-lg-11 ">
               <div class="pay-body__header-info d-flex flex-column justify-content-center ">
                <form action="pay-online.php?id=<?=$_GET['id']?>" method="POST">
                    <div class="input-group form-pay justify-content-center d-flex col-sm-10">
                        <span class="col-sm-3 input-group-addon " id="prefixId ">Họ và tên</span>
                        <input type="text " name="full-name" id="full-name " class="form-control " value="<?= $_SESSION['fullname'] .$_SESSION['fullname_1']?>" placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="input-group form-pay d-flex col-sm-10 ">
                        <span class="col-sm-3 input-group-addon" id="prefixId ">Số điện thoại</span>
                        <input type="text " name="phone" id="phone" value="<?=$_SESSION['phone'] .$_SESSION['phone_1'] ?>" class="form-control " placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="input-group form-pay d-flex col-sm-10">
                        <span class="col-sm-3 input-group-addon " id="prefixId ">Email:</span>
                        <input type="text " name="email" id="emalil " value="<?=$_SESSION['email'] .$_SESSION['email_1'] ?>" class="form-control " placeholder=" " aria-describedby="prefixId ">
                    </div>

                    <div class="form-check form-pay d-flex  mb-3 col-sm-10 ">
                        <label id="_label " for=" " class=" col-sm-3 required ">Địa chỉ</label>
                        <textarea id="address" name="address" rows="5 " class="form-control "></textarea>
                    </div>
                    <div class="form-check form-pay d-flex mb-3 col-sm-10">
                        <label id="_label " for=" " class="col-sm-3 required ">Thông điệp</label>
                        <textarea id="chat" name="chat" rows="5 " class="form-control "></textarea>
                    </div>
                    <hr>
                            <div class="container text-center form-group d-flex justify-content-center">
                                <div class="col-md-3 col-sm-offset-2 ">
                                     <input name="a" type="submit" value="Xác nhận" class="btn btn-primary ">
                                </div>
                            </div>
                         
            </form>      
            <?php
        if(isset($_POST['a'])){
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            include('connect.php');
            $sql_oder = mysqli_query($connect,"INSERT INTO web_ban_sach.order_detail (`id`, `order_phone`, `order_mail`,`product_id`,`quantity`,`price`,`created_time`,`order_fullname`,`order_chat`,`order_address`) VALUES (null,'".$_POST['phone']."','".$_POST['email']."',1,".$_SESSION['number'].",".$_SESSION['all-price'].",'".date("Y-m-d H:i:s")."','".$_POST['full-name']."','".$_POST['chat']."','".$_POST['address']."' )");
            if($sql_oder){
                echo "<script>
                      alert('Đặt hàng thành công');
                      window.location.replace('pay-online.php?id=".$_GET['id']."');
                      </script>";
            } 
           }
       
       ?>
                </div>
               </div>
                <div class="payOnline  col-lg-11">
                <div class="pay-body__header-info mt-3 d-flex flex-column justify-content-center ">
                <form action="pay-online.php?id=<?=$_GET['id']?>" method="POST">
            <div class="input-group form-pay justify-content-center d-flex col-sm-10 col-lg-12">
                        <span class="col-sm-3 col-lg-3 input-group-addon " id="prefixId ">Họ Tên Người Nhận</span>
                        <input type="text" id="name" class="form-group col-lg-4 pr-1" name="name" placeholder="Tên đầy đủ (viết in hoa, không dấu)">
             </div>
             <div class="input-group form-pay justify-content-center d-flex col-sm-10 col-lg-12">
                        <span class="col-sm-3 col-lg-3 input-group-addon " id="prefixId ">Số tài khoản</span>
                        <input type="text" id="ten" class="form-group col-lg-4" name="ten" placeholder="Số tài khoản"> 
            </div>
            <div class="input-group form-pay justify-content-center d-flex col-sm-10 col-lg-12">
            <span class="col-sm-3 col-lg-3 input-group-addon " id="prefixId ">Tên ngân hàng</span>
            <select class="bank form-group col-lg-4">
                <option value="">Chọn tên ngân hàng</option>
                <option value="">Vietinbank</option>
                <option value="">Agribank</option>
                <option value="">Techcombank</option>
                <option value="">Vietcombank</option>
                <option value="">BIDV</option>
                <option value="">Sacombank</option>
                <option value="">Oceanbank</option>
                <option value="">Nam A bank</option>
                <option value="">MB bank</option>
            </select>
            </div>
            <div class="input-group form-pay justify-content-center d-flex col-sm-10 col-lg-12">
                        <span class="col-sm-3 col-lg-3 input-group-addon " id="prefixId ">Chi nhánh</span>
                        <input type="text" class="form-group col-lg-4" id="anh" name="chinhanh" placeholder="Chi nhánh"> 
            </div>
            <div class="input-group form-pay justify-content-center d-flex col-sm-10 col-lg-12">
                        <span class="col-sm-3 col-lg-3 input-group-addon " id="prefixId ">Nội dung</span>
                        <input type="text"  class="form-group col-lg-4" name="chat" placeholder="Nội dung">
            </div>
               <hr>
                <div class="d-flex  justify-content-md-center">
                    <input src="#" type="reset" class="col-lg-2 col-sm-4 mr-2 btn btn-primary form-group" value="Reset ">
                    <input type="submit" class="btn btn-primary col-lg-2 col-sm-4 form-group" value="Xác nhận ">
                </div>

   
                         
            </form>      
            <?php
        if(isset($_POST['a'])){
            $format = "%H:%M:%S %d-%B-%Y";
            $timestamp = time();
            include('connect.php');
            $sql_oder = mysqli_query($connect,"INSERT INTO web_ban_sach.order_detail (`id`, `order_phone`, `order_mail`,`product_id`,`quantity`,`price`,`created_time`,`last_updated`,`order_fullname`,`order_chat`,`order_address`) VALUES (null,'".$_POST['phone']."','".$_POST['email']."',1,".$_SESSION['number'].",".$_SESSION['all-price'].",'".strftime($format, $timestamp )."','".strftime($format, $timestamp )."','".$_POST['full-name']."','".$_POST['chat']."','".$_POST['address']."' )");
            if($sql_oder){
                echo "<script>
                      alert('Đặt hàng thành công');
                      window.location.replace('pay-online.php?id=".$_GET['id']."');
                      </script>";
            } 
           }
       
       ?>
                </div>
            </div>
                </div>
            <div class="d-flex flex-column pay-body__right ">
                <div class="pay-body__receiver container-fluid ">
                    <p class="pay-body__receiver-text ">
                        Người nhận tiền
                    </p>
                    <table style="width: 100%; ">
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Người đại diện
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    (Chưa xác thực)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Email:
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    dinhanh21092000@gmail.com
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Điện thoại
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    0582842388
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pay-body__receiver container-fluid">
                    <p class="pay-body__receiver-text ">
                        Thông tin thanh toán
                    </p>
                    <table style="width: 100%; ">
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Sản phẩm
                                </p>
                            </td>
                            <td>
                                <p class="info__profile">
                                    <?=$_SESSION['product-name']?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text ">
                                    Hình thức thanh toán
                                </p>
                            </td>
                            <td>
                                <p class="info__profile ">
                                    Thanh toán bằng tiền mặt
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="info__text text-success ">
                                    Giá trị
                                </p>
                            </td>
                            <td>
                                <p class="info__profile text-capitalize ">
                                    <lable style="background: rgb(112, 238, 150);border-radius: 20px; ">
                                        <?=$_SESSION['all-price']." Đồng"?>
                                    </lable>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="container-fluid">
                    <b>Thông tin người thanh toán </b>
                    <p> Vui lòng nhập chính xác ! Các thông tin sẽ được sử dụng để giao nhận sản phẩm </p>
                </div>

                <div class="pay-body__receiver container ">
                    <b class="pay-body__receiver-text ">Hình thức Thanh toán </b>
                    <p> Vui lòng nhập chính xác ! Các thông tin sẽ được sử dụng để giao nhận sản phẩm </p>
                   <div class="form-group">
                     <label for=""></label>
                     <select id="abc" onchange="infoPay()" class=" abc form-control form-control-sm " name="" id="">
                                     <option value="Thanh toán bằng tiền mặt">Thanh toán bằng tiền mặt</option>
                                     <option value="Thanh toán online">Thanh toán online</option>
                 
                     </select>
                   </div>
                </div>

            </div>
        </div>

    </div>
         
    <div class="footer">
        <div class="contact d-flex flex-row flex-wrap">
            <div class="contact-list col-lg-7 d-flex flex-wrap flex-row justify-content-between">
                <div class="contact-item col-md-4 d-flex flex-row  align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Giới thiệu</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách bảo mật</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách vận chuyển</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Hình thức thanh toán</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Quy định đổi trả hàng</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Hướng dẫn đặt hàng</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Liên hệ</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Thông báo</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright-info">
            <p class="text-center text_info">© 2014 - Bản quyền của Công Ty Cổ Phần Văn Hoá và Truyền Thông Nhã Nam -
                <a class="textdecoration-none " href="product.php">nhanam.com.vn </a>
            </p>
            <p class="text_info text-center">Địa chỉ: 59 Đỗ Quang, phường Trung Hoà, quận Cầu Giấy, Hà Nội</p>
            <p class="text_info text-center">Giấy ĐKKD số 0101603420 do Sở KH&ĐT TP Hà Nội cấp ngày 21 tháng 1 năm 2005 sửa đổi lần 5 ngày 20/3/2013</p>
        </div>
    </div>

    <!-- Optional JavaScript but it is better to add it-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>
 