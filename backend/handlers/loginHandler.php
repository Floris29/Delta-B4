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

$account_error = 'Error: account  niet niet.';

if ($statement->rowCount() < 1) {
    header('Location: ../../login.php?error=' . urlencode($account_error));
    exit();
}

$wachtwoord_error = 'Error: wachtwoord is incorrect.';

if (!password_verify($password, $user['password'])) {
    header('Location: ../../login.php?error=' . urlencode($wachtwoord_error));
    exit();
}

$_SESSION['user_id'] = $user['id'];

header('Location: ../../index.php');