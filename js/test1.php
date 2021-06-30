<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Title</title>
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
            background-image: url(/image/bg_pattern.jpg);
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
            background-image: url(/image/book_button_bg.png);
            background-repeat: no-repeat;
            background-size: 250px;
            color: white;
        }
        
        .booktitle {
            background-image: url(/image/headerbg.png);
            margin: 10px;
        }
        /* Code FOOTER */
        
        .footer {
            background-image: url(/image/headerbg.png);
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
            background-image: url(/image/menubg.png);
            background-repeat: no-repeat;
            background-size: 100% 200px;
            color: white;
        }
        
        .text_info {
            margin-bottom: -5px;
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
    <div class="body d-flex flex-column">
        <div class="banner">
            <img class="image" style="object-fit: none;" alt="This is banner">
        </div>
        <div style="margin:30px 0px 30px" class="info text-uppercase d-flex
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
            <img class="bookshelf" src="/image/book_bg.png" alt="">
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
            <img class="bookshelf" src="/image/book_bg.png" alt="">
        </div>
    </div>
    <div class="footer">
        <div class="contact d-flex flex-row flex-wrap">
            <div class="contact-list col-lg-7 d-flex flex-wrap flex-row justify-content-between">
                <div class="contact-item col-md-4 d-flex flex-row  align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Giới thiệu</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách bảo mật</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách vận chuyển</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Hình thức thanh toán</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Quy định đổi trả hàng</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Hướng dẫn đặt hàng</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Liên hệ</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="/main.js "></script>
</body>

</html>

</html>