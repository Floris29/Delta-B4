<?php
session_start();

require_once '../config/conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1) {
    echo 'Error: account bestaat niet.';
    die();
}

if (!password_verify($password, $user['password'])) {
    echo 'Error: Wachtwoord is onjuist.';
    die();
}

$_SESSION['user_id'] = $user['id'];

header('Location: ../../index.php');