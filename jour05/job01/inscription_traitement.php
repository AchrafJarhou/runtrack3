<?php

require 'config.php';

$data = $_POST;
$errors = [];

if (empty($data['prenom'])) {
    $errors['Prenom'] = "Prénom obligatoire";
}
if (empty($data['nom'])) {
    $errors['Nom'] = "Nom obligatoire";
}
if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['Email'] = "Email invalide";
}
if (strlen($data['password']) < 6) {
    $errors['Password'] = "Min 6 caractères";
}
if ($data['password'] !== $data['confirm']) {
    $errors['Confirm'] = "Mots de passe différents";
}

// Email déjà utilisé ?
$stmt = $pdo->prepare("SELECT id FROM users WHERE email=?");
$stmt->execute([$data['email']]);
if ($stmt->fetch()) {
    $errors['Email'] = "Email déjà pris";
}

if ($errors) {
    echo json_encode(["success" => false, "errors" => $errors]);
    exit;
}

// hash à ajouter plus tard
$stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, password) VALUES (?,?,?,?)");
$stmt->execute([$data['nom'], $data['prenom'], $data['email'], $data['password']]);

echo json_encode(["success" => true]);
