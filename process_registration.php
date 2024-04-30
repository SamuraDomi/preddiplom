<?php
// Параметры подключения к базе данных
$servername = "localhost"; // адрес сервера базы данных (обычно localhost)
$username = "root"; // имя пользователя базы данных
$password = "12345"; // пароль пользователя базы данных
$dbname = "pract"; // имя базы данных

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

// Выполнение SQL-запроса
if ($conn->query($sql) === TRUE) {
    echo "Данные успешно сохранены в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>
