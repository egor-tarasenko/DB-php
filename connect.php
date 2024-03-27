<?php
// Создание подключения к базе данных через PDO
$dsn = 'mysql:host=localhost;dbname=pdo';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    // Установка режима ошибок PDO для выброса исключений
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // В случае ошибки выводим сообщение
    die('Подключение не удалось: ' . $e->getMessage());
}
?>
