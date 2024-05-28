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

$account_error = 'Error: account niet.';

if ($statement->rowCount() < 1) {
    echo "<script type='text/javascript'>window.alert('$account_error');</script>";
    die();
}

$wachtwoord_error = 'Error: wachtwoord is incorrect.';

if (!password_verify($password, $user['password'])) {
    echo "<script type='text/javascript'>window.alert('$wachtwoord_error');</script>";
    ;
    die();
}

$_SESSION['user_id'] = $user['id'];

header('Location: ../../index.php');