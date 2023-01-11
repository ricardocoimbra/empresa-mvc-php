<?php

$pdo = new PDO('mysql:host=localhost;dbname=codex', 'root', '');
$pdo->exec('CREATE TABLE IF NOT EXISTS clientes(id INTEGER PRIMARY KEY AUTO_INCREMENT, cnpj VARCHAR(14) NOT NULL, razao_social VARCHAR(200) NOT NULL);');