
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход и Регистрация</title>
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
        }
        h1 {
            text-align: center;
            margin-top: 0;
        }
        .tab-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .tab-buttons button {
            padding: 10px 20px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 3px 3px 0 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .tab-buttons button.active {
            background-color: #114490;
            color: #fff;
        }
        .tab-buttons button:hover {
            background-color: #4caf50;
            color: #fff;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            padding: 10px;
            background-color: #114490;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: ##114490;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Вход и Регистрация</h1>
        <div class="tab-buttons">
            <button id="loginTab" class="active">Вход</button>
            <button id="registerTab">Регистрация</button>
        </div>
        <div id="loginForm" class="tab-content active">
            <form action="registr.php" method="POST">
                <input type="text" id="loginUsername" name="email" placeholder="Email" required>
                <input type="password" id="loginPassword" name="password" placeholder="Пароль" required>
                <button type="submit" name="login">Войти</button>
            </form>
        </div>
        <div id="registerForm" class="tab-content">
            <form action="registr.php" method="POST">
                <input type="text" id="registerName" name="name" placeholder="Имя и фамилия" required>
                <input type="text" id="registerUsername" name="loginn" placeholder="Логин" required>
                <input type="email" id="registerEmail" name="email" placeholder="Email" required>
                <input type="password" id="registerPassword" name="password" placeholder="Пароль" required>
                <button type="submit" name="register">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <script>
        const loginTab = document.getElementById('loginTab');
        const registerTab = document.getElementById('registerTab');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');

        loginTab.addEventListener('click', () => {
            loginTab.classList.add('active');
            registerTab.classList.remove('active');
            loginForm.classList.add('active');
            registerForm.classList.remove('active');
        });

        registerTab.addEventListener('click', () => {
            registerTab.classList.add('active');
            loginTab.classList.remove('active');
            registerForm.classList.add('active');
            loginForm.classList.remove('active');
        });
    </script>
</body>
</html>