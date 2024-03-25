<?php
$host = 'db'; // Имя хоста базы данных
$db = 'mydb'; // Имя базы данных
$user = 'root'; // Имя пользователя для доступа к базе данных
$pass = 'example'; // Пароль для доступа к базе данных
$charset = 'utf8mb4'; // Кодировка

// Создаем строку DSN для PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Попытка подключения к базе данных с использованием PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Успешное соединение с базой данных $db на хосте $host.";
} catch (\PDOException $e) {
    // В случае ошибки выводим сообщение
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    exit;
}
?>
