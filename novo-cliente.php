<?php

$cnpj = filter_input(INPUT_POST, 'cnpj');
$razao_social = filter_input(INPUT_POST, 'razao_social');

$pdo = new PDO('mysql:host=localhost;dbname=codex', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert

$sql = 'INSERT INTO clientes (cnpj, razao_social) VALUES (?, ?)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $cnpj);
$stmt->bindValue(2, $razao_social);

if ($stmt->execute() === false) {
    header('Location: /iitam/index.php?sucesso=0');
} else {
    header('Location: /iitam/index.php?sucesso=1');
}



