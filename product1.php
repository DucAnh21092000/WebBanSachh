
<!doctype html>
<html lang="en">
<?php
ob_start();
    session_start();
?>
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/all.min.css" type="text/css">
    <style>
        /* X-Small devices (portrait phones, less than 576px) // No media query for `xs` since this is the default in Bootstrap // Small devices (landscape phones, 576px and up) */
        
        @media (min-width: 576px) and (max-width: 767.98px) {
          
        }
        /* Medium devices (tablets, 768px and up) */
        
        @media (min-width: 768px) and (max-width: 991.98px) {
           
        }
        /* Large devices (desktops, 992px and up)*/
        
        @media (min-width: 992px) and (max-width: 1199.98px) {
          
        }
        /* X-Large devices (large desktops, 1200px and up) */
        
        @media (min-width: 1200px) and (max-width: 1399.98px) {
           
        }
        /* XX-Large devices (larger desktops,
    1400px and up) */
        
        @media (min-width: 1400px) {
          
        }
    </style>
</head>

<body>
                    <!-- logo web  -->
                    <div>
             <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-11-2020/TrangComicManga_main_1263x60.jpg" width="100%">
        </div>

                             <!-- menu --->                
         <div class="top">
               <h3 class="d-flex flex-row top__shop-name">
                    Anh.dd20182330 
                </h3>

                <div class="d-flex flex-row" style="margin-left: 300px;">
                    <form action="index.php" method="Post">
                            <button type="submit" name="log-out" class="btn_top">????ng xu???t</button>
                    </form>
                   
                    <form >
                            <button type="submit" class="btn_top"> Gi??? h??ng</button>
                    </form>
                </div>

                <div>
                    <form action="product.php" method="post">
                        <input type="text" name="input_search" class="btn_top search">
                            <button type="submit" name="btn_search" class="btn btn-sm btn_top" style="margin-bottom: 5px;">
                            T??m ki???m 
                            </button>
              
                    </form>
                </div>

                <div class="menu_translate d-flex flex-row">
                    <div>
                        Ng??n ng??? : &nbsp;
                    </div>
                        <div style="color:orangered " id="translate_select">
                        </div>
      
                            <script type="text/javascript" 
                             src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                            </script>
                                    <script type="text/javascript">
                                            function googleTranslateElementInit() {
                                                new google.translate.TranslateElement({pageLanguage: 'vi'}, 'translate_select');
                                                                       }
                                    </script>               

                </div>
         </div>
    <div class="menu-contact d-flex flex-row">
        <div class="menu-contact__menu-product">
            <div style="margin-bottom:5px" class="menu-product__show">
                <div class="menu-product__show-text" > 
                         <i class="fas fa-bars"></i>
                             Danh m???c s???n ph???m 
                         <i class="fas fa-2x fa-sort-down menu-product__btn-image"></i>
                 </div>
                 <div class="null"></div>
                
                 <div class="menu-product__show-text" >  
                        <i class="fas fa-home"></i> 
                            <a class=" text-dark" href="product.php">Trang ch???</a>
                 </div>
                <div class="null"></div>
                
                <div class="menu-product__show-text" > 
                        <i class="fas fa-address-card"></i>
                            Li??n h??? 
                </div>

            </div>
        </div>
        <div class="menu-contact__menuHotline">
        <div class="menu-contact__menuHotLine-btnMenu"> 
             <i class="fas fa-phone-alt"></i>  HotLine : 0582.842.388 
        </div>
            
            <div class="null">
                 &nbsp; <!-- dau cach-->
            </div>

            <div class="menu-contact__menuHotLine-btnMenu text-center">
                 <i class="fas fa-envelope-open-text"></i>  H??? tr??? tr???c tuy???n
            </div>
            
            <div class="null">
                &nbsp;
            </div>
            
            <div class="text" style="margin-right: 10px;">
               
                <nav class="navbar navbar-expand-sm navbar-light ">
                            <li class="nav-item dropdown" style="height: 20px;list-style:none">
                                <a style="margin-top:-12px" class="nav-link dropdown-toggle" href="#" id="dropdownId" 
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <b> <?php echo "Xin ch??o ".$_SESSION['fullname']." ".$_SESSION['fullname_1']. " !" ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="profile.php"> Th??ng tin ng?????i d??ng</a>
                                    <a class="dropdown-item" href="#">Gi??? h??ng</a>
                                    <a class="d-flex flex-row dropdown-item" style="width:218px" href="#">Ng??n h??ng <p class="text-primary" style="margin-left: 20px;">N li??n k???t</p></a>
                                    <a class="dropdown-item" name="log-out" href="index.php">????ng xu???t</a>                                    
                                </div>
                            </li>     
                </nav>
                </b> 
            </div>
        </div>
    </div>  

    <div  class="d-flex flex-row menuBook">     
         <ul class="menuBook__menu">
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__ info">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open  image-book"></i> S??ch thi???u nhi</strong>
                </div>
                    <div class="dropdown-menu " style="margin-bottom:auto">
                        <form action="list.php?name='truyen tranh '" method="POST"> 
                        <button class="dropdown-item active " > Truy???n tranh</button>
                        </form>
                        <button class="dropdown-item  " href="# ">Truy???n c??? t??ch</button>
                        <button class="dropdown-item  " href="# ">S??ch kh??m ph?? khoa h???c</button>
                        <button class="dropdown-item  " href="# ">Th?? thi???u nhi</button>
                        <button class="dropdown-item  " href="# ">S??ch ????? vui th??ng minh</button>
                        <button class="dropdown-item  " href="# ">S??ch b??ch khoa tri th???c cho b?? </button>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info ">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open  image-book"></i> S??ch gi??o d???c</strong>
                </div>
                         <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item" href="# ">S??ch ti???u h???c</a>
                        <a class="dropdown-item " href="# ">S??ch trung h???c c?? s??? </a>
                        <a class="dropdown-item  " href="# ">S??ch trung h???c ph??? th??ng </a>
                        <a class="dropdown-item " href="# ">S??ch ?????i h???c </a>
                    </div>
                </div>

            </li>

            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info ">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open  image-book"></i> S??ch l???p tr??nh</strong>
                </div>
                          <span class="sr-only">Toggle dropdown</span> </button>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item  " href="# ">Html & Css </a>
                        <a class="dropdown-item  " href="# ">Java</a>
                        <a class="dropdown-item  " href="# ">Python</a>
                        <a class="dropdown-item " href="# ">Php</a>
                        <a class="dropdown-item  " href="# ">Nodle Js</a>
                        <a class="dropdown-item " href="# ">SQL</a>
                        <a class="dropdown-item " href="# "> C/C++</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong> <i class="fas fa-book-open  image-book"></i> Truy???n</strong>
                </div>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item  " href="# ">Truy???n tranh</a>
                        <a class="dropdown-item " href="# ">Truy???n c??? t??ch</a>
                        <a class="dropdown-item " href="# ">Truy???n ng??? ng??n</a>
                        <a class="dropdown-item  " href="# ">Truy???n ng??n t??nh</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                    
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open  image-book"></i> S??ch luy???n thi</strong>
                </div>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown ">
                        <a class="dropdown-item " href="# ">Luy???n thi toeic</a>
                        <a class="dropdown-item" href="# ">Luy???n thi ?????i h???c</a>
                        <a class="dropdown-item  " href="# ">Luy???n thi v??o THPT</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open  image-book"></i> T??i li???u tham kh???o</strong>
                </div>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown">
                        <a class="dropdown-item " href="# ">T??i li???u n?????c ngo??i</a>
                        <a class="dropdown-item " href="# ">T??i li???u trong n?????c</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
                <div class="btn-group dropdown menuList__info">
                <div class="dropdown-toggle text-danger"  data-toggle="dropdown">
                     <strong><i class="fas fa-book-open image-book"></i> Gian h??ng ng?????i d??ng</strong>
                </div>
                    <div class="dropdown-menu " aria-labelledby="my-dropdown">
                        <a class="dropdown-item" href="# ">Danh s??ch s???n ph???m</a>
                        <a class="dropdown-item  " href="# ">????ng k?? ????ng b??i</a>
                    </div>
                </div>
            </li>
            <li class="menuBook__menu-menuList">
            <strong>
                <a class="text-danger" href=""> <i class="fas fa-book-open image-book"></i> S??ch gi???m gi??</a>
                </strong>
            
            </li>
            <li class="menuBook__menu-menuList">
                <strong>
                <a class="text-danger" href=""><i class="fas fa-book-open image-book"></i> S??ch m???i ph??t h??nh</a>
                </strong>
            
            </li>
        </ul>
       
        <div class="body col-lg-10">
        <?php     
        include ('connect.php');
        $text_search = addslashes($_POST['input_search']);
        if($text_search!=null){
        $sql_product= mysqli_query($connect,"Select * from `product` like '% ".$text_search."%'");
        }
        else{
            $sql_product= mysqli_query($connect,"Select * from `product` ");
        }
        ?>
             <h1 class="text-center main-header"> Danh m???c s???n ph???m </h1>
                            <div class="all-product" id="all-product">
            <?php 
           
                    while($product= mysqli_fetch_array($sql_product))
                {    

                    $sqli_content=mysqli_query($connect,"Select DISTINCT * from `contents` ct inner join `product` pr where ct.product_id =".$product['id']."");
                    ?>  
   
                    <div class="all-product__product" id="all-product__product">
                <tr class="col " >
                    <td class="d-flex flex-column">
                        <h6 class="product__text-name container text-center" style="margin-top: 10px;">T??n s???n ph???m  </h6>
                        <a class="link" title="<?=$product['name']?>" href="detail.php?id=<?=$product['id']?>"> 
                        <h5 id="text-name" class="container text-center" style="height: 100px; width:300px; margin-bottom:10px"> <?=$product['name'] ?> </h5>
                    </td>
                </tr>
                <tr class="col-md-2">
                <img src="<?=$product['image']?>"  class="d-flex img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-circle,|}" alt="" style="width: 200px;height:300px;margin-bottom:20px;margin-left:60px">
                </a>
                </tr>
                <tr class="col">
                    <td class="row" >
                        <div class="d-flex flex-row">
                        <div class="text-dark container "> <b>Gi?? :</b>
                    </div>
                    <div class="container text-danger" > <?=number_format($product['price'],0,",",".") . "$nbsp ?????ng" ?> </div>
                    
                        </div>
                 </td>
                </tr>
               
                <tr class="col d-flex flex-column">
                    <td class="d-flex flex-column">
                        <p class="container">???? b??n :</p>
                    </td>
                </tr>
                <tr class="col">
                    <td class="row">
                        <button class="btn btn-primary" type="button">Mua s???n ph???m </button>
                    </td>
                </tr>
                </div>
                <?php } ?>
                 
                         </div>
            
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="./js/list-product.js"></script>
</body>

</html>