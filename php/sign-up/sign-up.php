<!doctype html>
<html lang="en">

<head>
    <title>Trang Đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../sign-up/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>
    

    <table class="table table-striped table-inverse table-responsive main_login" style="color: black; width:370px;">
    <form >
    <tbody>
           <tr></tr>
            <tr class="col" style="height: 10px;">
                <td class="" style="width: 500px;">
                    <h3 class="text-center" style="color: black;">
                    CLASSY SIGN-UP FORM </h3>
                </td>
            </tr>
            <tr></tr>
            <tr class="col">
                <td class="">
                <div class="mb-3 ">
                <label id="full_name_label" for="full_name" style="width: 200px;"> <i class="fa fa-user-circle " aria-hidden="true"></i> Email :</label>
                    <input autocomplete="username" type="email" name="email" id="input" class="form-control email" value="" required="required" title=""style="margin-right: 30px;" placeholder="Enter your email">
                    <span class="help-block">Email không được để trống !</span>
            </div>
                </td>
            </tr>      
            <tr></tr>
            <tr class="col">
                <td >
                    <div class="mb-3 ">
                        <label for=" " style="width: 200px "> <i class="fa fa-key" aria-hidden="true"></i>  Password</label>
                        <input autocomplete="current-password" type="password" class="form-control password" name="password" id=" " placeholder="Enter your password" style="margin-right: 30px;">
                        <span class="help-block">Password không được để trống !</span>
                    </div>
                </td>
            </tr>
            <tr></tr>
            <tr class="col">
                <td >
                    <div class="mb-3">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                        <label id="full_name_label" for="full_name" style="width: 200px;"> Full Name</label>
                        <div class="d-flex flex-row" style="align-items: center;" class="td-form">
                        <input id="full_name" name="full_name" type="text" class="form-control full_name" style="margin-right: 30px;"  autocomplete="null" placeholder="Enter your full name"/>
                        </div>
                        <span class="help-block">Fullname không được để trống !</span>
                    </div>
                </td>
            </tr>
          <tr></tr>
            <tr class="col">
                <td >
                        <label id="phone_label" for="phone" style="width: 200px;"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone Number</label>
                        <input id="phone" name="phone" type="text" class="form-control phone" style="margin-right: 30px;" placeholder="Enter Phone Number" />
                        <span class="help-block">Số điện thoại không được để trống !</span>
                </td>
            </tr>
            <tr class="col">
                <td class="d-flex flex-row " style="justify-content: space-around; ">
                    <input  class="button create" type="button"  name="create" value="Create">
                   
                </td>
            </tr>    
        </tbody>
    </form>
    </table>
  
    <b class="text-center" style="margin-top: 10px; margin-left: 400px;">Classy SIGN-UP Form . All rights reserved | Design by Anh.dd182330</b>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script> 
    <script src="./js/sign-up.js"></script>
</body>

</html>