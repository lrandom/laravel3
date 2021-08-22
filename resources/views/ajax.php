<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div></div>
<button onclick="load()">Load</button>
<script>
    function load() {
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == XMLHttpRequest.DONE) {
                if (xhr.status == 200) {
                    const div = document.querySelector('div')
                    const data = JSON.parse(xhr.response);
                    for (let i = 0; i < data.length; i++) {
                        const elem = `<div>${data[i].email}${data[i].name}</div>`;
                        div.innerHTML = elem;
                    }
                }

                if (xhr.status != 200) {
                    //thất bại
                }
            }
        }

        xhr.open('GET', 'http://127.0.0.1:8000/api/users');
        xhr.send();
    }
</script>
</body>
</html>
