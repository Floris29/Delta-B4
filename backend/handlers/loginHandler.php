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
$username = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1) {
    echo 'Error: account bestaat niet.';
    die();
}

if (!password_verify($password, $username['password'])) {
    echo 'Error: Wachtwoord is onjuist.';
    die();
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

header('location: ../../index.php');