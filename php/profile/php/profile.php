<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Profile</title>
    <style>
        .menu:hover {
            border-left: 2px solid rgb(19, 9, 155);
            background: rgb(175, 169, 167);
        }
        #inputEmail{
            display:none;
        }
        #inputPhoneNumber{
            display:none;
        }
        #inputAddress{
            display:none;
        }
        #btnSubmitAddress{
            display : none;
        }
        #btnSubmitEmail{
            display: none;
        }
        #btnSubmitPhoneNumber{
            display :none;
        }
        .help-block{
            display:none;
            color:red;
        }
    </style>


</head>

<body>
    <div class="container d-flex flex-column flex-md-row flex-lg-row">
        <div class="col-sm-7 col-lg-4 col-md-6 d-flex justify-content-center justify-content-sm-center justify-content-md-center  flex-column flex-sm-column flex-lg-column  flex-md-column">
            <div class="btn-light mt-4 ">
                <div class="d-flex justify-content-center ">
                    <div class="">
                        <?php
                        include_once("../../../connect.php");
                        $query = "select profile.image, profile.address,member.phone,member.email,profile.profile_email,profile.profile_phone, member.fullname from member , profile where  profile.user_id='".$_GET['id']."' and member.id='".$_GET['id']."'";
                        $sql =mysqli_query($connect,$query);
                        $image= mysqli_fetch_assoc($sql);
                        ?>
                        <div class="d-flex justify-content-center ">
                            <img src="../photo/<?=$image['image']?>" width="99%" alt="Null">
                        </div>

                        <div class="text-center mt-2"> <p><?=$image['fullname'] ?></p></div>
                        <div class="text-primary mt-2 text-center mb-2"> <p> <?=$image['email']?></p></div>
                        <div class="d-flex justify-content-center">
                            <button type="button" id="product" class="btn btn-success btn-sm ms-3 me-4"> Trang chủ</button>
                            <button type="button" id="log-out" class="btn btn-danger btn-sm ms-4 ">Thoát ra</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="btn-light  container col-sm-12 col-lg-12 col-md-12 ">
                <div class="row mt-1 menu ">
                    <div class="col-1 ">
                        <i class="fas fa-exclamation-circle "></i>
                    </div>
                    <div class="col ">
                        <div class=" ">Thông tin người dùng</div>
                    </div>
                </div>
                <div class="row mt-1 menu ">
                    <div class="col-1 ">
                        <i class="fas fa-heart "></i>
                    </div>
                    <div class="col ">Sản phẩm yêu thích</div>
                </div>
                <div class="row mt-1 menu ">
                    <div class="col-1 ">
                        <i class="fa fa-cart-arrow-down " aria-hidden="true "></i>
                    </div>
                    <div class="col ">Sản phẩm yêu thích</div>
                </div>
                <div class="row mt-1 menu ">
                    <div class="col-1 ">
                        <i class="fab fa-facebook-messenger "></i>
                    </div>
                    <div class="col ">Tin nhắn</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mt-4 d-flex flex-column">
            <h1 class="text-center">Thông tin người dùng</h1>
            <div class="">
                <ul class="d-flex flex-column flex-lg-row flex-wrap  justify-content-lg-around ">
                <li class="col-lg-6 pr-4">
                        Upload ảnh
                        <div class="">
                            <form action="./profile.php?id=<?=$_GET['id']?>" method="POST" enctype="multipart/form-data" class="d-flex flex-column ">
                                <input type="file" class="mt-2 " name="image" id=" ">
                                <input type="hidden" class="mt-3 " name="hidden" id="hidden ">
                                <button type="submit" name="upload" class="col-3 col-md-3 mt-2 col-lg-3 col-xxl-2 col-sm-2 btn btn-primary btn-sm ">Upload</button>
                                   <?php include("../php/xulyUpload.php");?>
                            </form>
                        </div>
                    </li>
                    <li class="col-lg-6">
                        Email
                        <div class="d-flex flex-column ">
                            <p class="textEmail" > <?=$image['profile_email']?></p>
                            <input type="text" class="col-sm-7 mb-3 col-9 col-md-12 col-lg-10 col-xxl-10 " name="" value="<?=$image['profile_email']?>" id="inputEmail">
                            <span class="help-block mb-2">Lỗi! Email phải trên 12 ký tự, không chứa ký tự đặc biệt và kết thúc bằng .com</span>
                            <button type="button" id="btnEditEmail" class="col-3 col-sm-4 col-md-5 col-lg-4 col-xxl-4 btn btn-primary btn-sm ">Chỉnh sửa</button>
                            <button id="btnSubmitEmail" onclick="submitEmail(<?=$_GET['id']?>)" type="button"  class="col-3 col-md-5 col-sm-3 col-lg-2 col-xxl-2 btn btn-primary btn-sm ">Lưu</button>
                       
                        </div>
                    </li>
                    <li class="col-lg-6">
                        Số điện thoại
                        <div class="d-flex flex-column ">
                            <p class="textPhoneNumber"> <?=$image['profile_phone']?> </p>
                            <input type="text" class="col-sm-7 col-9 mb-3 col-md-12 col-lg-10 col-xxl-3 " name="" value="<?=$image['profile_phone']?>" id="inputPhoneNumber">
                            <span class="mb-2 help-block">Lỗi! Số điện thoại không bao gồm chữ và kí tự đặc biệt </span>
                            <button id="btnEditPhoneNumber" type="button" class="col-3 col-md-5 col-sm-2 col-xxl-4 col-lg-4 btn btn-primary btn-sm ">Chỉnh sửa</button>
                            <button id="btnSubmitPhoneNumber"  onclick="submitPhoneNumber(<?=$_GET['id']?>)" class="col-3 col-md-5 col-sm-3 col-xxl-2 col-lg-2 btn btn-primary btn-sm " type="button"  >Lưu</button>
                       
                        </div>
                    </li>
                    <li class="col-lg-6">
                        Đia chỉ
                        <div class="d-flex flex-column ">
                            <p class="textAddress"> <?=$image['address']?> </p>
                            <input type="text" class="col-sm-7 mb-3 col-9 col-md-12 col-lg-10 col-xxl-10" name="" value="<?=$image['address']?>" id="inputAddress">
                            <button id="btnEditAddress" type="button"  class="col-3 col-md-5 col-sm-2 col-lg-4 col-xxl-4 btn btn-primary btn-sm ">Chỉnh sửa</button>
                            <button id="btnSubmitAddress" onclick="submitAddress(<?=$_GET['id']?>)" type="button"  class="col-3 col-md-5 col-sm-3 col-lg-2 col-xxl-2 btn btn-primary btn-sm ">Lưu</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js "></script>
    <script src="../js/profile.js "></script>
</body>

</html>

</html>