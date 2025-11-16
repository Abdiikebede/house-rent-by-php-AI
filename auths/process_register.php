<?php
session_start();
header('Content-Type: application/json');

require_once 'dn_connect.php';   // ← Make sure this file exists and is correct

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$allowed_roles = ['tenant', 'owner'];

$name     = trim($_POST['name'] ?? '');
$email    = trim(strtolower($_POST['email'] ?? ''));
$phone    = trim($_POST['phone'] ?? '');
$password = $_POST['password'] ?? '';
$role     = $_POST['role'] ?? 'tenant';

if (empty($name) || empty($email) || empty($password)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email']);
    exit;
}

if (strlen($password) < 6) {
    echo json_encode(['success' => false, 'message' => 'Password too short']);
    exit;
}

if (!in_array($role, $allowed_roles)) $role = 'tenant';

$hashed = password_hash($password, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, password, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone ?: null, $hashed, $role]);

    $user_id = $pdo->lastInsertId();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $name;
    $_SESSION['user_role'] = $role;

    echo json_encode([
        'success' => true,
        'message' => 'Account created successfully!',
        'redirect' => 'dashboard.php'
    ]);

} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        echo json_encode(['success' => false, 'message' => 'Email already exists']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Server error. Try again.']);
    }
}
?>