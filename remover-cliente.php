<?php
$pdo = new PDO('mysql:host=localhost;dbname=codex', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];

$sql = 'DELETE FROM clientes WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $id);

if ($stmt->execute() === false) {
    header('Location: /iitam/index.php?sucesso=0');
} else {
    header('Location: /iitam/index.php?sucesso=1');
}