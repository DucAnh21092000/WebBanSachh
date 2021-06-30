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
     <link rel="stylesheet" href="./css/product.css" type="text/css">
<title>Product</title>

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
                    <strong><a href="../sign-up/sign-up.php" class=""> Đăng ký</a></strong>
                </div>
                <div class="header-menu__item col-sm-4 ">
                    <strong> <a href="../../index.php"> Đăng nhập</a></strong>
                       
                </div>
            </div>
        </div>
        <div class="header-logo container d-flex justify-content-between ">
            <div class="col-lg-6 d-flex flex-row">
                <img width="" src="data:image/jpeg;base64,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" width="20%" alt="">
                <h2 class="d-flex align-items-end" style="margin-bottom: -6px;">Nhà Sách Bách Khoa
                </h2>
            </div>
            <div class="col-md-4 d-flex flex-row align-items-end">
                <input type="text" style="height: 30px;" name="" id="input-search" class="form-control" value="" placeholder="Tìm kiếm..." required="required" title="">
                <input type="submit" name="submit-search" onclick="search()" value="Tìm kiếm">
            </div>
        </div>
    </div>
    <div class="menu d-flex justify-content-center">
        <nav style="margin-left:50px" class="col-lg-9">
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
        <div style="margin-right: -40px;" class="dropdown">   
               <nav class="navbar navbar-expand-sm navbar-light ">
                           <li class="nav-item" style="height: 20px;list-style:none">
                               <a style="margin-top:-12px" class="nav-link dropdown-toggle" href="#" id="dropdownId" 
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <b> <?php echo "Xin chào ".$_SESSION['fullname']." ".$_SESSION['fullname_1']. " !" ?>
                               </a>
                               <div class="dropdown-menu" aria-labelledby="dropdownId">
                                   <a class="dropdown-item" href="../profile/php/profile.php?id=<?=$_SESSION['user_id']?>"> Thông tin người dùng</a>
                                   <a class="dropdown-item" href="#">Giỏ hàng</a>
                                   <a class="d-flex flex-row dropdown-item" style="width:218px" href="#">Ngân hàng <p class="text-primary" style="margin-left: 20px;">N liên kết</p></a>
                                   <a class="dropdown-item" name="log-out" href="index.php">Đăng xuất</a>                                    
                               </div>
                           </li>
               </nav>
    </div>
    
    </div>
 
    <div class="body d-flex flex-column">
        <div class="banner">
            <img class="image " style="object-fit: none;" alt="This is banner">
        </div>
        <div  class="info text-uppercase d-flex justify-content-center">
            <p class="text-uppercase text-white" style="margin-top: 28px;">Sách mới</p>
        </div>
    
        <div class="product">
            <div class="product-item">
                <?php
                    include ('../../connect.php');
                        $product_sql =mysqli_query($connect,'Select * from product');
                            while($product = mysqli_fetch_assoc($product_sql)){
                ?>
                                <li class="books">
                                    <a href="../detail/php/detail.php?id=<?=$product['id']?>">
                                         <img class="book" src="<?=$product['image']?>">
                                    </a>
                                                <ul class="booktitle">
                                                     <div class="btn-buy text-center"><?=$product['name']?></div>
                                                         <p>Giá : <?=$product['price']?></p>
                                                         <p class="" style="width: 200px;">Nhà xuất bản : 
                                                         <?=$product['publishing_company']?></p>
                                                         <p>Kích thước <?=$product['size']?></p>
                                                            <div class="form-group text-center">
                                                                <div class="col-sm-10 col-sm-offset-2">
                                                                     <button style="font-size: 13px;line-height: 15px;
                                                                     width: 150px;;height:35px" type="submit" class="btn 
                                                                     btn-buy">Thêm vào giỏ hàng
                                                                    </button>
                                                                </div>
                                                            </div>
                                                                    <div class="form-group text-center">
                                                                        <div class="col-sm-10 col-sm-offset-2">
                                                                           <button style="font-size: 13px;line-height:
                                                                                15px;width: 150px;;height:35px" type="submit"
                                                                                class="btn btn-buy">Mua ngay
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                </ul>
                                 </li>
                <?php
                }
                ?>          
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
            <p class="text-center text_info">© 2014 - Bản quyền của Công Ty Cổ Phần Văn Hoá và Truyền Thông Nhà Sách Bách Khoa -
                <a class="textdecoration-none " href="product.php">nhasachbachkhoa.com.vn </a>
            </p>
            <p class="text_info text-center">Địa chỉ: Số 1 Đại Cồ Việt, quận Hai Bà Trưng, Hà Nội</p>
            <p class="text_info text-center">Giấy ĐKKD số 0101603420 do Sở KH&ĐT TP Hà Nội cấp ngày 21 tháng 1 năm 2005 sửa đổi lần 5 ngày 20/3/2013</p>
        </div>
    </div>

    <!-- Optional JavaScript but it is better to add it-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>