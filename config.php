<?php
// config.php - работа с MySQL через phpMyAdmin

session_start();

// ===== НАСТРОЙКИ БД - ИЗМЕНИТЕ ПОД ВАШУ phpMyAdmin =====
$host = 'localhost';
$port = '3306';        // Стандартный порт MySQL (если MAMP - 8889, если XAMPP - 3306)
$dbname = 'expedition'; // Создайте такую БД в phpMyAdmin
$username = 'root';
$password = '';         // У MAMP пароль 'root', у XAMPP - ''

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Ошибка подключения к БД: " . $e->getMessage());
}

// ===== СОЗДАНИЕ ТАБЛИЦ (выполнится один раз) =====
try {
    // Таблица пользователей
    $pdo->exec("CREATE TABLE IF NOT EXISTS `users` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL UNIQUE,
        `email` VARCHAR(100) NOT NULL UNIQUE,
        `password` VARCHAR(255) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    
    // Таблица отзывов
    $pdo->exec("CREATE TABLE IF NOT EXISTS `reviews` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `user_id` INT NOT NULL,
        `username` VARCHAR(50) NOT NULL,
        `text` TEXT NOT NULL,
        `rating` INT DEFAULT 5,
        `avatar` VARCHAR(255),
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
    )");
    
    // Таблица заказов (для корзины в будущем)
    $pdo->exec("CREATE TABLE IF NOT EXISTS `orders` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `user_id` INT NOT NULL,
        `items` JSON NOT NULL,
        `total` INT NOT NULL,
        `status` VARCHAR(20) DEFAULT 'new',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
    )");
    
} catch(PDOException $e) {
    // Таблицы уже существуют - игнорируем ошибку
}
?>