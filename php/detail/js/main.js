var src = ['1.png', 'banner2.png'];
var a = document.querySelector('.image');
var current = 0;
var length = src.length;
Object.assign(a.style, {
    width: '800px',
    height: '288px',
})

function switch_image() {
    a.src = `
   ../image\\` +
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


// More Product
var c = document.querySelectorAll('.morebook');
var d = document.querySelectorAll('.linkBook ');

var moreProduct = [{
        url: 'python.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 3
    },
    {
        url: 'dacnhantam.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 6
    },
    {
        url: 'vuisong.png',
        link: 'detail.php' + '?' + 'id' + '=' + 12
    },
    {
        url: 'caphe.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 10
    },
    {
        url: 'demo.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 1
    },
    {
        url: 'laptrinhc.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 29
    },
    {
        url: 'tamhon.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 2
    },
    {
        url: 'nganngui.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 14
    }, {
        url: 'thanhcong.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 15
    },
    {
        url: 'c++.jpg',
        link: 'detail.php' + '?' + 'id' + '=' + 30
    },
    {
        url: 'cover.clsbi',
        link: 'detail.php' + '?' + 'id' + '=' + 11
    }
];
var e = 0;

//
function showBook() {
    c[0].src = `../image\\` +
        moreProduct[e].url;
    d[0].href = moreProduct[e].link;
    c[1].src = `../image\\` +
        moreProduct[e + 1].url;
    d[1].href = moreProduct[e + 1].link;
    c[2].src = `../image\\` +
        moreProduct[e + 2].url;
    d[2].href = moreProduct[e + 2].link;
    c[3].src = `../image\\` +
        moreProduct[e + 3].url;
    d[3].href = moreProduct[e + 3].link;
    c[4].src = `../image\\` +
        moreProduct[e + 4].url;
    d[4].href = moreProduct[e + 4].link;
    c[5].src = `../image\\` +
        moreProduct[e + 5].url;
    d[5].href = moreProduct[e + 5].link;
}
showBook();
// chuyển ảnh khi click 
function morebook() {
    e++;
    if (e == 0) {
        setTimeout(function() {
            showBook();
        }, 1000);
        console.log(e);
    } else if (1 <= e && e < moreProduct.length - 5) {
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `../image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `../image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `../image\\` +
                moreProduct[e + 5].url;
            d[5].href = moreProduct[e + 5].link;

        }, 1000);
        console.log(e);
    } else if (e == moreProduct.length - 5) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `../image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `../image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `../image\\` +
                moreProduct[0].url;
            d[5].href = moreProduct[0].link;

        }, 1000);
    } else if (e == moreProduct.length - 5) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `../image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `../image\\` +
                moreProduct[e + 4].url;
            d[4].href = moreProduct[e + 4].link;
            c[5].src = `../image\\` +
                moreProduct[0].url;
            d[5].href = moreProduct[0].link;

        }, 1000);
    } else if (e == moreProduct.length - 4) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `../image\\` +
                moreProduct[e + 3].url;
            d[3].href = moreProduct[e + 3].link;
            c[4].src = `../image\\` +
                moreProduct[0].url;
            d[4].href = moreProduct[0].link;
            c[5].src = `../image\\` +
                moreProduct[1].url;
            d[5].href = moreProduct[1].link;

        }, 1000);
    } else if (e == moreProduct.length - 3) {
        console.log(e);
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[e + 2].url;
            d[2].href = moreProduct[e + 2].link;
            c[3].src = `../image\\` +
                moreProduct[0].url;
            d[3].href = moreProduct[0].link;
            c[4].src = `../image\\` +
                moreProduct[1].url;
            d[4].href = moreProduct[1].link;
            c[5].src = `../image\\` +
                moreProduct[2].url;
            d[5].href = moreProduct[2].link;

        }, 1000);
    } else if (e == (moreProduct.length - 2)) {
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[e + 1].url;
            d[1].href = moreProduct[e + 1].link;
            c[2].src = `../image\\` +
                moreProduct[0].url;
            d[2].href = moreProduct[0].link;
            c[3].src = `../image\\` +
                moreProduct[1].url;
            d[3].href = moreProduct[1].link;
            c[4].src = `../image\\` +
                moreProduct[2].url;
            d[4].href = moreProduct[2].link;
            c[5].src = `../image\\` +
                moreProduct[3].url;
            d[5].href = moreProduct[3].link;
        }, 1000);

    } else if (e == (moreProduct.length - 1)) {
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[e].url;
            d[0].href = moreProduct[e].link;
            c[1].src = `../image\\` +
                moreProduct[0].url;
            d[1].href = moreProduct[0].link;
            c[2].src = `../image\\` +
                moreProduct[1].url;
            d[2].href = moreProduct[1].link;
            c[3].src = `../image\\` +
                moreProduct[2].url;
            d[3].href = moreProduct[2].link;
            c[4].src = `../image\\` +
                moreProduct[3].url;
            d[4].href = moreProduct[3].link;
            c[5].src = `../image\\` +
                moreProduct[4].url;
            d[5].href = moreProduct[4].link;
        }, 1000);

        console.log(e);
    } else if (e == moreProduct.length) {
        setTimeout(function() {
            c[0].src = `../image\\` +
                moreProduct[0].url;
            d[0].href = moreProduct[0].link;
            c[1].src = `../image\\` +
                moreProduct[1].url;
            d[1].href = moreProduct[1].link;
            c[2].src = `../image\\` +
                moreProduct[2].url;
            d[2].href = moreProduct[2].link;
            c[3].src = `../image\\` +
                moreProduct[3].url;
            d[3].href = moreProduct[3].link;
            c[4].src = `../image\\` +
                moreProduct[4].url;
            d[4].href = moreProduct[4].link;
            c[5].src = `../image\\` +
                moreProduct[5].url;
            d[5].href = moreProduct[5].link;

        }, 1000);

    } else if (e >= 8) {
        e = 0;
        setTimeout('morebook()', 1000);

    }
}

// scrollTop

$(document).ready(function() {
    var imgScroll = $('.scrollTop');

    $(window).scroll(function() {
        if ($(document).scrollTop() > 550) {
            imgScroll.show();
        } else {
            imgScroll.hide();
        }
    });
});

function scrolltop() {
    $("html,body").animate({ scrollTop: 0 }, '800', 'swing')
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