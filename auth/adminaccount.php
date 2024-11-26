<?php
require_once 'dbadmin.php';

session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    if (empty($password)) {
        $errors['password'] = 'Password cannot be empty';
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: loginadmin.php');
        exit();
    }

    $stmt = $pdo->prepare(query: "SELECT * FROM `admin` WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'name'=>$user['name'],
            'created_at' => $user['created_at']
        ];

        header('Location: dashboardbeta.php');
        exit();
    } else {
        $errors['login'] = 'Invalid email or password';
        $_SESSION['errors'] = $errors;
        header('Location: loginadmin.php');
        exit();
    }
}
