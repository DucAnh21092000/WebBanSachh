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
                    <strong>Gi???i thi???u</strong>
                </div>

                <div class="header-menu__item col-sm-4">
                    <strong>L???ch s??? mua h??ng</strong>
                </div>
                <div class="header-menu__item col-sm-4">
                    <strong> Ki???m tra ?????t h??ng</strong>
                </div>
            </div>
            <div class="header-menu col-lg-4 d-flex flex-row ">
                <div class="header-menu__item col-sm-4 ">
                    <strong>????ng k??</strong>
                </div>
                <div class="header-menu__item col-sm-4 ">
                    <strong>????ng nh???p</strong>
                </div>
            </div>
        </div>
        <div class="header-logo container d-flex justify-content-between ">
            <div class="col-lg-6 d-flex flex-row">
                <img src="./image/bg-01.jpg" width="20%" alt="">
                <h2 class="d-flex align-items-end" style="margin-bottom: -6px;">From Th??i B??nh with love
                </h2>
            </div>
            <div class="col-md-4 d-flex flex-row align-items-end">
                <input type="text" style="height: 30px;" name="" id="input" class="form-control" value="" placeholder="T??m ki???m..." required="required" title="">
                <input type="submit" value="T??m ki???m">
            </div>
        </div>
    </div>
    <div class="menu d-flex justify-content-center">
        <nav>
            <ul class="dropdown">
                <li class="">
                    DANH M???C S???N PH???M
                    <ul class="">
                        <li class="text-white dropdown-item">
                            S??ch Gi??o Khoa
                            <ul class="background-ul">
                                <li class="dropdown-item">L???p 1</li>
                                <li class="dropdown-item"> L???p 2</li>
                                <li class="dropdown-item">L???p 3</li>
                                <li class="dropdown-item">L???p 4</li>
                                <li class="dropdown-item">L???p 5</li>
                                <li class="dropdown-item">L???p 6</li>
                                <li class="dropdown-item">L??p 7</li>
                                <li class="dropdown-item">L???p 8</li>
                                <li class="dropdown-item">L???p 9</li>
                                <li class="dropdown-item">L???p 10</li>
                                <li class="dropdown-item">L???p 11</li>
                                <li class="dropdown-item">L???p 12</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            S??ch l???p tr??nh
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
                            S??ch .....
                        </li>
                        <li class=" text-white dropdown-item">
                            S??ch Thi???u Nhi
                            <ul class="background-ul">
                                <li class="dropdown-item">Truy???n Tranh</li>
                                <li class="dropdown-item">Truy???n C??? T??ch</li>
                                <li class="dropdown-item">Truy???n C?????i</li>
                                <li class="dropdown-item">S??ch ????? vui th??ng minh</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            Truy???n
                            <ul class="background-ul">
                                <li class="dropdown-item">Truy???n Tranh</li>
                                <li class="dropdown-item">Truy???n C??? T??ch</li>
                                <li class="dropdown-item">Truy???n Ng??n T??nh</li>
                                <li class="dropdown-item">Anime</li>
                            </ul>
                        </li>
                        <li class="text-white dropdown-item">
                            S??ch tham kh???o
                        </li>
                    </ul>

                </li>
            </ul>
            <ul class="dropdown">
                <li>
                    S??CH B??N CH???Y
                </li>

            </ul>
            <ul class="dropdown">
                <li class=" text-uppercase">
                    ch????ng tr??nh khuy???n m??i
                </li>
            </ul>
            <ul class="dropdown">
                <li class=" text-uppercase">
                    Gi???m gi?? ?????c bi???t
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
            <p class="text-uppercase text-white" style="margin-top: 28px;">S??ch m???i</p>
        </div>
        <div class="product">
            <div class="product-item">
                <ul class="dropdown-product">
                    <img class="book" src="./image/unnamed.png">
                    <li class="booktitle">
                        <div class="btn-buy text-center">T??n s??ch</div>
                        <p>Gi?? : V?? gi?? </p>
                        <p>Nh?? xu???t b???n : Th??i B??nh</p>
                        <p>K??ch th?????c</p>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Th??m v??o gi??? h??ng</button>
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
            <p class="text-uppercase text-white" style="margin-top: 28px;">S??ch m???i</p>
        </div>
        <div class="product">
            <div class="product-item">
                <ul class="dropdown-product">
                    <img class="book" src="./image/unnamed.png">
                    <li class="booktitle">
                        <div class="btn-buy text-center">T??n s??ch</div>
                        <p>Gi?? : V?? gi?? </p>
                        <p>Nh?? xu???t b???n : Th??i B??nh</p>
                        <p>K??ch th?????c</p>
                        <div class="form-group text-center">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button style="font-size: 13px;line-height: 15px;width: 150px;;height:35px" type="submit" class="btn btn-buy">Th??m v??o gi??? h??ng</button>
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
                    <p class="text-primary text-footer"> Gi???i thi???u</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Ch??nh s??ch b???o m???t</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Ch??nh s??ch v???n chuy???n</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> H??nh th???c thanh to??n</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Quy ?????nh ?????i tr??? h??ng</p>
                </div>
                <div class="contact-item d-flex col-md-4 flex-row align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> H?????ng d???n ?????t h??ng</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Li??n h???</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-4 align-items-center">
                    <img class="image-footer" src="/image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Th??ng b??o</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright-info">
            <p class="text-center text_info">?? 2014 - B???n quy???n c???a C??ng Ty C??? Ph???n V??n Ho?? v?? Truy???n Th??ng Nh?? Nam -
                <a class="textdecoration-none " href="product.php">nhanam.com.vn </a>
            </p>
            <p class="text_info text-center">?????a ch???: 59 ????? Quang, ph?????ng Trung Ho??, qu???n C???u Gi???y, H?? N???i</p>
            <p class="text_info text-center">Gi???y ??KKD s??? 0101603420 do S??? KH&??T TP H?? N???i c???p ng??y 21 th??ng 1 n??m 2005 s???a ?????i l???n 5 ng??y 20/3/2013</p>
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