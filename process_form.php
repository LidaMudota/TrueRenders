<?php
// Включение отображения ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Параметры подключения к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_website";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Подготовка и выполнение SQL запроса
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "Сообщение успешно отправлено!";
        } else {
            echo "Ошибка при отправке сообщения: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Пожалуйста, заполните все поля.";
    }
} else {
    echo "Неверный метод отправки данных.";
}

$conn->close();
?>