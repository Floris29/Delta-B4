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

$username_gebruik = 'Deze gebruikersnaam is al in gebruik.';
$password_error = 'Wachtwoorden komen niet overeen.';

if ($statement->rowCount() > 0) {
    echo "<script type='text/javascript'>window.alert('$username_gebruik');</script>";
} else {
    if ($password === $password_check) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
    } else {
        echo "<script type='text/javascript'>window.alert('$password_error');</script>";
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