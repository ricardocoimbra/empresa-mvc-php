<?php

$pdo = new PDO('mysql:host=localhost;dbname=codex', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$clientes = $pdo->query('SELECT * FROM clientes')->fetchAll(\PDO::FETCH_ASSOC);

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-light" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">IITAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/iitam/cadastro-cliente.php">Cadastro Cliente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">




    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th>CNPJ</th>
                    <th>Razão Social</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente['cnpj'] ?></td>
                        <td><?= $cliente['razao_social'] ?></td>
                        <td><a href="/iitam/remover-cliente.php?id=<?= $cliente['id'] ?>">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




</body>
</html>