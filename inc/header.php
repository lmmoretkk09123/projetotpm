<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PDO</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/libs/MaterialDesign/css/materialdesignicons.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BASEURL ?>">
            CRUD PDO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo BASEURL.'clientes/index.php'?>">Gerenciar</a>
                        <a class="dropdown-item" href="<?php echo BASEURL.'clientes/add.php'?>">Novo</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<div class="container">