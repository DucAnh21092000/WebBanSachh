var errorLabel = document.querySelectorAll(".help-block")
    // chuyển trang khi click vào button
var btnMain = document.querySelector("#product");
btnMain.onclick = function() {
    window.location.replace("../../product/product.php")
}
var btnLogOut = document.querySelector("#log-out")
btnLogOut.onclick = function() {
    window.location.replace("../../log-out/log-out.php")
}

// click vào button chỉnh sửa sẽ ra ô input chứa nội dung
// email
var btnEditEmail = document.querySelector("#btnEditEmail");
var inputEmail = document.querySelector("#inputEmail");
var textEmail = document.querySelector(".textEmail")
var btnSubmitEmail = document.querySelector("#btnSubmitEmail")
btnEditEmail.onclick = function() {
    inputEmail.style = `display: block`;
    textEmail.style = `display : none`;
    btnEditEmail.style = `display : none`;
    btnSubmitEmail.style = `display : block`;
}

function submitEmail(id) {
    var inputEmailValue = inputEmail.value;
    if (checkEmail(inputEmailValue)) {
        $.ajax({
            url: "./xulyEmail.php",
            method: "POST",
            data: {
                id: id,
                email: inputEmailValue
            },
            success: function(response) {
                var arr = JSON.parse(response);
                if (arr == 1) {
                    alert("Thay đổi thành công !")
                    window.location.replace("profile.php?id=" + id)
                } else {
                    alert("Thay đổi thất bại !")
                }
            }
        })
    } else {
        errorLabel[0].style = `display: block`
    }
}
//address
var btnEditAddress = document.querySelector("#btnEditAddress");
var inputAddress = document.querySelector("#inputAddress");
var textAddress = document.querySelector(".textAddress")
var btnSubmitAddress = document.querySelector("#btnSubmitAddress");

btnEditAddress.onclick = function() {
    inputAddress.style = `display: block`;
    textAddress.style = `display : none`;
    btnEditAddress.style = `display : none`;
    btnSubmitAddress.style = `display: block !important`;
}

function submitAddress(id) {
    var inputAddressValue = inputAddress.value;
    $.ajax({
        url: "./xulyAddress.php",
        method: "POST",
        data: {
            id: id,
            address: inputAddressValue
        },
        success: function(response) {
            var arr = JSON.parse(response);
            if (arr == 1) {
                alert("Thay đổi thành công !")
                window.location.replace("profile.php?id=" + id)
            } else {
                alert("Thay đổi thất bại !")
            }
        }
    })
}


//phone number
var btnEditPhoneNumber = document.querySelector("#btnEditPhoneNumber");
var inputPhoneNumber = document.querySelector("#inputPhoneNumber");
var textPhoneNumber = document.querySelector(".textPhoneNumber")
var btnSubmitPhoneNumber = document.querySelector("#btnSubmitPhoneNumber")
btnEditPhoneNumber.onclick = function() {
    inputPhoneNumber.style = `display: block`;
    textPhoneNumber.style = `display : none`;
    btnEditPhoneNumber.style = `display : none`;
    btnSubmitPhoneNumber.style = `display: block`;
}

function submitPhoneNumber(id) {
    var inputPhoneNumberValue = inputPhoneNumber.value;
    if (checkPhoneNumber(inputPhoneNumberValue)) {
        $.ajax({
            url: "./xulyPhoneNumber.php",
            method: "POST",
            data: {
                id: id,
                phoneNumber: inputPhoneNumberValue
            },
            success: function(response) {
                var arr = JSON.parse(response);
                if (arr == 1) {
                    alert("Thay đổi thành công !")
                    window.location.replace("profile.php?id=" + id)
                } else {
                    alert("Thay đổi thất bại !")
                }
            }
        })
    } else {
        errorLabel[1].style = `display:block`
    }
}

//check phoneNumber
function checkPhoneNumber(input) {
    var patt = /[0-9\+]{9,12}$/;
    var result = patt.test(input);
    return result;
}
//check email
function checkEmail(string) {
    var patt = /^[^-=,?\\*\\t{}\\|][a-zA-Z.0-9@]{12,100}(.com$)$/;
    var result = patt.test(string);
    // đều trả về false nếu có dấu + - * /(ký tự đặc biệt)
    // cũng trả về false nếu gmail có dấu cách 
    // trả về true vs các trg hợp còn lại
    return result;
}