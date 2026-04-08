<?php
// auth.php - работа с MySQL
require_once 'config.php';

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
if ($input && isset($input['action'])) {
    $action = $input['action'];
    $data = $input;
} else {
    $action = $_POST['action'] ?? '';
    $data = $_POST;
}

switch ($action) {
    case 'register': register($data); break;
    case 'login': login($data); break;
    case 'logout': logout(); break;
    case 'getUser': getUser(); break;
    case 'addReview': addReview($data); break;
    case 'getReviews': getReviews(); break;
    default: echo json_encode(['success' => false, 'message' => 'Неизвестное действие']);
}

function register($data) {
    global $pdo;
    
    $username = trim($data['username'] ?? '');
    $email = trim($data['email'] ?? '');
    $password = $data['password'] ?? '';
    $confirm = $data['confirm_password'] ?? '';
    
    if (empty($username) || empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Все поля обязательны']);
        return;
    }
    
    if ($password !== $confirm) {
        echo json_encode(['success' => false, 'message' => 'Пароли не совпадают']);
        return;
    }
    
    if (strlen($password) < 4) {
        echo json_encode(['success' => false, 'message' => 'Пароль минимум 4 символа']);
        return;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Некорректный email']);
        return;
    }
    
    try {
        // Проверка уникальности
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->rowCount() > 0) {
            echo json_encode(['success' => false, 'message' => 'Пользователь уже существует']);
            return;
        }
        
        // Хешируем пароль!
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashed]);
        
        $userId = $pdo->lastInsertId();
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $username;
        $_SESSION['user_email'] = $email;
        
        echo json_encode([
            'success' => true,
            'message' => 'Регистрация успешна!',
            'user' => ['id' => $userId, 'username' => $username, 'email' => $email]
        ]);
    } catch(PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Ошибка БД: ' . $e->getMessage()]);
    }
}

function login($data) {
    global $pdo;
    
    $username = trim($data['username'] ?? '');
    $password = $data['password'] ?? '';
    
    if (empty($username) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Все поля обязательны']);
        return;
    }
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['user_email'] = $user['email'];
            
            echo json_encode([
                'success' => true,
                'message' => 'Вход выполнен!',
                'user' => ['id' => $user['id'], 'username' => $user['username'], 'email' => $user['email']]
            ]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Неверный логин или пароль']);
        }
    } catch(PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Ошибка БД']);
    }
}

function logout() {
    $_SESSION = [];
    session_destroy();
    echo json_encode(['success' => true, 'message' => 'Вы вышли']);
}

function getUser() {
    if (isset($_SESSION['user_id'])) {
        echo json_encode([
            'success' => true,
            'user' => [
                'id' => $_SESSION['user_id'],
                'username' => $_SESSION['user_name'],
                'email' => $_SESSION['user_email']
            ]
        ]);
    } else {
        echo json_encode(['success' => false, 'user' => null]);
    }
}

function addReview($data) {
    global $pdo;
    
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['success' => false, 'message' => 'Нужно войти']);
        return;
    }
    
    $text = trim($data['text'] ?? '');
    $rating = intval($data['rating'] ?? 5);
    
    if (empty($text)) {
        echo json_encode(['success' => false, 'message' => 'Введите текст']);
        return;
    }
    
    $userId = $_SESSION['user_id'];
    $username = $_SESSION['user_name'];
    $avatar = "https://randomuser.me/api/portraits/" . (rand(0,1) ? 'men' : 'women') . "/" . rand(1,100) . ".jpg";
    
    $stmt = $pdo->prepare("INSERT INTO reviews (user_id, username, text, rating, avatar) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$userId, $username, $text, $rating, $avatar]);
    
    echo json_encode(['success' => true, 'message' => 'Спасибо за отзыв!']);
}

function getReviews() {
    global $pdo;
    
    $stmt = $pdo->query("SELECT * FROM reviews ORDER BY created_at DESC LIMIT 20");
    $reviews = $stmt->fetchAll();
    
    echo json_encode(['success' => true, 'reviews' => $reviews]);
}
?>