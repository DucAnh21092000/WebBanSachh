$(document).ready(function() {
    var login = $("#login");
    login.on("click", function login() {
        var user = $(".user");
        var userValue = user.val();
        var pass = $(".password");
        var passValue = pass.val();
        var errorLabel = $(".help-block");
        checkInputNotNull(userValue, passValue, errorLabel);
        if (checkEmail(userValue) == true && checkPassword(passValue) == true) {
            $.ajax({
                url: "./php/GetUser/php/getCustomer.php",
                method: "POST",
                data: { email: userValue, password: passValue },
                success: function(response) {
                    console.log(response);
                    if (response == 1) {
                        alert("Đăng nhập thành công");
                        window.location.replace("./php/product/product.php");
                    } else {
                        alert("Tên đăng nhập hoặc mật khẩu không chính xác !");
                    }
                }
            });
        } else if (checkEmail(userValue) == true && checkPassword(passValue) == false) {
            errorLabel[1].innerHTML = `Lỗi! Mật khẩu từ 6 ký tự trở lên và không bao gồm các ký tự đặc biệt `;
            errorLabel[1].classList.add("error-label");
        } else if (checkEmail(userValue) != true && checkPassword(passValue) == true) {
            errorLabel[1].innerHTML = `Lỗi! Email phải trên 12 ký tự, không chứa ký tự đặc biệt và kết thúc bằng .com`;
            errorLabel[1].classList.add("error-label");
        }

    });

    function checkInputNotNull(userValue, passValue, errorLabel) {
        if (userValue == "" && passValue == "") {
            errorLabel[0].classList.add("error-label");
            errorLabel[1].classList.add("error-label");
        } else if (userValue == "") {
            errorLabel[0].classList.add("error-label");
            return false;
        } else if (passValue == "") {
            errorLabel[1].classList.add("error-label");
            return false;
        } else {
            if (passValue != "") {
                errorLabel[1].classList.remove("error-label")
            }
            if (userValue != "") {
                errorLabel[0].classList.remove("error-label")
            }
        }
    }

    function checkEmail(string) {
        var patt = /^[^-=,?\\*\\t{}\\|][a-zA-Z.0-9@]{12,100}(.com$)$/;
        var result = patt.test(string);
        // đều trả về false nếu có dấu + - * /(ký tự đặc biệt)
        // cũng trả về false nếu gmail có dấu cách 
        // trả về true vs các trg hợp còn lại
        return result;
    }

    function checkPassword(input) {
        var patt = /[a-zA-Z0-9]{6,50}$/;
        var result = patt.test(input);
        return result;
    }
})