<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="http://localhost/MaymaBeats/public/index.php/like" method="post">
        <button id="like">like</button>
        <button id="dlike">dlike</button>
    </form>

    <script>
        const like = document.querySelector("#like");
        const dlike = document.querySelector("#dlike");

        like.addEventListener("click", function(e) {
            e.preventDefault();
            const userData = {

                id_client: 1,
                id_song: 2,

            };


            fetch('/MaymaBeats/public/index.php/like', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(userData)
                })
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    console.log('like successful:', data);
                })
                .catch(error => {
                    console.error('Error during signup:', error);
                });
        });

        dlike.addEventListener("click", function(e) {
            e.preventDefault();
            const userData = {

                id_client: 1,
                id_song: 2,

            };
            fetch('/MaymaBeats/public/index.php/dislike', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(userData)
                })
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    console.log('dislike successful:', data);
                })
                .catch(error => {
                    console.error('Error during signup:', error);
                });
        });

    </script>
</body>

</html>