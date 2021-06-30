function search() {
    var textSearch = document.querySelector("#input-search");
    window.location.replace("./search.php?name=" + textSearch.value)
}

function confirm() {
    if (event.which == 13 || even.keyCode == 13) {
        var textSearch = document.querySelector("#input-search");
        window.location.replace("./search.php?name=" + textSearch.value)
    }

}

function goToCart(id) {
    var numberProduct = document.querySelector("#number-product");
    var numberProductValue = numberProduct.value;
    var errorLabel = document.querySelector('.error-label')
    if (numberProductValue == "") {
        errorLabel.style = `display : block`
    }
    if (!checkNumber(numberProductValue)) {
        errorLabel.innerHTML = `Vui lòng nhập số lượng hợp lệ!`;
        errorLabel.style = `display: block`
    } else {
        window.location.replace("../pay-online/pay-online.php?id=" + id + "&number=" + numberProductValue);
    }
}

function checkNumber(string) {
    var patt = /[1-9]/;
    var result = patt.test(string);
    return result;
}