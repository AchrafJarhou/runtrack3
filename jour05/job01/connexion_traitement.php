<?php

require 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $errors['Email'] = "Email introuvable";
} elseif ($user['password'] !== $password) {
    $errors['Password'] = "Mot de passe incorrect";
}

if ($errors) {
    echo json_encode(["success" => false, "errors" => $errors]);
    exit;
}

$_SESSION['prenom'] = $user['prenom'];
echo json_encode(["success" => true]);
