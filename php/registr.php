<?php 
// Подключение к базе данных 
$servername = "localhost"; 
$username = "root"; 
$password = "";  
$dbname = "sotr"; 
 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Обработка авторизации 
if(isset($_POST['login'])) {  
    $email = $_POST['email'];  
    $pass = $_POST['password'];  
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";  
    $result = $conn->query($sql);  
      
    if ($result->num_rows > 0) {  
        // Авторизация успешна  
        session_start();  
        $_SESSION['email'] = $email;  
          
        header("Location: kab.php");  
        exit();  
    } else {  
        // Неверные учетные данные  
        echo "Неверные учетные данные. Пожалуйста, попробуйте еще раз. <br> <a href='index.html'>Вернуться на главную</a>";  
    }  
}

    
// Обработка регистрации 
if(isset($_POST['register'])) { 
    $name = $_POST['name']; 
    $loginn = $_POST['loginn']; 
    $email = $_POST['email']; 
    $pass = $_POST['password']; 
 
     
    // Проверка наличия пользователя с такой же почтой 
    $check_email_query = "SELECT * FROM users WHERE email='$email'"; 
    $check_email_result = $conn->query($check_email_query); 
     
    if($check_email_result->num_rows > 0) { 
        echo "Пользователь с такой почтой уже существует. <br> <a href='index.html'>Вернуться на главную</a>"; 
        exit(); 
    } 
     
    $insert_query = "INSERT INTO users (name, login, email, password) VALUES ( '$name', '$loginn', '$email', '$pass')"; 
 
    if ($conn->query($insert_query) === TRUE) { 
        // Регистрация успешна 
        session_start(); 
        $_SESSION['email'] = $email; 
         
        // Перенаправляем пользователя в личный кабинет 
        header("Location: kab.php"); 
        exit(); 
    } else { 
        echo "Ошибка при регистрации: <br> <a href='index.html'>Вернуться на главную</a>" . $conn->error; 
    } 
} 
 
$conn->close(); 
?>