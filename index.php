<!doctype html>
<html lang="en">
<?php
ob_start();
session_start();

?>
<head>
    <title>Trang Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <style>
    
        body {  
            height: 100%;
            width:100%;
            position: relative;
            background-size: 100% 110%;
            background-repeat: no-repeat;
            background-image: url(./image/bg-01.jpg);
        }
        
        .main_login {
            margin-top:13px;
            background-color: #ffffff;
            color:white;
            border-radius: 20px;   
        }
        
        .form-group {
            width: 400px;
        }
        .button{ 
        background-image: url(./image/bg-01.jpg);
        width: 300px;
        border-radius: 30px;
        }
        .circle {
            background: #f363b7;
            border-radius: 50%;
            height: 2.2em;
            width: 2.2em;
            border: none;
        }
        .td-form{
            border-color: navy;
        }
        .user{
            background-image: url(https://png.pngtree.com/png-clipart/20191121/original/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_5089976.jpg);
            background-size: 8%;
            background-repeat: no-repeat;
            background-position-x: 10px;
            background-position-y: 5px;
            padding: 12px 0px 12px 80px;
        }
        .email{
            background-image :url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-email-icon-png-image_5065641.jpg);
            background-size: 8%;
            background-repeat: no-repeat;
            background-position-x: 10px;
            background-position-y: 5px;
            padding: 12px 10px 12px 60px;}
        .password{
            background-image: url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-circle-password-icon-vectors-png-image_5053796.jpg);
            background-size: 17%;
            background-repeat: no-repeat;
            background-position-y: -14px;
            background-position-x: -5px;
            padding: 12px 20px 12px 60px;
      }
      .phone{
          background-image: url(https://png.pngtree.com/png-clipart/20191120/original/pngtree-phone-icon-png-image_5065646.jpg);
          background-size: 8%;
            background-repeat: no-repeat;
            background-position-y: 8px;
            background-position-x: 8px;
            padding: 12px 0px 12px 40px;}
            .sign-up:hover{
             text-decoration: none;
             color: red;
            }
            .help-block{
                display:none;
            }
            .error-label{
                display:block;
                color :red;
            }
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
<div class="col-lg-12 col-xl-12 col-sm-12 col-md-12 d-flex justify-content-center">
<div class="col-lg-6 col-xl-5 col-md-7 col-sm-10">
<table class="table col-lg-12 col-xl-11 col-md-12 col-11 col-sm-10 table-striped table-inverse table-responsive main_login" style="color:black;">
        <tbody>
            <form action="">
            <tr></tr>
            <tr class="col-lg-1">
                <td class="col-sm-5 col-lg-1" >
                    <h4 class="text-center">
                    CLASSY SIGN-IN FORM </h4>
                </td>
            </tr> 
            <tr></tr> 
            <tr class="col">
                    <td class="">
                        <div class="form-group col-lg-11 col-xl-11 " >
                            <label for="exampleInputEmail1" style="width:200px;"><i class="fa fa-user" aria-hidden="true"></i> Email </label>
                            <input autocomplete="email" type="email" class="form-control user"  id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email " name="email" >
                            <span class="help-block">Email không được để trống !</span>
                        </div>
                          <small id="emailHelp " class="form-text text-muted ">We'll never share your email with anyone else.</small>
                    </td>
                </tr>
                <tr></tr>
                <tr class="col">
                    <td class="">
                        <div class="form-group mb-3 col-xl-11" >
                            <label for="exampleInputPassword1 " style="width:200px"><i class="fa fa-key" aria-hidden="true"></i> Password</label>
                            <input type="password" autocomplete="current-password" class="form-control password " id="exampleInputPassword1 " placeholder="Enter password " name="password">
                            <span class="help-block">Password không được để trống !</span>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr class="col">
                    <td class="text-center ">
                    <a href="update.php" style="float:left" class="sign-up">Update Password ?</a>    
                    <a href="forget.php" style="float:right" class="sign-up">Forget Password ?</a> </br>
                        <input  class="btn button" id="login"  type="button" name="login" value="Login">
                    </td>
                </tr>
                <tr></tr>
                </tr>
            <tr class="text-lg-center">
                <td class="text-center">
                    <button class="circle" class="button">Or</button>
                </td>
            </tr>

                <tr class="col">
                <td class="  d-flex flex-row justify-content-xl-between ">
                    <div class="d-flex flex-row" style="justify-content:space-around;">
                        <button class="btn btn-primary d-flex flex-row" style="width:200px;height:40px;" ><i class="fa fa-facebook-f" aria-hidden="true" style="margin-top:5px" > </i>
                        <div style="background:white; margin:0px 10px 0px 10px; height:30px; width:1px; margin-right:50px" > &nbsp;</div>
                        <p>Facebook </p> 
                         </button>
                       
                    </div>
                    <div class="d-flex flex-row ">
                    <button class="btn btn-primary d-flex flex-row" style="width:200px;height:40px;" >  <i class="fa fa-twitter" aria-hidden="true" style="margin-top:5px;"></i>
                        <div style="background:white; margin:0px 10px 0px 10px; height:30px; width:1px; margin-right:50px" > &nbsp;</div>
                             <p>Twitter </p> 
                    </button>   
                        </div> 
                </td>
                <tr><td><center>
                <a class="sign-up" href="./php/sign-up/sign-up.php">Don't have account ? Click here  </a>
                </center>           
                        </td></tr>
            </tr>
            </form>
        </tbody>
    </table>
</div>  
    </div>
    <div class="col-lg-11 col-xl-12 text-center">
    <b class="col-lg-9">Classy SIGN-IN Form . All rights reserved | Design by Anh.dd <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 182330</b>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
     <script src="index.js">
</script>
</body>
