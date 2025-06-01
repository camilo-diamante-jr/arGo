<?php
require_once '../../includes/config/database.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        echo json_encode([
            'success' => false,
            'message' => 'Please fill in both email and password.'
        ]);
        exit;
    }

    // Check if user exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo json_encode([
            'success' => false,
            'message' => 'No account found with that email.'
        ]);
        exit;
    }

    // Check if password is correct
    if (!password_verify($password, $user['password'])) {
        echo json_encode([
            'success' => false,
            'message' => 'Incorrect password.'
        ]);
        exit;
    }

    // Login successful
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];

    echo json_encode([
        'success' => true,
        'redirectUrl' => '../../index.php'
    ]);
    exit;
}
