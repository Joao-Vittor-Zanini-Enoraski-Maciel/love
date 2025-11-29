<?php
session_start();
require_once __DIR__ . "/../config/config.php";

$username = $_POST['username'] ?? '';
$senha    = $_POST['senha'] ?? '';

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
$sql->execute([$username]);

$user = $sql->fetch();

if ($user && password_verify($senha, $user['senha'])) {
    $_SESSION['usuario'] = $user['username'];
    header("Location: ../pages/private/home.php");
    exit;
} else {
    header("Location: ../pages/public/login.php?erro=1");
    exit;
}
