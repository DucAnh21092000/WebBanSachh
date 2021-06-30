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
   <link rel="stylesheet" href="./css/vivifyy.min.css" class="">
   <link href="./assets/css/product.css">
<title>Title</title>
 
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
                    <strong><a href="sign-up.php" class=""> Đăng ký</a></strong>
                </div>
                <div class="header-menu__item col-sm-4 ">
                    <strong> <a href="index.php"> Đăng nhập</a></strong>
                       
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
                                   <a class="dropdown-item" href="profile.html"> Thông tin người dùng</a>
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
        <div style="margin:50px 0px 50px" class="info text-uppercase d-flex
             justify-content-center">
            <p class="text-uppercase text-white" style="margin-top: 28px;">Sách mới</p>
        </div>
    
        <div class="product">
            <div class="product-item">
            <?php
    include ('connect.php');
    $product_sql =mysqli_query($connect,'Select * from product');
    while($product = mysqli_fetch_assoc($product_sql)){
    ?>
            <ul class="dropdown-product">
                    <a href="detail.php?id=<?=$product['id']?>">
                    <img class="book" src="<?=$product['image']?>">
                    </a>
                    <li class="booktitle">
                        <div class="btn-buy text-center"><?=$product['name']?></div>
                        <p>Giá : <?=$product['price']?></p>
                        <p class="" style="width: 200px;">Nhà xuất bản : <?=$product['publishing_company']?></p>
                        <p>Kích thước <?=$product['size']?></p>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Mua ngay</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <?php
            }
            ?>
            </div>
          
            <img class="bookshelf" src="./image/book_bg.png" alt="">
        </div>
        <div style="margin:40px 0px 40px" class="info text-uppercase d-flex
             justify-content-center">
            <p class="text-uppercase text-white" style="margin-top: 28px;">Sách mới</p>
        </div>
        <div class="product">
            <div class="product-item">
                <ul class="dropdown-product">
                    <img class="book" src="./image/unnamed.png">
                    <li class="booktitle">
                        <div class="btn-buy text-center">Tên sách</div>
                        <p>Giá : Vô giá </p>
                        <p>Nhà xuất bản : Thái Bình</p>
                        <p>Kích thước</p>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Mua ngay</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <img class="book" src="./image/unnamed.png">
                <img class="book" src="./image/unnamed.png">
                <img class="book" src="./image/unnamed.png">
            </div>
            <img class="bookshelf" src="./image/book_bg.png" alt="">
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
    <script src="main.js "></script>
</body>

</html>