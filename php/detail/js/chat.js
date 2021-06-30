var formChat = document.querySelector('.form-chat');
var hidenChat = document.querySelector('.hident-chat');
var closeChat = document.querySelector('.close-chat');
var chat = document.querySelector('.chat');
var userText = document.querySelector('.user-text');
var user2Text = document.querySelector('.user2-text');

hidenChat.onclick = function() {
    var formchat = $(".chat");
    formchat.add("formChat");
    formchat.toggle();
}
closeChat.onclick = function() {
    chat.remove();
}
var message = document.querySelector('.message');
var p = document.createElement("p");

function getChat(user_id, product_id) {
    $.ajax({
            url: "../chat/php/selectMess.php",
            method: "POST",
            data: {
                user_id: user_id,
                product_id: product_id
            },
            success: function(response) {
                return response;
            }
        })
        .then(function(data) {
            var mess = JSON.parse(data);
            console.log(mess);
            return mess;
        })
        .then(function(mess) {
            renderMesseage(user_id, mess)
        })
}


function renderMesseage(user_id, arrChat) {
    arrchat = arrChat.forEach(function(arr) {
        if (arr.user_id == user_id) {
            var message = document.querySelector('.message');
            var p = document.createElement("p");
            var div = document.createElement("div");
            div.className = `d-flex flex-row justify-ccontent-start`;
            var avatar = document.createElement("btn");
            var linkAvatar = document.createTextNode('avtar1');
            avatar.appendChild(linkAvatar);
            avatar.className = `btn-user btn-circle `;
            var node = document.createTextNode(arr.user_content);
            p.appendChild(node);
            p.className = `user-text mt-1`;
            p.title = arr.time;
            var br = document.createElement("br");
            div.appendChild(avatar);
            div.appendChild(p);
            message.appendChild(div);


        } else {
            var message = document.querySelector('.message');
            var p = document.createElement("p");
            var div = document.createElement("div");
            div.className = `d-flex flex-row justify-content-end`;
            var avatar = document.createElement("button");
            avatar.className = `btn-primary btn-circle `;
            var linkAvatar = document.createTextNode('avatar2');
            avatar.appendChild(linkAvatar);
            var node = document.createTextNode(arr.user_content);
            p.appendChild(node);
            p.className = `user2-text mt-1`;
            p.title = arr.time;
            var br = document.createElement("br");
            div.appendChild(p);
            div.appendChild(avatar);
            message.appendChild(div);
        }
    })
}


// showFormChat

function showFormChat(user_id, product_id) {
    var formChat = $(".chat");
    formChat.add("formChat");
    formChat.toggle();
    getChat(user_id, product_id)
}
// send mess

function sendMess(user_id, product_id) {
    var mess = document.querySelector(".input-chat")
    var messValue = mess.value;
    $.ajax({
        url: "../chat/php/insertMess.php",
        method: "POST",
        data: {
            user_id: user_id,
            product_id: product_id,
            mess: messValue
        },
        success: function(response) {
            console.log(response)
            if (response == 1) {
                getChat(user_id, product_id);
            }
        }
    })
}