var APIlink = `http://localhost:3000/product`;
var prName = document.querySelector('.product-name');
var prImage = document.querySelector('.product-image');
var prInfo = document.querySelector('.product-info');
var prPrice = document.querySelector('.product-price');
var prAuthor = document.querySelector('.product-author');
var prPublisher = document.querySelector('.product-publisher');
var prPublishing_company = document.querySelector('.product-pubblishing_company');
var prForm = document.querySelector('.product-form');
var prSize = document.querySelectorAll('.product-size');
var productInfoDemo = document.querySelector(".product-info-demo")


function getProduct(id) {
    fetch(APIlink + '/' + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            console.log(data)
        })

}

function renderProduct(courses) {
    var html = courses.map(function(course) {
        return `
        <li>
${course.name}
        </li>
        <li>
${course.image}
        </li>    
        `
    })
    productInfoDemo.innerHTML = html;
}