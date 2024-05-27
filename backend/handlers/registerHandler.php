<?php
session_start();

require_once '../config/conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];

$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ':username' => $username
]);

if ($statement->rowCount() > 0) {
    echo 'Deze gebruikersnaam is al in gebruik.';
} else {
    if ($password === $password_check) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
    } else {
        echo 'Wachtwoorden komen niet overeen';
        die();
    }

    $query = "INSERT INTO users (username, password) VALUES (:username, :hash)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ':username' => $username,
        ':hash' => $hash
    ]);

    $_SESSION['user_id'] = $user_id;

    header("Location: ../../index.php");
}