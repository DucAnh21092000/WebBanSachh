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

    function getUserId() {
        return new Promise(function(resolve, reject) {
            var result = user.map(function(arr) {
                return arr.id;
            })
            resolve(result);
        })
    }

    function getUserByIds(userIds) {
        return new Promise(function(resolve, reject) {
            var result = user.filter(function(users) {
                return userIds.includes(users.id);
            });
            resolve(result);
        })
    }


    function getCommentsByIds(userIds) {
        return new Promise(function(resolve, reject) {
            var result = comment.filter(function(arr) {
                return userIds.includes(arr.user_id);
            });

            resolve(result);
        })
    }
    getUserId()
        .then(function(userIds) {
            Promise.all([getUserByIds(userIds), getCommentsByIds(userIds)])
                .then(function(data) {
                    return {
                        user: data[0],
                        comment: data[1]
                    }
                })
                .then(function(data) {
                    var html = '';
                    data.comment.forEach(function(comment) {
                        var user = data.user.find(function(user) {
                            return user.id === comment.user_id
                        })
                        html += `<li> ${user.name} : ${comment.content} </li>`
                    })
                    a.innerHTML = html;
                })
        })

})();
var coursesApi = 'http://localhost:3000/product';
var listCourses = document.querySelector('#list-cousres');


function start() {
    getCourses(renderCourese);
}
start();

function getCourses(callback) {
    fetch(coursesApi)
        .then(function(response) {
            return response.json();
        })
        .then(callback)
}

function renderCourese(courses) {
    var listCourses = document.querySelector('#list-courses');
    var html = courses.map(function(course) {
        return ` 
                <li> 
                ${course.name}
                </br>
                ${course.image}
                </br>
                <button onclick='deleteCourses(${course.id})'> Xóa</button>
                <button onclick ='editCourses(${course.id})'> Sửa </button>
                </li>
                `
    })
    listCourses.innerHTML = html.join('');
}

function editCourses(id) {

    var name1 = document.querySelector('input[name="name"]');
    var info1 = document.querySelector('textarea[name="info"]');
    fetch(coursesApi + '/' + id)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            var createBtn = document.querySelector('.create');
            name1.value = data.name;
            info1.value = data.info;
            createBtn.innerHTML = `cập nhật`
            createBtn.onclick = function edit() {
                var data1 = {
                    name: name1.value,
                    info: info1.value
                }
                fetch(coursesApi + '/' + id, {
                        method: 'PUT',
                        body: JSON.stringify(data1),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function(resolve) {
                        return resolve.json();
                    })
                    .then(function(data) {
                        console.log(data)
                    })
                    .then(function(data) {
                        getCourses(renderCourese);
                    })
            }
            var createBtn = document.querySelector('.create');
            createBtn.removeAttribute('onclick')
        })

}

function deleteCourses(id) {
    fetch(coursesApi + '/' + id, {
            method: 'DELETE',
            mode: 'cors',
            headers: {
                'Content-type': 'application/json'
            },
            redirect: 'follow'

        })
        .then(function(response) {
            return response.json();
        })

}


function createCourses(data, callback) {
    fetch(coursesApi, {
            method: 'POST',
            body: JSON.stringify(data),
            mode: 'cors',
            headers: {
                'Content-type': 'application/json'
            },
            redirect: 'follow'
        })
        .then(callback)
}

function handerCreateForm() {
    var createBtn = document.querySelector('.create');
    createBtn.onclick = function() {
        var name = document.querySelector('input[name="name"]').value;
        var info = document.querySelector('textarea[name= "info"]').value;
        var data = {
            name: name,
            info: info
        }
        createCourses(data);
    }

}
handerCreateForm();
var top = document.querySelector('.goTop');
top.onclick = function() {
    window.scroll('middle ', 100);


}