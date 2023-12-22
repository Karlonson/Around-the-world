<?php
require_once('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
if (empty($name) || empty($email) || empty($pass)){
    echo "Заполните все поля";
} else
{   $sql = "INSERT INTO `users` (name,pass,email) VALUES ('$name','$pass','$email')";
    if ($conn -> query($sql) === TRUE){
        echo "Успешная регестрация";
    }
    else {
        echo "Ошибка: " . $conn->error;
    }
}
?>