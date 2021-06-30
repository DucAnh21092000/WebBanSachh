function infoPay() {
    var payOnline = document.querySelectorAll('.abc');
    var payOnl = document.querySelectorAll('.payOnline');
    var payOff = document.querySelectorAll('.payOffline');
    var infoPay = document.querySelectorAll('.info__profile');
    var a = infoPay[4].innerHTML = payOnline[0].value;
    if (payOnline[0].value == 'Thanh toán online') {
        payOff[0].style = "display:none ";
        payOnl[0].style = "display:block ";
    } else {
        payOff[0].style = "display:block ";
        payOnl[0].style = "display:none ";
    }
}

function returnDetail(id) {
    window.location.replace("../detail/detail.php?id=" + id)
}

// var textmore = document.querySelector('.textmore1');
// console.log(textmore);

// function show() {
//     $('.textcomplete1').toggle();
//     a.innerHTML = "Đọc thêm...";
//     if (textcomplete.style.display == "inline") {
//         textmore.innerHTML = "Ẩn bớt...";
//         console.log(1)
//     }
// }