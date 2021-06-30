var create = $('.create');
create.on("click", function login() {

    var email = $(".email");
    var emailValue = email.val();
    var pass = $(".password");
    var passValue = pass.val();
    var fullNameValue = $('.full_name').val();
    var phoneValue = $('.phone').val();
    var errorLabel = document.querySelectorAll(".help-block");
    checkInputNotNull(emailValue, passValue, fullNameValue, phoneValue, errorLabel);
    if (checkEmail(emailValue) && checkPassword(passValue) && checkPhoneNumber(phoneValue) && checkFullName(fullNameValue)) {
        $.ajax({
                url: "../sign-up/checkUser.php",
                method: "POST",
                data: {
                    email: emailValue,
                    phone: phoneValue
                },
                success: function(response) {
                    var arr = JSON.parse(response);
                    return arr;
                }
            })
            .then(function(arr) {
                var newArr = Object.values(arr);
                var result = newArr.some(function(arr) {
                    return arr == 0;
                })
                return result;
            })
            .then(function(result) {
                if (result) {
                    alert("Tài khoản hoặc số điện thoại đã được sử dụng!");
                } else {
                    $.ajax({
                            url: "../sign-up/createUser.php",
                            method: "POST",
                            data: {
                                email: emailValue,
                                full_name: fullNameValue,
                                phone: phoneValue,
                                password: passValue
                            },
                            success: function(response) {
                                var arr = JSON.parse(response);
                                return arr;
                            }
                        })
                        .then(function(arr) {
                            var newArr = Object.values(arr);
                            var result = newArr.some(function(arr) {
                                return arr == 0;
                            })
                            return result;
                        })
                        .then(function(result) {
                            if (result) {
                                alert("Đăng ký tài khoản thành công !");

                            } else {
                                alert("Đăng ký thất bại !")
                            }
                        })
                }

            })
    }
    if (checkPassword(passValue) == false) {
        errorLabel[1].innerHTML = `Lỗi! Mật khẩu từ 6 ký tự trở lên và không bao gồm các ký tự đặc biệt `;
        errorLabel[1].classList.add("error-label");
    }
    if (checkEmail(emailValue) != true) {
        errorLabel[0].innerHTML = `Lỗi! Email phải trên 12 ký tự, không chứa ký tự đặc biệt và kết thúc bằng .com`;
        errorLabel[0].classList.add("error-label");
    }
    if (!checkFullName(fullNameValue)) {
        errorLabel[2].innerHTML = `Lỗi!Tên người dùng không chứa số và ký tự đặc biệt`;
        errorLabel[2].classList.add("error-label");
    }
    if (!checkPhoneNumber(phoneValue)) {
        errorLabel[3].innerHTML = `Lỗi! Số điện thoại bao gồm chữ và kí tự đặc biệt `;
        errorLabel[3].classList.add("error-label");
    }

});

function checkInputNotNull(emailValue, passValue, fullNameValue, phoneValue, errorLabel) {
    if (emailValue == "") {
        errorLabel[0].classList.add("error-label");

    }
    if (passValue == "") {
        errorLabel[1].classList.add("error-label");

    }
    if (fullNameValue == "") {
        errorLabel[2].classList.add("error-label");

    }
    if (phoneValue == "") {
        errorLabel[3].classList.add("error-label");

    } else {
        if (passValue != "") {
            errorLabel[1].classList.remove("error-label")
        }
        if (emailValue != "") {
            errorLabel[0].classList.remove("error-label")
        }
        if (fullNameValue != "") {
            errorLabel[2].classList.remove("error-label")
        }
        if (phoneValue != "") {
            errorLabel[3].classList.remove("error-label")
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

function checkFullName(input) {
    var patt = /['a-zA-Z]{3,30}$/;
    var result = patt.test(input);
    return result;
}

function checkPhoneNumber(input) {
    var patt = /[0-9\+]{9,12}$/;
    var result = patt.test(input);
    return result;
}