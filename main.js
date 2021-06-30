// // var array = [0, 2, 34];
// // var arr = [];
// // // for (var value in array) {
// // //     var output = Boolean(value);
// // //     arr.push(output);
// // //     console.log(output);
// // // }
// // // console.log(arr);
// var courses = [
//     { name: 'Javascript', coin: 1000 },
//     { name: 'PHP', coin: 1200 },
//     { name: 'Dart', coin: 1400 }
// ];

// // function run(courses) {
// //     var a = 0;
// //     var temp = 0;

// //     function sum(a, b, c, d) {
// //         return a = a + b.coin;
// //     }

// //     return courses.reduce(sum, 0);
// // }

// // console.log(run(courses));

// // var courses = ['php',
// //     'javascript',
// //     'html css'
// // ];
// // Array.prototype.forEach2 = function(callback) {
// //     var length = this.length;
// //     for (var value in this) {
// //         if (this.hasOwnProperty) {
// //             callback(this[value], value, this);
// //         }
// //     }
// // }
// // courses = new Array(100);
// // courses.push('Java');
// // var htmls = courses.forEach2(function(course, index, arr) {
// //     console.log(course, index, arr);
// // })
// //
// Array.prototype.forEach2 = function(callback) {
//     var length = this.length;
//     var out = [];
//     var a = true;
//     for (var value in this) {
//         if (this.hasOwnProperty(value)) {
//             var result = callback(this[value], value, this);
//             if (!result) {
//                 return false;
//             }
//         }

//     }
//     return a;
// }
// var forEach = courses.forEach2(function(coures) {
//     return coures.coin > 1200;
// });
// console.log(forEach)
// Làm bài tập tạ
// // var boxHTMLCollection = document.getElementsByClassName("box");
// // var box1Element = document.querySelector(".box:first-child");
// var box2Element = document.getElementsByClassName("box:first-child");
// // var allItemElements = document.getElementsByTagName('li');
// // var box1ItemElements = document.querySelectorAll('.box:first-child li');
// // var box2ItemElements = document.querySelectorAll('.box:nth-child(2) li');
// console.log(box2Element);
// var checkbox = document.querySelectorAll('input[type="checkbox"]');
// var checkboxNodes = document.querySelector('input[type=checkbox][value="1"]');
// var checkboxCheckedAndNotDisable = document.querySelectorAll('input[type=checkbox]:checked:not(:disabled)');
// var checkboxDisableAndNotChecked = document.querySelectorAll('input[type=checkbox]:checked:not(:disabled)');
// var checkboxCheckedAndDisabled = document.querySelectorAll('input[type=checkbox]:checked:disabled');
// console.log(checkboxNodes);
// console.log(checkbox);
// console.log(checkboxCheckedAndNotDisable);
// console.log(checkboxDisableAndNotChecked);
// console.log(checkboxCheckedAndDisabled);var
// var h1 = document.querySelectorAll('.parent >ul >li');
// h1.forEach(function(item) {
//     item.style = 'color : red';
// })
// Làm bài tập tại đây
// var f8LinkElements = document.querySelectorAll('a');
// var f8LinkElement = f8LinkElements[0];
// var f8ShortLink = f8LinkElements[0].href;
// f8LinkElements[1].href = f8ShortLink;
// var a = document.querySelector('div');
// a.setAttribute('data-url', f8ShortLink);
// console.log(f8ShortLink);
// console.log(a.getAttribute('data-url'));

// var box = document.getElementsByClassName('box');
// box.textContent = 'Học lập trình tại F8';
// var box2 = document.querySelectorAll('div');
// box2[1].textContent = 'Thao tác với DOM qua bài tập tại F8';v


// var a = document.querySelectorAll('div >ul');
// a[0].innerHTML = `
// <li> From</li>
// <li> Thái Bình </li>
// <li> With Love </li>
// `;
// console.log(a);
// var b = document.querySelectorAll('div');
// b[1].innerHTML =
//     `
//     <h1> Đức Anhhhhhhhhhhhhh </h1>
//     `;

// var h1ELement = document.querySelectorAll(('h1'));
// var h1TagName = h1ELement[0].tagName;
// var h1NextElementSibling = h1ELement[0].nextElementSibling;
// console.log(h1TagName);
// console.log(h1NextElementSibling);

// var a = document.querySelectorAll('div');
// var textNode1 = a[0].childNodes[0];
// var textNode2 = a[0].childNodes[2];
// var h1Element = a[0].childNodes[1];
// a[0].childNodes[0].classList.add('box1');

// console.log(textNode1);

// var a = document.querySelector('h1');
// a.classList.add('first-heading');
// var b = document.querySelector('.test');
// b.classList.add('second-heading');
// b.classList.remove('test');

// console.log(b.classList)




var src = ['1.png', 'banner2.png'];
var a = document.querySelector('.image');
var current = 0;
var length = src.length;
Object.assign(a.style, {
    width: '800px',
    height: '288px',
})

function switch_image() {
    a.src = `\image\\` +
        src[current];
    current++;
    if (current < length) {
        setTimeout("switch_image()", 2000)
    } else {
        current = 0;
        setTimeout("switch_image()", 2000)
    }
}
switch_image();

var c = document.querySelectorAll('.morebook');
var d = document.querySelectorAll('.linkBook ');

var moreProduct = [{
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 1
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 2
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 3
    },
    {
        url: '1.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 4
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 5
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 6
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 7
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 8
    }, {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 9
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 10
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 11
    }
];
var e = 0;

function morebook() {
    e++;
    if (e == 0) {
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `\image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `\image\\` +
                moreProduct[e + 5].url;
            d[5].href = moreProduct[e + 5].link;
        }, 1000);
        console.log(e);
    } else if (1 <= e && e < moreProduct.length - 5) {
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `\image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `\image\\` +
                moreProduct[e + 5].url;
            d[5].href = moreProduct[e + 5].link;

        }, 1000);
        console.log(e);
    } else if (e == moreProduct.length - 5) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `\image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `\image\\` +
                moreProduct[0].url;
            d[5].href = moreProduct[0].link;

        }, 1000);
    } else if (e == moreProduct.length - 5) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `\image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `\image\\` +
                moreProduct[0].url;
            d[5].href = moreProduct[0].link;

        }, 1000);
    } else if (e == moreProduct.length - 4) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `\image\\` +
                moreProduct[0].url;
            d[4].href = moreProduct[0].link;
            c[5].src = `\image\\` +
                moreProduct[1].url;
            d[5].href = moreProduct[1].link;

        }, 1000);
    } else if (e == moreProduct.length - 3) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `\image\\` +
                moreProduct[0].url;
            d[3].href = moreProduct[0].link;
            c[4].src = `\image\\` +
                moreProduct[1].url;
            d[4].href = moreProduct[1].link;
            c[5].src = `\image\\` +
                moreProduct[2].url;
            d[5].href = moreProduct[2].link;

        }, 1000);
    } else if (e == (moreProduct.length - 2)) {
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `\image\\` +
                moreProduct[0].url;
            d[2].href = moreProduct[0].link;
            c[3].src = `\image\\` +
                moreProduct[1].url;
            d[3].href = moreProduct[1].link;
            c[4].src = `\image\\` +
                moreProduct[2].url;
            d[4].href = moreProduct[2].link;
            c[5].src = `\image\\` +
                moreProduct[3].url;
            d[5].href = moreProduct[3].link;
        }, 1000);
        console.log(e);
    } else if (e == (moreProduct.length - 1)) {
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `\image\\` +
                moreProduct[0].url;
            d[1].href = moreProduct[0].link;
            c[2].src = `\image\\` +
                moreProduct[1].url;
            d[2].href = moreProduct[1].link;
            c[3].src = `\image\\` +
                moreProduct[2].url;
            d[3].href = moreProduct[2].link;
            c[4].src = `\image\\` +
                moreProduct[3].url;
            d[4].href = moreProduct[3].link;
            c[5].src = `\image\\` +
                moreProduct[4].url;
            d[5].href = moreProduct[4].link;
        }, 1000);

        console.log(e);
    } else if (e == moreProduct.length) {
        setTimeout(function() {
            c[0].src = `\image\\` +
                moreProduct[0].url;
            d[0].href = moreProduct[0].link;
            c[1].src = `\image\\` +
                moreProduct[1].url;
            d[1].href = moreProduct[1].link;
            c[2].src = `\image\\` +
                moreProduct[2].url;
            d[2].href = moreProduct[2].link;
            c[3].src = `\image\\` +
                moreProduct[3].url;
            d[3].href = moreProduct[3].link;
            c[4].src = `\image\\` +
                moreProduct[4].url;
            d[4].href = moreProduct[4].link;
            c[5].src = `\image\\` +
                moreProduct[5].url;
            d[5].href = moreProduct[5].link;

        }, 1000);

    } else if (e >= 8) {
        e = 0;
        setTimeout('morebook()', 1000);
        console.log(e);
    }
}

function infoPay() {
    var payOnline = document.querySelectorAll('.abc');
    var payOnl = document.querySelectorAll('.payOnline');
    var payOff = document.querySelectorAll('.payOffline');
    console.log(payOnline);
    var infoPay = document.querySelectorAll('.info__profile');
    var a = infoPay[4].innerHTML = payOnline[0].value;
    console.log(a);
    if (payOnline[0].value == 'Thanh toán online') {
        payOff[0].style = "display:none ";
        payOnl[0].style = "display:block ";
    } else {
        payOff[0].style = "display:block ";
        payOnl[0].style = "display:none ";
    }
    console.log(payOff[0])
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