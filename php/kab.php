<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 20px;
        }
        h1 {
            margin-top: 0;
        }
        p {
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #114490;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #114490;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 id="fullName"></h1>
        <p id="email"></p>
        <a href="index.html"><button>Пройти тест</button></a>
        <a href="index.html"><button>Выйти</button></a>
    </div>

    <script>
        // Получение данных пользователя из localStorage или другого источника
        const user = {
            name: "John Doe",
            email: "johndoe@example.com"
        };

        // Отображение данных пользователя на странице
        document.getElementById("fullName").textContent = user.name;
        document.getElementById("email").textContent = user.email;

        function logout() {
            // Реализуйте логику выхода пользователя
            console.log("Пользователь вышел из системы");
        }
    </script>
</body>
</html>