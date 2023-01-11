<!doctype html>
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
                    <a class="nav-link active" aria-current="page" href="/iitam">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/iitam/cadastro-cliente.php">Cadastro Cliente</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <form action="/iitam/novo-cliente.php" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input class="form-control" minlength="14" maxlength="14" name="cnpj" id="cnpj" type="text">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="razao_social">Razão Social</label>
                    <input class="form-control" name="razao_social" id="razao_social" type="text" >
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Salvar</button>
    </form>
</div>



</body>
</html>

