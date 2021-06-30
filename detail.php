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
    <title>Chi tiết sản phẩm</title>
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
            
        }
        
        .text-footer {
            margin-left: 28px;
            margin-top: 12px;
            position: absolute;
        }
        
        .contact-list {
            margin: 30px 0px 20px 0px;
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
        .morebook{
            width: 130px;
            height: 190px;
            margin: 10px 15px 10px 15px ;
            object-fit:cover;   
        }
        .moreLeft{
            -moz-transform: scaleX(-1);
        -o-transform: scaleX(-1);
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        }
        /* css trang detail */
        .moreProduct-body{
            border-top:4px solid #cacbcc;
        }
      .text-detail{
        margin-top: -25px;
        height: 25px;
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
            <div class="body-detail col-lg-10">
        <?php     
        include ('connect.php');
        $sql_product= mysqli_query($connect,"Select * from `product` where id = ".$_GET['id']."");
                
        ?>
            <h1 class="text-center text-dark"> Chi tiết sản phẩm</h1>
                            <div class="d-flex  all_product"  style="padding: 30px;">
                 <?php while($product=mysqli_fetch_assoc($sql_product))
                {?>
          <div class="" style="height:321px; width:210px"> 
        <img src="<?=$product['image']?>"  style="height:321px; width:210px; border: 1px solid" >
          </div>
          <div style="margin:0px 0px 0px 150px; width:60%"><h3 class=" "><?=$product['name']?></h3>
          <div style="background:white;height:2px;width:100%;margin-top:10px;margin-bottom:10px"> &nbsp;</div>
          <div class="d-flex flex-row"  style="margin:20px 0px 0px 0px">
          <div style="height:fit-content; width:60%" class="d-flex flex-column">
          <li> Tác giả : <b><?=$product['author'] ?></b></li>
          <li>Nhà xuất bản : <b><?=$product['publishing_company']?></b></li>
          <li>Nhà phát hành : <b> <?=$product['publisher']?></b></li>
          <li>Số trang : <b><?=$product['number_of_page']?></b></li>
          <li>Hình thức : <b><?=$product['form']?></b></li>
          <li>Trọng lượng : <b><?=$product['weight']."&nbspg"?></b></li>
          <li>Kích thước : <b><?=$product['size']?></b></li>
        </div>          
          <div class="" style="height:271px; width:400px ;margin-left:100px; border:1px solid">
          <div class="container d-flex flex-column">
       <div class="d-flex flex-row">
       <p >Giá : &nbsp  &nbsp</p>
       <h5 class=""><?=$_SESSION['price']=$product['price'] ?>( Đã có VAT) </h5>
       </div>
       <form method="Post">
       <div class=" flex-row d-flex">
                <label for="input" class=""style="width:max-content" >Số lượng:</label>
                <input style="width:50px;height:20px;margin-left:10px" type="text" name="text"  class="form-control" title="">
      
        </div>
        <button name="cart" type="submit" class="btn btn-primary" style="margin-top:30px;width:200px"> <i style="margin-left:-27px" class="fa fa-cart-arrow-down" aria-hidden="true"></i> &nbsp Mua sản phẩm </button>
                       <?php 
                             if(isset($_POST['cart']))
                             {   $text=addslashes($_POST['text']);
                                $_SESSION['number']=$text;
                                 if($text==null){
                                         echo "<script>
                                                        alert('Mời bạn nhập số lượng sản phẩm muốn đặt mua !');
                                               </script>  
                             ";
                             }else{
                               
                                 echo "<script>
                                 window.location.replace('pay-online.php?id=".$_GET['id']."');
                                 </script>
                                 ";}
}
                       ?>
        </form>
        <form action="cart.php?id=<?=$_GET['id']?>">
             <button type="button" class="btn btn-primary" style="margin-top:30px;width:200px"> <i class="fa fa-cart-plus" aria-hidden="true"></i> &nbspThêm vào giỏ hàng</button>
             <?php 
                             if(isset($_POST['cart']))
                             {   $text=addslashes($_POST['text']);
                                 
                                 if($text==null){
                                         echo "<script>
                                                        alert('Mời bạn nhập số lượng sản phẩm muốn đặt mua !');
                                               </script>  
                             ";
                             }else{
                                  $sql_order_detail=mysqli_query($connect,"insert into order_detail ");
                            
                            
                                  }
}
                       ?>
        </form>
       </div>
    </div>
       
          </div>
      
          </div>
                         </div>
                         
                         <h4 class="text-center">Giới thiệu sách </h4>
                         
                        <p class="container" style="margin-bottom:30px;"> <?=$product['info']?> </p>
          <?php } ?>
          <div class="moreProduct-body" >
          <div class="btn-buy text-detail">
                <h6 class="text-center">Có thể bạn quan tâm</h6>
          </div>
          <div class="container  d-flex flex-row flex-wrap align-items-center  ">
         <img src="./image/arrleft.png" alt="" class="moreLeft" onclick="morebook()">
          <div class="more-product">
          <a class="linkBook"><img src="./image/unnamed.png" alt="Picture1" class="morebook"></a> 
          <a class="linkBook"><img alt="Picture2" src="./image/bg-01.jpg" class="morebook"></a> 
          <a class="linkBook"><img alt="Picture3" src="./image/176379013_300341245046359_2299675734901941738_n.jpg" class="morebook"></a> 
          <a class="linkBook"><img alt="Picture4" src="./image/banner1.jpg" class="morebook"></a> 
          <a class="linkBook"><img alt="Picture5" src="./image/176379013_300341245046359_2299675734901941738_n.jpg" class="morebook"></a> 
          <a class="linkBook"><img alt="Picture6" src="./image/banner1.jpg" class="morebook"></a> 
          </div>
          <img src="./image/arrleft.png" onclick="morebook()" alt="">
       
          </div>
        
         </div>
          <form method="Post" action="detail.php?id=<?=$_GET['id']?>&action=comment"> 
          <button type="submit" class="btn btn-buy" name="btn-submit" > Bình luận</button></br>
          </form>
 <div style="background:white;height:2px;width:100%;margin-top:10px;margin-bottom:10px"> &nbsp;</div>
<div class="d-flex flex-column">
<?php           
                
                switch ($_GET['action']) {
               
                case "comment" :   
               
                $sql_comment=mysqli_query($connect,"SELECT * FROM `comments` WHERE product_id=".$_GET['id']."");  
                $row = mysqli_num_rows($sql_comment);
                if($row==0){
                    echo "<p "."style="."margin-left:100px"."> Chưa  có bình luận nào ! </p>";
                    }
                else{
                    echo   "<p class="."container"." style="."margin-left: 200px; margin-right:200px"."> Tổng số comments : ".$row."  </p>"; 
                }
                while ($comment=mysqli_fetch_assoc($sql_comment)) {
               ?>
<?php
echo "<div class="."d-flex flex-row"." style="."margin-bottom:10px".">";
echo "<b style="."margin-left:100px".">" .$comment['username_comment']."&nbsp &nbsp : &nbsp &nbsp"."</b> " . $comment['comments']."";
echo "</div>";
    
        }  
        
         ?>
</div> 

<form class="form-inline" style="margin-left: 100px;margin-bottom:20px"  method="POST"  action="detail.php?id=<?=$_GET['id']?>&action=comment">
<input style="height:30px" class="form-control mr-sm-2" type="text" name="text_cmt" placeholder="Enter Your Comments ....." aria-label="Enter Your Comments .....">
<button   style="height:30px" class="btn btn-primary text-center d-flex align-items-center " type="submit" name="submit">Submit</button>      
<?php 
          
          if(isset($_POST['submit'])){
            $c= addslashes($_POST['text_cmt']);
            $id=$_GET['id'];
            $sql_cmt = mysqli_query($connect,"INSERT INTO `comments` (`id`, `product_id`,`username_comment`, `comments`) VALUES (null,$id,'".$_SESSION['fullname']."','$c');");
            echo "<script>
                 window.location.replace('detail.php?id=".$_GET['id']."&action=comment');  
                 </script>
                 ";
        }
            
          ?>                         
</form>        
<?php break;
                 
                } ?>                
        </div>
    </div>

    <div class="footer">
        <div class="contact d-flex flex-row flex-wrap justify-content-center">
            <div class="contact-list col-lg-6 d-flex flex-wrap flex-row justify-content-between">
                <div class="contact-item col-md-5 d-flex flex-row  align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Giới thiệu</p>
                </div>
                <div class="contact-item d-flex col-md-5 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách bảo mật</p>
                </div>
                <div class="contact-item d-flex col-md-5 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Chính sách vận chuyển</p>
                </div>
                <div class="contact-item d-flex col-md-5 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Hình thức thanh toán</p>
                </div>
                <div class="contact-item d-flex col-md-5 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Quy định đổi trả hàng</p>
                </div>
                <div class="contact-item d-flex col-md-5 flex-row align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary text-footer"> Hướng dẫn đặt hàng</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-5 align-items-center">
                    <img class="image-footer" src="./image/arrleft.png" alt="" class="">
                    <p class="text-primary  text-footer"> Liên hệ</p>
                </div>
                <div class="contact-item d-flex flex-row col-md-5 align-items-center">
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
    </div>>

    <!-- Optional JavaScript but it is better to add it-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="main.js "></script>
</body>

</html>