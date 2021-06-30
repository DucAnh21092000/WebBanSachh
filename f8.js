(function() {
    var comment = [{
            id: 1,
            content: 'Hello anh Đức Anh',
            user_id: 1
        }, {
            id: 2,
            content: 'chào em',
            user_id: 2,
        },
        {
            id: 3,
            content: "Anh đang làm bài gì đấy",
            user_id: 1
        }, {

            id: 4,
            content: "Học cách sử dụng Promise",
            user_id: 2
        }
    ];

    var user = [{
        id: 1,
        name: "Hoàng Hà"
    }, {
        id: 2,
        name: "Duc Anh"
    }]
    var avatar = [{
            id: 1,
            user_id: 1,
            url: './image/1.jpg'
        },
        {
            id: 2,
            user_id: 2,
            url: './image/1.jpg'
        }
    ]
    var a = document.querySelector('li');

    function getUserByIds(userIds) {
        return new Promise(function(resolve, reject) {
            console.log(typeof user);
            var result = user.filter(function(users) {
                return userIds.includes(users.id);
            });
            resolve(result);
        })
    }

    function getUserIds(userIds) {
        return new Promise(function(resolve, reject) {
            var result = user.filter(function(arr) {
                return userIds.includes(arr.id);
            });
            setTimeout(function() {
                resolve(result);
            }, 1000)
        })
    }

    function getCommentsByIds(userIds) {
        return new Promise(function(resolve, reject) {
            var result = comment.filter(function(arr) {
                return userIds.includes(arr.user_id)
            });
            setTimeout(function() {
                resolve(result);
            })

        })
    }
    getUserIds(comment)
        .then(function() {
            var userIds = comment.map(function(result) {
                return result.user_id;
            })
            return userIds;
        })

    .then(function(userIds) {
        getUserByIds(userIds)
            .then(function(users) {
                getCommentsByIds(userIds)
                    .then(function(comments) {
                        return arr = {
                            user: users,
                            comment: comments
                        }
                    })
                    .then(function(data) {
                        var html = "";
                        data.comment.forEach(function(comment) {
                            var user = data.user.find(function(user) {
                                return user.id === comment.user_id
                            });
                            html += `<li> ${user.name} : ${comment.content} </li>`;
                        });
                        a.innerHTML = html;
                    })
            })


    })

})();