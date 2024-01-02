<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button onclick="fetc()">cli</button>
    <script>
        // Data to be sent in the POST request
        const userData = {
            username: 'testuser',
            email: 'testuser@example.com',
            password: 'password123'
        };

        function fetc() {
            fetch('http://localhost:3000/public/index.php/signup', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(userData)
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    console.log('Signup successful:', data);
                })
                .catch(error => {
                    console.error('Error during signup:', error);
                });
        }
        // Sending a POST request using fetch
    </script>
</body>

</html>